<?php loadPartials("header")?>
<section class="py-4 text mx-auto" style="width: 50%">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Post</h5>
                <form action="create/submit" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="content" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Body</label>
                    </div>
                    <div class="d-flex gap-2 pt-3">
                    <select class="form-select" name="category" aria-label="Default select example">
                        <option selected>Category</option>
                        <option value="Announcements">Announcements</option>
                        <option value="Introductions">Introductions</option>
                        <option value="Technology">Technology</option>
                        <option value="HealthWellness">Health & Wellness</option>
                        <option value="Educations">Educations</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="BusinessFinance">Business & Finance</option>
                        <option value="HobbiesInterests">Hobbies & Interests</option>
                        <option value="FeedbackSuggestions">Feedback & Suggestions</option>
                        <option value="HelpSupport">Help & Support</option>
                    </select>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                    
                </form>
                <?php loadPartials('errors')?>
            </div>
        </div>
    </div>
</section>
<?php loadPartials("footer")?>