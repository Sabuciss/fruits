<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>
<div class="container">

    <h1>Redige ieraksu</h1>

  <form method="POST">

        <label>
        <input type="hidden" name="id" value="<?= $post["id"] ?>" />
        </label>
        <label>
        <input type="text" name="content" value="<?= $post["content"] ?? '' ?>" id="ieraksts" >
        <button type="submit">Saglabāt</button> 
        </label>

  </form>

</div>
<?php require "views/component/footer.php"; ?>