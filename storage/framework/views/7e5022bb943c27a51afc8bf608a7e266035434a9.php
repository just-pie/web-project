<div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="loginModalLabel">Prihlásenie</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">👤</span>
                        </div>
                        <input type="email" name="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="E-mail" required>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">


                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Heslo" required>
                        <span class="focus-input100" data-placeholder="🔒"></span>
                    </div>

                    <div class="container-login100-form-btn p-t-30">
                        <button type="submit" class="login100-form-btn">
                            Prihlásiť sa do systému
                        </button>
                    </div>
                </form>
                <div class="text-center p-t-90">
                    <a class="txt1" href="<?php echo e(route("register")); ?>">
                        Alebo sa zaregistrujte TU.
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>