<!DOCTYPE html>

<!--
    TODO:
    * change site-title
    * add meta description content
    * change apple-mobile-web-app-title
    * adapt theme colors
    * create new images/icon-touch, eg. with https://realfavicongenerator.net/
-->

<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Alex Mayer Design</title>
    <meta name="description" content="Alex Mayer ist ein mehrfach ausgezeichneter Salzburger Webdesigner">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="same-origin">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
            <link rel="canonical" href="http://www.example.com/">
        -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px" rel="stylesheet">
<?php wp_head(); ?>
</head>

    <body <?php body_class(); ?>>
    <header>
        <h1><a href='#'>Alex Mayer</a></h1>
        <nav>
            <input type="checkbox" id="button" />
            <label for="button" onclick></label>

            <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

        </nav>

        <section id='hero'>
            <h2>Glänzende Ideen für leuchtende Augen</h2>
            <a href='#'>Angebot einholen</a>
        </section>
    </header>

    <main>
    <section id='maincontents' class='maxwidthcontainer'>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); // Iterate the post index in the loop.
        the_title(); // Display or retrieve the current post title 
        the_content(); // Display the post content.
    }
}
else {
    echo "<p>Derzeit noch keine Beiträge... Bitte komm später wieder zurück!</p>";
    // currently no posts…        
}
?>
</section>
        <section id='leistungen'>
            <h2>Leistungen</h2>
<?php
$services_query = new WP_Query( 'order=DESC&cat=4' );
if ( $services_query->have_posts() ) :
    while ( $services_query->have_posts()  ) : $services_query->the_post(); ?>
        <article class='post'>
            <h3>
                    <?php the_title(); ?>
            </h3>
                    <?php the_post_thumbnail(); ?>
        </article>

<?php endwhile;
else : ?>
    <p>Erster Post demnächst...</p>

<?php endif; 
wp_reset_postdata();?>

        </section>

        <section id='news'>
            <h2>News</h2>
<?php
$news_query = new WP_Query( 'order=DESC&cat=2' );
if ( $news_query->have_posts() ) :
    while ( $news_query->have_posts()  ) : $news_query->the_post(); ?>
        <article class='post'>
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
                <?php the_content(); ?>
        </article>

<?php endwhile;
else : ?>
    <p>Erster Post demnächst...</p>

<?php endif; 
wp_reset_postdata();?>
        </section>

        <section id='referenzen'>
            <h2>Referenzen</h2>
<?php
$testimonials_query = new WP_Query( 'order=ASC&cat=3' );
if ( $testimonials_query->have_posts() ) :
    while ( $testimonials_query->have_posts()  ) : $testimonials_query->the_post(); ?>
        <article class='post'>
                    <?php the_post_thumbnail(); ?>
                    <?php $zitat = get_fields( get_the_id() ); ?>
                    <p><cite><?php the_title(); ?><br><?php echo $zitat['rolle'];?></cite></p>
                    <blockquote>
                    <p><?php echo $zitat['zitat'];?></p>
                    </blockquote>
        </article>

<?php endwhile;
else : ?>
    <p>Erster Post demnächst...</p>

<?php endif; 
wp_reset_postdata();?>
        </section>
    </main>

<?php echo "footer"; ?>
<?php require_once(get_template_directory_uri().'footer' ); ?>
<?php get_template_part('footer'); ?>
