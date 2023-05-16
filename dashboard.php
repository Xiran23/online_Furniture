<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
   

</head>

<body>
    <input type="checkbox" id="check">
    <header>

        <label for="check">
            <i class="fa fa-bars" id="side-nav_btn"></i>
        </label>
        <div class="left_side">
            <h3>Furniture</h3>
        </div>
    </header>
    <div class="side-nav">
        <div class="logo">
            <img src="images/logo.png" alt="logo" class="image">
        </div>
        <a href="#"> <i class="fa fa-desktop"> <span>Dashboard</span></i></a>
        <a href="#"> <i class="fa fa-table"> <span>Product</span></i></a>
        <a href="#"> <i class="fa fa-th">
                <spzan>#</span>
            </i></a>
        <a href="view.php"> <i class="fa fa-cogs"> <span>view</span></i></a>
        <a href="#"> <i class="fa fa-info-circle"> <span>About</span></i></a>
        <a href="#"> <i class="fa fa-slider"> <span>Settings</span></i></a>

    </div>

    <div class="right-div">
        


        <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

            <h1>ADD A NEW PRODUCT</h1>

            <div>
                <label for="">Product-Name</label>
                <input type="text" id="" class="" name="pname">
            </div>
            <div>
                <label for="">Description</label>
                <input type="text" id="" class="" name="pdescription">
            </div>
            <div>
                <label for="">Price</label>
                <input type="text" id="" class="" name="price">
            </div>
            <div>
                <label for="">Product-img</label>
                <input type="file"  id="" class="" name="uploadedimg">
            </div>

            <input type="submit" class="submit" name="submit" value="submit">

        </form>

    </div>


</body>

</html>


<?php 
include('config/db.php');

//for images
// print_r)

$_filename = $_FILES['uploadedimg']['name'];
$tempname  = $_FILES['uploadedimg']['tmp_name'];


if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $pdescription = $_POST['pdescription'];
    $price       = $_POST['price'];
    $folder     = 'product/'.$_filename; 
    move_uploaded_file($tempname,$folder);
    
    
    $query = "INSERT INTO product(pname,pdescription,price,image) VALUES ('$pname','$pdescription','$price','$folder')";
  
    $data = mysqli_query($conn,$query);
   
    
}
?>