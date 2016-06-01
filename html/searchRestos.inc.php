<?php
if(isset($_GET['searchKey']) && !empty($_GET['searchKey'])){
    $conn = mysqli_connect('localhost','root','Asdf!234','myDBs') or die("Can't connect to database!");
    $searchTxT = $_GET['searchKey'];
    $q = "SELECT `name` FROM `` WHERE `city` LIKE '%".$conn->real_escape_string($searchTxT)."%';";
    $results = $conn->query($q);
    while($row = $results->fetch_assoc()){
        echo "<option value=".$row['name']." ></option>";//$row['name']
    }
    $results->free();
    $results->close();
    $conn->close();
}
?>