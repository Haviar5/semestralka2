<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "dtb456", "blog");
if(!empty($_POST)) {
    $output = '';
    $name = mysqli_real_escape_string($connect, $_POST["meno"]);
    $text = mysqli_real_escape_string($connect, $_POST["text"]);
    $title = mysqli_real_escape_string($connect, $_POST["title"]);

    $query = "
    INSERT INTO articles(meno, text, title )  
     VALUES('$name','$text', '$title')
    ";
}
?>