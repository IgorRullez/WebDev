<html>
<head>
    <title>True Fake News | This is your favorite and only trustworthy Fake News website!</title>
    <link rel="stylesheet" href="http://truefakenews.local/wp-content/themes/TrueFakeNews_Default/style.css ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    
    <h1>Latest News</h1>  
        <div class="container">
        <div class="row">

            <?php while(have_posts()) { the_post(); ?>      
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="https://placehold.it/300x200" class="card-img-top" alt="..." >
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title()?></h5>
                                <div class="card-text"><?php the_excerpt()?></div>
                            <a href="<?php the_permalink();?>"class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
</body>
<html