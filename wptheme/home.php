<?php get_header(); ?>

 <div class="container">


<div class="row">
    <div class="col-ms-9 col-xs-12">
    <div class="row">
    <?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post
?> <div class="col-md-4"> <?php 
      the_post();
        //Print the title and the content of the current post
        //the_excerpt();
        ?> Posted by <?php the_author(); ?> | <?php  
        the_date('d-m-Y'); ?> om <?php 
        the_time();?> </br> <?php 
        ?> <a href="<?php the_permalink(); ?>"><?php
        the_title('<h2>', '</h2>', true);?> </a> </br> <?php
        //excerpt is een link naar een andere pagina waar er meer info over het product te vinden is
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

<?php 
get_footer();
?>
    </div>
    <div class="col-md-3">
    <?php get_sidebar();  ?>
    </div>
</div>



