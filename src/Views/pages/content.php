<?php loadPartials('header'); ?>
<?php

use App\Controllers\ThreadController;
list($id, $param) = explode('=', $_SERVER['QUERY_STRING']);
$thread = ThreadController::getThreadById($param);
$replies = ThreadController::getReplies($param);

?>

<!-- ### ORIGINAL POST ### -->
<section class="py-4">
    <div class="container container-custom border-bottom">
        <div>
            <h4><?= $thread['title'] ?></h4>
            <div class="p-flex">
                <small class="text-primary"><?= $thread['users_uid'] ?></small>
                <small><span class="text-secondary">Asked</span> <?= $thread['date_created'] ?></small>
            </div>
        </div>
        <p><?= $thread['content'] ?></p>
    </div>
</section>

<!-- ### COMMENT ### -->
<?php loadPartials('replyform'); ?>

<!-- ### REPLIES ### -->
<section>
    <?php if (!empty($replies)): ?>
        <?php foreach ($replies as $reply): ?>
            <div class="container container-custom pb-4">
                <div class="card">
                    <div class="card-body">
                        <small class="card-title text-primary"><?= $reply['users_uid'] ?></small>
                        <small class="card-subtitle">January 21 4:38</small>
                        <p class="card-text"><?= $reply['reply'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</section>