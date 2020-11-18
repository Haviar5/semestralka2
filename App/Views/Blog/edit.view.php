<?php
/** @var Array $data */
/** @var \App\Models\Article $article */
$article = $data['article'];
?>

<div class=" paper">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label>Titulok</label>
                    <input name="title" required type="text" class="form-control" value="<?=$article->getTitle()?>">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea name="text" required class="form-control"><?=$article->getText()?></textarea>
                </div>
                <div class="form-group">
                    <label>Meno</label>
                    <textarea name="meno" required class="form-control"><?=$article->getName()?></textarea>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email"  required type="email" class="form-control" value="<?=$article->getMail()?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>

        </div>
    </div>
</div>