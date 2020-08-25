<header id="topnav" class="defaultscroll fixed-top navbar-sticky sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="" class="logo">
                <img src="assets/images/logo.png" alt="missing_logo" height="20">
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="#">Trang Chủ</a><span class="menu"></span>
                </li>

                <li class="has-submenu">
                    <a href="about">Giới Thiệu</a><span class="menu"></span>
                   
                </li>

                <li class="has-submenu">
                    <a href="categories">Template </a>
                    <span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{action("TemptheoloaiController@temptheoloai",['id_temp'=>1])}}"><b class="mdi "> Giáo dục</b></a></li>
                                <li><a href="{{action("TemptheoloaiController@temptheoloai",['id_temp'=>2])}}"><b class="mdi "> Doanh nghiệp</b> </a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)">Template Admin</a>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)">Template Wordpress</a>
                </li>

                <li class="has-submenu">
                    <a href="contact">Liên Hệ</a><span class="menu"></span>
                </li>

                <li class="dropdown d-none d-md-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="fas fa-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-search">
                        <div>
                            <form role="search" class="navbar-form">
                                <input type="text" placeholder="Tìm kiếm" name="s" class="form-control search-bar">
                                <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                            </form>
                        </div>

                    </div>
                </li>
            </ul>
            <!-- End navigation menu-->
        </div>
    </div>
</header>