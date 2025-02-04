<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$membres = sql_select("membre", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Status</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>e-mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($membres as $membre) { ?>
                        <tr>
                            <td><?php echo $membre['pseudoMemb']; ?></td>
                            <td><?php echo $membre['eMailMemb']; ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo $membre['numMemb']; ?>"
                                    class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo $membre['numMemb']; ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

    <?php
    include '../../../footer.php'; // contains the footer