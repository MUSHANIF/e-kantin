@extends('layout.detail-order')

@section('detail-order')
<section id="DetailOrder">
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-xs-12 mt-5 text-center">
                <h1>Detail Pemesanan</h1>
                <hr color="black" >
            </div>

            <div class="container">
                <div class="row mt-3 mb-3">
        
                    <div class="col col-xs-12 mt-1 mb-1 detail-order">
                        <div class="row">
                            <div class="col col-xs-6 text-left">
                                <h4 class="order-name">Teh kotak</h4>
        
                            </div>
                            <div class="col col-xs-6 text-right" align="right">
                                <h4 class="price">12.000</h4>
                            </div>
                           
                        </div> 
                        <hr color="#E52E5E5">
                        <div class="row">
                            <div class="col col-xs-6 text-right">
                                <a href="custompemesanan">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                          edit
                                    </p>
                                </a>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="card-action" align="right">
                                    <button class="btn btn-default btn-number" onclick="handleCounterMin1()">-</button>
                                    <input type="text" id="counter1" class="counter text-center input-number" value="1" min="1" max="30">
                                    <button class="btn btn-default btn-number" onclick="handleCounterPlus1()">+</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
        
                </div>

                <div class="row mt-3 mb-3">
        
                    <div class="col col-xs-12 mt-1 mb-1 detail-order">
                        <div class="row">
                            <div class="col col-xs-6 text-left">
                                <h4 class="order-name">Teh kotak</h4>
        
                            </div>
                            <div class="col col-xs-6 text-right" align="right">
                                <h4 class="price">12.000</h4>
                            </div>
                           
                        </div> 
                        <hr color="#E5E5E5">
                        <div class="row">
                            <div class="col col-xs-6 text-right">
                                <a href="custompemesanan">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                          edit
                                    </p>
                                </a>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="card-action" align="right">
                                    <button class="btn btn-default btn-number" onclick="handleCounterMin2()">-</button>
                                    <input type="text" id="counter2" class="counter text-center input-number" value="1" min="1" max="30">
                                    <button class="btn btn-default btn-number" onclick="handleCounterPlus2()">+</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
        
                </div>

                <div class="row mt-3 mb-3">
        
                    <div class="col col-xs-12 mt-1 mb-1 detail-order">
                        <div class="row">
                            <div class="col col-xs-6 text-left">
                                <h4 class="order-name">Teh kotak</h4>
        
                            </div>
                            <div class="col col-xs-6 text-right" align="right">
                                <h4 class="price">12.000</h4>
                            </div>
                           
                        </div> 
                        <hr color="#E5E5E5">
                        <div class="row">
                            <div class="col col-xs-6 text-right">
                                <a href="custompemesanan">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                          edit
                                    </p>
                                </a>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="card-action" align="right">
                                    <button class="btn btn-default btn-number" onclick="handleCounterMin3()">-</button>
                                    <input type="text" id="counter3" class="counter text-center input-number" value="1" min="1" max="30">
                                    <button class="btn btn  -default btn-number" onclick="handleCounterPlus3()">+</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
        
                </div>

                <div class="row mt-3 mb-3">
        
                    <div class="col col-xs-12 mt-1 mb-1 detail-order">
                        <div class="row">
                            <div class="col col-xs-6 text-left">
                                <h4 class="order-name">Teh kotak</h4>
        
                            </div>
                            <div class="col col-xs-6 text-right" align="right">
                                <h4 class="price">12.000</h4>
                            </div>
                           
                        </div> 
                        <hr color="#E5E5E5">
                        <div class="row">
                            <div class="col col-xs-6 text-right">
                                <a href="custompemesanan">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                          edit
                                    </p>
                                </a>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="card-action" align="right">
                                    <button class="btn btn-default btn-number" onclick="handleCounterMin4()">-</button>
                                    <input type="text" id="counter4" class="counter text-center input-number" value="1" min="1" max="30">
                                    <button class="btn btn-default btn-number" onclick="handleCounterPlus4()">+</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
        
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col col-xs-12 mt-1 mb-1 detail-order">
                        <div class="row">
                            <div class="col col-xs-6 text-left">
                                <h4 class="order-name">Teh kotak</h4>
        
                            </div>
                            <div class="col col-xs-6 text-right" align="right">
                                <h4 class="price">12.000</h4>
                            </div>
                           
                        </div> 
                        <hr color="#E5E5E5">
                        <div class="row">
                            <div class="col col-xs-9 text-right">
                                <a href="custompemesanan">
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                          </svg>
                                          edit
                                    </p>
                                </a>
                            </div>
                            <div class="col col-xs-3 text-right">
                                <div class="card-action" align="right">
                                    <button class="btn btn-default btn-number" onclick="handleCounterMin5()">-</button>
                                    <input type="text" id="counter5" class="counter text-center input-number" value="1" min="1" max="30">
                                    <button class="btn btn-default btn-number" onclick="handleCounterPlus5()">+</button>
                                </div>
                                {{-- <div class="row">
                                    <div class="order-action">
                                        <button class="btn" onclick="handleCounterPlus()">+</button>
                                        <input type="text" name="" id="counter" value="1" min="1" max="30">
                                        <button class="btn" onclick="handleCounterMin()">-</button>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
    </div>

    
</section>


@endsection