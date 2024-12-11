<?php
      include_once("config.php");

      $id= $_GETP['id'];

      $sql ="SELECT * FROM users WHERE id=:id";

      $prep = $conn->prepare($sql);

      $prep->bindParam(':id', $id);

      $prep->execute();

      $data = $prep->fetch();

      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>
      <body>
        <form action="update.php" method=POST>
        <input type="hidden" name="id" value="<?php echo $  $data['id']?>"><br>
        <input type="hidden" name="name" value="<?php echo $  $data['name']?>"><br>
        <input type="hidden" name="username" value="<?php echo $  $data['username']?>"><br>
        <input type="hidden" name="email" value="<?php echo $  $data['email']?>"><br>
        <button type="submit" name="update">Update</button>
</form>
      </body>
      </html>