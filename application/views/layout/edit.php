<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/add_data" method="POST" enctype = "multipart/form-data" >
        <label for="name">Name</label>
        <input type="text" name = "name" class="form-control">
        <label for="email">Email</label>
        <input type="text" name = "email" class="form-control">
        <label for="task">Task</label>
        <textarea class="form-control" placeholder="Enter Your Task" name = "task"></textarea>
        <label for="image">Upload Your Image</label>
        <input type="file" name = "file_img" class="form-control">
        <br>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" name="upload">Add Task</button>
      </div>
    </form>
      </div>
      
    </div>
  </div>
</div>