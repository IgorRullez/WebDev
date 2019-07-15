

<h1>latest News</h1>
<ul>
<? foreach($posts as $post) : ?>
    <li><?= $post->post_title ?>
        <div><?= $post->post_content ?></div>
    </li>
<? endforeach ?>
</ul>
