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
                        <a href="../customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../card.php">Go To Card</a>
                    </li>
                    <li>
                        <a href="../login.php">Login</a>
                    </li>
                    
                </ul>
                
            </div>
            
        </div>
        
    </div> <!--Top End -->
    
    <div id="navbar" class="navbar navbar-default">
        
        <div class="container">
            
            <div class="navbar-header">
                
                <a href="index.php" class="navbar-brand home">
                    
                    <img src="images/ecom-store-logo.png" alt="m-dev-store logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="m-dev-store logo mobile " class="visible-xs">
                    
                    
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
                        
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
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
    
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        My Account
                    </li>
                </ul>
            </div>
            
            <div class="col-md-3">
                <?php
                include ("includes/sidebar.php");
                ?>
            </div>
            
            <div class="col-md-9">
                <div class="box">
                    <h1 align="center">Please confirm your payment</h1>
                    <form action="confirm.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <labe>Invoice No: </labe>
                            <input type="text" class="form-control" name="invoice_no" required>
                        </div>
                        <div class="form-group">
                            <labe>Amount Sent: </labe>
                            <input type="text" class="form-control" name="invoice_no" required>
                        </div>
                        <div class="form-group">
                            <labe>Select Payment Method: </labe>
                            <select name="payment_mode" class="form-control" id="">
                                <option>Select Payment Mode</option>
                                <option>Back Code</option>
                                <option>UBL / Omni Paisa</option>
                                <option>Easy Paisa</option>
                                <option>Western Union</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <labe>Transaction / Reference ID: </labe>
                            <input type="text" class="form-control" name="ref_no" required>
                        </div>
                        <div class="form-group">
                            <labe>Omni Paisa / East Paisa: </labe>
                            <input type="text" class="form-control" name="code" required>
                        </div>
                         <div class="form-group">
                            <labe>Payment Date: </labe>
                            <input type="date" class="form-control" name="date" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg">
                                <i class="fa fa-user-mf"></i> Confirm Payment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
    <?php
    include ("includes/footer.php");
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>