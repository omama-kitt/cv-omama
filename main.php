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
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body style="background-color: black">

<section class="navbarr">
    <nav class="navbar navbar-expand-lg navbar-light ">

        <div class="name" style="font-family: Cheerful">Golden Cinema</div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" style="margin-right: 30px;" href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Action%20film.html">Action</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" style="margin-right: 30px;" href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Horror.html">Horror</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " style="margin-right: 30px;"  href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Anime.html">Anime</a>
                </li>
                <li class="dropdown">
                    <div >

                        <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img class="dropimg" src="img_6.png" alt="" style="height: 30px;width: 30px;">
                        </a>
                        <div class="dropdown-content">
                            <a href="http://localhost/WEB2021/cenima_project/card.php" > My Card</a>
                            <a href="http://localhost/WEB2021/cenima_project/login.php">Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

    </nav>

</section>
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>

<div class="slideshow-container">
    <div style="color: #e8a405;font-family: Barelang;font-size: xx-large;font-style: initial;position: fixed;top: 20%; left: 45%;margin: 0px;">Top Films:</div>


    <div >
         <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/spiderman.html"><img src="img_8.png" class="mySlides"></a>
    </div>

    <div>
       <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/sentinelle.html">  <img src="img_9.png" class="mySlides"></a>
    </div>
    <div>

        <a href=""> <img src="img_7.png" class="mySlides" ></a>
    </div>
    <div >
<a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Roohi.html"><img src="img_10.png" class="mySlides"> </a>
    </div>
    <div>
        <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Barbie%20Princess%20Adventure.html"><img src="img_11.png"class="mySlides"> </a>
    </div>

</div>
<br>

<div >
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>