<html>
<head>
    <title>True Fake News | This is your favorite and only trustworthy Fake News website!</title>
    <link rel="stylesheet" href="http://truefakenews.local/wp-content/themes/TrueFakeNews_Default/style.css ">
</head>

<body>
    <h1>Latest News</h1>
    <ul class="grid">


    <?php while(have_posts()) { the_post(); ?>

        <li class="grid-item">
            <article class="card">
                <small><?php echo get_the_date();?></small>
                <h2><?the_title()?></h2>
                <div><? the_post_thumbnail()?></div>
                <p>
                  <?php the_excerpt()?>
                </p>
                <a href="<?php the_permalink(); ?>">Read More</a>

            </article>
        </li>

    <?php } ?>

    </ul>
</body>
<html