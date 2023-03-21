<ul>
  <?php
    // echo "<h1>".$user->id."</h1>";
    // echo "<h3>".$user->nama."</h3>";
    foreach ($users as $usr) {
      echo "<li>" . $usr->id. " ". $usr->nama ."</li>";
    }
  ?>
</ul>