<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('loginPage') }}/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="logo"> <img src="{{ asset('zircos') }}/assets/images/logo.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            <h5 align="center">SMPN 2 Kota Jambi</h5>
        </div>
        <form class="p-3 mt-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"
                    name="email" id="email" class=" @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" autocomplete="off" placeholder="E-mail"> </div>

            <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
                    name="password" class="@error('password') is-invalid @enderror" id="pwd" placeholder="Password">
            </div> <button class="btn mt-3" type="submit">Login</button>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script>
        @error('email')
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Maaf Email atau Password Anda Salah Coba Hubungi Admin',
            });
        @enderror
        @error('password')
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Maaf Email atau Password Anda Salah Coba Hubungi Admin',
            });
        @enderror
    </script>
</body>

</html>
