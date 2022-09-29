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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
<h4>Students List <a href="student-create.php" class="btn btn-primary float-end">Add Student</a></h4>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student name</th>
      <th scope="col">Email</th>  
      <th scope="col">Phone</th>  
      <th scope="col">Course</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $query = "SELECT * FROM std_tbl";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)  > 0){
        foreach($result as $students){
         ?>
            <tr>
                <td><?=$students['id']?></td>
                <td><?=$students['name']?></td>
                <td><?=$students['email']?></td>
                <td><?=$students['phone']?></td>
                <td><?=$students['course']?></td>
                <td>
                <a href="student-view.php?id=<?= $students['id']; ?>" class="btn btn-primary btn-sm">view</a>
                <a href="student-edit.php?id=<?= $students['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                <form action="code.php" method="POST" class="d-inline">
                     <button type="submit" name="delete" value="<?= $students['id']; ?>"  class="btn btn-danger btn-sm">Delete</button>
                </form>
                </td>           
            </tr>
        <?php
        }
    } 
    else{
        echo "No Record found";
    }

    ?>
  </tbody>
</table></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>