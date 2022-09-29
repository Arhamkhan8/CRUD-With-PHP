<?php 
session_start();

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
   <h3>Student form   <a href="index.php" class="btn btn-danger float-end">Back</a> </h3>
 
   <form action="code.php" method="POST">
   <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" >
  </div> 
  <div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    <input type="phone" name="phone" class="form-control">
  </div>
  <div class="mb-3">
    <label for="student" class="form-label">Student Course</label>
    <input type="student" name="course" class="form-control">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
   </div>
 
   
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>