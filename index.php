<?php the_post() ?>
<html>

<head>
    <title>True Fake News | This is your favorite and only trustworthy Fake News website!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php print get_stylesheet_uri() ?>">
</head>

<header>
    <div class="container" id="content">
    <div class="row">
                <div class="col-sm">"<?php echo get_stylesheet_directory_uri()?></a>
                </div>
            </div>
    <div class="row">
                <div class="col-sm"><?php wp_nav_menu() ?></a>
                </div>
            </div>
    </div>
</header>

<body>
    <div class="foo-banner position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal"><?php the_title() ?></h1>
            <p class="lead font-weight-normal"><?php the_excerpt() ?></p>
            <a class="btn btn-outline-secondary" href="#">Read more</a>
        </div>
        <div class="container" id="content">
            <div class="row">
                <div class="col-sm">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>