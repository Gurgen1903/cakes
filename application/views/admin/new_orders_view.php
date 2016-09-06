<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url('assecs/style.css');?>" type="text/css"/>
    <link rel="stylesheet" href="<?=base_url('assecs/bootstrap/css/bootstrap.css');?>" type="text/css"/>
    <script type="text/javascript" src="<?=base_url('assecs/jquery-2.1.4.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assecs/bootstrap/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assecs/script.js')?>"></script>

    <title>Document</title>
</head>
<body>
<div class="new_orders_admin">
    <div class="back_url_admin">
        <a href="<?=base_url('index.php/admin/')?>">Back</a>
    </div>
    <h4 style="text-align: center">Заказы Тортов</h4>


    <?php foreach ($orders as $val):?>
        <div class="all_order_this_day">
            <input class="input_base_url" type="hidden" value="<?=base_url()?>">
            <span>Cake_id:</span><a href="#" data-action ="<?=base_url('/admin/order_cake_data_by_id')?>" data-file="" data-table_name="<?=$val['table_name']?>" class="order_id_by_id"><?=$val['cake_id']?></a>
            <p><span>Time:</span> <?=$val['created_at']?></p>
            <p><span>Amount:</span> <?=$val['id']?></p>
            <p><span>Weight:</span> <?=$val['cake_weight']?></p>
            <p><span>Number:</span> <?=$val['order_tel_number']?></p>
            <p><span>Address:</span> <?=$val['addres_order']?></p>

        </div>


    <?php endforeach?>
</div>


<!--MODAL BY ID-->
<div id="get_cake_by_id" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Заказанный Торт</h4>
            </div>
            <div class="modal-body">
                <div class="modal_cake_by_id_all">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>