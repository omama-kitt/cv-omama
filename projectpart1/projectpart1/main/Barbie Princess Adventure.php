<!DOCTYPE html>

<html lang="en">
<head>
    <?php

    if(isset($_POST['uname']) ){
        $name="Barbie Princess Adventure";
        $N=$_POST['uname'];
        $i=3;
        $des="nothing to talk";
        try {
            $conn = new mysqli("localhost", "root", "","cinema");
            $myq="INSERT INTO `films` (`fname`, `id kind`, `about`) VALUES ('$name', '$i', '$des');";
            $res1=$conn->query($myq);
            $conn->commit();



        }
        catch (Exception $exc){

        }

    }

    ?>

    <meta charset="UTF-8">
    <title>Barbie Princess Adventure</title>
    <link  rel="stylesheet" href="style1.css" >
</head>
<body >
<form action="Barbie%20Princess%20Adventure.php" method="post" >
<?php $name="Barbie Princess Adventure"?>

    <div class="film">
        <h1>Barbie Princess Adventure</h1></div>
    <div class="trailer">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Pdc_eWteiPc" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay;
    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <img src="../img/Barbie%20Princess%20Adventure.jpg">
    </div>
    <div class="discription">
        <div class="disp"> الوصف</div>
        <div class="disc"> <p class="pchange">
                With new friends in a new kingdom, Barbie learns what it means to be herself when she trades
                places with a royal lookalike in this musical adventure.
            </p>
<button>change text</button>
            <input type="text" id="uname" name="uname" style="display: none" >
          <!--  <div><textarea id="change" name="change" rows="4" cols="50"> </textarea></div>-->
        </div>

    </div>
    <div class="Reservation">
        <button type="button" onclick="parent.location='index.html'">  Ticket booking </button>
    </div>
</form>
</body>
</html>