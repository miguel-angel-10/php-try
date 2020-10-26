<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>PHP Practice</title>
</head>
<body>
<br>

<?php include "header.html" ?>
  <hr><br>

<div class="form-container">
<!-- Form -->
  <form action="index.php" method="post" >
    <label for="name">Name</label>
    <input class="input-box" type="text" name="user-name" placeholder="ex: Matin">

    <label for="last-name">Last Name</label>
    <input class="input-box" type="text" name="user-lastname" placeholder="ex: Pierre">

    <label for="email">Email</label>
    <input class="input-box" type="email" name="user-email" placeholder="ex: name@mail.com">

    <label for="password">Password</label>
    <input class="input-box" type="password" name="password" placeholder="ex: CX54-Fsd-ouiL">


    <input type="submit" value="Register">
 </form>
</div>

<?php
  # garde les valeurs de input
  $user_name = $_POST['user-name'];
  $user_lastname = $_POST['user-lastname'];
?>
  <h3>
    
    <?php  
      # print le prenom et nom
      echo "First Name:  $user_name\n  Last Name: $user_lastname";
    ?>
  </h3>

<?php include "footer.html"?>

</body>
</html>