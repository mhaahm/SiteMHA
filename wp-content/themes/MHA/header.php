<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="Devloper" content="Symfony">
    <meta name="Devloper" content="PHP">
    <meta name="Devloper" content="NodeJs">
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
</head>
<body>
<div class="body">
    <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body header-body-bottom-border-fixed">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <?php
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <?php wp_nav_menu([
                                                'theme_location' => 'header',
                                                'menu_id' => 'mainNav',
                                                'menu_class' => 'nav nav-pills',
                                                'container' => false
                                        ]) ?>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex"><a href="#"
                                                                                                            class="header-nav-features-toggle"
                                                                                                            data-focus="headerSearch"><i
                                                class="fas fa-search header-nav-top-icon"></i></a>
                                    <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                        <form role="search"
                                              action="https://preview.oklerthemes.com/porto/8.0.0/page-search-results.html"
                                              method="get">
                                            <div class="simple-search input-group"><input class="form-control text-1"
                                                                                          id="headerSearch" name="q"
                                                                                          type="search" value=""
                                                                                          placeholder="Search..."> <span
                                                        class="input-group-append">															<button
                                                            class="btn" type="submit">																<i
                                                                class="fa fa-search header-nav-top-icon"></i>															</button>														</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
