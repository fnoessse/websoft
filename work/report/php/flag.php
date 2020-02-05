<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About this site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
</head>



<body class="body">
<?php include 'view/header.php';?>

    <div id="duck" class="duck"></div>

    <div class="select">

        <ul>
            <li class="links"><a href="#" onclick="toggle_visibility('foo');">Denmark</a</li>
            <li class="links"><a href="#" onclick="toggle_visibility('foo2');">Sweden</a></li>
            <li class="links"><a href="#" onclick="toggle_visibility('foo3');">Finland</a></li>
            <li class="links"><a href="#" onclick="toggle_visibility('foo4');">Skane</a></li>
        </ul>


        <ul>
            <li onclick="toggle_visibility('foo');">
                <div class="FLAG Denmark" id="foo" style="display:block"></div>
            </li>
            <li onclick="toggle_visibility('foo2');">
                <div class="FLAG Sweden" id="foo2" style="display:block"></div>
            </li>
            <li onclick="toggle_visibility('foo3');">
                <div class="FLAG Finland" id="foo3" style="display:block"></div>
            </li>
            <li onclick="toggle_visibility('foo4');">
                <div class="FLAG Skane" id="foo4" style="display:block"></div>
            </li>
        </ul>
    </div>

    <script src="js/Duck.js"></script>
    <script type="text/javascript" src="js/flag.js"></script>

</body>

<?php include 'view/footer.php';?>


</html>