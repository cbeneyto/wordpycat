<?php
/**
 * Index principal
 */


// Cabecera
get_header(); ?>

<?php
if(have_posts()){
  while(have_posts()){
    the_post();
    if(has_thumbnail){
      the_post_thumbnail();
    } ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_title('<h1>','</h1>'); ?>
    </a>
    <?php the_excerpt();
  }
  next_posts_link( '<<');
  previous_posts_link( '>>' );
}else{
  echo "No hay contenido en este post.";
}
?>

<?php
// Footer
get_footer();
?>