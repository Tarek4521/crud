<?php 

use Bitm\Banner;

$_banner = new Banner();

$banners = $_banner->getActiveBanners();


?>

<!--Markup for Carousel-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

    </div>
    <div class="carousel-inner">
        <?php
        $active = 'active';
        foreach($banners as $banner):
        ?>
        <div class="carousel-item <?=$active;?>">
            <img src="<?=$webroot;?>uploads/<?=$banner['picture'];?>" class="d-block w-100" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
                <h5><?=$banner['title'];?></h5>
                <p><?=$banner['html_banner'];?></p>
            </div>
        </div>
        <?php 
        $active = '';
        endforeach;
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>