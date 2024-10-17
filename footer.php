</div>
</div>
<div class="footer_area" id="footer_contents">
    <!-- the loop -->
    <?php
    include 'connection.php';
    $Query = "SELECT content, purpose FROM content";
    $Result = $conn->query($Query);

    $Data = array();

    if ($Result->num_rows > 0) {
        while ($Row = $Result->fetch_assoc()) {
            $raw = str_replace("<p>", "", $Row['content']);
            $raw = str_replace("</p>", "", $raw);
            $Data[$Row['purpose']] = $raw;
        }
    }
    ?>

    <div data-elementor-type="wp-post" data-elementor-id="100" class="elementor elementor-100">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0b18182 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="0b18182" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-c70badb"
                    data-id="c70badb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-55faeb9 elementor-widget elementor-widget-monst-logo-v1"
                            data-id="55faeb9" data-element_type="widget" data-widget_type="monst-logo-v1.default">
                            <div class="elementor-widget-container">

                                <div class="logo_box">
                                    <a href="index.php" class="logo navbar_brand">
                                        <img decoding="async" src="img/logo.png" alt="Agile Group"
                                            class="logo_default">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-44fcc6b"
                    data-id="44fcc6b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2def357 elementor-widget elementor-widget-text-editor"
                            data-id="2def357" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <style>
                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                        background-color: #69727d;
                                        color: #fff
                                    }

                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                        color: #69727d;
                                        border: 3px solid;
                                        background-color: transparent
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                        margin-top: 8px
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                        width: 1em;
                                        height: 1em
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap {
                                        float: left;
                                        text-align: center;
                                        line-height: 1;
                                        font-size: 50px
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                        display: inline-block
                                    }
                                </style>
                                <p>

                                    <?php
                                    if (isset($Data['Footer Description'])) {
                                        echo $Data['Footer Description'];
                                    } else {
                                        echo "Footer Description"; // Provide a default if no content is found
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-28d21b6"
                    data-id="28d21b6" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-fd2e91b"
                    data-id="fd2e91b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-8ab03d4 elementor-widget elementor-widget-monst-contact-box-v1"
                            data-id="8ab03d4" data-element_type="widget"
                            data-widget_type="monst-contact-box-v1.default">
                            <div class="elementor-widget-container">
                                <div class="contact_box one wow animate__animated animate__fadeInUp"
                                    data-wow-delay="0">
                                    <div class="title">
                                        <h2>Office</h2>
                                    </div>
                                    <div class="contact-infor">
                                        <span><?php
                                                if (isset($Data['Footer Company Address'])) {
                                                    echo $Data['Footer Company Address'];
                                                } else {
                                                    echo "Footer Company Address"; // Provide a default if no content is found
                                                }
                                                ?> </span>
                                    </div>

                                    <div class="contact-infor">
                                    </div>

                                    <div class="contact-infor">
                                    </div>

                                    <div class="contact-infor">
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-e036205"
                    data-id="e036205" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-9910742 elementor-widget elementor-widget-monst-contact-box-v1"
                            data-id="9910742" data-element_type="widget"
                            data-widget_type="monst-contact-box-v1.default">
                            <div class="elementor-widget-container">
                                <div class="contact_box one wow animate__animated animate__fadeInUp"
                                    data-wow-delay="0">
                                    <div class="title">
                                        <h2>Contacts</h2>
                                    </div>
                                    <div class="contact-infor">
                                    </div>

                                    <div class="contact-infor">
                                        <?php
                                        if (isset($Data['Footer Company Phone'])) {
                                            echo $Data['Footer Company Phone'];
                                        } else {
                                            echo "Footer Company Phone"; // Provide a default if no content is found
                                        }
                                        ?>

                                    </div>

                                    <div class="contact-infor">
                                        <?php
                                        if (isset($Data['Footer Company Email'])) {
                                            echo $Data['Footer Company Email'];
                                        } else {
                                            echo "Footer Company Email"; // Provide a default if no content is found
                                        }
                                        ?>
                                    </div>

                                    <div class="contact-infor">
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-7cc2372 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="7cc2372" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e9593ec"
                    data-id="e9593ec" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-0e1d368 elementor-widget elementor-widget-text-editor"
                            data-id="0e1d368" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p style="margin: 0;">© <?php echo date('Y'); ?>. All rights reserved. Agile Group</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1e1eab1"
                    data-id="1e1eab1" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ea8494f elementor-widget elementor-widget-monst-social-media-v1"
                            data-id="ea8494f" data-element_type="widget"
                            data-widget_type="monst-social-media-v1.default">
                            <div class="elementor-widget-container">

                                <!-- <div class="mobile-social-icon">
                                <ul>
                                    <li> <a href="#"> <span class="fab fa-facebook"></span>

                                        </a></li>
                                    <li> <a href="#"> <span class="fab fa-twitter"></span>

                                        </a></li>
                                    <li> <a href="#"> <span class="fab fa-skype"></span>

                                        </a></li>
                                    <li> <a href="#"> <span class="fab fa-instagram"></span>

                                        </a></li>
                                </ul>
                            </div> -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end of the loop -->


</div>
<header class="mobile_header_hidden mobile_header_panel">
    <div class="navbar-backdrop"></div>
    <div class="mobile_content">
        <button class="navbar-close">
            <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blue-500"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>
        <div class="mobile-menu">
            <ul id="menu-main-menu-2" class="navbar_nav" itemscope
                itemtype="http://www.schema.org/SiteNavigationElement">

                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 nav-item"><a
                        itemprop="url" href="index.php" class="nav-link"><span itemprop="name">Home</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 nav-item"><a
                        itemprop="url" href="about_us.php" class="nav-link"><span itemprop="name">About
                            Us</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 nav-item"><a
                        itemprop="url" href="index.php#services" class="nav-link"><span
                            itemprop="name">Services</span></a>
                </li>
                <li
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-71 nav-item">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="dropdown-toggle nav-link" id="menu-item-dropdown-71"><span
                            itemprop="name">Database & Tools</span></a>
                    <ul class="dropdown_menu" aria-labelledby="menu-item-dropdown-71">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 nav-item">
                            <a itemprop="url" href="verify_cert.php" class="dropdown-item nav-link"><span itemprop="name">Verify
                                    Certification</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 nav-item">
                            <a itemprop="url" href="roar_tool.php" class="dropdown-item nav-link"><span itemprop="name">Risk & Opportunity Assessment Register</span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78 nav-item">
                            <a itemprop="url" href="roar_report.php" class="dropdown-item nav-link"><span itemprop="name">Risk & Opportunity Assessment Tool</span></a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95 nav-item"><a
                        itemprop="url" href="blogs.php" class="nav-link"><span itemprop="name">Blogs</span></a>
                </li>
            </ul>
        </div>

        <div class="group_button">

            <a href="contact_us.php" class="theme_btn one">
                Contact Us </a>

            <?php

            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                echo '<a href="logout.php" class="theme_btn two">Logout <i class="fi-rs-arrow-right"></i></a>';
            } else {
                echo '<a href="login.php" class="theme_btn two">Login <i class="fi-rs-arrow-right"></i></a>';
            }

            ?>


        </div>

        <div class="get_in_touch">
            <h6>Get In Touch</h6>

            <a href="mailto:info@agilegroup.org"> <i class="fa fa-envelope"></i>info@agilegroup.org</a>

            <a href="tel:+91 11 47063474"> <i class="fa fa-phone"></i>+91 11 47063474</a>

        </div>

        <div class="mt-auto">
            <a class="inline-block px-1" href="">
                <i class="fab fa-facebook"></i>
            </a>

            <a class="inline-block px-1" href="">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="inline-block px-1" href="">
                <i class="fab fa-skype"></i>
            </a>
            <a class="inline-block px-1" href="">
                <i class="fab fa-youtube"></i>
            </a>
            <a class="inline-block px-1" href="">
                <i class="fab fa-instagram"></i>
            </a>
        </div>

    </div>
</header>

</div>

<!--page_wapper-->

<div id="um_upload_single" style="display:none"></div>

<div id="um_view_photo" style="display:none">

    <a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close"
        aria-label="Close view photo modal">
        <i class="um-faicon-times"></i>
    </a>

    <div class="um-modal-body photo">
        <div class="um-modal-photo"></div>
    </div>

</div>
<script>
    (function() {
        function maybePrefixUrlField() {
            const value = this.value.trim()
            if (value !== '' && value.indexOf('http') !== 0) {
                this.value = 'http://' + value
            }
        }

        const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
        for (let j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField)
        }
    })();
</script>
<link rel='stylesheet' id='elementor-post-2034-css' href='css/post-2034.css?ver=1687410299' type='text/css'
    media='all' />
<link rel='stylesheet' id='elementor-post-2076-css' href='css/post-2076.css?ver=1687410300' type='text/css'
    media='all' />
<link rel='stylesheet' id='elementor-post-100-css' href='css/post-100.css?ver=1687410300' type='text/css'
    media='all' />

<script type='text/javascript' src='js/main.js?ver=1.0.0' id='monst-main-js'></script>
<script type='text/javascript' src='js/bootstrap.min.js?ver=5.0.2' id='monst-bootstrapjs-js'></script>
<script type='text/javascript' src='js/waypoints.js?ver=4.0.1' id='monst-Waypoints-js'></script>
<script type='text/javascript' src='js/counterup.js?ver=1.0.0' id='monst-counterup-js'></script>
<script type='text/javascript' src='js/jquery.fancybox.js?ver=3.5.7' id='monst-fancybox-js'></script>
<script type='text/javascript' src='js/slick.js?ver=1.8.1' id='monst-slick-js'></script>
<script type='text/javascript' src='js/wow.js?ver=1.1.3' id='monst-wow-js'></script>
<script type='text/javascript' src='js/wow-active.js?ver=1.0' id='monst-wow-active-js'></script>
<script type='text/javascript' src='js/scrollup.js?ver=2.4.1' id='monst-scrollup-js'></script>
<script type='text/javascript' src='js/mobile-menu.js?ver=1.0.0' id='monst-mobile-js'></script>
<script type='text/javascript' src='js/scrollup-active.js?ver=2.4.1' id='monst-scrollup-active-js'></script>
<script type='text/javascript' src='js/select2.full.min.js?ver=4.0.13' id='select2-js'></script>
<script type='text/javascript' src='js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
<script type='text/javascript' src='js/wp-util.min.js?ver=6.2.2' id='wp-util-js'></script>
<script type='text/javascript' src='js/um-crop.min.js?ver=2.6.7' id='um_crop-js'></script>
<script type='text/javascript' src='js/um-modal.min.js?ver=2.6.7' id='um_modal-js'></script>
<script type='text/javascript' src='js/um-jquery-form.min.js?ver=2.6.7' id='um_jquery_form-js'></script>
<script type='text/javascript' src='js/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
<script type='text/javascript' src='js/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='js/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='js/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
<script type='text/javascript' src='js/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
<script type='text/javascript' src='js/um-raty.min.js?ver=2.6.7' id='um_raty-js'></script>
<script type='text/javascript' src='js/um-tipsy.min.js?ver=2.6.7' id='um_tipsy-js'></script>
<script type='text/javascript' src='js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='js/masonry.min.js?ver=4.2.2' id='masonry-js'></script>
<script type='text/javascript' src='js/jquery.masonry.min.js?ver=3.1.2b' id='jquery-masonry-js'></script>
<script type='text/javascript' src='js/simplebar.min.js?ver=2.6.7' id='um_scrollbar-js'></script>
<script type='text/javascript' src='js/um-functions.min.js?ver=2.6.7' id='um_functions-js'></script>
<script type='text/javascript' src='js/um-responsive.min.js?ver=2.6.7' id='um_responsive-js'></script>
<script type='text/javascript' src='js/um-conditional.min.js?ver=2.6.7' id='um_conditional-js'></script>
<script type='text/javascript' src='js/um-scripts.min.js?ver=2.6.7' id='um_scripts-js'></script>
<script type='text/javascript' src='js/um-profile.min.js?ver=2.6.7' id='um_profile-js'></script>
<script type='text/javascript' src='js/um-account.min.js?ver=2.6.7' id='um_account-js'></script>
<script type='text/javascript' src='js/webpack.runtime.min.js?ver=3.14.0'
    id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": true
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": true
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": true
                }
            }
        },
        "version": "3.14.0",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "landing-pages": true
        },
        "urls": {
            "assets": "https:\/\/themepanthers.com\/wp\/monst\/v1\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper-container",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet", "viewport_tablet_extra", "viewport_laptop", "viewport_widescreen"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 25,
            "title": "Landing%20Page%203%20%E2%80%93%20Monst",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script type='text/javascript' src='js/frontend-modules.min.js?ver=3.14.0'
    id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='js/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='js/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='js/frontend.min.js?ver=3.14.0' id='elementor-frontend-js'></script>
<script type="text/javascript">
    jQuery(window).on('load', function() {
        jQuery('input[name="um_request"]').val('');
    });
</script>
</body>

</html>