@extends('layout.layout')
@section('content')
<body class="bg-secondary">
    

<div class="container mt-5" id="regis" >
    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal membuat akun',
            text: 'Harap mengisi form dengan benar!!',
        })
    </script>
    @endif
    @include('component._logo')
    <div class="col-6 offset-3 rounded" id="form1">
        <div class="card border-0">
            <form class="m-5" method="POST" action="{{route('register.input')}}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email1" name="email">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="email1" name="name">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="passwordl" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordl" name="password">
                </div>
                <a class="text-decoration-none text-dark" id="already" href="/login">--Already have account--</a> <br>
                <button type="submit" class="btn btn-dark mt-3" id="btn-regis">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
@endsection