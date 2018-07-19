<?php
$con = mysqli_connect($localhost,$root) or die ("<script language='javascript'>alert('Unable to connect to database')</script>");
mysqli_select_db($con, $admin);

if (isset($_GET['part'])){
    $partid = $_GET['part'];
    $sql = 'SELECT * 
        FROM $financeteam 
        WHERE PartNumber = $partid';

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $partnumber = $partid;
    $nsn = $row["NSN"];
    $description = $row["Description"];
    $quantity = $row["Quantity"];
    $condition = $row["Conditio"];
}
?>