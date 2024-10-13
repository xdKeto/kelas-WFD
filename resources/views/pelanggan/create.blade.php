@extends('base.base')

@section('content')
    <div class="container">
        <a href="{{route('pelanggan.pelanggan')}}" class="btn btn-primary mt-3 mb-3">Kembali</a>
        <form action="{{route('pelanggan.insert')}}" method="POST" class="mt-3">
            @csrf
            <h1 class="">INPUT DATA PELANGGAN</h1>
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama">
            
            <label for="tahun_masuk" class="mt-2">Tanggal Masuk</label>
            <input type="number" class="form-control" name="tahun_masuk">

            <label for="tgl_lahir" class="mt-2">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir">

            <label for="alamat" class="mt-2">Alamat</label>
            <input type="text" class="form-control" name="alamat">

            <button class="btn btn-primary mt-3" type="submit">Tambah</button>
        </form>
    </div>
@endsection('content')
</html>