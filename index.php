
<h1> <?php print hello($name) ?> </h1>
<ul>

    <?php while (have_posts()): the_post (); ?>

    <li> <?php the_title() ?></li>
        <?php the_excerpt() ?> 

    <?php endwhile ?>

</ul>

