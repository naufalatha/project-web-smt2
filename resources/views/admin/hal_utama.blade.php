@extends('admin.layout.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div
                    style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
                    <h4>PEMINJAMAN BARU</h4>
                    <h4 style="font-size: 56pt;"><b>// jumlah Peminnjam baru</b></h4>
                </div>
            </div>

            <div class="col-md-4">
                <div
                    style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
                    <h4>PEMINJAMAN DIBATALKAN</h4>
                    <h4 style="font-size: 56pt;"><b>// jumlah peminjam dibatalkan</b></h4>
                </div>
            </div>

            <div class="col-md-4">
                <div
                    style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
                    <h4>PEMINJAMAN DITERIMA</h4>
                    <h4 style="font-size: 56pt;"><b>// jumlah peminjam diterima</b></h4>
                </div>
            </div>
        </div>
    </div>

    <br>
@endsection
