<?php
session_start();
$pageTitle = 'search';
include_once 'view/head.php';
include 'view/header.php';
include 'view/crudHeader.php';
require "sql/config.php";
require "sql/functions.php";

$search = $_GET["search"] ?? null;
$like = "%$search%";

if ($search) {
    // Connect to the database
    $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM tech
WHERE
    id = ?
    OR label LIKE ?
    OR type LIKE ?
;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();
}?>
<body>


<form class="searchForm">
        <label>
            <input type="text" name="search">
        </label>
        <button type="submit" class="searchButton" >Search</button>
</form>



<?php if (!empty($res)){ ?>
<table class="search">
    <tr>
        <th class="searchTh">id</th>
        <th class="searchTh">Label</th>
        <th class="searchTh">Type</th>
    </tr>

<?php foreach($res as $row) : ?>
    <tr>
        <td class="searchTd"><?= $row["id"] ?></td>
        <td class="searchTd"><?= $row["label"] ?></td>
        <td class="searchTd"><?= $row["type"] ?></td>
    </tr>
    
<?php endforeach; }else{ ?>

    <p class="center"> No Results Found</p>
    
<?php }?>
</table>
<?php include 'view/footer.php';?>


