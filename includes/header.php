<?php 

include ("includes/db.php");
include ("functions/functions.php");
?>

<?php 

    if (isset($_GET['pro_id'])) {
        $product_id = $_GET['pro_id'];
        $get_product = "SELECT * FROM product where product_id='$product_id'";
        $run_product = mysqli_query($con, $get_product);
        $row_product = mysqli_fetch_array($run_product);

        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title']; 
        $pro_price = $row_product['product_price'];  
        $pro_desc = $row_product['product_desc']; 
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        
        $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body> 
    <div id="top"> <!--Top Begin -->
       
        <div class="container">
            
            <div class="col-md-6 offer">
                
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                
                <a href="checkout.php">4 Items in Your Card | Total Price: $300</a>
                
            </div>
            
            <div class="col-md-6">
                
                <ul class="menu">
                    
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Card</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    
                </ul>
                
            </div>
            
        </div>
        
    </div> <!--Top End -->
    
    <div id="navbar" class="navbar navbar-default">
        
        <div class="container">
            
            <div class="navbar-header">
                
                <a href="index.php" class="navbar-brand home">
                    
                    <img src="images/logotolikara.jpg" alt="m-dev-store logo" class="hidden-xs">
                    <img src="images/logotolikara.jpg" alt="m-dev-store logo mobile " class="visible-xs">
                    
                    
                </a>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    
                    <span class="sr-only">Toggle Navigation</span>
                    
                    <i class="fa fa-align-justify"></i>
                    
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                    <span class="sr-only">Toggle Search</span>
                    
                    <i class="fa fa-search"></i>
                    
                </button>
                                
                
            </div> 
            
            <div class="navbar-collapse collapse" id="navigation">
                
                <div class="padding-nav">
                    
                    <ul class="nav navbar-nav left">
                        
                        <li class="<?php if($active=='Home') echo "active"; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php if($active=='Shop') echo "active"; ?>">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if($active=='Account') echo "active"; ?>">
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li class="<?php if($active=='Cart') echo "active"; ?>">
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="<?php if($active=='Contact') echo "active"; ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                        
                    </ul>
                    
                </div>
                
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    
                    <i class="fa fa-shopping-cart"></i>
                    
                    <span>4 Items In Your Cart</span>
                    
                </a>
                
                <div class="navbar-collapse collapse right">
                    
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        
                        <span class="sr-only">Toggle Search</span>
                        
                        <i class="fa fa-search"></i>
                        
                    </button>
                    
                </div>
                
                <div class="collapse clearfix" id="search">
                    
                    <form method="get" action="results.php" class="navbar-form">
                        
                        <div class="input-group">
                            
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            
                            <span class="input-group-btn">
                                
                             <button type="submit" name="search" value="Search" class="btn btn-primary">
                               
                                <i class="fa fa-search"></i>
                                
                            </button>
                            
                            </span>
                            
                            
                        </div>
                        
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <!-- <div class='col-md-4 col col-sm-6 center-responsive'>
                                <div class='product'>
                                    <a href='details.php?pro_id=$pro_id'>
                                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                    </a>
                                    <div class='text'>
                                        <h3>
                                            <a href='details.php?pro_id=$pro_id'>
                                                $pro_title
                                            </a>
                                        </h3>
                                

                                    <p class='price'>
                                    $ $pro_price
                                    </p>

                                    <p class='button'>
                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                            <i class='fa fa-eye'></i>View Details
                                        </a>
                                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                            <i class='fa fa-shopping-cart'></i>Add to Cart
                                        </a>
                                    </p>
                                    </div>
                                </div>
                            </div>
                            ";
                            }
                         }
                        } -->