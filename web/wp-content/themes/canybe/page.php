<?php get_header(); ?>

<?php 
$post = get_post();

echo $post->post_content; 
?>

<?php get_footer();

