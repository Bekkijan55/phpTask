
<?php include('application/views/layout/edit.php'); ?>
<div class="addTask">
<div class="col-md-6 col-md-offset-3">
    <form enctype = "multipart/form-data" >
        <label for="name">Name</label>
        <input type="text" name = "name" class="form-control">
        <label for="email">Email</label>
        <input type="text" name = "email" class="form-control">
        <label for="task">Task</label>
        <textarea class="form-control" placeholder="Enter Your Task" name = "task"></textarea>
        <label for="image">Upload Your Image</label>
        <input type="file" name = "file_img" class="form-control">
        <br>
         <button type="button" class="btn btn-primary edit-btn" data-toggle="modal" data-target="#exampleModal">
        Edit
    </button>
    </form>
  
   

</div>
</div>