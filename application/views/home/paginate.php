<div class="col-md-12">
  <div class="col-md-6">
  <?php if(isset($_SESSION['adminName'])): ?>
    <h1><?=$_SESSION['adminName']; ?></h1>
<?php else: ?> 
<h1><?='Welcome'; ?></h1>
<?php endif; ?>
  </div>  
   <div class="col-md-2 col-md-offset-2">
      <a href="/addtask"><button class="btn btn-primary admin-btn">Add Task</button></a>
   </div>

  <div class="col-md-2">
  <?php if(!isset($_SESSION['adminName'])): ?>
    <a href="/login"><button class="btn btn-success admin-btn">Admin Login</button></a>
   <?php else: ?> 
    <a href="/logout"><button class="btn btn-danger admin-btn">LogOut</button></a>
   <?php endif; ?>
  </div>
</div>


<div class="col-md-12">
<div class="sort-by">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="/?page=<?=$_GET['page'];?>&sort=name">By Name</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/?page=<?=$_GET['page'];?>&sort=email">By Email</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/?page=<?=$_GET['page'];?>&sort=id">BY ID</a>
  </li>
</ul>
</div>
</div>
<br>
    
  <?php foreach($result as $var): ?>
<div class="col-md-6 task-card">
  <div class="card" style="width: 18rem;">
  <img src="<?=$var['image']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title edit-name"><?=$var['name'];  ?>
     &nbsp;
      <?php if($var['status']): ?>
<a href=<?php if(isset($_SESSION['adminName'])): ?> "/changestatus?id=<?=$var['id']; ?>" <?php else:?>'#'
 <?php endif; ?>><span class="badge badge-primary status" value = "1">
      <i class="fas fa-check"></i>
      </span></a>
      <?php else: ?>
     <a href=<?php if(isset($_SESSION['adminName'])): ?>"/changestatus?id=<?=$var['id']; ?>" <?php else:?>'#' 
     <?php endif; ?> > <span class="badge badge-danger status" value = "0">
     <i class="fas fa-times" ></i>
     </span></a>
    <?php endif; ?>
     </h5>
    <h6 class="card-title edit-email"><?=$var['email'];  ?></h6>
    <p class="card-text edit-task"><?=$var['task']; ?></p>
    <?php if(isset($_SESSION['adminName'])): ?>
    
    <?php endif; ?>
    
  </div>
</div> 
</div>

<?php endforeach; ?>
<br>

<?php include('application/views/layout/pagination.php'); ?>


