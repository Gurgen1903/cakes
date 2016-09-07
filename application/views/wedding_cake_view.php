<div class="wedding_paralax">
<div class="hits_of_product_title">
    <p>Свадебные торты</p>
</div>
<div class="hits_of_product_boxes">
    <div class="cont">
    <?php foreach ($wedding_cakes as $data):?>
        <div class="hits_of_product_box " data-id="<?=$data['id']?>">

            <img src="<?=base_url().'uploads/wedding/'.$data['img']?>" alt="">
            <p><?=$data['name']?></p>
            <p><?=$data['kg']?>кг</p>
            <p><?=$data['price']?> драмм</p>
            <a href="<?=base_url()?>home/one_product_wedding/<?=$data['id']?>" class=" see_in_new_page">Заказать</a>
        </div>
    <?php endforeach;?>
</div>

</div>
</div>