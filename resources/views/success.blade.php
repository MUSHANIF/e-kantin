@extends('layout.success')

@section('success')
        <script>
            Swal.fire({
                title: 'Thank You!',
                text: "Terimakasih telah berbelanja di e-Canteen dan jangan lupa cek WhatsApp kamu ya!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Oke'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href="/";
                }
            })
        </script>

@endsection