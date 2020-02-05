<!-- 


    
 -->


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About this site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
</head>

<?php include 'view/header.php';?>

<body class="body">

    <div id="duck" class="duck"></div>

    <div class="fetBTN">
        <select class="select">
            <option id="1080">1080</option>
            <option id="1081">1081</option>
            <option id="1082">1082</option>
            <option id="1083">1083</option>
        </select>
        <button class="button" onclick="getTable()">Fetch</button>
    </div>

    <div id="content" class="table"></div>
    <br/><br/>


    <script type="text/javascript" src="js/newSchool.js"></script>

    <script src="js/Duck.js"></script>

</body>

<?php include 'view/footer.php';?>

</html>