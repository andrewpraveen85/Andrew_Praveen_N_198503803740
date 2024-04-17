<?php
/**
 * Template Name: andrew_wp_theme_v_1.0
 */

$root_path = "http://wp-andrew/wp-content/themes/andrew_wp_theme/assets/";
$target_folder = "/1.0";
$post->ID= 2;
?>
<!DOCTYPE html>
<html lang="en" class="mt-0">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:image" content=""/>
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:type" content="Website">
        <meta property="og:url" content="">
        <meta property="og:description" content=''>
        <meta property="fb:app_id" content=""/>
        <meta name="Description" content="">
        <meta name="Keywords" content="">
        <meta name="facebook-domain-verification" content="a62m3lfkim9whhlqa0xtt25h2gkhj1" />
        <title>WP - Andrew</title>
        <link rel="icon" href="" type="image/png" sizes="196x196">
        <link rel="stylesheet" href="<?php echo($root_path); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="<?php echo($root_path); ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo($root_path); ?>css/style.css?v=<?= time() ?>">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="<?php echo($root_path); ?>js/bootstrap.bundle.min.js"></script>
        <script src='<?php echo($root_path); ?>js/common.js?v=<?= time() ?>'></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="bg-img">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-transparent">
                  <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <div class="d-flex"><img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0003s_0002_menu-4.png" alt="" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" /> <img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0003s_0000_MENU.png" alt="" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" /></div>
                          </a>
                            
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0002s_0001_EN.png" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" alt=""/></a>
                          </li>
                      </ul>
                      <form class="d-flex">
                          <img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0001s_0000_placeholder-filled-point.png" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" alt=""/>
                          <img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0001s_0001_Forma-1.png" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" alt=""/>
                          <img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0001s_0002_call-answer.png" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" alt=""/>
                          <img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0001s_0003_if_icon-camera_211634.png" style="width: 100%;height: 100%;position: relative;top: 10px;padding: 15px;" alt=""/>                       
                      </form>
                    </div>
                  </div>
                </nav>
            </div>
            <div class="container mt-1 mb-3">
                <div class="d-flex justify-content-center pb-5 mb-5">
                    <img src="<?php echo($root_path); ?>/img/Home-Page_0005s_0003s_0001_Layer-1.png" alt=""/>
                </div>
                <div class="d-flex justify-content-center pt-5 mt-5">
                    <h1 class="fs-1 text-white text-center pt-5 mt-5">Escape in Crete and Enjoy<br>your dream summer holidays</h1>
                </div>
                <div class="d-flex justify-content-center pb-5 mb-5">
                    <p class="text-white text-center ">Scroll down for More <img src="<?php echo($root_path); ?>/img/Home-Page_0006s_0000s_0001_Forma-1.png" alt=""/></p>
                </div>
            </div>
          </div>
        <section id="plugin_loading">
            <div class="container mt-5 mb-5">
                <?php the_content(); ?>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-7">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="<?php echo($root_path); ?>/img/Home-Page_0003s_0000s_0005_test2.021.png" alt="" class="d-block w-100" />
                              </div>
                              <div class="carousel-item">
                                <img src="<?php echo($root_path); ?>/img/Home-Page_0003s_0000s_0004_DRZ_MG_3717z.png" alt="" class="d-block w-100" />
                              </div>
                              <div class="carousel-item">
                                <img src="<?php echo($root_path); ?>/img/Home-Page_0003s_0001s_0004_pool-(23).png" alt="" class="d-block w-100" />
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-5 bg-light">
                        <div class="position-relative" style="position: relative">
                            <div class="position-absolute top-20 start-20" style="position: absolute; top:100px; left:10%;">
                                <h3>Beach Paradise</h3>
                                <p>superb facilities and water paradise for all ages.</p>
                                <div style="text-align: center;"><button class="btn btn-info" id="counterButton"><span id='counterDisply'>0</span> <span class="text-white">LIKES</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5 mb-5">
                    <div class="col-5">
                        <div class="position-relative" style="position: relative">
                            <div class="position-absolute top-20 start-20" style="position: absolute; top:100px; left:10%;">
                                <h3>Accommodation</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam arcu nunc, at aliquam ex lacinia a. Nulla lacinia lorem nec magna finibus efficitur. Nullam cursus nisl diam. Vestibulum sem mauris, tincidunt dignissim dapibus imperdiet, feugiat a nunc. In dapibus leo vitae sapien rutrum auctor eget at velit. </p>
                                <div style="text-align: center;"><button class="btn btn_accom" style="" id="counter"><img src="<?php echo($root_path); ?>/img/Home-Page_0000s_0005_LEARN-MORE.png" alt=""/> <img src="<?php echo($root_path); ?>/img/Home-Page_0003s_0000s_0002_Forma-1.png" alt=""/></button></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-7"><img src="<?php echo($root_path); ?>/img/Home-Page_0003s_0000s_0004_DRZ_MG_3717z.png" alt="" class="d-block w-100" /> </div>
                </div>
                <div class="row grey-bg mt-5">
                    <div class="col-11 pt-3">
                        <div class="d-flex justify-content-center text-white text-center">CONTACT / BOOK ONLINE / AWARDS / DOWNLOADS / SITEMAP / NEWS & OFFERS</div>
                    </div>
                    <div class="col-1 pt-2">
                        <button class="btn btn-info"><img src="<?php echo($root_path); ?>/img/Home-Page_0001s_0000_right-arrow.png" alt=""/></button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 pt-3 d-flex justify-content-center text-white text-center">
                        <img src="<?php echo($root_path); ?>/img/Home-Page_0002s_0001_Layer-8.png" alt=""/>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-12 pt-3 d-flex justify-content-center text-center">
                        2017 Pilot Beach 5Star Resort in Crete | Website by Hotel Web Agency.
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
