<?php 
 
$host="localhost";
$user="root";
$password="";
$db="mydatabase";
 
mysqli_connect($host,$user,$password);
mysqli_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from authentication where username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo '<a href="tictac.html">GAME</a>';
        exit();
    }
        
}
?>
