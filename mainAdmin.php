<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Golden Cinema</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {

            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>

</head>
<body style="background-color: wheat;">

<section class="navbarr" style="">
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
                            <a href="http://localhost/WEB2021/cenima_project/Admin.php" > My Chart</a>
                            <a href="http://localhost/WEB2021/cenima_project/Adminlog.php">Sign Out</a>
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
<!--
<div class="slideshow-container">
    <div style="color: #e8a405;font-family: Barelang;font-size: xx-large;font-style: initial;position: fixed;top: 20%; left: 45%;margin: 0px;">Top Films:</div>


    <div >
        <button class="butslide">Change</button>
        <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/spiderman.html"><img src="img_8.png" class="mySlides"></a>
    </div>

    <div>
        <button class="butslide">Change</button>
        <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/sentinelle.html">  <img src="img_9.png" class="mySlides"></a>
    </div>
    <div>
        <button class="butslide">Change</button>
        <a href=""> <img src="img_7.png" class="mySlides" ></a>
    </div>
    <div >
        <button class="butslide">Change</button>
        <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Roohi.html"><img src="img_10.png" class="mySlides"> </a>
    </div>
    <div>

        <a href="http://localhost/WEB2021/cenima_project/projectpart1/projectpart1/main/Barbie%20Princess%20Adventure.html"><button class="butslide">Change</button><img src="img_11.png"class="mySlides"> </a>
    </div>

</div>
<br>

<div style="text-align:center; position: fixed;top: 80%">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script>
function currentSlide(n) {
  showSlides(slideIndex = n);
}

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
-->



<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">Caption Text</div>
        <img src="img_7.png" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img_13.png" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img_8.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>