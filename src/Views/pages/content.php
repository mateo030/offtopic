<?php loadPartials('header') ?>
<?php

use App\Controllers\HomeController;
list($id, $param) = explode('=', $_SERVER['QUERY_STRING']);
$thread = HomeController::getThreadById($param);
?>
<!-- ### ORIGINAL POST ### -->
<section class="py-4">
    <div class="container container-custom border-bottom">
        <div>
            <h4><?= $thread['title'] ?></h4>
            <div class="p-flex">
                <small class="text-primary">KobeBryant24</small>
                <small><span class="text-secondary">Asked</span> <?= $thread['date_created'] ?></small>
            </div>
        </div>
        <p><?= $thread['content'] ?></p>
    </div>
</section>

<!-- ### COMMENT ### -->
<section>
    <div class="container container-custom pb-4">
        <div class="card p-2">
            <form action="content/reply" method="POST">
                <div class="form-floating">
                    <input type="hidden" name="postId" value="<?= $param ?>">
                    <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                    <label for="floatingTextarea">Reply to post</label>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary btn-sm mt-2">Comment</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ### REPLIES ### -->
<section>
    <div class="container container-custom pb-4">
        <div class="card">
            <div class="card-body">
                <small class="card-title text-primary">JaMorant</small>
                <small class="card-subtitle">January 21 4:38</small>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nam quis modi repellat asperiores incidunt molestias sit expedita ullam consequatur perspiciatis labore, doloremque ipsum mollitia? Ullam neque reprehenderit est distinctio ut et expedita ea! Atque, inventore illo libero aliquid maxime totam explicabo hic aperiam molestiae sed necessitatibus vitae unde consequuntur.</p>
            </div>
        </div>
    </div>
    <div class="container container-custom pb-4">
        <div class="card">
            <div class="card-body">
                <small class="card-title text-primary">KawamuraYuki11</small>
                <small class="card-subtitle">January 24 15:30</small>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nam quis modi repellat asperiores incidunt molestias sit expedita ullam consequatur perspiciatis labore, doloremque ipsum mollitia? Ullam neque reprehenderit est distinctio ut et expedita ea! Atque, inventore illo libero aliquid maxime totam explicabo hic aperiam molestiae sed necessitatibus vitae unde consequuntur.</p>
            </div>
        </div>
    </div>
</section>