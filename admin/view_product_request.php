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
                    <i class="fa fa-dashboard"></i> Dashboard / View Products Request
                </li>
            </ol>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-heading">

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"> </i> View Products Request

                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">

                        <table class="table table-bordered table-hover table-striped">

                            <thead>

                                <tr>

                                    <th>Request id</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Delete Request</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php

$i=0;
$get_p_cats = "select * from product_request";
$run_p_cats = mysqli_query($con,$get_p_cats);
while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$pr_id= $row_p_cats['prid'];
$p_name = $row_p_cats['p_name'];
$p_desc = $row_p_cats['p_desc'];
$i++;

?>

                                    <tr>

                                        <td>
                                            <?php echo $i; ?> </td>

                                        <td>
                                            <?php echo $p_name; ?> </td>

                                        <td width="300">
                                            <?php echo $p_desc; ?> </td>

                                        <td>

                                            <a href="index.php?delete_p_request=<?php echo $pr_id; ?>">

<i class="fas fa-trash-alt"></i> Delete

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
