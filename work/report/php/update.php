<?php
session_start();
$pageTitle = 'update';
include_once 'view/head.php';
include_once 'view/header.php';
include_once 'view/crudHeader.php';
require "sql/config.php";
require "sql/functions.php";

// Get incoming values
$item  = $_GET["item"] ?? null;
$id    = $_POST["id"] ?? null;
$label = $_POST["label"] ?? null;
$type  = $_POST["type"] ?? null;
$save  = $_POST["save"] ?? null;
// var_dump($_GET);
// var_dump($_POST);

$db = connectDatabase($dsn);

$sql = "SELECT * FROM tech";
$stmt = $db->prepare($sql);
$stmt->execute();
$res1 = $stmt->fetchAll();
//var_dump($res1);

if ($item) {
    $sql = "SELECT * FROM tech WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$item]);
    $res2 = $stmt->fetch();
    //var_dump($res2);
}

if ($save) {
    $sql = "UPDATE tech SET label = ?, type = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$label, $type, $id]);
    //var_dump([$label, $type, $id]);

    header("Location: " . $_SERVER['PHP_SELF'] . "?item=$id");
    exit;
}



?>

<body>

<form style="padding-top: 10em;">
    <select name="item" onchange="this.form.submit()">
        <option value="-1">Select item</option>

        <?php foreach ($res1 as $row) : ?>
            <option value="<?= $row["id"] ?>"><?= "(" . $row["id"]. ") " . $row["label"] ?></option>
        <?php endforeach; ?>

    </select>
</form>


<?php if ($res2 ?? null) : ?>
<form method="post">
    <fieldset>
        <legend>Update</legend>
        <p>
            <label>Id: 
                <input type="text" readonly="readonly" name="id" value="<?= $res2["id"] ?>">
            </label>
        </p>
        <p>
            <label>Label: 
                <input type="text" name="label" value="<?= $res2["label"] ?>">
            </label>
        </p>
        <p>
            <label>Type: 
                <input type="text" name="type" value="<?= $res2["type"] ?>">
            </label>
        </p>
        <p>
            <input type="submit" name="save" value="Save">
        </p>
    </fieldset>
</form>
<?php endif; ?>


<?php if ($res1 ?? null) : ?>
    <table style="border-collapse: collapse; margin: 2em;">
        <tr>
            <th class="searchTh">Id</th>
            <th class="searchTh">Label</th>
            <th class="searchTh">Type</th>
        </tr>

    <?php foreach ($res1 as $row) : ?>
        <tr>
            <td class="searchTd"><?= $row["id"] ?></td>
            <td class="searchTd"><?= $row["label"] ?></td>
            <td class="searchTd"><?= $row["type"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>




<?php include 'view/footer.php';?>