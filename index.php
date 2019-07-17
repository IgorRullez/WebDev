<head>
    <title>True Fake News | This is your favorite and only trustworthy Fake News website!</title>
    <link rel="stylesheet" href="http://truefakenews.local/wp-content/themes/TrueFakeNews_Default/style.css ">
</head>

<body>
    <h1>The Latest News</h1>
    <ul class="naked-list">
    <?php $x = 1; while($x <= 5) { ?>
             <li>
                <article class="card">
                 <h2 class='grid'>Post Title</h2>
                    <img src="https://placehold.it/300*200"/>
                     <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit eum nobis, ullam at ratione sunt impedit quia, ex sapiente accusantium placeat dolor praesentium, voluptatibus odio. Voluptatem veniam at similique porro!
                     </p>
                    <a>Read more</a>
                </article>
            </li>
    <?php $x++; } ?>
    </ul>

</body>