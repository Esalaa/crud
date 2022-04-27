<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['Name'];
$Number=$row['Number'];
$cid=$row['cid'];
$id=$row['id'];
if (isset($_POST['submit']))
{
 

    $cid=$_POST['cid'];
    $Number=$_POST['Number']; 
    $Name=$_POST['Name'];
    
    $sql="update `crud` set id=$id ,cid='$cid', Number='$Number', Name='$Name' 
    where id=$id";
    
    $result=mysqli_query($con,$sql);
    if($result)
    {
      // echo "updated successfully";
      header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
       
    }
}
?>

<!doctype html>
<html lang="">
  <head>
  >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >

    <title>crud operation</title>
  </head>
  <body>
    <div class="container">
    <form method="POST">

  
<div class="mb-3">
                <label class="form-label"> Courses_id</label>
                <input type="int" class="form-control"   value="<?php echo $cid ?>" name="cid" autocomplete="off" >
            </div>
            <div class="mb-3">
               <label class="form-label">Courses_number</label>
                <input type="text" class="form-control"   value="<?php echo $Number ?>" name="Number" autocomplete="off">
            </div>
            <div class="mb-3">
               <label class="form-label">Courses_name</label>
                <input type="text" class="form-control"   value="<?php echo  $Name?>" name="Name" autocomplete="off">
            </div>
  <button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>
    </div>

    
  </body>
</html>