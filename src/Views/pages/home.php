<?php loadPartials("header")?>
<!-- CATEGORIES -->
<section class="py-4">
    <div class="container">
        <div class="d-flex">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Announcements</a></li>
                    <li><a class="dropdown-item" href="#">Introductions</a></li>
                    <li><a class="dropdown-item" href="#">Technology</a></li>
                    <li><a class="dropdown-item" href="#">Health & Wellness</a></li>
                    <li><a class="dropdown-item" href="#">Education</a></li>
                    <li><a class="dropdown-item" href="#">Entertainment</a></li>
                    <li><a class="dropdown-item" href="#">Business & Finance</a></li>
                    <li><a class="dropdown-item" href="#">Hobbies & Interests</a></li>
                    <li><a class="dropdown-item" href="#">Feedback & Suggestions</a></li>
                    <li><a class="dropdown-item" href="#">Help & Support</a></li>
                </ul>
            </div>
            <button type="button" class="btn">Latest</button>
            <button type="button" class="btn">Popular</button>
        </div>
    </div>
</section>
<!-- BODY -->
<section class="forum-header">
    <div class="container my-4">
        <?php loadPartials("threads")?>
    </div>
</section>
<?php loadPartials("footer")?>
