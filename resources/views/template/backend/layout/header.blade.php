<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top gradient-ibiza">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>

        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">

            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img
                            src="{{ asset('template/backend/') }}/assets/images/avatars/avatar-17.png"
                            class="img-circle" alt="user avatar"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar"><img class="align-self-start mr-3"
                                        src="{{ asset('template/backend/') }}/assets/images/avatars/avatar-17.png"
                                        alt="user avatar"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title">Katrina Mccoy</h6>
                                    <p class="user-subtitle">katrina92@example.com</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
