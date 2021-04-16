<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
               <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
                
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Top Products Categories</h4>
                <ul>
                    <?php
                        $get_p_cats = "SELECT * FROM product_categories";
                        $run_p_cats = mysqli_query($con, $get_p_cats);

                        while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            echo "
                                <li>
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                        $p_cat_title
                                    </a>
                                </li>
                            ";
                        }
                    ?>
                </ul>
                
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            
            <div class="col-sm-6 col-md-3">
                <h4>Find Us:</h4>
                <p>
                    
                    <strong>Mr-Dev Coding Honai</strong>
                    <br/>Goyage
                    <br/>Tolikara
                    <br/>+6282275850768
                    <br/>premiyigibalom@gmail.com
                    <br/><strong>MrPremi</strong>
                    
                </p>
                <a href="contact.php">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            
            <div class="col-sm-6 col-md-3">
                <h4>Get The News</h4>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur inventore cupiditate, cum odio facilis, aut vel molestiae voluptas labore voluptatem eius amet explicabo laboriosam, animi tenetur tempore. Earum quos, suscipit.
                </p>
                
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <span class="input-group-btn">
                            <input type="submit" value="subscribe" class="btn btn-default">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
            
        </div>
    </div>
</div>


<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">&copy;2021 Coding Honai</p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">Thema by: Mr-Premi</p>
        </div>
    </div>
</div>