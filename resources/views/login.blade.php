@extends('dashboard.navbar2')

@section('container')
<div class="container">
    <div class="row mt-5 pt-5 pb-2" data-aos="fade-down" data-aos-delay="300">
        <h1 class="text-center">Log In</h1>
    </div>
</div>

<section id="form" class="mt-2">
    <div class="container">
        <div class="row justify-content-center pt-2">
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <b>Opps!</b> {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ms-auto></button>
            </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col input-1 " data-aos="fade-right" data-aos-delay="500">
                        <p>Email</p>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="name@example.com" autofocus required >
                    </div>
                    @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  
                </div>

                <div class="row mb-3">
                    <div class="col input-2" data-aos="fade-right" data-aos-delay="600">
                        <p>Password</p>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-12 mb-4 mt-4 text-center" data-aos="fade-right" data-aos-delay="700">
                        <button type="submit"  class="btn btn-primary align-content-center center-block">Log In</button>
                    </div>
                </div>

              

            </form>
        </div>
    </div>
</section>

<!--Footer -->
<footer>
    <hr>
    <p class="text-center align-self-center">Copyright &copy; <?php echo date('Y'); ?> </p>
</footer>
@endsection