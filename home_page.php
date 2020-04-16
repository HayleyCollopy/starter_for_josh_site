<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
      <section class="container-fluid aboutbg text-center">
      
          <div class="container">
              

<!--              placeholder for about me-->
              <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
    	<p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
    <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
              
 <div class="blocker"></div>
            
      </div><!--  container-->
    </section>

      
      
      <section class="container-fluid articlebg">
          <div class="container">
              <div class="row">
                  <div>
                 <h3 class="text-center article-title"><?php the_field('titleforarticles'); ?></h3>
                  </div>
              <div class="col-md-4 article-cent">
<!--placeholder for col1-->                       
<img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
   <h4><?php the_field('articletitle'); ?></h4>
                  <p><?php the_field('articleexcerpt'); ?> </p>
                  <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                  </div>
              
               <div class="col-md-4 article-cent">
<!--placeholder for col2--> 
                   <img class="img-responsive" alt=“model” src="<?php the_field('articleimagemodel'); ?>">
   <h4><?php the_field('articletitlemodel'); ?></h4>
                    <p><?php the_field('articleexcerptmodel'); ?> </p>
                   <a href="<?php the_field('readmoremodel'); ?>" class="readmore">CONTINUE READING</a>
                  </div>
                  
              <div class="col-md-4 article-cent">
<!--placeholder for col3-->
                  <img class="img-responsive" alt=“model” src="<?php the_field('articleimagemodel'); ?>">
   <h4><?php the_field('articletitlemodel'); ?></h4>
                    <p><?php the_field('articleexcerptmodel'); ?> </p>
                   <a href="<?php the_field('readmoremodel'); ?>" class="readmore">CONTINUE READING</a>
                  </div>
              
              </div>
<!--              row-->
          </div>
<!--          container-->
      </section>
<?php get_footer(); ?>