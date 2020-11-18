<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/semestralka/public/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>



    <title>Personnel</title>
</head>
<body>
<div class="topnav">
    <img src="http://localhost/semestralka/pictures/navIMG.jpg" width="50" height="50" class = " navImg" alt="?">
    <a href="?c=home&a=index">Home</a>
    <a href="?c=home&a=aboutUs">About us</a>
    <a href="?c=blog">Contact us</a>
    <a class="active" href="?c=home&a=personnel">Personnel</a>
</div>

<div id="avatar1" class="card">

    <div class="container">
        <img src="http://localhost/semestralka/pictures/avatar1.png" alt="Avatar" style="width:100%">
        <div class="overlay">
            <div class="text">Hi, im owner!</div>
        </div>
        <h4><b>John Owner</b></h4>
        <p>Owner</p>
        <button type="button" class="btn btn-secondary contactButton" data-container="body" data-toggle="popover" data-placement="bottom" data-content="owner@mail.com">
            Contact
        </button>
    </div>
</div>

<div id="avatar2" class="card">

    <div class="container">
        <img src="http://localhost/semestralka/pictures/avatar2.png" alt="Avatar" style="width:100%">
        <div class="overlay">
            <div class="text">Hi, im waitress!</div>
        </div>
        <h4><b>Andrea Waitress</b></h4>
        <p>Waitress</p>
        <button type="button" class="btn btn-secondary contactButton" data-container="body" data-toggle="popover" data-placement="bottom" data-content="waitress@mail.com">
            Contact
        </button>
    </div>
</div>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

</script>
</body>
</html>
