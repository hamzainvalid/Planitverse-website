<?php
header('Location:index.html');
include('connection.inc.php');

$sql = "TRUNCATE TABLE cart, discount, temp_total";
$result = mysqli_query($conn, $sql);
?>
<script>
localStorage.clear()
</script>

