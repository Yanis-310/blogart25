<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numThem = ctrlSaisies($_POST['numMotCle']);
$libThem = ctrlSaisies($_POST['libMotCle']);

sql_update(table: "motcle", attributs: 'libMotCle = "' . $libMotCle . '"', where: "numMotCle = $numMotCle");


header('Location: ../../views/backend/keywords/list.php');
