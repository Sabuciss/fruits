<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>
<div class="container">

    <h1>Rediģe augli</h1>

  <form method="POST">

        <label>
        <input type="hidden" name="id" value="<?= $fruit["id"] ?>" />
        </label>
        <label>
        <input type="text" name="name" value="<?= htmlspecialchars($fruit["name"] ?? '') ?>" id="ieraksts">
        <button type="submit">Saglabā augli</button> 
        </label>

  </form>

</div>
<?php require "views/component/footer.php"; ?>