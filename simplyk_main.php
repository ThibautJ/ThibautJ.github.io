<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Simplyk Website</title>
  <!--fonts-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300|Slabo+27px' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">

  <!-- JS -->
  <!-- <script type="text/javascript" src="js/changeForm.js"></script> -->

</head>
<body>
  <div class="container-fluid mycontainer">

    <?php include("navbar.php"); ?>

    <div id="first-section" class="section">
      <div class="row">
        <div class="col-md-2"></div>
        <div id="logo" class="col-md-8">
          <img align="middle" src="images/simplyk.png">
        </div>
        <div class="col-md-2"></div>
      </div>
      <h1 class="text-center" id="vision">Construisons une société engagée dès maintenant</h1>
      <h4 class="text-center" id="mission">Mettons en relation les organismes et les bonnes volontés</h4>
    </div>

    <div id="description-section" class="container-fluid section">
      <h3 class="sous-titre text-center" id="titre-description-section">Que tu sois un citoyen ou un organisme</h3>

      <h6 class="sous-titre2 text-center">Trouve ce dont tu as besoin</h6>

      <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-3 force">
          <div class="panel-heading">
            <img src="images/community-bleu.png" class="img-responsive">
            <h3 class="text-center">Citoyen</h3>
          </div>
          <div class="panel-body">
            <p class="first text-center">Trouve une mission...</p>
            <p class="text-center">selon tes disponibilités</p>
            <p class="text-center">près de chez toi</p>
            <p class="text-center">en accord avec tes intérêts</p>
            <p class="text-center">avec tes amis !</p>
            <button class="btn center-block register">S'enregistrer</button>
          </div>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-3 force">
          <div class="panel-heading">
            <img src="images/heart-bleu.png" class="img-responsive">
            <h3 class="text-center">Organisme</h3>
          </div>
          <div class="panel-body">
            <p class="first text-center">Trouve des bénévoles...</p>
            <p class="text-center">plus rapidement</p>
            <p class="text-center">pour des missions diversifiées</p>
            <p class="text-center">à la dernière minute</p>
            <p class="text-center">avec de nombreuses compétences !</p>
            <button class="btn center-block register">S'enregistrer</button>
          </div>
        </div>

        <div class="col-md-2"></div>
      </div>
    </div>

    <div id="register-section" class="section">
      <h3 class="sous-titre text-center">Tiens-toi au courant de l'avancée de notre projet !</h3>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4 loupe center-block">
          <h3>Des missions et des bénévoles à portée de main</h3>
          <img id="loupe" src="images/loupe.png" class="img-responsive">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 form-wufoo">
          <div class="btn-group btn-group-justified" id="btn-group-register" role="group" aria-label="...">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default active"><i class="fa fa-user"></i>   Citoyen</button>
            </div>
            <div class="btn-group" role="group">
              <button id= "org-button" type="button" class="btn btn-default"><i class="fa fa-university"></i>   Organisme</button>
            </div>
          </div>
          <div id="php-form"><?php include("form-cit.php"); ?></div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>

    <div id="partners-section" class="section">
      <h3 class="sous-titre text-center">Nos partenaires</h3>
      <div id="partners-row" class="row">
        <div class="col-md-3 center-block img-partners"><a href="http://cabm.net/en"><img id="cabm" src="https://pbs.twimg.com/profile_images/593854999202955264/xvNlID33.jpg" class="img-responsive center-block"></a></div>
        <div class="col-md-3 center-block img-partners"><a href="http://volunteerwica.com/accueuil/"><img src="http://volunteerwica.com/wp-content/themes/bhinneka-child/img/logofr.png" class="img-responsive center-block"></a></div>
        <div class="col-md-3 center-block img-partners"><a href="http://d3center.ca/"><img src="http://d3center.ca/wp-content/uploads/2015/06/District3-Innovation-Center.png" class="img-responsive center-block"></a></div>
        <div class="col-md-3 center-block img-partners"><a href="https://www.concordia.ca/"><img src="http://5days.ca/concordia/wp-content/uploads/sites/25/2014/03/Concordia_Logo2.png" class="img-responsive center-block"></a></div>
      </div>
    </div>

    <div id="fourth-page">
      <h3 class="sous-titre text-center">Vidéo de présentation</h3>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="center-block"><iframe width="560" height="315" align="middle" class="center-block" src="https://www.youtube.com/embed/GgUCo700JUw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
      </div>
      <div class="col-md-2"></div>
    </div>

    <?php include("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </div>
</body>
</html>

<script type="text/javascript">
  var changeFormToOrg = function(){
    document.getElementById('php-form').innerHTML = '<div id="wufoo-z1ihgqmq177l9zv">Fill out my <a href="https://tjaurou.wufoo.com/forms/z1ihgqmq177l9zv">online form</a>.</div><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">Use <a href="http://www.wufoo.com/partners/">Wufoo integrations</a> and get your data to your favorite apps.</div><script type="text/javascript">var z1ihgqmq177l9zv;(function(d, t) {var s = d.createElement(t), options = {\'userName\':\'tjaurou\',\'formHash\':\'z1ihgqmq177l9zv\',\'autoResize\':true,\'height\':\'564\',\'async\':true,\'host\':\'wufoo.com\',\'header\':\'show\',\'ssl\':true};s.src = (\'https:\' == d.location.protocol ? \'https://\' : \'http://\') + \'www.wufoo.com/scripts/embed/form.js\';s.onload = s.onreadystatechange = function() {var rs = this.readyState; if (rs) if (rs != \'complete\') if (rs != \'loaded\') return;try { z1ihgqmq177l9zv = new WufooForm();z1ihgqmq177l9zv.initialize(options);z1ihgqmq177l9zv.display(); } catch (e) {}};var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);})(document, \'script\');</script>;';
  };

  var buttonOrg = document.getElementById('org-button');
  alert(buttonOrg);

  if (buttonOrg) {
    buttonOrg.addEventListener('click', changeFormToOrg, false);
    alert("bou");
  };
</script>