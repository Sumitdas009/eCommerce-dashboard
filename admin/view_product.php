<?php



include("../includes/connection.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
}

else{

?>

    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fas fa-crown"></i> Dashboard / View Products

                </li>

            </ol>


        </div>


    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">

                        <i class="fas fa-money-bill-alt"></i> View Product
                    </h3>


                </div>

                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">

                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Title</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Product Sold</th>
                                    <th>Product Keywords</th>
                                    <th>Product Date</th>
                                    <th>Product Delete</th>
                                    <th>Product Edit</th>

                                </tr>

                            </thead>

                            <tbody>
                                <?php

                            $i = 0;
                            $get_pro = "select * from products";
                            $run_pro = mysqli_query($con,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){

                            $pro_id = $row_pro['product_id'];
                            $pro_title = $row_pro['product_title'];
                            $pro_image = $row_pro['product_img1'];
                            $pro_price = $row_pro['product_price'];
                            $pro_keywords = $row_pro['product_keywords'];
                            $pro_date = $row_pro['date'];
                            $i++;

                            ?>

                                    <tr>

                                        <td>
                                            <?php echo $i; ?>
                                        </td>

                                        <td>
                                            <?php echo $pro_title; ?>
                                        </td>

                                        <td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>

                                        <td>
                                            <?php echo $pro_price; ?> /=
                                        </td>

                                        <td>
                                            <?php

                                $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                $run_sold = mysqli_query($con,$get_sold);
                                $count = mysqli_num_rows($run_sold);
                                echo $count;
                                ?>
                                        </td>

                                        <td>
                                            <?php echo $pro_keywords; ?> </td>

                                        <td>
                                            <?php echo $pro_date; ?>
                                        </td>

                                        <td>

                                            <a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fas fa-trash-alt"></i> Delete

</a>

                                        </td>

                                        <td>

                                            <a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fas fa-edit"></i> Edit

</a>

                                        </td>

                                    </tr>

                                    <?php } ?>
                            </tbody>


                        </table>

                    </div>

                </div>


            </div>


        </div>



    </div>








    <?php } ?>
