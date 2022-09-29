<?php
session_start();
include('config.php');
// to Delete student
if(isset($_POST['delete'])){
    $id = mysqli_real_escape_string($conn,$_POST['delete']);
    $query = "DELETE FROM std_tbl WHERE id='$id'";
     $query_run = mysqli_query($conn,$query);
   if($query_run){
       
       $_SESSION['message'] = "Student Deleted Successfully";
       header("Location: index.php");
       exit(0);
    }
    else{
        $_SESSION['message'] = "Student DELETED Updated";
        header("Location: index.php");
        exit(0);
    }
}

// to Update student
if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);

    $query = "UPDATE std_tbl SET  name='$name', email='$email', phone='$phone', course='$course'
     WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
     }
     else{
         $_SESSION['message'] = "Student Not Updated";
         header("Location: index.php");
         exit(0);
     }
 }
 

// to register student
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);

    $query = "INSERT INTO std_tbl (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $result = mysqli_query($conn,$query);

    if($result){
        
       $_SESSION['message'] = "Student Created Successfully";
       header("Location: student-create.php");
       exit(0);
    }
    else{
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}


?>