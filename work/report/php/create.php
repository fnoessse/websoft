<?php
session_start();
$pageTitle = 'create';
include_once 'view/head.php';
include 'view/header.php';
include 'view/crudHeader.php';
require "sql/config.php";
require "sql/functions.php";


$label  = $_POST["label"] ?? null;
$type   = $_POST["type"] ?? null;
$create = $_POST["create"] ?? null;
//var_dump($_POST);

if ($create) {
    // Connect to the database
    $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO tech (label, type) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$label, $type]);

    // Get the results as an array with column names as array keys
    $sql = "SELECT * FROM tech";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll();
}



?>
</br>
</br>

<body>

<form method="post">
    <fieldset style="margin-top: 8em;">
        <legend>Create</legend>
        <p>
            <label>Label: 
                <input type="text" name="label" placeholder="Enter label">
            </label>
        </p>
        <p>
            <label>Type: 
                <input type="text" name="type" placeholder="Enter type">
            </label>
        </p>
        <p>
            <input type="submit" name="create" value="Create">
        </p>
    </fieldset>
</form>

<?php if ($res ?? null) : ?>
    <table class="search">
        <tr>
            <th class="searchTh">id</th>
            <th class="searchTh">Label</th>
            <th class="searchTh">Type</th>
        </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td class="searchTd"><?= $row["id"] ?></td>
            <td class="searchTd"><?= $row["label"] ?></td>
            <td class="searchTd"><?= $row["type"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>


<?php include 'view/footer.php';?>