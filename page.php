<?php get_header(); ?>
  
<main id="site-content" class="site-content static-page">
<?php if ( function_exists('yoast_breadcrumb') ) : ?>
  <nav class="breadcrumbs" aria-label="Breadcrumbs">
    <?php yoast_breadcrumb(); ?>
  </nav>
<?php endif; ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>

    <?php if ( comments_open() || get_comments_number() ) : ?>
      <?php comments_template(); ?>
    <?php endif; ?>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
