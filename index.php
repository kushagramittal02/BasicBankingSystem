<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@700&display=swap" rel="stylesheet">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #7A2B5BB;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="">
                <br><br><br><br><br><br><br>
                  <h3>Welcome to</h3>
                  <h1>BASIC BANK SYSTEM</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="images/banks2.png" style="width: 100%; height: 100%;"class="img-fluid pt-2" >
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="images/users1.jpeg" style="padding-top: 100px; "class="img-fluid">
                    <br><br>
                    <a href="create.php"><button style="background-color : #243A73;">Create a User</button></a>
                  </div>
                  <div class="col-md act" >
                    <img src="images/transfer.jpg" style="padding-top: 100px;" class="img-fluid">
                    <br><br>
                    <a href="transfer.php"><button style="background-color : #243A73;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/history.jpg" style="padding-top: 100px;" class="img-fluid">
                    <br><br>
                    <a href="history.php"><button style="background-color : #243A73; ">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2022. Made by <b>Kushagra Mittal  </b> <br>The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
