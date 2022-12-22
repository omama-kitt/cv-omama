<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Golden Cinema</title>
    <link rel="stylesheet" href="start.css">
    <?php
session_start();
    if(isset($_POST['uname']) && isset($_POST['psw'])){

        $N=$_POST['uname'];
        $P=$_POST['psw'];
        try {
            $conn = new mysqli("localhost", "root", "","cinema");
            $myq="INSERT INTO `login` (`name`, `password`) VALUES ( '$N', '$P')";
            $res1=$conn->query($myq);
            $conn->commit();



             $myq="Select * from signin";
            $res=$conn->query($myq);
            for($i=0;$i<$res->num_rows;$i++){
                $row=$res->fetch_array();
                if($row[1]==$N && $row[2]==$P){
                    $_SESSION['ismain']=1;
                    $conn->close();
                    header('location:main.php');

                }
            }


        }
        catch (Exception $exc){

        }

    }

    ?>

</head>
<body>

<div class="name">Golden Cinema</div>

<form  method="post" action="login.php" >


    <div class="container">
        <label for="uname"><b>Username</b></label><br>
        <input type="text" id="uname" name="uname" placeholder="Enter Username"  required>
        <br>
        <label for="psw"><b>Password</b></label><br>
        <input type="password" id="psw" name="psw" placeholder="Enter Password"  required>
        <br>
<button> Log In</button>

     <!--   <div><button href = "http://localhost/WEB2021/cenima_project/main.php" formaction="main.php" type="submit" name="Details" class="btn btn-default">Log In</button></div>
-->
        <br>

    </div>

    <div class="container">
       <span class="sign">Don't have <a href="http://localhost/WEB2021/cenima_project/signin.php">account?</a></span>
    </div>
</form>

</body>
</html>
