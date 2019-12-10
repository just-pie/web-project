    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-header  -->
            <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                <div class="user-pic">
                    <?php if(!is_null(Auth::user()->foto)): ?>
                        <img class="img-responsive img-rounded" src="<?php echo e(\URL::asset(''.Auth::user()->foto.'')); ?>" alt="User picture">
                    <?php else: ?>
                        <img class="img-responsive img-rounded" src="<?php echo e(\URL::asset('images/avatars/user.png')); ?>" alt="User picture">
                    <?php endif; ?>
                </div>
                <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo e(Auth::user()->name); ?></strong>
                        </span>
                    <span class="user-role">Administrátor</span>
                    <span class="user-status">
                            <i class="fa fa-circle"></i>
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
                            <i class="fa fa-tachometer-alt"></i>
                            <span class="menu-text">Nástenka</span>

                        </a>
                    </li>
                    <li class="sidebar user-icon">
                        <a class="users" href="<?php echo e(url('admin-users')); ?>">
                            <i class="fa fa-user"></i>
                            <span class="menu-text">Používatelia</span>
                            <?php if($countThisHourAddedUsers>0): ?>
                            <span class="badge badge-pill badge-danger"><?php echo e($countThisHourAddedUsers); ?></span>
                            <?php endif; ?>
                        </a>















                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#" class="challenge">
                            <i class="fa fa-chart-line"></i>
                            <span class="menu-text">Výzvy</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">Panels</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
                                </li>
                                <li>
                                    <a href="#">Forms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#" class="university">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="menu-text">Univerzity</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Pie chart</a>
                                </li>
                                <li>
                                    <a href="#">Line chart</a>
                                </li>
                                <li>
                                    <a href="#">Bar chart</a>
                                </li>
                                <li>
                                    <a href="#">Histogram</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    <li>
                        <a href="<?php echo e(url('admin-docs')); ?>" class="documentation">
                            <i class="fa fa-book"></i>
                            <span class="menu-text">Documentation</span>
                            <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-footer  -->
        <div class="sidebar-footer">
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                    <div class="messages-header">
                        <i class="fa fa-envelope"></i>
                        Správy
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="<?php echo e(\URL::asset("images/admin_avatar.png")); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                            </div>
                        </div>

                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="<?php echo e(\URL::asset("images/admin_avatar.png")); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                            </div>
                        </div>

                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="<?php echo e(\URL::asset("images/admin_avatar.png")); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> Jhon doe</strong>
                                </div>
                                <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. In totam explicabo</div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="#">Zobraziť všetky správy</a>

                </div>
            </div>
            <div>
            </div>
            <div>
                <a href="<?php echo e(route('logout')); ?>"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                      style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
            <div class="pinned-footer">
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
            </div>
        </div>
    </nav>

