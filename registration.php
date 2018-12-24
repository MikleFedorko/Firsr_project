<html>



<?php include_once "header.php"?>
<?php include_once "menu.php"?>
<?php include_once "leftblock.php"?>

<div class = "content">
   <form action="query_registration.php" method="post">
       <label>Логин:</label><br>
       <input type="text" name="login"><br>
       <label>Пароль:</label><br>
       <input type="password" name="password"><br>
       <label>E-mail:</label><br>
       <input type="text" name="email"><br>
       <label>Имя:</label><br>
       <input type="text" name="name"><br>
       <label>Дата рождения:</label><br>
       <input type="date" name="birhday"><br>
       <input type="submit" name="submit">
</div>

<?php include_once "footer.php"?>



</html>