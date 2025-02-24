<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1><?= htmlspecialchars($fruit["name"])?></h1>

<button  class="button"><a href="edit?id=<?=$fruit["id"] ?>">Rediģēt </a><button>
 
 <form method="POST" action="/delete" >
 <input name="id" value="<?= $fruit["id"]  ?>" type="hidden" />
    <button class="button">dzēst</button>
</form> 

<?php require "views/component/footer.php";?>