<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="videos">

<?php //foreach($song as $items) : ?>

<div class="song">

    <p><?=$video->name; ?></p>
    <p><?=$video->author; ?></p>
    <p><?=$video->description; ?></p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$video->code; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>

<?php //endforeach; ?>

</div>

    
</body>
</html>