<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo e(\URL::asset('images/login/bg-02.jpg')); ?>');">
        <div class="wrap-login100">
            <span class="login100-form-title p-b-55 p-t-5">
						Registrácia
					</span>
            <form class="login100-form validate-form" method="POST" action="<?php echo e(route('register')); ?>">
                
                <?php echo e(csrf_field()); ?>


                <?php if($errors->has('name')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                <?php endif; ?>
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="name" placeholder="Používateľské meno" autofocus required>
                    <span class="focus-input100" data-placeholder="👤"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter email">
                    <input class="input100" type="text" name="email" placeholder="E-mail" required>
                    <span class="focus-input100" data-placeholder="📧"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Heslo" required>
                    <span class="focus-input100" data-placeholder="🔒"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Potvrdiť heslo"
                           required>
                    <span class="focus-input100" data-placeholder="🔁"></span>
                </div>

                <div class="container-login100-form-btn p-t-30">
                    <button type="submit" class="login100-form-btn">
                        Zaregistrovať sa do systému
                    </button>
                </div>

            </form>
            <div class="text-center p-t-90">
                <a class="txt1" href="<?php echo e(route('login')); ?>">
                    Už ste zaregistrovaní? Prihláste sa tu.
                </a>
            </div>

            <div class="text-center p-t-20">
                <a class="txt1" href="<?php echo e(route('index')); ?>">
                    Späť na hlavnú stránku.
                </a>
            </div>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
