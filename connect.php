<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $con=mysqli_connect('localhost','root','','contact') or die("connection failed :".mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['message'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $message=$_POST['message'];

        $sql="INSERT INTO `user` (`name`,`email`,`mobile`,`message`) VALUES ($name,$email,$mobile,$message)";

        $query=mysql_query($con,$sql);
        if(!$query){
            echo "not done";
        }
        else{
            echo 'done';
        }

    }



}
?>