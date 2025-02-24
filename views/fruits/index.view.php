
<?php require "views/component/header.php";?> <!-- p h p ir jabut lai stradatu-->
<?php require "views/component/navbar.php";?>
 <h1>Augļi</h1>

<div class="container">
   <form >
      <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'  />
      <button class="button">Meklē augli</button>
   </form>

   <?php if (count($fruits) == 0 ){ ?>
      <p>Not found. its dead 😎</p>
   <?php } ?>

   <ul>
   <?php foreach($fruits as $fruit) { ?>
            <li><a href="show?id=<?= $fruit["id"] ?>">
                <?= htmlspecialchars($fruit["name"] ?? '') ?>
            </a></li>
        <?php } ?>
   </ul>
</div>
  <?php require "views/component/footer.php";?>