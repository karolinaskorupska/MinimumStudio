<?php
get_header();
?>  

      <div class="main">
        <main>
          MAIN
            <?php
                if( have_posts()){

                    while( have_posts ){

                        the_post();
                        the_content();
                    }
                }

            ?>

        </main>
      </div>
 
<?php
get_footer();
?>
