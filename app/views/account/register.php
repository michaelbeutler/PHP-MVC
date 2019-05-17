<?php $this->setSiteTitle('Sign Up'); ?>
<?php $this->start('head'); ?>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=PROOT?>/static/css/master.css">
    <link rel="stylesheet" href="<?=PROOT?>/static/css/bgpulse.css">
    <link rel="stylesheet" href="<?=PROOT?>/static/css/register.css">

<?php $this->end(); ?>
<?php $this->start('body'); ?>
    <section>
        <div class="bgPulse">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>
    <div class="container">
        <div class="register-container shadow">
            <div class="row">
                <div class="col">
                    <div class="register-form-container">
                        <form action="javascript:void" id="formRegister">
                            <div class="row">
                                <div class="col">
                                    <h3 class="register-form-title"><i class="fas fa-user-lock"></i><br><b>Sign Up</b> your account.</h3>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text register-input-group-text" id="email-addon"><i class="fas fa-at"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="user@example.com" aria-label="Your Email" aria-describedby="email-addon"
                                            name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text register-input-group-text" id="password-addon"><i
                                                    class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" aria-label="Your Password" aria-describedby="password-addon"
                                            name="password" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text register-input-group-text" id="email-addon"><i class="fas fa-redo-alt"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Repeat" aria-label="Repeat your Password" aria-describedby="repeat-addon"
                                            name="repeat" id="repeat">
                                    </div>
                                </div>
                            </div>
                            <small class="register-error-msg">
                            </small>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <a href="login">Already got an account?</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-primary register-submit-btn">Sign
                                        Up</button>
                                </div>
                            </div>
                        </form>
                        <div class="register-info">
                            <small>By signing in to your account, you agree to Indeed's <a href="terms-of-service">Terms
                                    of Service</a> and consent to our <a href="cookie-policy">Cookie Policy</a> and <a
                                    href="privacy-policy">Privacy
                                    Policy</a>.</small>
                            <br>
                            <small>
                                ©2019 - Michael Beutler
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-7 d-none d-lg-block animated zoomInRight faster">
                    <div id="carouselregister" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?=PROOT?>/static/img/login-slide-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=PROOT?>/static/img/login-slide-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?=PROOT?>/static/img/login-slide-3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselregister" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselregister" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=PROOT?>/static/dist/js/jquery-3.4.1.min.js"></script>
    <script src="<?=PROOT?>/static/dist/js/bootstrap.min.js"></script>
    <!-- JQuery Plugins -->
    <script src="<?=PROOT?>/static/dist/js/jquery.validate.min.js"></script>
    <!-- App JS -->
    <script src="<?=PROOT?>/static/dist/js/sha512.min.js"></script>
    <!--<script src="<?=PROOT?>/static/js/register.js"></script>-->
<?php $this->end(); ?>