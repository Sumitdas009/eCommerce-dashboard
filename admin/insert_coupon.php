<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


    <div class="row">

        <div class="col-lg-12">

            <ol class="breadcrumb">

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Coupon

                </li>

            </ol>

        </div>

    </div>
    <div class="row">

        <div class="col-lg-12">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"> </i> Insert Coupon

                    </h3>

                </div>

                <div class="panel-body">

                    <form class="form-horizontal" method="post" action="">

                        <div class="form-group">

                            <label class="col-md-3 control-label"> Coupon Title </label>

                            <div class="col-md-6">

                                <input type="text" name="coupon_title" class="form-control">

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="col-md-3 control-label"> Coupon Price </label>

                            <div class="col-md-6">

                                <input type="text" name="coupon_price" class="form-control">

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="col-md-3 control-label"> Coupon Code </label>

                            <div class="col-md-6">

                                <input type="text" name="coupon_code" class="form-control">

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="col-md-3 control-label"> Coupon Limit </label>

                            <div class="col-md-6">

                                <input type="number" name="coupon_limit" value="1" class="form-control">

                            </div>

                        </div>

                        <div class="form-group">

                            <label class="col-md-3 control-label">Select coupon for Product</label>

                            <div class="col-md-6">

                                <select name="product_id" class="form-control">
                                <option></option>
<?php

$get_p = "select * from products";
$run_p = mysqli_query($con,$get_p);
while($row_p = mysqli_fetch_array($run_p)){
$p_id = $row_p['product_id'];
$p_title = $row_p['product_title'];
$p_price = $row_p['product_price'];
echo "<option value='$p_id'> $p_title - $p_price Taka </option>";
}
?>
</select>

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> </label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" class=" btn btn-primary form-control" value=" Insert Coupon ">

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <?php

if(isset($_POST['submit'])){

$coupon_title = $_POST['coupon_title'];

$coupon_price = $_POST['coupon_price'];

$coupon_code = $_POST['coupon_code'];

$coupon_limit = $_POST['coupon_limit'];

$product_id = $_POST['product_id'];

$coupon_used = 0;

$get_coupons = "select * from coupons where product_id='$product_id' or coupon_code='$coupon_code'";

$run_coupons = mysqli_query($con,$get_coupons);

$check_coupons = mysqli_num_rows($run_coupons);

if($check_coupons == 1){

echo "<script>alert('Coupon Code or Product Already Added Choose another Coupon code or Product')</script>";

}
else{

$insert_coupon = "insert into coupons (product_id,coupon_title,coupon_price,coupon_code,coupon_limit,coupon_used) values ('$product_id','$coupon_title','$coupon_price','$coupon_code','$coupon_limit','$coupon_used')";

$run_coupon = mysqli_query($con,$insert_coupon);

if($run_coupon){

echo "<script>alert('New Coupon Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_coupons','_self')</script>";

}


}


}

?>

        <?php } ?>
