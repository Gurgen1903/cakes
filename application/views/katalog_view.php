<div class="katalog_view">
    <div class="cont">

        <div class="catalog_home">
            <div class="katalog_items">
                <div class="katalog_box">
                    <div class="katalog_box_left">
                        <a href="<?=base_url('home/all_baby_cakes')?>">Детские Торты</a>
                    </div>
                    <div class="katalog_box_right">
                        <?php foreach ($data_baby as $val):?>
                        <img class="zoom_katalog" src="<?=base_url('/uploads/baby')?>/<?=$val['img']?>" alt="">
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="katalog_box">
                    <div class="katalog_box_left">
                        <a href="<?=base_url('home/all_gala_cakes')?>">Торжественные</a>
                    </div>
                    <div class="katalog_box_right">
                        <?php foreach ($data_gala as $val):?>
                            <img class="zoom_katalog" src="<?=base_url('/uploads/gala')?>/<?=$val['img']?>" alt="">
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="katalog_box">
                    <div class="katalog_box_left">
                        <a href="<?=base_url('home/all_wedding_cakes')?>">Свадебные Торты</a>
                    </div>
                    <div class="katalog_box_right">
                        <?php foreach ($data_wedding as $val):?>
                            <img class="zoom_katalog" src="<?=base_url('/uploads/wedding')?>/<?=$val['img']?>" alt="">
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="katalog_box">
                    <div class="katalog_box_left">
                        <a href="<?=base_url('home/all_every_day_cakes')?>">На каждый день</a>
                    </div>
                    <div class="katalog_box_right">
                        <?php foreach ($data_every_day as $val):?>
                            <img class="zoom_katalog" src="<?=base_url('/uploads/every_day')?>/<?=$val['img']?>" alt="">
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="katalog_box">
                    <div class="katalog_box_left">
                        <a href="<?=base_url('home/all_mastik_cakes')?>">Торты из Мастики</a>
                    </div>
                    <div class="katalog_box_right">
                        <?php foreach ($data_mastik as $val):?>
                            <img class="zoom_katalog" src="<?=base_url('/uploads/mastik')?>/<?=$val['img']?>" alt="">
                        <?php endforeach;?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>