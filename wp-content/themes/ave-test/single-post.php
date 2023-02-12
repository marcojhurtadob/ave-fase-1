<?php 
/**
 * Template Name: Entrada sencilla
 *
 * This template is used to display the content of a single post.
 */

// Get the post ID from the URL
$post_id = get_the_ID();

// Get the post data
$post = get_post( $post_id );

// Get the post title
$title = $post->post_title;

// Get the post content
$content = $post->post_content;

get_header(); 
?>

<div class="container min-vh-100 pt-50 pb-50">
  <h1><?php echo $title; ?></h1>
  <?php echo $content; ?>
</div>

<?php get_footer(); ?>
