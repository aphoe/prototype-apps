<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="aphoe's prototype projects">
    <link href="assets/images/favicon.png" rel="icon">
    <title>Aphoe's Prototypes</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Work+Sans:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
<div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo-dark.png" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout3">
        <div class="bg-img"><img src="assets/images/bg.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading mb-0">Prototypes</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ===========================
      portfolio grid
    ============================= -->
    <section class="portfolio-grid">
        <div class="container">
            <div class="row">
                <!-- portfolio item -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="assets/images/portfolio/grav.jpg" alt="Grav">
                            <div class="portfolio-item__hover">
                                <div class="portfolio-item__hover__inner">
                                    <a class="zoom__icon" href="/grav" target="_blank">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div><!-- /.portfolio-item__hover__inner -->
                            </div><!-- /.portfolio-item__hover -->
                        </div><!-- /.portfolio-item__img -->
                        <div class="portfolio-item__info">
                            <h4 class="portfolio-item__title"><a href="/grav" target="_blank">Grav</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="javascript:void(0)">PHP</a><a href="javascript:void(0)">CMS</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-info -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="assets/images/portfolio/mediawiki.jpg" alt="Mediawiki">
                            <div class="portfolio-item__hover">
                                <div class="portfolio-item__hover__inner">
                                    <a class="zoom__icon" href="/mediawiki" target="_blank">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div><!-- /.portfolio-item__hover__inner -->
                            </div><!-- /.portfolio-item__hover -->
                        </div><!-- /.portfolio-item__img -->
                        <div class="portfolio-item__info">
                            <h4 class="portfolio-item__title"><a href="/mediawiki" target="_blank">MediaWiki</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="javascript:void(0)">PHP</a><a href="javascript:void(0)">Wiki</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-info -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->

                <?php
                /*
                ?>
                <!-- portfolio item -->
                <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in">
                    <div class="portfolio-item">
                        <div class="portfolio-item__img">
                            <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                            <div class="portfolio-item__hover">
                                <div class="portfolio-item__hover__inner">
                                    <a class="zoom__icon" href="assets/images/portfolio/grid/2.jpg">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div><!-- /.portfolio-item__hover__inner -->
                            </div><!-- /.portfolio-item__hover -->
                        </div><!-- /.portfolio-item__img -->
                        <div class="portfolio-item__info">
                            <h4 class="portfolio-item__title"><a href="#">Card Board Boxes</a></h4>
                            <div class="portfolio-item__cat">
                                <a href="#">Print</a><a href="#">Packaging</a>
                            </div><!-- /.portfolio-cat -->
                        </div><!-- /.portfolio-info -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                */
                ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio grid  -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="footer-copyright">
              <span class="mb-0">&copy; <?php echo date('Y'); ?> All Rights Reserved
                <a href="https://aphoe.com"target="_blank">aphoe</a>
              </span>
                    </div><!-- /.Footer-copyright -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

</div><!-- /.wrapper -->

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>