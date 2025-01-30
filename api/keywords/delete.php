<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numMotCle = ctrlSaisies($_POST['numThem']);

sql_delete('motcle', "numMotCle = $numMotcle");


header('Location: ../../views/backend/Keywords/list.php');