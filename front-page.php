
<?php
//The Home Page

$title = get_field('page_title');
$desc = get_field('page_description');
$image = get_field('page_image');
$heroImage = $image['sizes']['small'];
$link = get_field('page_link');

get_header();
?>

<h1><?php echo $title; ?></h1>
<p><?php echo $desc; ?></p>
<img src="<?php echo $image['url']; ?>" class="image    ">
<a href="<?php echo $link['url'];?>" class="button" target="_blank"> Go to Link</button>

<?php
    if( have_post() ) {
            while( have_posts() )
            {
                the_post();
                the_content();
            }
    }
?>

<?php
get_footer();
?>