<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CHAT</title>
    <link rel="icon" type="image/jpg" href="/assets/images/favicon.jpg" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
   
    
    <?php if(false === (new \App\Core\Auth())->isLogged()) : ?>
        <a class="btn btn-outline-primary mr-1" href="/login">Connexion</a>
        <a class="btn btn-outline-primary" href="/register">Inscription</a>
    <?php else : ?>
        <div class="dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo (new \App\Core\Auth())->getUser()->username; ?></a> <!-- lien -->
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/login/logout">Se déconnecter</a>
  </div>
</div>
    <?php endif; ?>
</div>

<?php echo $content; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="/assets/vendor/momentjs/moment-with-locales.js"></script>
<script src="/assets/js/app.js"></script>
<script src="/assets/js/discussion.js"></script>



<?php if((new \App\Core\Auth())->isLogged()) : ?>
<script>
    var discussion = new Discussion({
        currentUser: <?php echo (new \App\Core\Auth())->getUser()->id ?>
    });
    discussion.bindEvents();
</script>
<?php endif; ?>
</body>
</html>


