<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1><?= htmlspecialchars($post["content"])?></h1>

<button  class="button"><a href="edit?id=<?=$post["id"] ?>">Rediģēt </a><button>
 
 <form method="POST" action="/delete" >
 <input name="id" value="<?= $post["id"]  ?>" type="hidden" />
    <button class="button">dzest</button>
</form> 

<?php require "views/component/footer.php";?>