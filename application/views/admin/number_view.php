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
<div class="call_back_admin">
    <div class="back_url_admin">
        <a href="<?=base_url('admin/')?>">Back</a>
    </div>
        <h4>Заказы Звонков</h4>

    <?php foreach ($numbers as $val):?>
        <div class="numbers_data">
            <div class="delete_phone_numbers">
                <a href="<?=base_url()?>admin/delete_phone_number_by_id/<?=$val['id']?>"></a>
            </div>
            <p>Name: <?=$val['name']?></p>
            <p>Number: <?=$val['number']?></p>
            <p>Time: <?=$val['created_at']?></p>
        </div>
    <?php endforeach?>
</div>
</body>
</html>