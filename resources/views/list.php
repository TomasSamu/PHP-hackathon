<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="videos card" style="width 18rem">

<?php foreach($song as $items) : ?>

<div class="song">
    <li class="list-group-item"><p>Song name: <a href="/present?id=<?=$items->id; ?>"><?=$items->name; ?></a><br> Author: <?=$items->author; ?></p></li>
</div>

<?php endforeach; ?>

</div>
    
</body>
</html>