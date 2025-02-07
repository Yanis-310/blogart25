<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts
$keywords = sql_select("motcle", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mot-clé.</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th> mot-clé.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($keywords as $motcle) { ?>
                        <tr>
                            <td><?php echo ($motcle['numMotCle']); ?></td>
                            <td><?php echo ($motcle['libMotCle']); ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo ($motcle['numMotCle']); ?>"
                                    class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo ($motcle['numMotCle']); ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php'; // contains the footer