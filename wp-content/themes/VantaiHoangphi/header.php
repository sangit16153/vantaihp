<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Extransport - HTML5 Responsive Template</title>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png" />
    <?php wp_head(); ?>
</head>

<body>
    <!-- main content -->
    <div class="main-container">

        <!-- header -->
        <header class="kopa-page-header kopa-page-header-1">
            <!-- kopa-header top -->
            <div class="kopa-header-top">
                <div class="container">

                    <div class="alignleft">
                        <p>Làm việc: 9 - 19h T2 - CN </p>
                    </div>
                    <div class="alignright">
                        <div class="kopa-item-header">
                            <a class="kopa-email-link" href="mailto:">Emai: hoangphivina79@gmail.com</a>
                        </div>
                        <div class="kopa-item-header">
                            <ul class="kopa-social-links">
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-facebook-official"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-rss"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end kopa header top -->
            <!-- kopa-header-botttom -->
            <div class="kopa-header-bottom">
                <div class="container">

                    <!-- logo -->
                    <div class="alignleft">

                        <figure class="kopa-logo">
                            <a href="#"><img src="https://www.vantaihoangphi.com/wp-content/uploads/2018/05/logo.png" alt="logo">
                            </a>
                        </figure>

                    </div>
                    <!-- end logo -->
                    <div class="alignright">

                        <!-- menu-main -->
                        <nav class="main-nav style-01">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'=> 'main-menu sf-menu sf-js-enabled sf-arrows'
                                 ) ); 
                            ?> 
                            <!-- <ul class="main-menu sf-menu sf-js-enabled sf-arrows">
                                <li class="curent-menu-item">
                                    <a href="index.php" class="sf-with-ul">home</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i><a href="about.php" class="sf-with-ul">about</a>
                                </li>
                                <li>
                                    <i class="fa fa-money"></i><a href="our-pricing.php" class="sf-with-ul">our pricing</a>
                                </li>
                                <li>
                                    <i class="fa fa-picture-o"></i><a href="gallery-post.php" class="sf-with-ul">GALLERY</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i><a href="career.php" class="sf-with-ul">career</a>
                                </li>
                                <li>
                                    <a href="contact.html">CONTACT</a>
                                </li>
                            </ul> -->

                        </nav>
                        <!-- end menu-main -->
                        <!-- button feature -->

                        <div class="humberger-menu">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="kopa-wrap-hidden-content-header">
                            <button class="btn-header active-support-number style-01" data-target="number-contact-header-1"><i class="fa fa-phone"></i>
                            </button>
                            <div class="wrap-support-number style-01" data-contact="number-contact-header-1">
                                <a href="callto:">Gọi hỗ trợ: 094.263.4923</a>
                            </div>
                        </div>
                        <div class="kopa-wrap-hidden-content-header">
                            <button class="btn-header active-form-search style-01" data-target="form-search-header-1"><i class="fa fa-search"></i>
                            </button>
                            <!-- ============================================ ==================================== -->
                            <!-- hidden content -->
                            <div class="wrap-hidden-content form-search-hidden" data-form="form-search-header-1">
                                <div class="container">

                                    <form action="#" class="search-form-1" method="get">
                                        <button type="submit" class="ct-submit-1"><i class="fa fa-search"></i>
                                        </button>
                                        <input class="search-text" type="text" onblur="if (this.value == '')
                                                                     this.value = this.defaultValue;" onfocus="if (this.value == this.defaultValue)
                                                                     this.value = '';" value="Search..." placeholder="Search..." name="s">
                                    </form>
                                    <span class="btn-off fa fa-times"></span>

                                </div>
                            </div>
                            <!-- end -->
                            <!-- ============================================ ==================================== -->
                        </div>

                        <!-- end button feature -->

                    </div>

                </div>
            </div>
            <!-- end kopa-heaeder-bottom -->

            <!-- menu responsive -->
            <div class="kopa-header-responsive">
                <div class="container">
                    <div class="alignleft">
                        <figure class="kopa-logo">
                            <a href="#"><img src="http://placehold.it/214x44" alt="logo">
                            </a>
                        </figure>
                    </div>
                    <div class="alignright">
                        <div class="humberger-menu">
                            <i class="fa fa-bars"></i>
                        </div>
                        <!-- button feature -->

                        <div class="kopa-wrap-hidden-content-header">
                            <button class="btn-header active-support-number style-02" data-target="number-contact-header-1"><i class="fa fa-mobile"></i>
                            </button>
                            <div class="wrap-support-number style-01" data-contact="number-contact-header-1">
                                <a href="callto:">gọi hỗ trợ: 094.263.4923</a>
                            </div>
                        </div>
                        <div class="kopa-wrap-hidden-content-header">
                            <button class="btn-header active-form-search style-02" data-target="form-search-header-1"><i class="fa fa-search"></i>
                            </button>

                            <div class="wrap-hidden-content form-search-hidden" data-form="form-search-header-1">
                                <div class="container">

                                    <form action="#" class="search-form-1" method="get">
                                        <button type="submit" class="ct-submit-1"><i class="fa fa-search"></i>
                                        </button>
                                        <input class="search-text" type="text" onblur="if (this.value == '')
                                                         this.value = this.defaultValue;" onfocus="if (this.value == this.defaultValue)
                                                         this.value = '';" value="Search..." placeholder="Search..." name="s">
                                    </form>
                                    <span class="btn-off fa fa-times"></span>

                                </div>
                            </div>

                        </div>

                        <!-- end button feature -->
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->