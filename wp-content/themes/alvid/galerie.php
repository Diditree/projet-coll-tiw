<?php /* Template Name: galerie */ ?>
<?php get_header() ?>

<?php 
$images = get_field('gallery');
$size = 'full'; 
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            <li>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php get_footer() ?>