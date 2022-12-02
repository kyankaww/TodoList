@extends('layout.layout')
@section('content')
@if (session('notAllowedd'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal mengakses halaman',
            text: 'Anda sudah login!!',
        })
    </script>
    @endif
    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal membuat Todo baru',
            text: 'Harap mengisi form dengan benar!!',
        })
    </script>
    @endif
@include('component._navbar')
@include('component._createtodo')
@endsection