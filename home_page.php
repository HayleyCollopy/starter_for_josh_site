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
    	
 <div class="blocker"></div>
            
      </div><!--  container-->
    </section>

      
      
      <section class="container-fluid articlebg">
          <div class="container">
              <div class="row">
                  <div>
                  <h3 class="text-center article-title">LATEST ARTICLES</h3>
                  </div>
              <div class="col-md-4 article-cent">
<!--placeholder for col1-->                       

                  </div>
              
               <div class="col-md-4 article-cent">
<!--placeholder for col2-->    
                  </div>
                  
              <div class="col-md-4 article-cent">
<!--placeholder for col3-->    
                  </div>
              
              </div>
<!--              row-->
          </div>
<!--          container-->
      </section>
<?php get_footer(); ?>