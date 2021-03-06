<?php
    require("./cnx/config.php");
    $submitted_username = '';
    if(!empty($_POST)){
        $query = "
            SELECT
                sgo_login,
                sgo_pwd
            FROM authentified
            WHERE
                sgo_login = :username
        ";
        $query_params = array(
            ':username' => $_POST['username']
        );

        try{
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
        $login_ok = false;
        $row = $stmt->fetch();
        if($row){
	    echo ("coucou");
            $check_password = $_POST['password'];
            $md5_password = hash('md5', $_POST['password']);
            if($md5_password === $row['sgo_pwd']){
                $login_ok = true;
            }
        }

        if($login_ok){
            unset($row['sgo_pwd']);
            $_SESSION['user'] = $row;
            header("Location: ./private.php");
            die("Redirecting to: ./private.php");
        }
        else{
            print("Login Failed.");
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Section Golf Ouest CMCAS 92</title>

    <!-- Bootstrap core CSS -->
    <link href="./docs/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./docs/assets/js/ie-emulation-modes-warning.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="./carousel.css" rel="stylesheet">

   
    <script src="./docs/assets/js/vendor/jquery.min.js"></script>
    <script src="./docs/assets/js/vendor/holder.min.js"></script>
    
<!-- ICI LES LIENS JS BOUGÉS -->



<!--    
    <script type="text/javascript" src="jquery.sticky.js"></script>
    <script>
       $(window).load(function(){
          $("#sticker").sticky({ topSpacing: 50 });
       });
   </script>
-->




  </head>
<!-- NAVBAR
================================================== 
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">SectionGolfOuest</a> -->
              <!-- <img src="./pastille.png" alt="" /> -->
            <!-- </div>
            <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nous rejoindre <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
 -->


<body>
<a id="top"></a>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Section Golf Ouest</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Espace Adhérent</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
              <li>
                 <div class="row">
                    <div class="col-md-12">
                       <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8" id="login-nav">
                          <div class="form-group">
                             <label class="sr-only" for="username">LoginBox</label>
                             <input type="text" class="form-control" name="username" placeholder="Identifiant" value="<?php echo $submitted_username; ?>" required>
                          </div>
                          <div class="form-group">
                             <label class="sr-only" for="password">MotDePasse</label>
                             <input type="password" class="form-control" name="password" placeholder="Mot de passe" value ="" required>
                                                   <div class="help-block text-right"><a href="./cnx/forget.php">Mot de Passe oublié ?</a></div>
                          </div>
                          <div class="form-group">
                             <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                          </div>
                          <div class="checkbox">
                             <label>
                             <input type="checkbox"> Rester connecté
                             </label>
                          </div>
                       </form>
                    </div>
                 </div>
              </li>
            </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Back to top button -->

<script type="text/javascript">
// create the back to top button
    $('body').prepend('<a href="#top" class="back-to-top">Back to Top</a>');

    var amountScrolled = 300;

    $(window).scroll(function() {
      if ( $(window).scrollTop() > amountScrolled ) {
        $('a.back-to-top').fadeIn('slow');
      } else {
        $('a.back-to-top').fadeOut('slow');
      }
    });

    $('a.back-to-top, a.simple-back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 700);
      return false;
    });

</script>



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="./backgroundBat.jpg" alt="slide">
          <div class="container">
            <div class="carousel-caption">
              <img class="img-circle" src="./logoBat2.png" alt="Generic placeholder image" width="300" height="300"/>
              <h1>Bienvenue sur le site de la Section Golf Ouest !</h1>
              <p>Une des section sportives du Club 92 CMCAS</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="./cover.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pour des passionnés, par des passionnés</h1>
              <p>Golfeur expérimenté, débutant, acharné de compétition ou amateur de belles promenades, chacun trouvera son bonheur dans la pratique d’un sport en respect des règles et des valeurs du golf au sein d’un club</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="./2cover.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Des progrès facilités pour les débutants</h1>
              <p>Un accès facilité à des cours et à des zones d’entraînement pour progresser et accéder à des parcours</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
         <div class="item">
          <img class="forth-slide" src="/3cover.jpg" alt="Forth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Des compétitions ou des parties libres</h1>
              <p>Améliorer son niveau de jeu en préférant les compétitions ou les parties amicales </br></br>« <i>Le golf est un jeu dont l'objectif est de frapper une très petite balle dans un trou encore plus petit avec des armes singulièrement mal conçues pour le faire</i> » (Winston Churchill)</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a href="#Video" title="Vous ne voulez surtout pas manquer cette vidéo !"><img class="img-circle" src="./youtube.png" alt="watch the video" width="140" height="140"></a>
          <h2>Section Golf Ouest : <br/> Un club où il fait bon golfer !</h2>
          <!-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p> -->
          <!-- <p><a class="btn btn-default" href="#Video" role="button">Voir la video &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="#Prez" title="Découvrez qui nous sommes dans cette description !"><img class="img-circle" src="./who.png" alt="who are we" width="140" height="140"></a>
          <h2>Présentation de la Section Golf Ouest</h2>
          <p>L’une des sections sportives du Club omnisport de la CMCAS des Hauts de Seine “Club 92 CMCAS” ...</p>
          <!-- <p><a class="btn btn-default" href="#Prez" role="button">En savoir plus &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="#NousRejoindre" title="Envie de nous rejoindre ?"><img class="img-circle" src="./sign.png" alt="sign in" width="140" height="140"></a>
          <h2>Vous êtes tentés ?</h2>
          <p> </p>
          <!-- <p><a class="btn btn-default" href="#NousRejoindre" role="button">Nous rejoindre &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


<hr class="featurette-divider">
<a id="Video"></a>

<br/><br/><br/>
<div class="embed-responsive embed-responsive-16by9" >
  <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/MOMsRszpo1I?rel=0"></iframe>
</div>
<br/>
<!-- <p class="pull-right"><a href="#top">Back to top</a></p> -->
<br/><br/><br/><br/>


<!--

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-md-">
             <iframe width="450" height="253" src="https://www.youtube.com/embed/MOMsRszpo1I" frameborder="50" allowfullscreen></iframe>
        </div>
      </div>

      -->


      <!-- START THE FEATURETTES -->



     <!-- <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Section Golf Ouest : <br/> <span class="text-muted">Un club où il fait bon golfer !</span></h2>
        </div>
        <div class="col-md-5"> 
          <iframe width="450" height="253" src="https://www.youtube.com/embed/MOMsRszpo1I" frameborder="50" allowfullscreen></iframe>
        <br/><br/><br/>
        <p class="pull-right"><a href="#">Back to top</a></p>
        </div>
      </div>

-->


      <hr class="featurette-divider">
      <a id="Prez"></a>
      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading">Présentation du club. <br/> <span class="text-muted">Section Golf Ouest</span></h2>
          <p class="lead" text-align="justify" text-justify="inter-word">La section golf est l’une des sections sportives du Club omnisport de la CMCAS des Hauts de Seine “Club 92 CMCAS” (<a href="http://www.club92cmcas.fr">http://www.club92cmcas.fr</a>). <br/> <br/> Créée en 1992, la section golf compte aujourd’hui près de 150 membres. Sa vocation est de réunir des joueurs débutants ou confirmés, compétiteurs ou non, pour partager la passion et le plaisir du jeu de golf. <br/> <br/> Au cours de l’année, la section golf organise des sorties à la journée (souvent le vendredi) sur un parcours de l’Ile de France, un week-end annuel, une semaine golfique (Bretagne, Alsace, Pays Basque…) ou encore des compétitions, permettant à chacun de participer. Elle favorise également l’apprentissage du golf par des formules donnant accès à des écoles de golf.</p>
          <br/><br/>
        <!--  <p class="pull-right"><a href="#top">Back to top</a></p> -->
        </div>
        <!-- <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image"> 
        </div>-->

      </div>

<a id="NousRejoindre"></a>
      <br/><br/><br/><br/>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Vous souhaitez nous rejoindre ? <br/> <span class="text-muted"></span></h2>
          <p class="lead">Pour plus d’informations sur nos inscriptions, cliquez ci-dessous et contactez-nous</p>
          <p><button class="btn btn-default" 
                      onclick="window.location.href='./private.php'; return false;">
                      Vous préinscrire !</button></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="./want.jpg" alt="I want you">
          <br/><br/>
        <!-- <p class="pull-right"><a href="#top">Back to top</a></p> -->
        </div>
      </div>

      <hr class="featurette-divider">




      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <!-- <p class="pull-right"><a href="#top">Back to top</a></p> -->
        <p>&copy; 2016 Section Golf Ouest. <!-- &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> -->
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- ICI LES LIENS JAVASCRIPTS BOUGÉS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="./mesfonctions.js"></script> 
  </body>
</html>
