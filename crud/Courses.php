<?php
include 'connect.php';
if (isset($_POST['submit']))
{
    $name=$_POST['name'];
   
    $cid=$_POST['cid'];
    
    $Number=$_POST['Number'];
   

    $sql="insert into `crud` (name,cid,Number) 
    values('$name','$cid','$Number')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      //  echo "data inserted successfully";
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

  <div class="from-group">
    <label >course_name</label>
    <input type="text" class="form-control"  placeholder="enter name course"name="name">
</div>
<div class="mb-3">
                <label class="form-label"> courses_number</label>
                <input type="int" class="form-control"   placeholder="8" name="Number" autocomplete="off">
            </div>
            <div class="mb-3">
               <label class="form-label">Courses_id</label>
                <input type="text" class="form-control"   placeholder="cs244" name="cid" autocomplete="off">
            </div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
    </div>

    
  </body>
</html>