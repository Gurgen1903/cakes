<div class="every_day_paralax">
<div class="hits_of_product_title">
    <p>Торты на каждый день</p>
</div>
<div class="hits_of_product_boxes">
    <div class="cont">
    <?php foreach ($every_day_cakes as $data):?>
        <div class="hits_of_product_box " data-id="<?=$data['id']?>">

            <img src="<?=base_url().'uploads/every_day/'.$data['img']?>" alt="">
            <p><?=$data['name']?></p>
            <p><?=$data['kg']?>кг</p>
            <p><?=$data['price']?> драмм</p>
            <a href="<?=base_url()?>home/one_product_every_day/<?=$data['id']?>" class=" see_in_new_page">Заказать</a>
        </div>
    <?php endforeach;?>
    </div>

</div>
</div>