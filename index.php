<?php

ob_start();
if(!empty($_GET['page']))
{
    $cheminPage = "./controleur/".$_GET['page'].".php";
    include $cheminPage;
}
else
{
    include "vue/index.html";
}
$contenue = ob_get_clean();

include "global/haut.php";

echo $contenue;

include "global/bas.php";