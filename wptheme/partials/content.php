<?php 
if(have_posts()) 
{
    while(have_posts())
    {
        //Initialize the post
        the_post();
        //Print the title and the content of the current post
?>                               
<h1><?php the_title(); ?></h1>
<section class="content">
<?php the_content(); ?>
</section>
<?php
    }
}
else
{
    echo 'No content available';
}