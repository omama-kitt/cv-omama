<!DOCTYPE html>
<html>
<head>
    <title>Golden Cinema</title>
    <link rel="stylesheet" href="sign_in.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>



<div class="name">Golden Cinema</div>

<form method="post" action="signin.php">
    <?php

    session_start();
    $var="";
    if(isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['vnum'])&& isset($_POST['gender'])){
        $uname=$_POST['uname'];
        $psw=$_POST['psw'];
        $vnum=$_POST['vnum'];
        $gender=$_POST['gender'];
        try {
            $conn = new mysqli("localhost", "root", "","cinema");
            $myq="INSERT INTO `signin` (`vnum`, `name`, `password`, `gender`) VALUES ('$vnum', '$uname', '$psw','$gender')";

            $res1=$conn->query($myq);
          $conn->commit();
            $conn->close();

            if($res1==1){
                $_SESSION['ismain']=1;

                header('location:login.php');
            }

        }
        catch (Exception $exc){

        }

    }

    ?>

    <div class="container">

        <label for="uname"><b>Visa Card Number</b></label><br>
        <input type="text" id="vnum" name="vnum" placeholder="Enter Visa Card Number"  required>
      <span class="invalid"><?php echo $var; ?></span>
        <br>
        <label for="uname"><b>Username</b></label><br>
        <input type="text" id="uname" name="uname" placeholder="Enter Username"  required>
        <br>
        <label for="psw"><b>Password</b></label><br>
        <input type="password" id="psw" name="psw" placeholder="Enter Password"  required>
        <br>
        <label for="psw"><b>Repeat Password</b></label><br>
        <input type="password" id="rpsw" placeholder="Repeat Password"  required>
        <br>
        <label><b>Gender</b></label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>


        <p>By creating an account you agree to our <a href="#"
            >Terms & Privacy</a>.</p>
        <button class="mybutt" onclick="location.href='http://localhost:63342/WEB2021/cenima_project/main.php?_ijt=bcg8m0e3bmh78o4qcqjje7dlfj\n'" >
            Sign Up</button>
        <br>
     <!--   <div style="color: darkred">* Try another Name</div>-->


    </div>

</form>


</body>
</html>
