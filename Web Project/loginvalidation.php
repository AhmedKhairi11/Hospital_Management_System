<?php 
$conn = mysqli_connect("localhost", "root", "","hospital") or die('could not connect:');
if(isset($_POST['save']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
        
    $M_qur="select * from manager where Username='$username' and passwordd='$password'";
    $P_qur="select * from patient where Username='$username' and passwordd='$password'";
    $M_result=mysqli_query($conn,$M_qur);
    $P_result=mysqli_query($conn,$P_qur);
    $M_count=mysqli_num_rows($M_result);
    $P_count=mysqli_num_rows($P_result);
    if($M_count==0)
    {
        $count=$P_count;
        $result=$P_result;
    }
    else
    {
        $count=$M_count;
        $result=$M_result;
    }
    if($count>0)
    {
        $data=mysqli_fetch_assoc($result);
        // $_SESSION['email']=$data['email'];
        // if(!empty($_POST['checkboxx']))
        // {
        //     $rem=$_POST['checkboxx'];
        //     // set cookies
        //     setcookie('email', $email, time()+3600*60*7);
        //     setcookie('password', $password, time()+3600*60*7); 
        //     setcookie('userlogin', $rem, time()+3600*60*7);
        // }
        // else
        // {
        //     // destroy cookies
        //     setcookie('email', $email,5);
        //     setcookie('password', $password,5); 
        //     setcookie('userlogin', $rem,5);

        // }
        header("Location: Doctors.php");
    }
    else
    { 
        echo '<script type="text/javascript">'; 
        echo 'alert("User not found");'; 
        echo 'window.location.href = "login.php";';
        echo '</script>';
    }
}