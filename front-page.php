<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/school.jpg'); ?>"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Хмельницька Гімназія №1</h1>
      <h2 class="headline headline--medium">імені Володимира Красицького</h2>
      <h3 class="headline headline--small">Умови вступу</h3>
      <a href="https://drive.google.com/file/d/1r6vPJwhbK77tOgxaJkiQNLXU0vaVfBNm/view" target="_blank" class="btn btn--large btn--blue">Переглянути</a>
    </div>
  </div>


  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
        <?php
        $homepageEvents = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'event'
        ));
        while($homepageEvents->have_posts()){
          $homepageEvents->the_post(); ?>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php 
              $eventDate = new DateTime(get_field('event_date'));
              // var_dump($eventDate) ;
              echo $eventDate-> format('M');
              
              ?></span>
              <span class="event-summary__day">
              <?php echo $eventDate-> format('d'); ?>
              </span>  
            </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
            <p><?php if(has_excerpt()){
              echo get_the_excerpt();
            } else{
              echo wp_trim_words(get_the_content(), 18);
            } ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
          </div>
        </div>
         
        <?php }
        
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event')  ?>" class="btn btn--blue">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
        <?php 
          $homepagePosts= new WP_Query(array(
            'posts_per_page'=> 3
            
           
          ));// create custom query to pull info from databases
          
          while($homepagePosts->have_posts()){
            $homepagePosts->the_post();?>
                    <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M')?></span>
            <span class="event-summary__day"><?php the_time('d')?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
            <p><?php if(has_excerpt()){
              echo get_the_excerpt();
            } else{
              echo wp_trim_words(get_the_content(), 18);
            } ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
          <?php } wp_reset_postdata();
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Transportation</h2>
        <p class="t-center">All students have free unlimited bus fare.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg');?>">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">An Apple a Day</h2>
        <p class="t-center">Our dentistry program recommends eating apples.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg'); ?>">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Food</h2>
        <p class="t-center">Fictional University offers lunch plans for those in need.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>


<?php get_footer();

?> 

