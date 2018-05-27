<?php
/*
    Template Name: Contact
*/
?>
<?php get_header(); ?>
        <!-- main content -->
        <div class="main-content">

            <!-- kopa area 24-->
            <section class="kopa-area kopa-area-24 white-text-style">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="kopa-breadcrumb">
                                <h3>liên hệ</h3>
                                <div class="breadcrumb-content">
                                    <p>Chúng tôi cung cấp một kho bãi rộng lớn
                                        <br> để lưu trữ hàng hóa của bạn ngay cả trong thời gian dài.</p>
                                    <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					                                <a itemprop="url" href="#">
					                                    <span itemprop="title">Trang chủ</span>
                                    </a>
                                    </span>
                                    <span>&nbsp; &nbsp; / &nbsp; &nbsp;</span>
                                    <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
					                                <a itemprop="url" class="current-page">
					                                    <span itemprop="title">Liên hệ</span>
                                    </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end -->
            <!-- kopa area 40 -->
            <section class="kopa-area kopa-area-40">
                <div class="container">
                    <div class="row ul-mh ct-row-02">
                        <!-- wrap map -->
                        <div class="col-xs-12 col-sm-6 ct-col-02 col-md-8  ">
                            <!-- widget -->
                            <div class="widget ex-module-map-1">
                                <div class="widget-content">
                                    <article class="entry-item">
                                        <div class="entry-content">
                                            <!-- ======================== -->
                                            <div id="kopa-map" class="kopa-map" data-place="New York" data-latitude="40.6700" data-longitude="-73.9400"></div>
                                            <!-- ======================= -->
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        <!-- wrap -->
                        <div class="col-xs-12 col-sm-6 col-md-4 ct-col-02  white-text-style">
                            <div class="widget ex-module-contact-11">
                                <div class="widget-content">
                                    <ul class="ul-mh">
                                        <!-- ** -->
                                        <li>
                                            <article class="entry-item">
                                                <div class="entry-thumb">
                                                    <span class="ti-location-pin"></span>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title">Văn phòng</h4>
                                                    <p> A802, Tổ 18B, Khu Phố 1, Phường Long Bình,
                                                        <br> Tp.Biên Hòa, Đồng Nai</p>
                                                </div>
                                            </article>
                                        </li>
                                        <!-- ** -->
                                        <li>
                                            <article class="entry-item">
                                                <div class="entry-thumb">
                                                    <span class="ti-email"></span>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title">email</h4>
                                                    <p>hoangphivina79@gmail.com</p>
                                                </div>
                                            </article>
                                        </li>
                                        <!-- ** -->
                                        <li>
                                            <article class="entry-item">
                                                <div class="entry-thumb">
                                                    <span class="ti-mobile"></span>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title">phone</h4>
                                                    <p>0942 634 923</p>
                                                    <p>+1 945 822 150</p>
                                                </div>
                                            </article>
                                        </li>
                                        <!-- ** -->
                                        <li>
                                            <article class="entry-item">
                                                <div class="entry-thumb">
                                                    <span class="ti-time"></span>
                                                </div>
                                                <div class="entry-content">
                                                    <h4 class="entry-title">làm việc</h4>
                                                    <p>8.00 - 18.00 T2 - CN</p>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- wrap -->
                        <div class="col-xs-12  ct-col-02 style-wrap-02">
                            <div class="widget ex-module-contact-12">
                                <header class="widget-header style-08">
                                    <h3 class="widget-title ">Phản hồi khách hàng</h3>
                                    <span class="sub-title color-title-3">Công ty chúng tôi chỉ sử dụng các loại xe hiện đại đảm bảo chất lượng và an toàn. Bạn sẽ hài lòng với dịch vụ vận chuyện uy tín của chúng tôi.</span>
                                </header>
                                <div class="widget-content">
                                    <article class="entry-item">
                                        <div class="entry-content">
                                            <!--  ======================================== -->
                                            <form class="ct-form-1 form-style-1" action="processForm.php" method="post" novalidate="novalidate">

                                                <div class="row">

                                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <p class="input-block">
                                                            <label><span class="ti-user"></span>
                                                            </label>
                                                            <input type="text" value="Name" onfocus="if(this.value=='Name')this.value='';" onblur="if(this.value=='')this.value='Name';" name="name" class="valid">
                                                        </p>
                                                        <p class="input-block">
                                                            <label><span class="ti-email"></span>
                                                            </label>
                                                            <input type="text" value="Email" onfocus="if(this.value=='Email')this.value='';" onblur="if(this.value=='')this.value='Email';" name="email" class="valid">
                                                        </p>

                                                    </div>
                                                    <!-- col-md-6 -->

                                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <p class="textarea-block">
                                                            <textarea name="message" placeholder="Your message" cols="88" rows="5"></textarea>
                                                        </p>

                                                    </div>
                                                    <!-- col-md-6 -->

                                                </div>
                                                <!-- row -->

                                                <p class="input-block btn-block clearfix">
                                                    <input type="submit" value="send message" class="ct-submit-1">
                                                </p>

                                            </form>
                                            <!-- ============================================ -->
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end -->

        </div>
    </div>
    <!-- end -->
<?php 
get_sidebar();
get_footer(); 
   