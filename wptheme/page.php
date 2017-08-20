
<?php get_header(); ?>

<?php if ( is_page( 'promos' ) ){?>
<div class="grid__bp0-column-12">
<section class="banner">
    <div class="imgBannerContact"><h1 class="yellow contact">Promo's</h1>
<h5>Ontdek al onze promo's</h5></div>
</section>
</div>
<div class="grid__bp0-column-6"><div>
<h2 class="yellow contact">Win een racefiets</h2>

<p>Doe mee met onze 100% plezier selfie en maak kans op een spliternieuwe racefiets van TREK
Het enige wat je hoeft te doen is een selfie nemen na het fietsen.
De selfie mag plezier uitstralen en iets uniek bevatten. Wees origineel en wees voorzichtig op de baan</p>
<h4 class="black selfiePromo">Post je 100%</br>plezier selfie!</h4>
</div></div>
<div class="grid__bp0-column-5"><div>
<ul id="exampleSlider" class="sliderPromo">
       <li><img src="/wordpress/wp-content/uploads/2017/08/froome.jpg" alt=""></li>
 <li><img src="/wordpress/wp-content/uploads/2017/08/team.jpg" alt=""></li>
 <li><img src="/wordpress/wp-content/uploads/2017/08/koppel.jpg" alt=""></li>
 <li><img src="/wordpress/wp-content/uploads/2017/08/model.jpg" alt=""></li>
</ul>


</div></div>
<div class="grid__bp0-column-12"><div>
<section id="uploadSelfie">

<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        the_post();
        //Print the title and the content of the current post
        //the_title();
        the_content();
    }
}
else
{
    echo 'No content available';
}
?>
</section>
</div></div>
<div class="grid__bp0-column-12"><div>
<?php 
query_posts('Sport=Category&showposts=5');

while(have_posts())
{
    ?>
    <div class="grid__bp0-column-4"><div><article><?php 
    the_post();
    //Print the title and the content of the current post
    ?> <a href="<?php the_permalink(); ?>"><?php
    the_title('<h4 class="links">', '</h4>');?>
    <span class="date dateBlog"><?php  
    the_date('d-m-Y'); ?> | <?php the_time();?> </span><?php 
    if ( has_post_thumbnail() ) {
            ?> <div class="thumbnail"><?php 
        the_post_thumbnail('full');?> </div><?php 
        }
    the_content();
    ?></a></article></div></div><?php 
}
?>
</div></div>
<?php 
}
?>
<?php if ( is_page( 'contact-2' ) ){?>
<div class="grid__bp0-column-12">
<section class="banner">
    <div class="imgBannerContact"><h1 class="yellow contact">Contact</h1>
<h5>Contacteer ons met al uw vragen</h5>
    </div>
</section>
</div>
<div class="grid__bp0-column-12">
    <style>
.h2{
    margin-top: 100px;
}
</style>
<h2>Contact</h2>
<?php 
   if( have_posts() ) :
    the_post();
    the_content();
endif;
};
?>

<?php if ( is_page( 'disclaimer' ) ){?>
<div class="grid__bp0-column-12">
<section class="banner">
    <div class="imgBannerContact"><h1 class="yellow contact">Disclaimer</h1>
<h5></h5>
    </div>
</section>
</div>
<div class="grid__bp0-column-12">
<h2>Disclaimer</h2>
<p></p>
<?php 
   if( have_posts() ) :
    the_post();
    the_content();
endif;
};
?>
<?php get_footer(); ?>
</div>

</div></div></div>



