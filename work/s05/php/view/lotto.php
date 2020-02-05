


<!doctype html>
<meta charset="utf-8">
<title>lotto page</title>

<h1>outside php lotto</h1>

<p>random check</p>

<ul>
    <?php foreach($lotto as $number) ?>
    <li><?= $number ?></li>
    <?php endforeach; ?>
</ul>

<p>User row</P>

<pre><?= print_r($userRow) ?>
<pre><?= implode(" : ", $userRowArr) ?>

