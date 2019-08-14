<?php
//condb
$con= mysqli_connect("localhost","root","devbanban.com","db_slider") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
//query
$query = "SELECT * FROM tb_slider ORDER BY sid DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
//devbanban.com
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>free html template bootstrap 4  by devbanban.com</title>
  </head>
  <body>
    
    <!--content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <!-- nav -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">devbanban.com</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                
                <li class="nav-item active">
                  <a class="nav-link" href="http://youtube.com/c/devbanban"> ตะกร้าสินค้า <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://devbanban.com/?cat=99">รับสอนเว็บไซต์</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://devbanban.com/?cat=99">รับเขียนเว็บไซต์</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
        <div class="col-md-12 col-xs-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php
              $i=0;
              foreach($result as $row){
              $actives='';
              if($i==0){
              $actives='active';
              }
              ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="<?php echo $actives;?> ">
                
              </li>
              <?php $i++;} ?>
            </ol>
            <div class="carousel-inner">
              <?php
              $i=0;
              foreach($result as $row){
              $actives='';
              if($i==0){
              $actives='active';
              }
              ?>
              <div class="carousel-item <?php echo $actives;?>">
                <a href="https://www.youtube.com/c/devbanban" target="_blank">
                  <img class="d-block w-100" src="<?php echo $row['slider'];?>" alt="devbanban">
                </a>
              </div>
              <?php 
              $i++;}
              mysqli_close($con);
              //devbanban.com
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
        </div>
      </div>
    </div>
    <center>
    <footer class="footer" style="margin-top: 50px">
      <div class="container">
        <span class="text-muted">free html template bootstrap 4  by devbanban.com </span>
      </div>
    </footer>
    </center>
    <!-- Optional JavaScript devbanban.com-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>