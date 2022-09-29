<?php 
session_start();
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

   
   <div class="container mt-5">
   <?php include('message.php');?>
   <h3>Student Edit   <a href="index.php" class="btn btn-danger float-end">Back</a> </h3>
 <?php 
 if($_GET['id']){
  $id = mysqli_real_escape_string($conn,$_GET['id']);
  $query = "SELECT * FROM std_tbl WHERE id='$id'";
  $query_run = mysqli_query($conn,$query);

  if(mysqli_num_rows($query_run) > 0){
  $student = mysqli_fetch_array($query_run);
  ?>
   <form action="code.php" method="POST">
   <input type="hidden" name="id" value="<?=$student['id']; ?>" class="form-control" >
   <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" name="name" value="<?=$student['name']; ?>" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" value="<?=$student['email']; ?>" class="form-control" >
  </div> 
  <div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    <input type="phone" name="phone"  value="<?=$student['phone']; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label for="student" class="form-label">Student Course</label>
    <input type="student" name="course" value="<?=$student['course']; ?>" class="form-control">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
  </div>
   
</form>
  <?php
 }
 
 else{
  echo "no record found";
 }
}
 
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>