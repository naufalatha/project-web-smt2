<?php
include 'header.php';
?>


<div class="container">
    <h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Edit Room Type</b></h2>

    <form action="#" method="POST">
        <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="is_active">Is Active</label>
                    <input type="text" class="form-control" id="is_active" name="is_active">
                </div>
        </div>
        <button type="submit" class="btn btn-warning">Edit</button>
        <a href="room_type.php" class="btn btn-danger">Cancel</a>
    </form>
</div>
<br>
</div>
</form>
</div>