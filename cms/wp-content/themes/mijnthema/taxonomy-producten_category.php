<small>taxonomy-producten.php</small>
<?php get_header(); ?>

 <div class="container">


<div class="row">
    <div class="col-ms-9 col-xs-12">
    <div class="row">
    <div class="grid__bp0-column-12">
<section class="banner">
    <div class="imgBannerContact"><h1 class="yellow">Producten</h1>
<h5>Propel Advanced,Litening Race,Domane advanced</h5>
    <div class="grid__bp0-column-4"><div id="trek1"></div></div>
      <div class="grid__bp0-column-4"><div id="trek2"></div></div>
      <div class="grid__bp0-column-4"><div id="trek3"></div></div>

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
        ?><a href="<?php the_permalink(); ?>"><?php
        the_title('<h2>', '</h2>', true);?> </a> </br> <?php 
        the_excerpt('<p>', '</p>');
         
?> </div> <?php 
    }
}
else
{
    echo 'No content available';
}

?>
</div>
    </div>
</div>



