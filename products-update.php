

<div class="table-responsive">
    <?php
    $db=new mysqli('localhost','root','','productdb');
    $query = "SELECT * FROM producttb";
    $query_run = mysqli_query($db, $query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th> ID </th>
            <th> Product Name</th>
            <th>Product Price </th>
            <th>product_befor_price</th>
            <th>product_image</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                ?>
                <tr>
                    <td><?php  echo $row['id']; ?></td>
                    <td><?php  echo $row['product_name']; ?></td>
                    <td><?php  echo $row['product_price']; ?></td>
                    <td><?php  echo $row['product_befor_price']; ?></td>
                    <td><?php  echo $row['product_image']; ?></td>
                    <td>
                        <form action="register_edit.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
    </table>
</div>