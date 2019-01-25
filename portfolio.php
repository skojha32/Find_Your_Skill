
<?php
    require "config.php";
    if(isset($_POST["submit"]))
    {
        $name=$_POST['name'];
        $skills=$_POST['skills'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        
        $query=mysqli_query($con,"Insert into portfolio(name,email,number,skills) values('$name','$email','$number','$skills')");
        if($query)
        {
            echo "<script type = 'text/javascript'>alert('Registration Successful')</script>";
            echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
        }
        else
        {
            echo "<script type = 'text/javascript'>alert('Registration not Successful')</script>";
            echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
        }
    }
?>