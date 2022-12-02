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
@if (session('successAdd'))
<script>
    Swal.fire(
        'Good jobs!',
        'Berhasil membuat ToDo',
        'success'
    )
</script>
@endif
@if (session('successDelete'))
<script>
       Swal.fire(
        'Good jobs!',
        'Berhasil Menghapus ToDo',
        'success'
    )
</script>
@endif
@if (session('successUpdate'))
<script>
    Swal.fire(
        'Good jobs!',
        'Berhasil memperbarui ToDo',
        'success'
    )
</script>
@endif
@if (session('Complated'))
<script>
    Swal.fire(
        'Good jobs!',
        'Berhasil Menyelesaikan ToDo',
        'success'
    )
</script>
@endif

@include('component._navbar')

@include('component._logo')
<center>
<h4 class="mt-5" id="unn">Unfinished ToDo</h4>
</center>
<hr class="mx-5 bg-dark">
@include('component._unfinished')
<center>
<h4 class="mt-3" id="finn">Finished ToDo</h4>
</center>
<hr class="mx-5 bg-dark">
@include('component._finished')

@endsection