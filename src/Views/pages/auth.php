<?php loadPartials("header")?>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-around">
            <div>
                <h1 style="font-size: 64px;">Off-Topic</h1>
                <p>Inspired by roblox forums</p>
            </div>
            <div>
            <form action="auth/signin" method="POST">
                <h3>Sign in</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer">Don't have an account?</a>
            </form>
            </div>
        </div>
    </div>
    <!-- *** error messages *** -->
    <div class="container text-center justify-content-center">
        <?php loadPartials('errors') ?>
    </div>
    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Sign up</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="auth/signup" method="POST">
                        <div class="mb-3">
                            <label for="InputUsername" class="form-label">Username</label>
                            <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="passwordRepeat" class="form-label">Confirm password</label>
                            <input type="password" name="pwd_repeat" class="form-control" id="passwordRepeat">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button><br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
loadPartials("footer");
?>