<?php include ('header.php'); ?>
<?php include ('dcom.php'); ?>
<?php
if(isset($_POST['ID'])){
    $ID = $_POST['ID'];
    $query = "delete from info where ID = '$ID'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed" . mysqli_error($conn));
    }
    else{
        header('location:index.php?success= Data Deleted Successfully');
    }
}
?>

<form action="update.php?ID_NEW=<?php echo $ID; ?>" method="post">
    <div class="form-group">
        <label for="ID">ID</label>
        <input type="number" name="ID" class="form-control" value="<?php echo $row['ID']?>">
    </div>
</form>

<?php include ('footer.php'); ?>