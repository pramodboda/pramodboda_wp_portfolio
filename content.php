<?php
/**
 * =====================================================================
 * content.php
 * 
 * The default template for displaying content.
 * =====================================================================
 **/






?>


<div id="post-<?php the_ID();?>" <?php post_class('post-section');?>>
<?php if(has_post_thumbnail()) : ?>
<a href="<?php get_the_permalink();?>" title="<?php the_title_attribute();?>" class="post-thumbnail">
    <?php the_post_thumbnail('full', array('class' => 'pb-img-responsive'))?>
</a>
<?php endif; ?>

<article>
    <header>
        <?php 
        // Display the title in a link
        echo '<a href="' . get_the_permalink() . '"> <h3>' . get_the_title() . '</h3></a>';

        // pramodboda_post_meta();
        // get_post_meta();
        ?>
<?php the_content(__('Continue Reading', 'pramodboda'))?>
        
    </header>
    
</article>

</div>