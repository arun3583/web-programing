<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'dbconnection.php';
//login
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
   if($username=='admin'&& $password=="admin"){
        header('location:admin.php');

    }
    else{
        $sql="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
        $res=mysqli_query($con,$sql);
        $no=mysqli_fetch_row($res);
       if($no!=0){
            header('location:view.php');

    }else {
        echo "invalid username or password";
    }
    
}

}
//registration
if(isset($_POST['Register'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];
   $sql="INSERT INTO `student`(`name`, `age`, `course`) VALUES ('$name',$age,'$course')";
   $res=mysqli_query($con,$sql);
   if($res)
   {
       echo "inserted";
   }
}
   //add marks
if(isset($_POST['markentry'])){
    $studid=$_POST['studid'];
    $scode=$_POST['subjectcode'];
    $smark=$_POST['smark'];
    $umark=$_POST['umark'];
$t=$smark+$umark;
if($t>=90)
{
    $grade='o';
}
elseif($t>=80)
{
    $grade='A';
}
elseif($t>=70)
{
    $grade='B';
}
elseif($t>=50)
{
    $grade='C';
}

else{
    $grade='D';
}



   $sql="INSERT INTO `mark`(`subjectcode`, `session_mark`, `univercity_mark`, `studentid`,`grade`) VALUES ('$scode',$smark,$umark,$studid,'$grade')";
   $res=mysqli_query($con,$sql);
   if($res)
   {
       echo "inserted";
   }
}
  
?>


 


