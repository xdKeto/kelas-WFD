@extends('base.base')

@section('content')
    <div class="container">
        <a href="{{route('pelanggan.pelanggan')}}" class="btn btn-primary mt-3 mb-3">Kembali</a>
        <form action="{{route('pelanggan.update', $pelanggan->id)}}" method="POST" class="mt-3">
            @csrf
            @method('put')
            <h1 class="">EDIT DATA PELANGGAN</h1>
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$pelanggan->nama}}">
            
            <label for="tahun_masuk" class="mt-2">Tanggal Masuk</label>
            <input type="number" class="form-control" name="tahun_masuk" value="{{$pelanggan->tahun_masuk}}">

            <label for="tgl_lahir" class="mt-2">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" value="{{$pelanggan->tgl_lahir}}">

            <label for="alamat" class="mt-2">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$pelanggan->alamat}}">

            <button class="btn btn-primary mt-3" type="submit">Simpan</button>
        </form>
    </div>
@endsection('content')
</html>