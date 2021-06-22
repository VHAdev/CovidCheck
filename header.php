<?php 
  //INICIAR A SESSÃO
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Check Gardener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://battleofmagic.online/assets/dist/css/estilo.css" media="screen" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="http://battleofmagic.online/assets/src/images/logo38.png">
    <link rel="icon" type="image/png" href="http://battleofmagic.online/assets/src/images/logo192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="180x180" href="http://battleofmagic.online/assets/src/images/logo180.png" sizes="180x180">
    
</head>
<body>
<?php 
if($_SESSION['conectado'] == true):


$url = explode("/", $_SERVER["REQUEST_URI"]);

if($url[1] == "CovidCheckGardener"):
    $href = "http://localhost/CovidCheckGardener/";
else:
  if(count($url) >= 3):
    $href = "../";
  else:
    $href = "./";
  endif;
endif;
  
?>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #547E65;">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo $href ?>relatorios/admin.php"><?php echo $_SESSION['empresa'] ?></a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <?php if($url[3] == "conta.php"): ?>  
              <a class="nav-link text-end" href="<?php echo $href ?>/relatorios/admin.php"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file-alt" class="svg-inline--fa fa-file-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z"></path></svg><b>Relatorio</b></a>               
            <?php else: ?>
              <a class="nav-link text-end" href="<?php echo $href ?>/relatorios/conta.php"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg><b>Conta</b></a>
            <?php endif;?>
          </li>
          <li class="nav-item sair">
            <a class="nav-link text-end" data-logout> <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg> <b>Sair</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php endif; ?>
  <div class="jumbotron bg-cover text-white"> 
      <div class="container py-5 text-center">
          <h1 class="display-4 font-weight-bold">Covid Check Gardener</h1>
          <p class="font-italic mb-0">REGISTRO DIÁRIO DE MONITORAMENTO DE SAÚDE DURANTE O PERIODO  DE QUARENTENA PRÉ-EMBARQUE</p>
          </p>
      </div>
  </div>


