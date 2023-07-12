@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Daftar Peminjaman</b></h2>
        <br>
        <h5 class="bg-success" style="padding: 6px; width: 100%; font-weight: bold;">
            <marquee>Lakukan Reload Setiap Masuk Halaman ini, untuk menghindari terjadinya kesalahan data dan informasi
            </marquee>
        </h5>
        <a href="{{ route('admin.peminjaman') }}" class="btn btn-default">Reload</a>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Dikembalikan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->user->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->borrow_at)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->until_at)->format('d M Y') }}</td>
                        <td>{{ $p->admin_approval_status }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->returned_at)->format('d M Y') ?? 'Belum Dikembalikan' }}</td>
                        <td><a href="#" class="btn btn-success">Terima</a>
                            <a href="#" class="btn btn-danger">Tolak</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
