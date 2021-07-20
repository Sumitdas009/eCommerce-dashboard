<div id="footer">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-sm-6">

                <h4>Pages</h4>
                <ul>

                    <li><a href="cart.php">Shopping Cart</a></li>

                    <li><a href="contact.php">Contact Us</a></li>

                    <li><a href="shop.php">Shop</a></li>

                    <li><a href="customer/my_account.php">My Account</a></li>

                </ul>

                <h4>User Selection</h4>
                <ul>

                    <li><a href="customer_register.php">Resister</a></li>
                    <li><a href="checkout.php">Login</a></li>

                </ul>

                <hr class="hidden-md hiddden-lg hidden-sm">

            </div>

            <div class="col-md-3 col-sm-6">

                <h4>Top Product Catagory</h4>

                <ul>

                    <?php

                    $get_p_cats = "select * from product_categories";

                    $run_p_cats = mysqli_query($con, $get_p_cats);

                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                        $p_cat_id = $row_p_cats['p_cat_id'];

                        $p_cat_title = $row_p_cats['p_cat_title'];

                        echo "<li> <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a> </li>";
                    }

                    ?>

                </ul>

                <hr class="hidden-md hiddden-lg">

            </div>

            <div class="col-md-3 col-sm-6">

                <h4>Where to find Us</h4>
                <p> <strong>Sumit Das</strong> <br> Rourkela<br> Odisha, India<br>
                    <br> 811xxxxxxx
                    <br> sumitkumardasxxx@gmail.com
                    <br>
                    <strong>Admins</strong><br>


                    <strong> Sumit Kumar Das </strong>
                </p>

                <a href="contact.php">Go to contact Us page</a>

                <hr class="hidden-md hiddden-lg">

            </div>


            <div class="col-md-3 col-sm-6">

                <h4>Stay in touch</h4>
                <p class="social">
                    <a href="#"> <i class="fab fa-facebook-square"></i> </a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>


                </p>


            </div>


        </div>

    </div>

</div>





<div id="copyright">

    <div class="container">
        <div class="row">
        </div>

        <div class="col-md-6">
            <p class="pull-left"> &copy; 2021 Sumit Kumar Das </p>

        </div>

    </div>

</div>