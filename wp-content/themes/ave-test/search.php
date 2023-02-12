<?php 
/**
 * Template Name: Busqueda
 *
 */

  get_header(); 

  $query = get_search_query();
  $args = array(
    's' => $query,
    'post_type' => 'post',
    'posts_per_page' => -1
  );
  $posts = new WP_Query( $args );
?>

<div class="container min-vh-100 pt-50 pb-50">
  <div class="row">
    <?php 
    if ( $posts->have_posts() ) : 
      while ( $posts->have_posts() ) : 
        $posts->the_post(); 
    ?>
    <div class="col-md-4 pb-20">
      <div class="card">
        <?php 
        if ( has_post_thumbnail() ) : 
        ?>
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="card-img-top">
        <?php 
        endif; 
        ?>
        <div class="card-body">
          <h5 class="card-title"><?php the_title(); ?></h5>
          <p class="card-text"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
        </div>
      </div>
    </div>
    <?php 
      endwhile; 
      wp_reset_postdata(); 
    else : 
    ?>
    <p>No se encontraron resultados para "<?php echo $query; ?>"</p>
    <?php 
    endif; 
    ?>
  </div>
</div>

<?php 
  get_footer(); 
?>
