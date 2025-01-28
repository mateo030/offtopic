<section>
    <?php if (isset($_SESSION['userId'])): ?>
    <div class="container container-custom pb-4">
        <div class="card p-2">
            <form action="content/reply" method="POST">
                <div class="form-floating">
                    <input type="hidden" name="userId" value="<?= $_SESSION['userId'] ?>">
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
    <?php endif ?>
</section>