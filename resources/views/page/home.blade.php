@extends('layout.layout')
@section('content')
@include('component._navbar')
<div class="container">
    @if (session('successLogin'))
    <script>
        Swal.fire(
            'Good jobs!',
            'Berhasil Login',
            'success'
        )
    </script>
    @endif
    @if (session('notAllowedd'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal mengakses halaman',
            text: 'Anda sudah login!!',
        })
    </script>
    @endif
</div>
@endsection