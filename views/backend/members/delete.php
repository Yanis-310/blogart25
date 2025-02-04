<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET['numMemb'];
$pseudoMemb = sql_select("membre", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/users/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">pseudoMemb</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb"
                        value="<?php echo ($numMemb) ?>" readonly="readonly">
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb"
                        value="<?php echo ($pseudoMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>