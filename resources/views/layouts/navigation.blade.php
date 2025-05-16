<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <!-- HEADER -->
    <header id="header">
        <div id="logo-group">

            <!-- PLACE YOUR LOGO HERE -->
            <h1 class="hidden-xs"
                style="font-weight: 900; color: #3b2c46; font-size: 18px; padding-top: 16px; padding-left: 10px;">
                {{-- <img src="{{ url('back/img/high_court_logo.png') }}" alt="Unipower Content Management System"
                    style="position: relative; top: -6px; width: 100px; float: left; padding-right: 12px;"> --}}
                    Content Management System - Good Wood Hotel
            </h1>
            <span id="logo" class="visible-xs">
                {{-- <img src="{{ url('back/img/mobile_labor_logo.svg') }}" alt="Commercial High Court Content Management System">  --}}
            </span>
            <!-- END LOGO PLACEHOLDER -->

            <!-- Note: The activity badge color changes when clicked and resets the number to 0
				Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
            <!-- <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span> -->

        </div>

        <!-- pulled right: nav area -->
        <div class="pull-right">

            <!-- collapse menu button -->
            <div id="hide-menu" class="btn-header pull-right">
                <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
            </div>
            <!-- end collapse menu -->

            <!-- #MOBILE -->
            <!-- Top menu profile link : this shows only when top menu is active -->
            <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
                <li class="">
                    <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                        <img src="{{ asset('public/back/img/avatars/sunny.png') }}" alt="John Doe" class="online" />
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- logout button -->
            <div id="logout" class="btn-header transparent pull-right">
                <span>
                    <!-- Authentication -->
                    <form method="POST" action="">
                        @csrf
                        <button id="logout" onclick="logout();" title="Logout" style="padding: 2px 7px; margin-top: 10px; border: 1px solid #bfbfbf !important; background-color: #f8f8f8 !important; font-size: 16px;"><i class="fa fa-sign-out login_sign"></i></button>
                        {{-- <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" style="padding: 6px 7px; margin-top: 10px; border: 1px solid #bfbfbf !important; background-color: #f8f8f8 !important; font-size: 16px;">
                            <i class="fa fa-sign-out login_sign"></i>
                        </x-dropdown-link> --}}
                    </form>
                </span>
            </div>
            <!-- end logout button -->

            <!-- search mobile button (this is hidden till mobile view port) -->
            <div id="search-mobile" class="btn-header transparent pull-right hidden">
                <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
            </div>
            <!-- end search mobile button -->


            <!-- fullscreen button -->
            <div id="fullscreen" class="btn-header transparent pull-right">
                <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
            </div>
            <!-- end fullscreen button -->

           



        </div>
        <!-- end pulled right: nav area -->

    </header>
    <!-- END HEADER -->

    <!-- Left panel : Navigation area -->
    <!-- Note: This width of the aside area can be adjusted through LESS variables -->
    <aside id="left-panel">

        <!-- User info -->
        <div class="login-info">
            <span>
                <!-- User image size is adjusted inside CSS, it should stay as it -->

                 <a href="{{ route('profile') }}" >
                    <img src="{{ asset('public/back/img/avatars/sunny.png') }}" alt="me" class="online" />
                    <span>
                    {{ auth()->user()->name }}
                    </span>
                    <i class="fa fa-angle-down"></i>
                </a>

            </span>
        </div>
        <!-- end user info -->

        <!-- NAVIGATION : This navigation is also responsive-->
        <nav>
            <!--
    NOTE: Notice the gaps after each icon usage <i></i>..
    Please note that these links work a bit different than
    traditional href="" links. See documentation for details.
    -->


            <ul>
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-tachometer"></i> <span class="menu-item-parent">Dashboard</span></a>
                </li>

                @foreach($menuItems as $item)

                    <li class="{{ request()->is($item->url) ? 'active' : '' }}">

                        @if(in_array( $item->id,$arrParentID))

                            <a href="#"><i class="{{ $item->icon }}"></i> <span class="menu-item-parent">{{ $item->title }}</span></a>

                            @if(count($subMenuItems)>0)
                                <ul>

                                    @foreach($subMenuItems as $subMenu)
                                        @if($item->id==$subMenu->parent_id)
                                            <?php
                                                $url_add =  $subMenu->url;
                                                $url_add = str_replace('-list', '', $url_add);
                                                $url_edit = substr_replace($url_add, 'edit-', 0, 0);
                                                $url_action = $url_add."-action";
                                                $url_view = $url_add."-view";
                                                $url_admin = str_replace('.index', '', $subMenu->url);
                                            ?>
                                            <li class="{{ request()->is($subMenu->url) || request()->is($url_add) || Request::segment(1) == $url_edit || Request::segment(1) == $url_action || Request::segment(1) == $url_view || Request::segment(1) == $url_admin || Request::segment(1) == $url_add ? 'active' : '' }}">
                                                @if(in_array( $subMenu->id,$permissionHave))
                                                    <a href="{{ route( $subMenu->url ) }}">{{ $subMenu->title }}</a>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        @elseif($item->is_parent == 0)
                            @if(in_array( $item->id,$permissionHave))
                            <a href="{{ route( $item->url ) }}"><i class="{{ $item->icon }}"></i> <span class="menu-item-parent">{{ $item->title }}</span></a>
                            @endif
                        @elseif($item->is_parent == 1 && $item->url !="#")
                            @if(in_array( $item->id,$permissionHave))
                            <a href="{{ route( $item->url ) }}"><i class="{{ $item->icon }}"></i> <span class="menu-item-parent">{{ $item->title }}</span></a>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>


        <!-- <span class="minifyme" data-action="minifyMenu">
    <i class="fa fa-arrow-circle-left hit"></i>
</span>-->

    </aside>
    <!-- END NAVIGATION -->

</nav>

<script type="text/javascript">
    $('#logout').on('click', function(e) {
        event.preventDefault();
        const url = $(this).attr('href');
        // var repl = "route('logout')";
        var id = $(this).val();
        $.SmartMessageBox({
            title : "<i class='fa fa-sign-out txt-color-orangeDark'></i> Confirm Logout <span class='txt-color-orangeDark'><strong>" + $('#show-shortcut').text() + "</strong></span>",
            content : $this.data('logout-msg') || "Are you sure you want to logout?",
            buttons : '[No][Yes]'

            }, function(ButtonPressed) {
                if (ButtonPressed == "Yes") {
                    window.location.replace('{{ route('logout') }}');
                }
            });
    });
</script>
