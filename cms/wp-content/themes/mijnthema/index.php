
<?php get_header(); ?>
<div class="grid__bp0-column-12"><div>
<section class="banner2">
    <div class="imgBannerContact"><h1 class="yellow contact">Archief
    </h1>
<h4></h4></div>
</section>
</div></div>
<div class="grid__bp0-column-8 index"><div>
    <?php 
if(have_posts()) 
{
    
    while(have_posts())
    {   
        ?><div class="grid__bp0-column-5 artikelBlog"><div> <?php 
        //Initialize the post
        the_post();
        //Print the title and the content of the current post
        the_title('<h4>', '</h4>')?>
        <h6><?php the_date('d-m-Y'); ?> | <?php the_time();?></h6>
        <div class="tekst"><?php  
        the_content();?></div>
        <h6>Bewerk</h6>
        <div id="comments"><p class="postmetadata">
            Gepost in <?php the_category(', ') ?> 
            <strong>|</strong>
            <?php edit_post_link('Bewerk','','<strong> | </strong>'); ?>  
            <?php comments_popup_link('Geen reacties »', '1 Reactie »', '% Reacties »'); ?></p>
            <h6>Jullie mening</h6>
<?php 
comments_template();?></div></div></div><?php 
    }

}else{
echo 'Wees de eerst voor een reactie';

}?>
</div></div>


    <div class="grid__bp0-column-3 sidebar"><div>
    <?php get_sidebar();  ?>
    </div></div>


<?php get_footer() ?>

