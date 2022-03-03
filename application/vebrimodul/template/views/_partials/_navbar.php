<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="<?php echo base_url('assets/img/') ?><?php echo $this->M_Setting->tampilLogoWebsite()['isi_setting']; ?>" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text"><?php echo  $this->M_Setting->tampilNamaWebsite()['isi_setting']; ?></span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->

        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content">
            <ul class="nav navbar-top-links">

                <!--Navigation toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="tgl-menu-btn">
                    <a class="mainnav-toggle" href="#">
                        <i class="demo-pli-list-view"></i>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Navigation toogle button-->

            </ul>
            <ul class="nav navbar-top-links">

                <!--Notification dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="demo-pli-bell"></i>
                        <span class="badge badge-header badge-danger"></span>
                    </a>

                    <!--Notification dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <div class="nano scrollable">
                            <div class="nano-content">
                                <ul class="head-list">
                                    <!-- <li>
                                        <a href="#" class="media add-tooltip" data-title="Used space : 95%" data-container="body" data-placement="bottom">
                                            <div class="media-left">
                                                <i class="demo-pli-data-settings icon-2x text-main"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text-nowrap text-main text-semibold">HDD is full</p>
                                                <div class="progress progress-sm mar-no">
                                                    <div style="width: 95%;" class="progress-bar progress-bar-danger">
                                                        <span class="sr-only">95% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <i class="demo-pli-file-edit icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">Write a news article</p>
                                                <small>Last Update 8 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media" href="#">
                                            <span class="label label-info pull-right">New</span>
                                            <div class="media-left">
                                                <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">Comment Sorting</p>
                                                <small>Last Update 8 hours ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <i class="demo-pli-add-user-star icon-2x"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">New User Registered</p>
                                                <small>4 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url('assets/admin-template/') ?>img/profile-photos/9.png">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">Lucy sent you a message</p>
                                                <small>30 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="media" href="#">
                                            <div class="media-left">
                                                <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url('assets/admin-template/') ?>img/profile-photos/3.png">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no text-nowrap text-main text-semibold">Jackson sent you a message</p>
                                                <small>40 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Dropdown footer-->
                        <div class="pad-all bord-top">
                            <a href="#" class="btn-link text-main box-block">
                                <i class="pci-chevron chevron-right pull-right"></i>Show All Notifications
                            </a>
                        </div>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End notifications dropdown-->

                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="ic-user pull-right">
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--You can use an image instead of an icon.-->
                            <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <i class="demo-pli-male"></i>
                        </span>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--You can also display a user name in the navbar.-->
                        <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    </a>

                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                        <ul class="head-list">
                            <li>
                                <a href="<?php echo base_url('profile') ?>"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('setting') ?>"><i class="demo-pli-gear icon-lg icon-fw"></i> Settings</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('login/logout') ?>"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->

            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->