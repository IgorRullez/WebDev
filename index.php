<html>

    <head>
        <title>True Fake News</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>

    <body>

        <h1>latest News</h1>
        <ul class="row">
            <?php while(have_posts()) : the_post(); ?>
            <li class="column">
               <div class="card">
               <h2 class="card-title"><?php the_title() ?></h2>
                <div class="card-image"> <?php the_post_thumbnail(); ?></div>
                <div class="card-content"> <?php the_excerpt()?></div>
                <?php the_content() ?>
                </div>
            <?php endwhile ?>   
            </li>
        </ul>

    </body>
</html>