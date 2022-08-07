@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content">
                <div class="container">
                 
                  <div class="row justify-content-center">
                    <!-- <div class="col-md-6 order-md-2">
                      <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                    </div> -->
                    <div class="col-md-6 contents">
                      <div class="row justify-content-center">
                        <div class="col-md-12">
                          <div class="form-block">
                              <div class="mb-4">
                              <h3>Sign  <strong>In</strong></h3>
                              <p class="mb-4">Sign In ini hanya untuk Admin/Manager/SuperAdmin!</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group first">
                                <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="form-group last mb-4">
                                <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>

                                
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                                
                              </div>
                              
                              <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                  <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked="checked"/>
                                  <div class="control__indicator"></div>
                                </label>
                                @if (Route::has('password.request'))
                                <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a></span> 
                                    
                                </a>
                            @endif
                                
                              </div>
            
                              
                              <button type="submit" class="btn btn-pill text-white btn-block" >
                                {{ __('Login') }}
                            </button>
            
                              {{-- <span class="d-block text-center my-4 text-muted"> or sign in with</span> --}}
                              
                              {{-- <div class="social-login text-center">
                                <a href="#" class="facebook">
                                  <span class="icon-facebook mr-3"></span> 
                                </a>
                                <a href="#" class="twitter">
                                  <span class="icon-twitter mr-3"></span> 
                                </a>
                                <a href="#" class="google">
                                  <span class="icon-google mr-3"></span> 
                                </a>
                              </div> --}}
                            </form>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            
        </div>
    </div>
</div>
@endsection
