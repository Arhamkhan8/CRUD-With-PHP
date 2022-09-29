<?php 
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
   <h3>Student View Details  <a href="index.php" class="btn btn-danger float-end">Back</a> </h3>
   <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM std_tbl WHERE id='$id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <p class="form-control">
                                            <?=$student['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Email</label>
                                        <p class="form-control">
                                            <?=$student['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Phone</label>
                                        <p class="form-control">
                                            <?=$student['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Course</label>
                                        <p class="form-control">
                                            <?=$student['course'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>