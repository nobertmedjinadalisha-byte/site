<?php include("header.php"); ?>
include 'config.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM usuarios WHERE id = $id");

header("Location: index.php");
<?php include("footer.php"); ?>