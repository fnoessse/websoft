<script type="text/javascript" src="table_script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<?php
session_start();
$pageTitle = 'read';
include_once 'view/head.php';
include 'view/header.php';
include 'view/crudHeader.php';
require "sql/config.php";
require "sql/functions.php";

$db = connectDatabase($dsn);
$sql = "SELECT * FROM tech";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();

$label  = $_POST["label"] ?? null;
$type   = $_POST["type"] ?? null;
$create = $_POST["create"] ?? null;
$item  = $_GET["item"] ?? null;
$id    = $_POST["id"] ?? null;
$delete  = $_POST["delete"] ?? null;

if ($create) {
    $sql = "INSERT INTO tech (label, type) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$label, $type]);
    $sql = "SELECT * FROM tech";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll();}
?>

<body>
<br><br><br><br><br><br><br><br>

<?php if (!empty($res)){ ?>
<table id="data_table" class="search">
<thead>
    <tr>
        <th class="searchTh">id</th>
        <th class="searchTh">Label</th>
        <th class="searchTh">Type</th>
        <th class="searchTh" colspan="2" style="text-align: center;">Update / Delete</th>
    </tr>
    </thead>
    <tbody>
<?php foreach($res as $row) : ?>
    <tr id="row_<?php echo $row ['id']; ?>">
        <td class="searchTd" id="id_row$<?php echo $row['id']?>"><?php echo $row ['id']; ?></td>
        <td class="searchTd" id="label_row<?php echo $row['id']?>"><?php echo $row ['label']; ?></td>
        <td class="searchTd" id="type_row<?php echo $row['id']?>"><?php echo $row ['type']; ?></td>

        <td class="crud">
        <input type="button" id="edit_button<?php echo $row['id']?>" value="Edit" class="edit" onclick="edit_row('<?php echo $row['id']?>')">
        <input type="button" id="save_button<?php echo $row['id']?>" value="Save" class="save" onclick="save_row('<?php echo $row['id']?>')" style="display: none;">
        </td>

        <td class="crud" style="margin-top: auto; margin-bottom: auto;">
        <form action = "process_delete.php" method="post" style="margin-top: auto; margin-bottom: auto;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="submit" name="delete" value="Delete">
        </form></td>
    
    
<?php endforeach; ?>
 <tr>
     <td class="crud" colspan="5" style="padding-left: 20px; margin-top: auto; margin-bottom: auto;">
        <form method="post" style="margin-top: auto; margin-bottom: auto;">
            <input type="text" name="label" placeholder="Enter label">
            <input type="text" name="type" placeholder="Enter type">
            <input type="submit" name="create" value="Create new row">
     </form>
 </tr>

 <?php }else{ ?>
    <p class="center"> No Results Found</p>
<?php }?>
<tbody>
</table>

<?php include 'view/footer.php'; ?>
