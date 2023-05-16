<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
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
        <a href="dashboard.php"> <i class="fa fa-desktop"> <span>Dashboard</span></i></a>
        <a href="#"> <i class="fa fa-table"> <span>Product</span></i></a>
        <a href="#"> <i class="fa fa-th">
                <spzan>#</span>
            </i></a>
        <a href="view.php"> <i class="fa fa-cogs"> <span>view</span></i></a>
        <a href="#"> <i class="fa fa-info-circle"> <span>About</span></i></a>
        <a href="#"> <i class="fa fa-slider"> <span>Settings</span></i></a>

    </div>

    <div class="right-div">
        <?php include('config/db.php');
        $query = "SELECT *FROM product";
        $result = mysqli_query($conn,$query); 
        $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
         

        print_r($products);
        
        
        ?>
       <div class="viewtable">
        <table border="2">
            <tr >
                <th>producd_id</th>
                <th>Name</th>
                <th>description</th>
                <th>price</th>
                <th>img</th>

            </tr>
            <?php  foreach($products as $prod):?>
            <tr>
                <td><?php echo $prod['product_id']; ?></td>
                <td><?php echo $prod['pname']; ?></td>
                <td><?php echo $prod['pdescription']; ?></td>
                <td><?php echo $prod['price']; ?></td>
                <td> <img src="<?php echo $prod['image']; ?>" style="width:200px; height:100px"> </td>
            <td> <button>EDIT</button></td>
            <td> <button>update</button></td>
            </tr>
            <?php endforeach; ?>

        </table>
        <div>



    </div>


</body>

</html>