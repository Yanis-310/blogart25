<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numThem = ctrlSaisies($_POST['numThem']);
$libThem = ctrlSaisies($_POST['libThem']);

sql_update(table: "THEMATIQUE", attributs: 'libThem = "' . $libThem . '"', where: "numThem = $numThem");


header('Location: ../../views/backend/thematiques/list.php');
