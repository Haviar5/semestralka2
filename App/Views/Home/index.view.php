<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semestralka</title>
    <link rel="stylesheet" href="http://localhost/semestralka/public/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .mySlides {display:none;
            height: 200px;
            width: 600px;

        }
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
    </style>




</head>
<body>


<div class="topnav">

    <img src="http://localhost/semestralka/pictures/navIMG.jpg" width="50" height="50" class = " navImg" alt ="?">

    <a class="active" href="?c=home&a=index">Home</a>
    <a href="?c=home&a=aboutUs">About us</a>
    <a  href="?c=blog">Contact us</a>
    <a href="?c=home&a=personnel">Personnel</a>
</div >


<div class="w3-content w3-display-container slides" >
    <img class="mySlides" src="http://localhost/semestralka/pictures/slideshow1.jpg" style="width:100%" alt ="?">
    <img class="mySlides" src="http://localhost/semestralka/pictures/slideshow2.jpg" style="width:100%" alt ="?">
    <img class="mySlides" src="http://localhost/semestralka/pictures/slideshow3.jpg" style="width:100%" alt ="?">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
</div>

<div class= "paper paper2">

    <h1>NEWS</h1>

</div>



<div class = "newsTopic">

    <img src="http://localhost/semestralka/pictures/slideshow1.jpg" class="newsImg" alt="?" >
    <h1> News 1 </h1>
    <b>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
    </b>

</div>

<div class = "newsTopic newsTopic2">

    <img src="http://localhost/semestralka/pictures/slideshow3.jpg" class="newsImg" alt="?" >
    <h1> News 2 </h1>
    <b>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
    </b>
</div>


<div class = "newsTopic">

    <img src="http://localhost/semestralka/pictures/slideshow1.jpg" class="newsImg" alt="?" >
    <h1> News 3 </h1>
    <b>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
    </b>

</div>

<div class = "newsTopic newsTopic2">

    <img src="http://localhost/semestralka/pictures/slideshow2.jpg" class="newsImg" alt="?" >
    <h1> News 4 </h1>
    <b>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
    </b>
</div>












<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";
    }
</script>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 2 seconds
        plusDivs(1)
    }
</script>



</body>
</html>
