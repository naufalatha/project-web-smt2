@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Edit Room Type</b></h2>

        <form action="{{ route('admin.tipe-ruangan.update', ['id' => $roomType->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $roomType->name }}">
                </div>

                <div class="form-group">
                    <label for="is_active">Is Active</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value="1" {{ $roomType->is_active == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $roomType->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
            <a href="{{ route('admin.tipe-ruangan') }}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
    <br>
    </div>
    </form>
    </div>
@endsection
