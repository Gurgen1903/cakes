<div class="home_view">
    <div class="cont">

        <div class="catalog_home">
            <div class="assorti">
                <ul>
                    <li>
                        <img src="<?=base_url('assecs/image/child_cake.jpg')?>" alt="">
                        <a href="<?=base_url('home/all_baby_cakes')?>">Детские</a>
                    </li>
                    <li><img src="<?=base_url('assecs/image/cat_party.jpg')?>" alt="">
                        <a href="<?=base_url('home/all_gala_cakes')?>">Торжественные</a></li>
                    <li>
                        <img src="<?=base_url('assecs/image/cat_wedding.jpg')?>" alt="">
                        <a href="<?=base_url('home/all_wedding_cakes')?>">Свадебные</a></li>
                    </li>
                    <li>
                        <img src="<?=base_url('assecs/image/for_everyday_cake.jpg')?>" alt="">
                        <a href="<?=base_url('home/all_every_day_cakes')?>">На каждый день</a></li>
                    </li>
                    <li>
                        <img src="<?=base_url('assecs/image/cat_mastik.jpg')?>" alt="">
                        <a href="<?=base_url('home/all_mastik_cakes')?>">Из мастики</a></li>
                    </li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="our_company">
                <div class="our_company_title">
                    <p>О КОМПАНИИ</p>
                </div>
            <div class="company_boxes">

            <div class="company_box1">
                    <img src="<?=base_url('assecs/image/our_company_product.png')?>" alt="">
                    <p>70</p>
                    <p>наименований продукции</p>
                </div>
                <div class="company_box2">
                    <img src="<?=base_url('assecs/image/2years_company.png')?>" alt="">
                    <p>года на рынке</p>
                </div>
                <div class="company_box3">
                    <img src="<?=base_url('assecs/image/smile_company.png')?>" alt="">
                    <p>99%</p>
                    <p>клиентов остались довольны!</p>
                </div>
            </div>
        </div>
        <div class="hits_of_product">
            <div class="hits_of_product_title">
                <p>Хиты Продаж</p>
            </div>
            <div class="hits_of_product_boxes">
                <?php foreach ($cakes as $data):?>
                <div class="hits_of_product_box " data-id="<?=$data['id']?>">

                        <img src="<?=base_url().'uploads/'.$data['img']?>" alt="">
                        <p><?=$data['name']?></p>
                        <p><?=$data['kg']?>кг</p>
                        <p><?=$data['price']?> драмм</p>
                        <a href="<?=base_url()?>home/one_product/<?=$data['id']?>" class=" see_in_new_page">Заказать</a>
                    </div>
                <?php endforeach;?>


            </div>
        </div>
    </div>
</div>

</div>
