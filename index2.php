<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" />

    <title>Weather forecast today</title>
  </head>

  <body>

    <div class="container-fluid bg-dark text-light">\
      <br><h1>Weather Forecast of 5 Days</h1><br>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="w.png" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
      <div class="container-fluid p-5 m-5" id="cityname">
        <form action="index2.php" method="post">
        <div class="input-group mt-3 mb-3">
          <input type="text" class="form-control" id="x" name="x" placeholder="Enter your City name">
      <input type="submit" class="btn btn-info" value="Submit">
    </div>

      </form>
    </div>
    <?php 
      $cityname = $_POST['x'];
 
      $url = "https://api.openweathermap.org/data/2.5/forecast?q=$cityname&units=metric&units=metric&appid=f59d4b723fb87b8bb37214373fb255ad";

      $contents = file_get_contents($url);
      $func = json_decode($contents);
      $today = date("F j, Y, g:i a");
      ?>
      <h2><?php echo $func->city->name . " - " .$today . "<br><br>"; ?></h2>
      <div class="a">
        <p><?php echo $func->list[0]->main->temp . "&deg;C<br>" ?></p>
      </div><br>
      <hr><div class="row">
        <div class="col-3">
          <?php echo $func->list[8]->main->temp . "&deg;C<br>";
          echo $func->list[8]->dt_txt . "<br>" ?>
        </div>
        <div class="col-3">
          <?php echo $func->list[16]->main->temp . "&deg;C<br>";
          echo $func->list[16]->dt_txt . "<br>" ?>
        </div>
        <div class="col-3">
          <?php echo $func->list[24]->main->temp . "&deg;C<br>";
          echo $func->list[24]->dt_txt . "<br>" ?>
        </div>
        <div class="col-3">
          <?php echo $func->list[32]->main->temp . "&deg;C<br>";
          echo $func->list[32]->dt_txt . "<br>" ?>
        </div>
      </div><hr><br>
      <?php
      echo "Pressure : " .$func->list[0]->main->pressure . " Pa<br>";
      echo "Humidity : " .$func->list[0]->main->humidity . "%<br>";
      echo "Maximum temperature : " .$func->list[0]->main->temp_max . "&deg;<br>";
      echo "Minimum temperature : " .$func->list[0]->main->temp_min . "&deg;<br>";

    ?>
    </div>

  </body>
</html>