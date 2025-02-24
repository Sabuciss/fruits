
<?php require "views/component/header.php";?> <!-- p h p ir jabut lai stradatu-->
<?php require "views/component/navbar.php";?>
 <h1>Augļi</h1>

<div class="container">
   <form >
      <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'  />
      <button class="button">Meklē augli</button>
   </form>

   <?php if (count($posts) == 0 ){ ?>
      <p>Not found. its dead 😎</p>
   <?php } ?>

   <ul>
      <?php foreach($posts as $post){ ?>
      <li><a href="show?id=<?= $post["id"]?>"> <?= htmlspecialchars($post["content"])?></a></li> <!-- php echo-->
      <?php   } ?>
   </ul>
</div>
  <?php require "views/component/footer.php";?>