@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Data Ruangan</b></h2>
        <a href="{{ route('admin.ruangan.create') }}" class="btn btn-success" style="margin-top:10px">Tambah Ruangan</a>
        <table class="table table-striped" style="margin-top:16px">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Max People</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($room as $r)
                    <tr>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->max_people }}</td>
                        <td>{{ $r->description }}</td>
                        @if ($r->status == 0)
                            <td><span class="badge" style="background-color: red">Tidak Tersedia</span></td>
                        @elseif ($r->status == 1)
                            <td><span class="badge" style="background-color: green">Tersedia</span></td>
                        @endif
                        <td>{{ $r->roomType->name }}</td>
                        <td><a href="{{ route('admin.ruangan.edit', ['id' => $r->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.ruangan.delete', ['id' => $r->id]) }}" method="post">
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
