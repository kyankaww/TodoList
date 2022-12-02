@extends('layout.layout')
@section('content')

<body class="secondary">


    <div class="container mt-5" id="alert">
        @if (session('notAllowed'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal mengakses halaman',
                text: 'Silahkan login terlebih dahulu!!',
            })
        </script>
        @endif
        @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal login',
                text: 'Harap mengisi form dengan benar!!',
            })
        </script>
        @endif
        @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal Login',
                text: 'Username dan Password Tidak Sesuai!!',
            })
        </script>
        @endif
        @if (session('registerSuccess'))
        <script>
            Swal.fire(
                'Berhasil Membuat Akun!!',
                'Silahkan!',
                'success'
            )
        </script>
        @endif
    </div>
    <div id="loginnn">
    @include('component._logo')
    <div class="col-6 offset-3 rounded shadow-lg">
        <div class="card border-0" >
            <form class="m-5" action="/login/auth" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="usn" class="form-label">Username</label>
                    <input type="text" class="form-control" id="usn" name="username">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass" name="password">
                </div>
                <div class="d-flex">
                <p class="m">Forget Pasword?</p>
                <a href="/register" class="text-decoration-none text-dark" id="mm">Not Logged in?</a>
                </div>
                <button type="submit" class="btn btn-dark" id="btn-login">Login</button>
            </form>
        </div>
    </div>
    </div>
</body>
</div>
@endsection