<div class="container">
<div class="row">


   <?php
   the_content();
   echo "test";

$args = array(
    'posts_per_page' => 4,
    'post_type' => 'wpcf7s',
);
$myposts = get_posts( $args );
echo '<pre>';
//print_r($myposts);
echo '</pre>';
foreach($myposts as $post) {
    setup_postdata($post);
    //echo $post->post_content;
    $filename = get_post_meta($post->ID, 'wpcf7s_file-file-576', true); 
    //echo '<img src="../../uploads/wpcf7-submissions"/'.$post->ID.'/'.$filename'">';
    $file_path= get_bloginfo('url') . "/wp-content/uploads/wpcf7-submissions/".$post->ID. "/" . $filename;
    echo "<img src=\"$file_path\" alt=\"picture\">";
    //the_content();
}

?>
<?php 
get_footer();
?>
</div>
