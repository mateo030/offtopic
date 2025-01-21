<?php loadPartials('header') ?>
<?php

list($id, $param) = explode('=', $_SERVER['QUERY_STRING']);
echo $param;


?>
<!-- ### ORIGINAL POST ### -->
<section class="py-4">
    <div class="container container-custom border-bottom">
        <div>
            <h4>Who is better, MJ or Lebron?</h4>
            <div class="p-flex">
                <small class="text-primary">KobeBryant24</small>
                <small><span class="text-secondary">Asked</span> today</small>
            </div>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia quos eum minima culpa assumenda quo exercitationem quidem amet hic tenetur harum, error quas soluta, porro quasi eius distinctio quae provident laborum veritatis aspernatur? Excepturi mollitia inventore, totam quibusdam veniam quis unde perspiciatis accusantium ducimus facilis repellat quae voluptatem minima dolores at sit maiores possimus dicta quaerat repudiandae tenetur natus velit! Enim fuga, ratione molestias dicta nemo vel voluptate fugiat voluptatibus eveniet sequi temporibus, ab possimus sapiente? Accusamus minima voluptate iure necessitatibus et. Illo, illum. Excepturi, qui nulla reiciendis corrupti nobis eius hic amet repudiandae nostrum animi saepe pariatur itaque.</p>
    </div>
</section>

<!-- ### COMMENT ### -->
<section>
    <div class="container container-custom pb-4">
        <div class="card p-2">
            <form>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                    <label for="floatingTextarea">Reply to post</label>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-primary btn-sm mt-2">Comment</button>
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