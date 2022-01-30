<div class="topbar" id="topnav">

    <!-- Top navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo-lg" />
                            <img src="{{ asset('images/logo_sm.png') }}" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <div class="navbar-custom navbar-left">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="index.html">
                                    <span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <span><i class="ti-files"></i></span><span> Pages </span> </a>
                                <ul class="submenu">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-forget-password.html">Forget Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                                    <li><a href="pages-blank.html">Blank page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="pages-session-expired.html">Session Expired</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><span><i class="ti-spray"></i></span><span> Other </span> </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="ui-elements.html">UI Elements</a>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Components</a>
                                        <ul class="submenu">
                                            <li><a href="components-range-slider.html">Range Slider</a></li>
                                            <li><a href="components-alerts.html">Alerts</a></li>
                                            <li><a href="components-icons.html">Icons</a></li>
                                            <li><a href="components-widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="typography.html"> Typography </a>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#"> Forms </a>
                                        <ul class="submenu">
                                            <li><a href="forms-general.html">General Elements</a></li>
                                            <li><a href="forms-advanced.html">Advanced Form</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#"> Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic tables</a></li>
                                            <li><a href="tables-advanced.html">Advanced tables</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="charts.html"> Charts </a>
                                    </li>

                                    <li>
                                        <a href="maps.html"> Maps </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <span><i class="ti-widget"></i></span><span> Extra Pages </span> </a>
                                <ul class="submenu">
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-calendar.html">Calendar</a></li>
                                    <li><a href="extras-faqs.html">FAQs</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                    <li><a href="extras-contacts.html">Contacts</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>

                <!-- Top nav Right menu -->
                <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                    <li class="top-menu-item-xs">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="navbar-left app-search pull-left">
                             <input type="text" placeholder="Search..." class="form-control">
                             <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="dropdown top-menu-item-xs">
                        <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                            <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                        </a>
                        <ul class="dropdown-menu p-0 dropdown-menu-lg">
                            <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                            <li class="list-group notification-list" style="height: 267px;">
                               <div class="slimscroll">
                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-diamond bg-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-cog bg-warning"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-bell-o bg-custom"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">Updates</h5>
                                            <p class="m-0">
                                                <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-user-plus bg-danger"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New user registered</h5>
                                            <p class="m-0">
                                                <small>You have 10 unread messages</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                    <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-diamond bg-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-cog bg-warning"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>
                               </div>
                            </li>
                            <!--<li>-->
                                <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                    <!--<small class="font-600">See all notifications</small>-->
                                <!--</a>-->
                            <!--</li>-->
                        </ul>
                    </li>

                    <li class="dropdown top-menu-item-xs">
                        <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar -->
</div>