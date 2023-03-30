<?php global $theme_uri; 
    $category = get_terms([
        'taxonomy' => 'product_cat',
    ]);


?>
<?php if(count($category)) : ?>
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php foreach($category as $pro_cat):?>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="<?= $theme_uri;?>/img/categories/cat-1.jpg">
                        <h5><a href="<?= get_term_link($pro_cat)?>"> <?= $pro_cat->name?> </a></h5>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php endif?>