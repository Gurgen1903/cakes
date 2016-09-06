

<div class="home_view">
    <div class="cont">
        <div class="zakaz_modal_header">
            <h4 class="title_zakaz_modal">Заказ Торта</h4>
        </div>
        <?php foreach ($your_cake as $val):?>


            <div class="modal-body zakaz_body_modal">
                <div class="zakaz_box_modal">
                    <div class="zakaz_box_left">
                        <img src="<?=base_url().'uploads/gala/'.$val['img']?>" alt="">
                    </div>
                    <div class="zakaz_middle_modal">
                    </div>
                    <div class="zakaz_box_right">
                        <form action="" method="POST" class="one_product_form" data-table_name="<?=$table_img?>">
                            <input type="hidden" class="id_cake_zakaz" value="<?=$val['id']?>">
                            <input type="hidden" class="base_cake_zakaz" value="<?=base_url('home/order_cake_one')?>">
                            <div class="name_title_one">
                                <h4><?=$val['name']?></h4>
                            </div>
                            <p><span class="glvnii">Количество:</span> <span class="text_desc colich"><select required name="zakaz_kol" id="kolic">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select></span></p>
                            <p><span class="glvnii">Вес: </span> <span class="text_desc"><select required name="zakaz_kg" id="kilogram">
                                    <option value="2">2 кг</option>
                                    <option value="2.5">2.5 кг</option>
                                    <option value="3">3 кг</option>
                                    <option value="3.5">3.5 кг</option>
                                    <option value="4">4 кг</option>
                                    <option value="4.5">4.5 кг</option>
                                    <option value="5">5 кг</option>
                                    <option value="5.5">5.5 кг</option>
                                    <option value=""></option>
                                </select></span></p>
                            <p><span class="glvnii">Цена за килограмм: </span> <span class="text_desc cena_kilo"><?=$val['price']?> драмм</span></p>
                            <p><span class="glvnii" style="padding-bottom: 0">Номер Телефона:</span></p>
                            <input type="text" name="number_tel_order" class="one_order_number " placeholder="Телефон" required>
                            <p><span class="glvnii" style="padding-bottom: 0">Адрес доставки:</span></p>
                            <input type="text" name="addres_order" class="one_order_address" placeholder="Адрес доставки" required>
                            <input type="submit" name="zakazna" class="one_order_submit" value="ЗАКАЗАТЬ">
                        </form>
                    </div>

                </div>
            </div>
        <?php endforeach;?>

    </div>
    <div id="sucsees_order_cake" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body call_back_margin">
                    <h4>Большое спасибо за заказ !!! </h4>
                    <h3></h3>
                </div>
            </div>

        </div>
    </div>

