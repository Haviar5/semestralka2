<?php /** @var Array $data */

use App\Models\Article;

?>


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



    <title>Contact</title>
</head>
<body>



<div class="topnav">
    <img src="http://localhost/semestralka/pictures/navIMG.jpg" width="50" height="50" class = " navImg" alt="?">
    <a href="?c=home&a=index">Home</a>
    <a href="?c=home&a=aboutUs">About us</a>
    <a class="active" href="?c=home&a=contactUs">Contact us</a>
    <a href="?c=home&a=personnel">Personnel</a>
</div>

<!-- pozicane -->
<?php
if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['meno']) && isset($_POST['email'])) {
    if ($_POST['title'] == '') { ?>
        <div class="alert alert-warning" role="alert">
            Prosím zadajte title.
        </div>
    <?php } else if ($_POST['text'] == '') { ?>
        <div class="alert alert-warning" role="alert">
            Prosím zadajte text.
        </div>
    <?php } else if ($_POST['meno'] == '') { ?>
        <div class="alert alert-warning" role="alert">
            Prosím zadajte meno.
        </div>
    <?php } else if ($_POST['email'] == '') { ?>
        <div class="alert alert-warning" role="alert">
            Prosím zadajte email.
        </div>
    <?php } else {
        $article = new Article($_POST['title'], $_POST['text'], $_POST['meno'], $_POST['email']);
        $article->save();
        header("Location: ?c=blog");
    }
}
?>
<!-- Button trigger modal
<button type="button" class="btn btn-primary recenzia" data-toggle="modal" data-target="#exampleModal" >
    Pridaj recenziu
</button>
-->



<!-- test add -->


<button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning recenzia">Pridaj recenziu</button>


<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Pridaj recenziu</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form">
                    <div class="form-group">
                        <label>Titulok</label>
                        <input name="title" required id="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <textarea name="text" required id="text" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Meno</label>
                        <!--<textarea name="meno" id="meno" class="form-control"></textarea> -->
                        <input name="meno" required id="meno" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <!--<textarea name="meno" id="meno" class="form-control"></textarea> -->
                        <input name="email" required id="email" type="email" class="form-control">

                    </div>
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>








<?php /** @var Array $data */ ?>




            <?php
            /** @var \App\Models\Article $article */

            //$data=\App\Models\Article::getAll();
            foreach ($data['articles'] as $article) {
                ?>
        <div class="blog">


                        <h5 class="card-title"><?= $article->getTitle() ?></h5>
                        <p class="card-text"><?= $article->getText() ?></p>
                        <p class="card-name">Napisal: <?= $article->getName() ?>, <?= $article->getMail()?> </p>

                        <a href="?c=blog&a=edit&id=<?= $article->getId() ?>" class="btn btn-primary btn-sm" >edit</a>
                        <a href="?c=blog&a=delete&id=<?= $article->getId() ?>" class="btn btn-danger btn-sm" >delete</a>


        </div>
                <?php
            }
            ?>

<!--...

<div class = paper>

    <form>
        <div class="form-group">
            <b><label for="exampleInputEmail1">Email address</label></b>
            <input type="email" class="form-control" id="exampleInputEmail1" >

        </div>
        <div class="form-group">
            <b><label for="exampleInputPassword1">Your name</label></b>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group formMessage">
            <b><label for="exampleInputPassword1">Message</label></b>
            <input type="text" class="form-control" >
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <b> <label class="form-check-label" for="exampleCheck1">Im not a robot</label></b>
        </div>
        <button type="submit" class="btn btn-primary" onclick=" myFunction()">Send!</button>

    </form>



</div>

-->

<script>



    function myFunction() {

        alert("Sending succesful!");

    }

</script>

</body>
</html>
