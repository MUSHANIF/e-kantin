<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\tbpayment;
use App\Models\tbtrxdetail;
use App\Models\trxhead;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;

class detailTransaksiController extends Controller
{
    public function index()
    {
        $hash = new Hashids('', 20);
        $StoreID = getKantin();
        $trxNo = getNoTrx();
        $transaction = DB::table('rpt_allsales')
            ->where('StoreID', $hash->decodeHex($StoreID))
            ->where('trxNo', $trxNo)
            ->get();

        $trx = DB::table('tbpaytype')
            ->get();
        return view('detail-transaction', compact('trx', 'transaction'));
    }

    public function update(Request $request)
    {

        // $prod = trxhead::find($trxNo);
        // $order = trxhead::find($trxNo);
        // $order->payType = $request->PayType;
        // $order->save();
        $StoreID = getKantin();
        $trxNo = getNoTrx();


        $affected = DB::update(
            'update trxheads set payType = ?,totaltag=?, tax=?,serv=?, disc=?, grandTotal=?, status=?, custname=?, mobileno=?, address=?, tblNo=?, pay=? where trxNo=?  and StoreID=?',
            [$request->PayType, $request->totaltag, $request->tax, $request->serv, $request->disc, $request->grandTotal, $request->status, $request->custname, $request->mobileno, $request->address, $request->tblNo, $request->payment, $trxNo, $StoreID]
        );

        $affected2 = DB::insert(
            'insert into tbpayments (Paytype, Payment, ReffNo, PayDate, trxNo) values(?, ?, ?, ?, ?)',
            [$request->PayType, $request->payment, $request->ReffNo, $request->PayDate, $trxNo]
        );

        
		//==========================================================================
		// sendWa($nohp,@pesantext)	
		//==========================================================================
		
		if ($request->mobileno !='')
		{
			// $request->custname, $request->mobileno
			// '12345678901234567890123456789012'
			$pembayaran='';
			if ( $request->PayType == 1)
				$pembayaran='Cash';
			if ( $request->PayType == 2)
				$pembayaran='DebitCard';
			if ( $request->PayType == 3)
				$pembayaran='CreditCard';
			
			$pesantext =	
			strtoupper(getKantinName()) .chr(10) .chr(13)
			.strtoupper(getSegment()) .chr(10) .chr(13)
			.chr(10) .chr(13) 
			.'Terima Kasih Kunjungannya ' .chr(10) .chr(13) 
			.'Transaksi Rp.' . $request->grandTotal .chr(10) .chr(13)
			.'Pembayaran : ' .$pembayaran .chr(10) .chr(13)
			.'           ==========         '	.chr(10) .chr(13)
			.'            3GMS.NET '.chr(10) .chr(13)
			.'           ==========         '	.chr(10) .chr(13)

			;

			sendWa($request->mobileno,$pesantext);
			
		};
		
        return redirect('success');
    }
}
