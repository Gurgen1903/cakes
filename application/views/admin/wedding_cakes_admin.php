<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url('assecs/style.css');?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assecs/bootstrap/css/bootstrap.css');?>" type="text/css"/>
    <title>Insert Wedding Cakes</title>
</head>
<body>
<div class="insert_baby_title">
    <div class="back_url_admin">
        <a href="<?=base_url('index.php/admin/')?>">Back</a>
    </div>
    <h3>Insert Wedding Cakes</h3>
</div>

<div class="form_wedding_cakes">
    <form action="<?=base_url('admin/add_wedding_cake')?>" method="POST" enctype="multipart/form-data" style="">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="price" placeholder="price">
        <input type="text" name="weight" placeholder="weight">
        <input type="text" name="description" placeholder="description">
        <input type="file" name="userfile">
        <input type="submit" name="insert_wedding_cakes_btn">
    </form>
</div>
<div class="all_baby_cakes">

    <?php foreach ($wedding_cake as $data):?>
        <div class="hits_of_product_box " data-id="<?=$data['id']?>">
            <div class="delete_phone_numbers">
                <a href="<?=base_url()?>admin/delete_wedding_cake_by_id/<?=$data['id']?>"></a>
            </div>
            <img src="<?=base_url().'uploads/wedding/'.$data['img']?>" alt="">
            <p><?=$data['name']?></p>
            <p><?=$data['kg']?>кг</p>
            <p><?=$data['price']?> драмм</p>
            <p><?=$data['description']?></p>

        </div>
    <?php endforeach;?>


</div>
</div>

</body>
</html>