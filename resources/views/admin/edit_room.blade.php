@extends('admin.layout.header')

@section('content')
    <div class="container">
        <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Edit Room</b></h2>

        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="max_people">Max People</label>
                    <input type="number" class="form-control" id="max_people" name="max_people">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status">
                </div>

                <div class="form-group">
                    <label for="room_type_id">Room Type</label>
                    <input type="text" class="form-control" id="room_type_id" name="room_type_id">
                </div>
            </div>
            <hr>
            <div class="row">

                <div class="col-md-6">
                    <button type="submit" class="btn btn-warning btn-block">Edit</button>
                </div>
                <div class="col-md-6">
                    <a href="room.php" class="btn btn-danger btn-block">Cancel</a>
                </div>
            </div>
            <br>
    </div>
    </form>
    </div>
@endsection