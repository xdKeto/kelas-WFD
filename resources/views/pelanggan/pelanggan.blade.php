@extends('base.base')

@section('content')
    <div class="container">
        <a href="{{route('pelanggan.create')}}" class="btn btn-primary mt-3 mb-3">Tambah Data</a>
        <table class="table table-border table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tahun Masuk</th>
                    <th>Tanggal Lahir</th>
                    <th>History pembelian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->tahun_masuk }}</td>
                        <td>{{ $row->tgl_lahir }}</td>
                        <td>
                            @foreach($row->pembelian as $r)
                                {{ $r->nomor_pembelian }}<br>
                            @endforeach
                            @if($row->pembelian->count() == 0)
                                -
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('pelanggan.delete', $row)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" style="display: inline">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            <a href="{{route('pelanggan.edit', $row)}}"class="btn btn-warning" >Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <table class="table table-border table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pembelian</th>
                    <th>Tanggal Beli</th>
                    <th>Nama Pelanggan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembelian as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->nomor_pembelian }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->pelanggan->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection('content')
</html>