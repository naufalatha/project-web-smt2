@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Edit Room</b></h2>

        <form action="{{ route('admin.ruangan.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                </div>

                <div class="form-group">
                    <label for="max_people">Max People</label>
                    <input type="number" class="form-control" id="max_people" name="max_people"
                        value="{{ $data->max_people }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $data->description }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{ $data->status }}">
                </div>

                <div class="form-group">
                    <label for="room_type_id">Room Type</label>
                    {{-- <input type="text" class="form-control" id="room_type_id" name="room_type_id"> --}}
                    <select name="room_type_id" id="room_type_id" class="form-control">
                        @foreach ($room_types as $room_type)
                            <option value="{{ $room_type->id }}"
                                {{ $data->room_type_id == $room_type->id ? 'selected' : '' }}>{{ $room_type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">

                <div class="col-md-6">
                    <button type="submit" class="btn btn-warning btn-block">Edit</button>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-danger btn-block">Cancel</a>
                </div>
            </div>
            <br>
    </div>
    </form>
    </div>
@endsection
