<?php include "db.php";



function showAllData() {
    global $con;
    $query = "SELECT * FROM admin";
    $result = mysqli_query($con, $query);
    if(!$result){
        die('matii'.mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
       echo "<option value='$id'>$id</option>";
    }     
 }
function deleteData() {
    global $con;
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $id = $_POST['id'];
    $query = "DELETE FROM admin where id = $id";
    
    $result = mysqli_query($con, $query);
    if(!$result) {
        die("matie".mysqli_query());
    } 
}

function updateData() {
    global $con;
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $id = $_POST['id'];
    $query = "UPDATE admin SET username = '$username', password = '$password' where id = $id";
    
    $result = mysqli_query($con, $query);
    if(!$result) {
        die("matie".mysqli_query());
    }
}

function createData() {
    global $con;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);

    $query = "INSERT INTO admin(username, password) VALUES('$username', '$password')";
    
    $result = mysqli_query($con, $query);
    
    if(!$result){
        die('matii'.mysqli_error());
    } else {
        echo "success record data";
    }
}

function showRows() {
    global $con;
    $query = "SELECT * FROM admin";
    
    $result = mysqli_query($con, $query);

    
    if(!$result){
        die('matii'.mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <pre>
        <?php
        print_r($row);
        ?>
        </pre>
        <?php
    }
}

function login() {
    global $con;
        $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM admin";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    
    $user = $row['username'];
    $pass = $row['password'];
    
    if ($username == $user && $password == $pass) {
        echo "berhasil login <br>";
    } else {
        echo "username dan password tidak cocok <br>";
    }
    
    
    
    if($con){
        echo "database terkoneksi <br>";
    } else {
        die('mati');
    }
}