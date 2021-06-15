<?php 

include_once './header.php';



if(isset($_GET['formulario'])):
    include_once './inc/part-sintomas.php';
else:
    include_once './inc/part-usuario.php';
endif;



include_once './footer.php';

?>




