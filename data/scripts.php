<?php
//start session
session_start();
$_SESSION['teste'] = "passou";

// CONNECT DATABASE 
require './_connect.php';

// SYSTEM LOGIN
require './control/login/_login.php';

// SYSTEM ACCOUNT 
require './control/conta/_conta.php';

// SYSTEM ACCOUNT 
require './control/relatorio/_relatorio.php';


?>