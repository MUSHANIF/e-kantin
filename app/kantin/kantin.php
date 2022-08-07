<?php

use App\Models\trxhead;
use Illuminate\Support\Facades\DB;

session_start();

function sendWa($nohp,$pesantext)
{
  if (empty($nohp))
  {
	echo('Empty Number, cannot Send');
		die;
  }else
  {
	$userkey = '1c935926243d';
	$passkey = 'fb0c7a93ad9613d928ec74b9';
	$telepon = $nohp ; 
	$image_link = 'http://vps2.tacpos.com/e-canteen/imagestore/main.png';
	$caption  = $pesantext; 
	//'Thanks For Your transaction, see you again soon.';
	$url = 'https://console.zenziva.net/wareguler/api/sendWAFile/';
	$curlHandle = curl_init();
	curl_setopt($curlHandle, CURLOPT_URL, $url);
	curl_setopt($curlHandle, CURLOPT_HEADER, 0);
	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
	curl_setopt($curlHandle, CURLOPT_POST, 1);
	curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
		'userkey' => $userkey,
		'passkey' => $passkey,
		'to' => $telepon,
		'link' => $image_link,
		'caption' => $caption
	));
	$results = json_decode(curl_exec($curlHandle), true);
	curl_close($curlHandle);
	
  };

}


function setKantin($param)
{
   if (!empty($param)) {
      $_SESSION["StoreID"] = $param;
   }
}
function getKantin()
{
   // echo $_SESSION["StoreID"];
   return $_SESSION["StoreID"];
}

function clrKantin()
{
   $_SESSION["StoreID"] = '';
   return $_SESSION["StoreID"];
}
function setKantinName($param)
{
   $_SESSION["StoreName"] = $param;
}
function getKantinName()
{
   return $_SESSION["StoreName"];
}
function clrKantinName()
{
   $_SESSION["StoreName"] = '';
}



function setNoTrx($param)
{
   $_SESSION["noTrx"] = $param;
   return $_SESSION["noTrx"];
}

function getNoTrx()
{
   return $_SESSION["noTrx"];
}

function clrNoTrx()
{
   $_SESSION["noTrx"] = '';
   return $_SESSION["noTrx"];
}

function setSegment($param)
{
   $_SESSION["segment"] = $param;
   return $_SESSION["segment"];
}

function getSegment()
{
   //echo $_SESSION["segment"];
   return $_SESSION["segment"];
}

function clrSegment()
{
   $_SESSION["segment"] = '';
   return $_SESSION["segment"];
}

function setProductID($param)
{
   $_SESSION["productid"] = $param;
   return $_SESSION["productid"];
}

function getProductID()
{
   return $_SESSION["productid"];
}

function clrProductID()
{
   $_SESSION["productid"] = '';
   return $_SESSION["productid"];
}

function setProductQty($param)
{
   $_SESSION["Prod_Qty"] = $param;
   return $_SESSION["Prod_Qty"];
}

function getProductQty()
{
   return $_SESSION["Prod_Qty"];
}

function clrProductQty()
{
   $_SESSION["Prod_Qty"] = '';
   return $_SESSION["Prod_Qty"];
}


function setSumOfOrder($param)
{

   $_SESSION["Sum_Order"] = $param;
   return $_SESSION["Sum_Order"];
}

function getSumOfOrder()
{
   return $_SESSION["Sum_Order"];
}
function clrSumOfOrder()
{
   $_SESSION["Sum_Order"] = 0;
   return $_SESSION["Sum_Order"];
}

function setPesan($param)
{

   $_SESSION["pesan_order"] = $param;
   return $_SESSION["pesan_order"];
}

function getPesan()
{
   return $_SESSION["pesan_order"];
}



// function updateTrx($param1, $param2)
// {
//    $dump = $param2 . '-' . $param1;
//    $sql =  "UPDATE trxheads
//             SET StoreID = $param2, trxNo = $dump
//             WHERE id = $param1 ";

//    // $sql = DB::table('trxheads')
//    //    ->where('id', '=', $param1)
//    //    ->update(['StoreID' => '$param2'])
//    //    ->get();
// }
