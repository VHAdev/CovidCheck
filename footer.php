<footer>
  <p>Developed Vato dev </p>
  <p><a href=""></a></p>
</footer>

<?php 

$url = explode("/", $_SERVER["REQUEST_URI"]);

if($url[1] == "CovidCheck"):
    $href = "http://localhost/CovidCheck/";
elseif($url[1] == "relatorios"):
  $href = "../";
endif;

?>


<script src="<?php echo $href?>assets/dist/js/library/jquerymask/jquery.mask.min.js"></script>
<script src="<?php echo $href?>assets/dist/js/main/actions.js"></script>
<script src="<?php echo $href?>assets/dist/js/main/settings.js"></script>
</body>
</html>
