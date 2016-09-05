<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url('assecs/style.css');?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assecs/bootstrap/css/bootstrap.css');?>" type="text/css"/>
    <title>Document</title>
</head>
<body>

<div class="insert">
    <div class="insert_title">
        <div class="back_url_admin">
            <a href="<?=base_url('index.php/admin/')?>">Back</a>
        </div>
        <h3>INSERT</h3>
    </div>
    <form action="<?=base_url('admin/insert_new_cake')?>" method="POST" enctype="multipart/form-data" style="">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="price" placeholder="price">
        <input type="text" name="weight" placeholder="weight">
        <input type="file" name="userfile">
        <input type="submit" name="insert_submit_btn">
    </form>
</div>



</body>
</html>