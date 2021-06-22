<footer>
  <p>© 2021 Gardener. All rights reserved. Developed Vato dev </p>
  <p><a href="gardenerengenharia.com.br">Gardener Engenharia</a></p>
</footer>

<?php 

$url = explode("/", $_SERVER["REQUEST_URI"]);

if($url[1] == "CovidCheckGardener"):
    $href = "http://localhost/CovidCheckGardener/";
elseif($url[1] == "relatorios"):
  $href = "../";
endif;

?>


<script src="<?php echo $href?>assets/dist/js/library/jquerymask/jquery.mask.min.js"></script>
<script src="<?php echo $href?>assets/dist/js/main/actions.js"></script>
<script src="<?php echo $href?>assets/dist/js/main/settings.js"></script>
</body>
</html>
