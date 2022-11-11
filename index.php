<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Weather forecast</title>
  </head>

  <body>
    <div class="container-fluid">
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
      <div class="container-fluid p-5 m-5" id="city">
      	<form action="index2.php" method="post">
      	<div class="input-group mt-3 mb-3">
      	  <input type="text" class="form-control" id="x" name="x" placeholder="Enter your City name">
		  <input type="submit" class="btn btn-info" value="Submit">
		</div>
	    </form>
	  </div>
	  
   
    </div>
    
  </body>

</html>