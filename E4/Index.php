<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\E4\css\index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="index.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <script src="../js/animMenu.js"></script>


                  <!-- NAVBAR !-->
                 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top "
                 style="padding: 0; margin: 0;">
                <div class="container-fluid">
              <a class="navbar-brand" href="#EasyLoc"  style="color: white; font-size: 1.5em;"><h1 id="EasyLoc">EasyLoc</h1></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 27%">


                  <li class="nav-item ">
                    <a class="nav-link"  class="nav-link js-scroll-trigger" href="#Appartement" style="color: white">Appartement </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" class="nav-link js-scroll-trigger" href="#Maison" style="color: white">Maison</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" class="nav-link js-scroll-trigger" href="#Bateau" style="color: white">Bateau</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" class="nav-link js-scroll-trigger" href="#Camping" style="color: white">Camping</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" class="nav-link js-scroll-trigger" href="#Studio" style="color: white">Studio</a>
                  </li>                  
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <li class="nav-item" id="Reservation">                                 
              <a class="nav-link" href="PHP/Reservation.php" style="color: white">Reservation</a>
            </li>
            <li class="nav-item" id="MonCompteButtonNavBarre">                                 
              <a class="nav-link" href="PHP/login.php" style="color: white">Mon Compte</a>
            </li>
                </form>
              </div>
            </nav>
</head>
<?php ?>

<body>          

  <div class="d-flex justify-content-center">


            <!-- SLIDE!-->
            <<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-left: -11px;">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../E4/img/slide1.jpg" class="d-block w-100" style="height: 338px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../E4/img/slide2.jpg" class="d-block w-100" style="height: 338px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../E4/img/slide3.jpg" class="d-block w-100" style="height: 338px;" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

                </div>

                <br><br><h2 id="Appartement"><a>Appartement</a></h2> <br>

                <!-- CARD Appartement!-->
                <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 100%;">
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                </div><br><br>
                 <h2 id="Maison"><a>Maison</a></h2> <br>    
                <!-- CARD Maison!-->
                <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 100%">
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br><h2 id="Bateau"><a>Bateau</a></h2> <br>
                 <!-- CARD Bateau!-->
                <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 100%">
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br><h2 id="Camping"><a>Camping</a></h2> <br>
                 <!-- CARD Camping!-->
                <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 100%">
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br><h2 id="Studio"><a>Studio</a></h2> <br>
                <!-- CARD Studio!-->
                <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 100%">
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3 h-100">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>
                </div><br><br>


                <!--FOOTER !-->
                                         <footer>
                                <div class="container">
                                   <div class="row">
                                   
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <ul class="adress">
                                                     <span>Adress</span>    
                                                     <li>
                                                        <p>3 Allées des roses</p>
                                                      </li>
                                                      <li>
                                                        <p>93130, Noisy Le Sec</p>
                                                      </li>
                                                      <li>
                                                        <p>07.66.72.30.49</p>
                                                      </li>
                                                           
                                                      <li>
                                                        <p>rmessi@condorcet93.fr</p>
                                                      </li>
                                                      <li>
                                                      <p>CFA UTEC Marne la vallée</p>
                                                     </li>
                                                 </ul>
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <ul class="contact">
                                                    <span>Navigation</span>
                                                    <li>
                                                        <a id="EasyLoc" href="Accueil">Accueil</a> <br>
                                                      </li>    
                                                     <li>
                                                        <a id="Maison" href="Maison">Maison</a> <br>
                                                      </li>
                                                      <li>
                                                        <a id="Bateau" href="Bateau">Bateau</a> <br>
                                                      </li>
                                                      <li>
                                                        <a id="Camping" href="Camping">Camping</a> <br>
                                                      </li>
                                                           
                                                      <li>
                                                        <a id="Studio" href="Studio">Studio</a> <br>
                                                      </li>

                                                 </ul>
                                            </div>

                                            

                                       
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"">
                                               <ul class="social"  >
                                                          <span>Social</span>    
                                                           <li>
                                                                <a href="https://www.facebook.com/redanls93"><i class="fa fa-facebook fa-2x"></i></a>
                                                           </li>
                                                            
                                                           <li>
                                                                <a href="https://www.linkedin.com/in/reda-messi-061379148/"><i class="fa fa-linkedin fa-2x"></i></a>
                                                           </li>
                                                           
                                                           <li>
                                                                <a href="https://twitter.com/9_djz3"><i class="fa fa-twitter fa-2x"></i></a>
                                                           </li>
                                                            
                                                           <li>
                                                                <a href="https://www.instagram.com/nrvv9.3/"><i class="fa fa-instagram fa-2x"></i></a>
                                                          </li>
                                                          
                                                 </ul>
                                           </div>
                                       
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                 <div class="search-text"> 
                                                    <div class="container">
                                                        <div class="row text-center">
                                                         
                                                           <div class="form">
                                                                <span class="header-form">SIGN UP</span>    
                                                                <form id="search-form" class="form-search form-horizontal">
                                                                    <input type="text" class="input-search" placeholder="Email Address">
                                                                    <input type="text" class="input-search" placeholder="Password"style="margin-top: 5%;">
                                                                    <button type="submit" class="btn-search"><span style="font-size:13px;">SUBMIT</span></button>
                                                                </form>
                                                            </div>
                                                        
                                                        </div>         
                                                    </div>     
                                                </div>
                                            </div>
                                   </div> 
                                </div>
            </footer>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <!-- Jquery needed -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="js/scripts.js"></script>
    <!-- Function used to shrink nav bar removing paddings and adding black background -->
</body>
</html>