<?php


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $db=new mysqli('localhost','root','','productdb');
    $query = "DELETE FROM producttb WHERE id='$id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}
?>