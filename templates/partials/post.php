<div class="row">
  <div class="large-12 columns">

    <header class="page-header">
      <h1><?php the_title(); ?></h1>
        <?php get_template_part('partials/date'); ?>
    </header>

    <?php if (get_field('show_featured_image') == true ) : ?>
      <div class="page-element">

      <figure class="featured">
        <?php the_post_thumbnail('full'); ?>
      </figure>

      </div>
    <?php endif; ?>

    <?php if (get_field('introduction_text')) : ?>
      <div class="page-element row">
        
        <div class="medium-8 columns">
          <?php if (get_field('display_video') == false ) : ?>
            <figure>
              <?php the_post_thumbnail('large'); ?>
            </figure>
          <?php else : ?>
            <div class="flex-video">
              <?php echo wp_oembed_get(get_field('video_url')); ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="medium-4 columns">
          <article class="intro-content rte">
            <?php echo get_field('introduction_text'); ?>
          </article>
        </div>

      </div>
    <?php endif; ?>

    <div class="page-element row">

      <div class="medium-8 columns">
        <article class="rte">    
          <?php 
          the_content();
          get_template_part('partials/share');
          ?>
        </article>
      </div>

      <?php if (get_field('related_content')) : ?>
        <aside class="sidebar medium-4 columns" role="complementary">
          <div class="panel">
            <header>
              <h3>Related content</h3>
            </header>
            <?php echo get_field('related_content'); ?>
          </div>
        </aside>
      <?php endif; ?>

    </div>

  </div>
</div>