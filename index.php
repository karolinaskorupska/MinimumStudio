<?php //index.php ?>
<?php get_header(); ?>
        <section>
            <main>
                <h1> Minimum Studio</h1>

                <?php $content = get_the_content();
                echo $content;
                ?>

                
            </main>
        </section> 
<?php get_footer(); ?>
    
