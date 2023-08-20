<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD PARVEZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
      <?php
      include('config.php');
      $sql = "SELECT * FROM users";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {

      ?>
    <div id="box" class="box">
      <i class="fas fa-quote-left quote"></i>
      <p><?php echo $row["message"] ?></p>
      <div class="content">
        <div class="info">
          <div class="name"><?php echo $row["name"] ?></div>
          <div class="job"><?php echo $row["designation"] ?></div>
          <div class="stars">
              <?php
              $star = $row["star"];
              for ($j=1; $j<=5; $j++){
                  if ($j<=$star){
                      ?>
                      <i class="fas fa-star"></i>

                      <?php
                  }else{
                      ?>
                      <i class="far fa-star"></i>
              <?php
                  }
              }

              ?>

          </div>
        </div>
        <div class="image">
          <img src="<?php echo $row["image"] ?>" alt="">
        </div>
      </div>
    </div>
    <?php }
      } else {
          echo "0 results";
      }
      $conn->close(); ?>
  </div>

  <script src="https://kit.fontawesome.com/4c9c20488b.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>
