<div class="mastik_paralax">
<div class="hits_of_product_title">
    <p>Торты Из Мастики</p>
</div>
<div class="hits_of_product_boxes">
    <div class="cont">
    <?php foreach ($mastik_cakes as $data):?>
        <div class="hits_of_product_box " data-id="<?=$data['id']?>">

            <img src="<?=base_url().'uploads/mastik/'.$data['img']?>" alt="">
            <p><?=$data['name']?></p>
            <p><?=$data['kg']?>кг</p>
            <p><?=$data['price']?> драмм</p>
            <a href="<?=base_url()?>home/one_product_mastik/<?=$data['id']?>" class=" see_in_new_page">Заказать</a>
        </div>
    <?php endforeach;?>
    </div>

</div>
</div>