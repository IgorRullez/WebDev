<html>

    <head>
        <title>True Fake News</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    </head>

    <body>

        <h1>latest News</h1>
        <ul class="bar">
            <?php while(have_posts()) : the_post(); ?>
            <li class="bar-item">
             <div class="card">
            <h2 class="car-title">
        <?php the_title() ?></li>
            <h2>
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php the_content() ?>
            <?php endwhile ?> 
        </ul>

    </body>
</html>