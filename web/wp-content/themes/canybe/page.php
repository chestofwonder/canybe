<?php

get_header();

$post = get_post();

echo do_shortcode($post->post_content);

get_footer();

