@extends('admin.layout.header')

@section('content')
    <div class="container">
        <p>Halo, {{ Auth::user()->name }}!</p>
        <div class="row">
            <div class="col-md-4">
                <div
                    style="background-color: #dfdfdf; padding-bottom: 20px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
                    <h4 class="text-center">PEMINJAMAN BARU</h4>
                    <h4 style="font-size: 36pt;"class="text-center"><b>{{ $countPeminjamanBaru }}</b></h4>
                </div>
            </div>

            <div class="col-md-4">
                <div
                    style="background-color: #dfdfdf; padding-bottom: 20px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
                    <h4 class="text-center">PEMINJAMAN DITOLAK</h4>
                    <h4 style="font-size: 36pt;" class="text-center"><b>{{ $countPeminjamanDitolak }}</b></h4>
                </div>
            </div>

            <div class="col-md-4">
                <div
                    style="background-color: #dfdfdf; padding-bottom: 20px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
                    <h4 class="text-center">PEMINJAMAN DITERIMA</h4>
                    <h4 style="font-size: 36pt;" class="text-center"><b>{{ $countPeminjamanDiterima }}</b></h4>
                </div>
            </div>
        </div>

        <br>

        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Daftar Peminjaman</b></h2>
        <br>
        <a href="{{ route('admin.home') }}" class="btn btn-default">Reload</a>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Waktu Pinjam</th>
                    <th scope="col">Waktu Selesai</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->user->name }}</td>
                        <td>{{ $p->room->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->borrow_at)->format('d M Y, H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->until_at)->format('d M Y, H:i') }}</td>
                        @if ($p->admin_approval_status == 0)
                            <td><span class="badge" style="background-color: grey">Menunggu Approval</span></td>
                        @elseif ($p->admin_approval_status == 1)
                            <td><span class="badge" style="background-color: green">Disetujui</span></td>
                        @elseif ($p->admin_approval_status == 2)
                            <td><span class="badge" style="background-color: red">Ditolak</span></td>
                        @endif
                        <td>
                            <form action="{{ route('admin.approval.ruangan', ['id' => $p->id, 'approval' => 1]) }}"
                                method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Terima</button>
                            </form>
                            <form action="{{ route('admin.approval.ruangan', ['id' => $p->id, 'approval' => 2]) }}"
                                method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br>
@endsection
