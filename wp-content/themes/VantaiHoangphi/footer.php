<!-- kopa footer -->
<footer class="kopa-footer">
        <p class="copyright">Copyright@2016. All Rights Reserved. Designed by KOPASOFT</p>
    </footer>
    <!-- end -->
    <!-- slider section -->
    <section class="slider-area">
        <nav class="main-nav-hidden">
            <h4 class="title-nav">main menu</h4>
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'=> 'main-menu-hidden'
                    ) ); 
            ?> 
            <!-- <ul class="main-menu-hidden">
                <li class="with-sub dropdown">
                    <a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-circle"></i> home</a>
                    <ul class="dropdown-menu">
                        <li><a href="index-1.html">home 1</a>
                        </li>
                        <li><a href="index-2.html">home 2</a>
                        </li>
                        <li><a href="index-3.html">home 3</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="about-1.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> about
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="about-1.html">about 1</a>
                        </li>
                        <li><a href="about-2.html">about 2</a>
                        </li>
                        <li><a href="our-team.html">our team</a>
                        </li>
                        <li><a href="our-pricing.html">our pricing</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="our-services.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="our-services.html">our services</a>
                        </li>
                        <li><a href="our-services-2.html">our services 2</a>
                        </li>
                        <li><a href="single-services.html">single services</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="our-services.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> elements
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="alert.html">alert</a>
                        </li>
                        <li><a href="accordion.html">accordion</a>
                        </li>
                        <li><a href="block-quote.html">blockquote</a>
                        </li>
                        <li><a href="button.html">button</a>
                        </li>
                        <li><a href="cart-dropdown.html">cart-dropdown</a>
                        </li>
                        <li><a href="column.html">column</a>
                        </li>
                        <li><a href="counter.html">counter</a>
                        </li>
                        <li><a href="dropcap.html">dropcap</a>
                        </li>
                        <li><a href="dropdown-menu.html">dropdown menu</a>
                        </li>
                        <li><a href="header-style.html">header style</a>
                        </li>
                        <li><a href="heading.html">heading</a>
                        </li>
                        <li><a href="introduce-boxes.html">introduce boxes</a>
                        </li>
                        <li><a href="loading-bar.html">loading bar</a>
                        </li>
                        <li><a href="pricing-table.html">pricing table</a>
                        </li>
                        <li><a href="tabs.html">tabs</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="our-services.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> shop
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="shop.html">shop</a>
                        </li>
                        <li><a href="single-shop.html">single shop</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="our-services.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="gallery.html">gallery</a>
                        </li>
                        <li><a href="gallery-2.html">gallery 2</a>
                        </li>
                        <li><a href="gallery-post.html">gallery post</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="our-services.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> blog
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="blog-center.html">blog center</a>
                        </li>
                        <li><a href="blog-large.html">blog large</a>
                        </li>
                        <li><a href="single-blog.html">blog single</a>
                        </li>
                        <li><a href="blog-masonry.html">blog masonry</a>
                        </li>
                    </ul>
                </li>
                <li class="with-sub dropdown">
                    <a href="our-services.html" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-circle"></i> contact
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="contact.html">contact</a>
                        </li>
                        <li><a href="career.html">career</a>
                        </li>
                        <li><a href="get-a-quote.html">get a quote</a>
                        </li>
                        <li><a href="404.html">404 error</a>
                        </li>
                    </ul>
                </li>
            </ul> -->
            <div class="wrap-icon-social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-rss"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <a href="#" class="btn-close-hidden-nav"><span class="icon_close"></span></a>
    </section>
    <!-- end -->
    <!-- button back top -->
    <div class="btn-back-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- end -->
    <!-- [Slide Area] -->
    
    <?php wp_footer(); ?>
</body>

</html>