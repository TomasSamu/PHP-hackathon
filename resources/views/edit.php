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
    
<form action="" method="post">

        <?= csrf_field() ?>

        <div class="form-group">
            <label for="">Song Name</label><br>
            <input type="text" name="name" value="<?= htmlspecialchars(old('name', $videos->name)) ?>">
        </div>

        <div class="form-group">
            <label for="">Author</label><br>
            <input type="text" name="author" value="">
        </div>

        <div class="form-group">
            <label for="">code</label><br>
            <input type="text" name="code" value="">
        </div>

        <div class="form-group">
            <label for="">description</label><br>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <br>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>


    </form>
</body>