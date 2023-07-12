@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Tipe Ruangan</b></h2>
        <a href="{{ route('admin.tipe-ruangan.create') }}" class="btn btn-success" style="margin-top:10px">Tambah Tipe
            Ruangan</a>
        <table class="table table-striped" style="margin-top:16px">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Is Active</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger"
                            onclick="return confirm('Yakin Ingin Menghapus Data ?')">Delete</a></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
