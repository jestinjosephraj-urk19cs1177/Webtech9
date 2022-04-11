<?php
$input = $_GET["name"];

$con = mysqli_connect("localhost", "root", "", "mydb");


$sql = "SELECT * FROM myuser WHERE myname LIKE '$input'";
$result = mysqli_query($con, $sql);

$hint = "";

if ($input != "") {
    while ($a = mysqli_fetch_array($result)) {
        $hint = $hint . $a[0];
    }
}

echo $hint == "" ? "user name not exist!" : "User name already exist!" . $hint;

mysqli_close($con);

?>
