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
                @foreach ($roomTypes as $d)
                    <tr>
                        <td>{{ $d->name }}</td>
                        @if ($d->is_active == 0)
                            <td><span class="badge" style="background-color: red">Tidak Tersedia</span></td>
                        @elseif ($d->is_active == 1)
                            <td><span class="badge" style="background-color: green">Tersedia</span></td>
                        @endif
                        <td><a href="{{ route('admin.tipe-ruangan.edit', ['id' => $d->id]) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.tipe-ruangan.delete', ['id' => $d->id]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
