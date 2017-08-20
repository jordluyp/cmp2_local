
<?php get_header(); ?>


<div class="row">
    <div class="col-ms-9 col-xs-12">
    <div class="row">
    <div class="grid__bp0-column-12">
<section class="banner">
    <div class="imgBannerContact"><h1 class="yellow">Producten</h1>
<h5>Onze nieuwste racefietsen</h5>
    <div class="grid__bp0-column-4"><div id="trek3"></div></div>
      <div class="grid__bp0-column-4"><div id="trek2"></div></div>
      <div class="grid__bp0-column-4"><div id="trek1"></div></div>

    </div>
</section>
</div>
    <?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post
?> <div class="grid__bp0-column-4"><?php 
      the_post();
        //Print the title and the content of the current post
        //the_excerpt();
        ?><?php
        the_title('<h2 class="yellow">', '</h2>', true);?>  </br> <div class="tekstProducten"><?php 
        the_excerpt('<p>', '</p>');?>
        <a href="<?php the_permalink(); ?>">
        <hr>
        <button class="button button2">Meer info</button></a>
         </div></div> <?php 
    }
}
else
{
    echo 'No content available';
}

?>
<?php get_footer() ?>
</div>
    </div>
</div>



