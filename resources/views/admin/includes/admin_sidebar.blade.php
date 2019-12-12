    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-header  -->
            <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                <div class="user-pic">
                    @if (!is_null(Auth::user()->foto))
                        <img class="img-responsive img-rounded" src="{{ \URL::asset(''.Auth::user()->foto.'') }}" alt="User picture">
                    @else
                        <img class="img-responsive img-rounded" src="{{ \URL::asset('images/avatars/user.png') }}" alt="User picture">
                    @endif
                </div>
                <div class="user-info">
                        <span class="user-name">
                            <strong>{{ Auth::user()->name }}</strong>
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
                        <a class="dashboard" href="{{ url('admin') }}">
                            <i class="fas fa-tachometer-alt "></i>
                            <span class="menu-text">Nástenka</span>
{{--                            <span class="badge badge-pill badge-warning">New</span>--}}
                        </a>
                    </li>
                    <li class="sidebar user-icon">
                        <a class="users" href="{{ url('admin-users') }}">
                            <i class="fas fa-user"></i>
                            <span class="menu-text">Používatelia</span>
                        </a>
{{--                        <div class="sidebar-submenu">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="">--}}
{{--                                        Používatelia--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Výzvy</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Univerzity</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="{{ url('admin-challenges') }}" class="challenge">
                            <i class="fas fa-chart-line"></i>
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
                    <li class="sidebar">
                        <a href="{{ url('admin-universities') }}" class="university">
                            <i class="fas fa-graduation-cap"></i>
                            <span class="menu-text">Univerzity</span>
                        </a>
                    </li>
                    <li class="sidebar mess-icon">
                        <a class="mess" href="{{ url('admin-messages') }}">
                            <i class="fas fa-comment-alt"></i>
                            <span class="menu-text">Správy študentov</span>
                        </a>

                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    <li>
                        <a href="{{ url('admin-docs') }}" class="documentation">
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
                                <img src="{{\URL::asset("images/admin_avatar.png")}}" alt="">
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
                                <img src="{{\URL::asset("images/admin_avatar.png")}}" alt="">
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
                                <img src="{{\URL::asset("images/admin_avatar.png")}}" alt="">
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
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="pinned-footer">
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
            </div>
        </div>
    </nav>

