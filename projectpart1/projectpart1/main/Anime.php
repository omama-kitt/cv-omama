<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if(isset($_POST['uname'])){

        $N=$_POST['uname'];

        try {
            $conn = new mysqli("localhost", "root", "","cinema");
            $myq="Select * from signin";
            $res=$conn->query($myq);
            for($i=0;$i<$res->num_rows;$i++){
                $row=$res->fetch_array();
                if($row[1]==$N){
                    echo "0000";

                }
            }

        }
        catch (Exception $exc){

        }

    }

    ?>
    <meta charset="UTF-8">
    <title>Golden Cinema</title>
    <link  rel="stylesheet" href="style.css" >
    <link rel="icon" href="../ic.ico">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body >
<form action="">
<section>
    <div class="action">
        Anime Film
        <input type="search" placeholder="search for action movie"  class="input">
    </div>
    <div class="movie-row">
        <div class="movie-box">
            <div class="movie-img">
                <img src="../img/TheMitchellsvs.theMachines.jpg">
            </div>
            <div class="movie-info">
                <div class="movie-name" >
                    <i class='fa fa-film'></i></i>[name]
                </div>  <button type="button" class="watchnow" onclick="parent.location='The Mitchells vs. the Machines.html'" > <i class='fas fa-play'></i>[watch now]</button></div></div>
        <div class="movie-box">
            <div class="movie-img">
                <img src="../img/RayaandtheLastDragon.jpg">
            </div>
            <div class="movie-info">
                <div class="movie-name" >   <i class='fa fa-film'></i>[name]</div>
                <button type="button" class="watchnow" onclick=" parent.location='Raya and the Last Dragon.html'"  > <i class='fas fa-play'></i>[watch now]</button></div></div>
        <div class="movie-box">
            <div class="movie-img">
                <img src="../img/Genius%20Loci%20.jpg">
            </div>
            <div class="movie-info">
                <div class="movie-name" >
                    <i class='fa fa-film'></i></i>[name]
                </div>  <button type="button" class="watchnow" onclick=" parent.location='Genius Loci.html'" > <i class='fas fa-play'></i>[watch now]</button></div></div>
        <div class="movie-box">
            <div class="movie-img">
                <img src="../img/Nazha%20Reborn.jpg">
            </div>
            <div class="movie-info">
                <div class="movie-name" >   <i class='fa fa-film'></i>[name]</div>
                <button type="button" class="watchnow" onclick=" parent.location='Nazha Reborn.html'" > <i class='fas fa-play'></i>[watch now]</button></div></div>
        <div class="movie-box">
            <div class="movie-img">
                <img src="../img/Barbie%20Princess%20Adventure.jpg">
            </div>
            <div class="movie-info">
                <div class="movie-name" >
                    <i class='fa fa-film'></i></i>[name]
                </div>   <button type="button" class="watchnow"  onclick=" parent.location='Barbie Princess Adventure.html'"> <i class='fas fa-play'></i>[watch now]</button></div></div>


    </div></div>
    <div class="movie-row">
        <div class="movie-box">
            <div class="movie-img">
                <img src="../img/Carmen%20Sandiego%20To%20Steal%20or%20Not%20to%20Steal(.jpg">
            </div>
            <div class="movie-info">
                <div class="movie-name" >
                    <i class='fa fa-film'></i></i>[name]
                </div> <button type="button" class="watchnow" onclick=" parent.location='Carmen Sandiego To Steal or Not to Steal.html '" > <i class='fas fa-play'></i>[watch now]</button></div></div>




    </div>


</section>
</form>
</body>
</html>