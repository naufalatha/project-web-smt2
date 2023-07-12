@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Tambah Room Type</b></h2>

        <form action="{{ route('admin.tipe-ruangan.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="is_active">Is Active</label>
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
            <a href="#" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
