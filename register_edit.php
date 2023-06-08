<?php


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $pname = $_POST['edit_username'];
    $pprice = $_POST['edit_email'];
    $pbprice = $_POST['edit_password'];

    $db=new mysqli('localhost','root','','productdb');
    $query = "UPDATE producttb SET product_name='$pname', product_price='$pprice', product_befor_price='$pbprice' WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}

?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                $db=new mysqli('localhost','root','','productdb');
                $query = "SELECT * FROM producttb WHERE id='$id' ";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" value="">

                            <div class="form-group">
                                <label> Product Name </label>
                                <input type="text" name="edit_username" value="" class="form-control"
                                    placeholder="Enter Product Name">
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="text" name="edit_email" value="" class="form-control"
                                    placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label>Product price befor</label>
                                <input type="text" name="edit_password" value=""
                                    class="form-control" placeholder="Enter Price befor">
                            </div>

                            <a href="products-update.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>