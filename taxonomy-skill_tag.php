<?php get_header(); ?>


  <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'post_type' => 'skills',
    // 'nopaging' => true,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => 16,
    'posts_per_archive_page' => 16,
    'paged' => $paged,
    'tax_query' => array(
      array(
        'taxonomy' => 'skill_tag',
        'field' => 'name',
        'terms' => $term->name
      )
    )
  );
  if ($term->term_id == 250 || $term->term_id == 252) {
    $args['meta_key']	= 'skill_completion_status';
    $args['orderby']  = 'meta_value';
    $args['order']    = 'DESC';
  }
  $currentlyViewedSkillGroup = new WP_Query( $args );
  ?>

  <div id="container">
    <div id="content" role="main">
      <header class="page-heading section">
        <h1 class="page-title"><?php echo $term->name; ?></h1>
      </header><!-- .entry-header -->

      <?php if ($currentlyViewedSkillGroup->have_posts()) : ?>
        <div class="entries_wrapper">
        <?php while ( $currentlyViewedSkillGroup->have_posts() ) : $currentlyViewedSkillGroup->the_post(); ?>

          <div class="post type-post entry">
            <a class="entry__imageLink" href="<?php echo get_permalink(); ?>">
              <img class="entry__image" src="<?php the_field('skill_image'); ?>"/>
            </a>
            <div class="entry__details-wrapper">
              <h3 class="entry__title">
                <?php
                if ($term->term_id != 250 && $term->term_id != 252) : ?>
                <a href="<?php echo get_permalink(); ?>"
                title="<?php the_title(); ?>" rel="bookmark">
                  <?php the_title(); ?>
                </a>
              <?php else : the_title(); ?>

                <?php endif; ?>
              </h3>
              <div class="entry__summary">
                <?php if ( get_field('skill_completion_status') ) :?>
                  <p class="label label-future-skill"><?php the_field('skill_completion_status') ?></p>
                <?php endif; ?>
                <?php the_field('short_description'); ?>
              </div><!-- .entry-summary -->
            </div>
          </div>
        <?php endwhile; ?>
          <div class="pagination">
          <?php
          echo paginate_links( array(
              'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
              'total'        => $currentlyViewedSkillGroup->max_num_pages,
              'current'      => max( 1, get_query_var( 'paged' ) ),
              'format'       => '?paged=%#%',
              'show_all'     => false,
              'type'         => 'plain',
              'end_size'     => 2,
              'mid_size'     => 1,
              'prev_next'    => true,
              'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
              'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
              'add_args'     => false,
              'add_fragment' => '',
            ) );
          ?>
          </div>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>

    </div><!-- #content -->
  </div><!-- #container -->

<?php get_footer(); ?>
