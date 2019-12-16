<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <!-- sidebar-header  -->
        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
            <div class="user-pic">
                <?php if(!is_null(Auth::user()->foto)): ?>
                    <img class="img-responsive img-rounded" src="<?php echo e(\URL::asset(''.Auth::user()->foto.'')); ?>"
                         alt="User picture">
                <?php else: ?>
                    <img class="img-responsive img-rounded" src="<?php echo e(\URL::asset('images/avatars/user.png')); ?>"
                         alt="User picture">
                <?php endif; ?>
            </div>
            <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo e(Auth::user()->name); ?></strong>
                        </span>
                <span class="user-role">Administrátor</span>
                <span class="user-status">
                            <i class="fas fa-circle"></i>
                            <span>Online</span>
                        </span>
            </div>
        </div>
        <!-- sidebar-menu  -->
        <div class=" sidebar-item sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>Všeobecné</span>
                </li>
                <li>
                    <a class="dashboard" href="<?php echo e(url('admin')); ?>">
                        <i class="fas fa-tachometer-alt "></i>
                        <span class="menu-text">Nástenka</span>
                        
                    </a>
                </li>
                <li class="sidebar user-icon">
                    <a class="users" href="<?php echo e(url('admin-users')); ?>">
                        <i class="fas fa-user"></i>
                        <span class="menu-text">Používatelia</span>
                    </a>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </li>
                <li class="sidebar">
                    <a href="<?php echo e(url('admin-challenges')); ?>" class="challenge">
                        <i class="fas fa-chart-line"></i>
                        <span class="menu-text">Výzvy</span>
                    </a>
                </li>
                <li class="sidebar">
                    <a href="<?php echo e(url('admin-universities')); ?>" class="university">
                        <i class="fas fa-graduation-cap"></i>
                        <span class="menu-text">Univerzity</span>
                    </a>
                </li>
                
                <li class="header-menu">
                    <span>Extra</span>
                </li>
                <li>
                    <a href="<?php echo e(url('admin-docs')); ?>" class="documentation">
                        <i class="fas fa-book"></i>
                        <span class="menu-text">Dokumentácia</span>
                        <span class="badge badge-pill badge-primary">Nové</span>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/just-pie/web-project" target="_blank" class="github">
                        <i class="fab fa-github"></i>
                        <span class="menu-text">Github</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-footer  -->
    <div class="sidebar-footer">
        <div>
            <a href="<?php echo e(route('index')); ?>" title="Návrat na stránku mobilít">
                <i class="fas fa-undo-alt"></i>
            </a>
        </div>
        <div>
            <a href="<?php echo e(route('logout')); ?>" title="Odhlásiť sa"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i></a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                  style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        </div>
        <div class="pinned-footer">
            <a>
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>
    </div>
</nav>

