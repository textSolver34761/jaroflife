<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parcourir les todos</title>
  </head>
  <body>
    <h1>todo-list</h1>
    <ul>
    <?php
      foreach ($todos as $ligne) {
    ?>
      <li>
        <a href="lecture.php?id=<?php echo $ligne['id']; ?>">
          <?php echo $ligne['title']; ?>
          <p><?php echo $ligne['description'] ?></p>
          <p><?php echo $ligne['priority'] ?></p>
          <p><?php echo $ligne['calendar'] ?></p>
        </a>
      </li>
    <?php
      }
    ?>
    </ul>
  </body>
</html>