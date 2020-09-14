<?php
/*
Template Name: Home
*/
get_header();
?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!-- ===============================
    Banner
    ================================ -->
    <section class="banner">
        <div class="container">
            <div class="row alignItemCenter">
                <div class="col-sm-12 col-md-6  col-lg-6">
                    <div class="bannerContent">
                        <?php $editor_choice = get_field('editor_choice'); 
                        if ($editor_choice) { ?>
                            <div class="editor">
                                <span><i class="fa fa-check"></i></span> <?php echo $editor_choice; ?>
                            </div>
                        <?php } ?>

                        <?php $banner_title = get_field('banner_title'); 
                        if ($banner_title) { ?>
                            <h1><?php echo $banner_title; ?></h1>
                        <?php } ?>

                        <?php $banner_description = get_field('banner_description'); 
                        if ($banner_description) { ?>
                            <div class="infotext"><?php echo $banner_description; ?></div>
                        <?php } ?>

                        <div class="btnwrp">
                            <?php $try__button_link = get_field('try__button_link'); 
                            if ($try__button_link) { ?>
                            <a href="<?php echo $try__button_link; ?>" class="btnTry">Try for free</a>
                            <?php } ?>
                            <?php $watch_video_link = get_field('watch_video_link'); 
                            if ($watch_video_link) { ?>
                            <a href="<?php echo $watch_video_link; ?>" class="link">Watch demo video</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6  col-lg-6">
                    <div class="bannerImage">
                        <?php $banner_image = get_field('banner_image'); 
                        if ($banner_image) { ?>
                        <img src="<?php echo $banner_image['url']; ?>" alt="Vector 1">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/banner_1.png" alt="Vector 1">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <span class="circleRed circle1"></span>
        <span class="circleRed circle2"></span>
        <span class="circleRed circle3"></span>
        <span class="circleGrey pos1"></span>
        <span class="squareGrey pos2"></span>
    </section>

    <!-- ===============================
    Clients
    ================================ -->
    <?php if( have_rows('clients', 'option') ): ?>
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="smallTitle">Trusted by companies like</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme clientSlider">
                        <?php 
                        while( have_rows('clients', 'option') ) : the_row(); 
                            $image = get_sub_field('image');
                            $link = get_sub_field('link');
                            ?>
                            <div class="item">
                                <div class="itemWrap">
                                    <a href="<?php echo $link; ?>" tsrget="_blank"><img src="<?php echo $image['url']; ?>" alt="south"></a>
                                </div>
                            </div>
                        <?php endwhile; ?>                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ===============================
    Features
    ================================ -->
    <section class="features" id="keyFeatures">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="fImage">
                        <?php $awesome_image = get_field('awesome_image');
                        if ($awesome_image) {  ?>
                        <img src="<?php echo $awesome_image['url']; ?>" alt="Awesome app features">
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector_2.png" alt="vector 2">
                        <?php } ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg2.png" alt="bg2" class="fbg">
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="fwrap">
                        <?php $aesome_title = get_field('aesome_title');
                        if ($aesome_title) {  ?>
                        <h2 class="titlev2"><?php echo $aesome_title; ?></h2>
                        <?php } ?>
                        
                        <?php $awesome_description = get_field('awesome_description');
                        if ($awesome_description) {  ?>
                        <p><?php echo $awesome_description; ?></p>
                        <?php } ?>
                    </div>
                    <div class="featwrap">
                        <?php if( have_rows('awesome_features') ): 
                            while( have_rows('awesome_features') ) : the_row(); 
                                $Icon = get_sub_field('Icon');
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                                $color = get_sub_field('color');
                                $boxColor = '';
                                if ($color==='Red'){
                                    $boxColor = 'boxRed';
                                } else if ($color==='Green'){
                                    $boxColor = 'boxGreen';
                                } else if ($color==='Blue'){
                                    $boxColor = 'boxBlue';
                                } else {
                                    $boxColor = 'boxBlue';
                                }
                                ?>
                                <div class="fbox <?php echo $boxColor; ?>">
                                    <span class="icon">
                                        <img src="<?php echo $Icon['url']; ?>" alt="<?php echo $heading; ?>">
                                    </span>
                                    <div class="fcontent">
                                        <h4><?php echo $heading; ?></h4>
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                            <?php endwhile; 
                        endif; ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===============================
    Jackpot
    ================================ -->
    <section class="jackpot">
        <div class="container">
            <div class="row alignItemCenter">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="jtitle">
                        Smart jackpots that <br>you may love this <br>anytime & anywhere
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="jtext">
                        The rise of mobile devices transforms the way we <br>consume information entirely and the world's most <br>elevant channels such as Facebook.
                    </div>
                </div>
            </div>
            <div class="row jmarginTop">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxRed">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/fast.png" alt="Automatic Payouts">
                        </div>
                        <div class="fcontent">
                            <h4>Automatic Payouts</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxBlue">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/proto.png" alt="Network Effect">
                        </div>
                        <div class="fcontent">
                            <h4>Network Effect</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxGreen">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/editing-green.png" alt="Bigger Rewards Method">
                        </div>
                        <div class="fcontent">
                            <h4>Bigger Rewards Method</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===============================
    Build By
    ================================ -->
    <section class="buildBy">
        <div class="container">
            <div class="row alignItemCenter">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="buildImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector_3.png" alt="vector_3">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="buildContent">
                        <h2>Designed & built by <br>the latest code <br> integration</h2>
                        <p>The rise of mobile devices transforms the way we consume information entirely and the world's
                            most elevant channels such as Facebook.</p>
                        <div class="btnwrp">
                            <a href="javascript:;" class="btnTry">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===============================
    Why Choose
    ================================ -->
    <section class="whyChoose">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 textCenter">
                    <h2 class="title">Why you should choose <br>our app</h2>
                    <p class="subText">The rise of mobile devices transforms the way we consume information entirely and
                        the world's most elevant channels such as Facebook.</p>
                </div>
            </div>
            <div class="row whyChooseBox">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxRed">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/app.png" alt="App Development">
                        </div>
                        <div class="fcontent">
                            <h4>App Development</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxBlue">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/trophy.png" alt="10 Times Awards">
                        </div>
                        <div class="fcontent">
                            <h4>10 Times Awards</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxGreen">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/cloud.png" alt="Cloud Storage">
                        </div>
                        <div class="fcontent">
                            <h4>Cloud Storage</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxGreen">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/customization.png" alt="Customization">
                        </div>
                        <div class="fcontent">
                            <h4>Customization</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxBlue">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/ux.png" alt="UX Planning">
                        </div>
                        <div class="fcontent">
                            <h4>UX Planning</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="jbox boxGreen">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/customer_supp.png" alt="Customer Support">
                        </div>
                        <div class="fcontent">
                            <h4>Customer Support</h4>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ===============================
    Ultimate Features
    ================================ -->
    <section class="ultimateFeatures">
        <div class="container">
            <div class="row alignItemCenter">

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title">Ultimate features <br>that we build</h2>
                            <p class="subText">The rise of mobile devices transforms the way we consume information
                                entirely .</p>
                        </div>
                    </div>
                    <div class="row ufbox">
                        <div class="col-sm-6">
                            <div class="jbox boxRed">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/app.png" alt="App Development">
                                </div>
                                <div class="fcontent">
                                    <h4>App Development</h4>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood
                                        tests.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="jbox boxGreen">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/ux.png" alt="UX Planning">
                                </div>
                                <div class="fcontent">
                                    <h4>UX Planning</h4>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood
                                        tests.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="jbox boxGreen">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/cloud.png" alt="Cloud Storage">
                                </div>
                                <div class="fcontent">
                                    <h4>Cloud Storage</h4>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood
                                        tests.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="jbox boxBlue">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/customer_supp.png" alt="Customer Support">
                                </div>
                                <div class="fcontent">
                                    <h4>Customer Support</h4>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood
                                        tests.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="btnwrp">
                                <a href="javascript:;" class="btnTry">See all</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="uFImage">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/vector_4.png" alt="vector 2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/bg3.png" alt="bg2" class="fbg">
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
    </section>

    <!-- ===============================
    Pricing
    ================================ -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 textCenter">
                    <h2 class="title">Get awesome features, without <br>extra charges</h2>
                    <p class="subText">The rise of mobile devices transforms the way we consume information entirely and
                        the world's most elevant channels such as Facebook.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="pricingTab">
                        <div class="tab">
                            <a href="javascript:;" class="btntab active">Monthly</a>
                            <a href="javascript:;" class="btntab">Annually</a>
                        </div>
                    </div>

                    <div class="tablewrp">

                        <div class="priceTable priceTable2">
                            <div class="topsection">
                                <div class="price">$0<span>/month</span></div>
                                <div class="ptitle">Business Class</div>
                                <dic class="pinfo">For small teams or office</dic>
                            </div>
                            <div class="middle">
                                <div class="info">Drag & Drop Builder</div>
                                <div class="info">1,000's of Templates</div>
                                <div class="info">Blog Support Tools</div>
                                <div class="info">eCommerce Store</div>
                            </div>
                            <div class="bottom">
                                <p><a href="javascript:;" class="btnSubscribe">Subscribe Now</a></p>
                            </div>
                        </div>

                        <div class="priceTable">
                            <div class="topsection">
                                <div class="price">$99<span>/month</span></div>
                                <div class="ptitle">Pro Master</div>
                                <dic class="pinfo">For Best opportunities</dic>
                            </div>
                            <div class="middle">
                                <div class="info">Drag & Drop Builder</div>
                                <div class="info">1,000's of Templates</div>
                                <div class="info">Blog Support Tools</div>
                                <div class="info">eCommerce Store</div>
                            </div>
                            <div class="bottom">
                                <p><a href="javascript:;" class="btnSubscribe">Subscribe Now</a></p>
                                <p><a href="javascript:;" class="link">Or Start 14 days trial</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ===============================
    Client Meet
    ================================ -->
    <section class="clientmeet" id="testimonials">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="mapwrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/map.png" alt="" class="mapImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face1.png" alt="" class="face1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face2.png" alt="" class="face2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face3.png" alt="" class="face3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face4.png" alt="" class="face4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face5.png" alt="" class="face5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face6.png" alt="" class="face6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face7.png" alt="" class="face7">
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title">Meet Client Satisfaction <br>by using product</h2>
                            <p class="subText">The rise of mobile devices transforms the way we consume. elevant
                                channels such as Facebook.</p>

                        </div>
                        <div class="col-sm-12">

                            <div class="owl-carousel owl-theme testimonialsSlider">
                                <?php 
                                $args = array(
                                    'post_type' => 'testimonials',
                                    'posts_per_page' => -1,
                                    'orderby' => 'id',
                                    'order' => 'DESC'
                                );
                                $i=1;
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $testimonial_title = get_field('testimonial_title');
                                    $designation = get_field('designation');
                                    $star_rating = get_field('star_rating');
                                    ?>
                                    <div class="item">
                                        <div class="testimonial">
                                            <div class="star">
                                            <?php 
                                            for($i=0;$i<$star_rating;$i++) { ?>
                                                <i class="fa fa-star"></i>
                                            <?php } ?>
                                            <?php
                                            for($i=0;$i<(5-$star_rating);$i++) { ?>
                                                <i class="fa fa-star grey"></i>
                                            <?php } ?>
                                            </div>
                                            <h4><?php echo $testimonial_title; ?></h4>
                                            <div class="ttext"><?php echo get_the_content(); ?></div>
                                            <div class="userInfo">
                                                <div class="profilePic">
                                                <?php 
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail();
                                                }
                                                else {
                                                   ?>
                                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/image/face8.png" alt="face8" />
                                                   <?php
                                                }
                                                ?>
                                                </div>
                                                <div class="profinInfo">
                                                    <h5><?php echo get_the_title(); ?></h5>
                                                    <div class="desig"><?php echo $designation; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                $i++;
                                endwhile;
                                wp_reset_query();
                                ?>
                                
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ===============================
    FAQ
    ================================ -->
    <section class="faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 textCenter">
                    <h2 class="title">Frequently asked questions</h2>
                    <p class="subText">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="faqwrap">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <?php 
                            $args = array(
                                'post_type' => 'FAQ',
                                'posts_per_page' => -1,
                                'orderby' => 'id',
                                'order' => 'DESC'
                            );
                            $i=1;
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                ?>
                                <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                            <i class="more-less fa fa-plus"></i>
                                            <?php echo get_the_title(); ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading<?php echo $i; ?>">
                                    <div class="panel-body">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            </div>
                                <?php
                            $i++;
                            endwhile;
                            wp_reset_query();
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===============================
    Download
    ================================ -->
    <?php 
    $app_store_link = get_field('app_store_link', 'option');
    $play_store_link = get_field('play_store_link', 'option');
    $download_title = get_field('download_title', 'option');
    $download_info = get_field('download_info', 'option');
    if ($app_store_link && $play_store_link) { ?>    
    <section class="download">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                    <h2 class="title"><?php echo $download_title; ?></h2>
                    <p class="subText"><?php echo $download_info; ?></p>
                    <div class="storewrap">
                        <a href="<?php echo $play_store_link; ?>" class="playstore">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/playstore.png" alt="playstore">
                        </a>
                        <a href="<?php echo $app_store_link; ?>" class="appstore">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/appstore.png" alt="appstore">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
