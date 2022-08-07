<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FF9106;">
    <div class="container" >

        <div class="row">
            {{-- yang pake sweetallert --}}
            {{-- <a href="{{ url('back') }}" onclick="showbutton()" class="nav-link link text-white" type="button" value="Go Back" > --}}
                @foreach($datas as $key)
            <form action="{{ url('menu/'.$hash->encodeHex($key->StoreID)) }}" id="input" method="POST">
                 @endforeach
                    @method('delete')
					 @csrf
                <a onclick="deleted()" class="nav-link link text-white" type="submit" value="Go Back" >
                {{-- onclick="window-history.back()" --}}
            </form>
               
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <b>e-Canteen</b>
            </a>      
        </div>
    </div>
</nav>