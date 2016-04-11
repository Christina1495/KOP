<?php
include('/sait/header.html');
?>
<?php
/*session_start();
echo "город: ".htmlspecialchars($_SESSION['city'])."  Кол-во дней ".(int)$_SESSION['days']." Кол-во взрослых".htmlspecialchars($_SESSION['Amount_people_old']).
    " Кол-во детей".htmlspecialchars($_SESSION['Amount_people_child'])." Тип поездки:".htmlspecialchars($_SESSION['gender']);*/
echo $_GET['city'];
?>