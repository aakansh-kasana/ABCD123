<?php
include("php/check_auth.php");
include('php/header.php');
include('php/connection.php');
?>
<style>
    .brand-logos-wrapper {
        overflow: hidden;
        position: relative;
        height: 100px;
        /* Adjust this based on your logo sizes */
    }

    .brand-logos {
        display: flex;
        animation: scroll 10s linear infinite;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    /* Duplicate the content within the brand-logos list */
    .brand-logos::before,
    .brand-logos::after {
        content: '';
        display: flex;
    }

    .brand-logos::before {
        content: '';
    }

    .brand-logos::after {
        content: attr(data-logos) attr(data-logos);
        display: flex;
    }

    .brand-logos li {
        display: inline-block;
        margin-right: 20px;
        flex-shrink: 0;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>
<!-- start: Testimonials CSS -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="css/custom_css/testimonials.css">
<!-- end: Testimonials CSS -->
<!-- start: Steps Flow -->
<link rel="stylesheet" href="css/custom_css/steps_flow.css">
<link rel="stylesheet" href="css/custom_css/login123.css">
<!-- end: Steps Flow -->
<!-- start: Trusted By -->
<link rel="stylesheet" href="css/custom_css/trusted_by.css">
<!-- end: Trusted By -->
<!-- start: Step flow buttons -->
<link rel="stylesheet" href="css/custom_css/step_flow_button.css">
<!-- end: Step flow buttons -->

<div id="content" class="site-content ">
    <div class="no-container">
        <div class="no-row">
            <div class="full_width_box">
                <div data-elementor-type="wp-page" data-elementor-id="25" class="elementor elementor-25">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ebcb01f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="ebcb01f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-22b1b8c"
                                data-id="22b1b8c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-effa4c4 elementor-widget elementor-widget-monst-single-banner-v1"
                                        data-id="effa4c4" data-element_type="widget"
                                        data-widget_type="monst-single-banner-v1.default">
                                        <div class="elementor-widget-container">

                                            <section class="single_banner two main_topmost_page">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <div class="banner_box_in">
                                                                <div class="text-left">
                                                                    <div class="content_box">
                                                                        <div class="title wow animate__animated animate__fadeIn">
                                                                            <?php
                                                                            $Query = "SELECT content, purpose FROM content";
                                                                            $Result = $conn->query($Query);

                                                                            $Data = array();

                                                                            if ($Result->num_rows > 0) {
                                                                                while ($Row = $Result->fetch_assoc()) {
                                                                                    $raw = str_replace("<p>", "", $Row['content']);
                                                                                    $raw = str_replace("</p>", "", $raw);
                                                                                    $Data[$Row['purpose']] = $raw;
                                                                                }
                                                                                if (isset($Data['Main Page Heading'])) {
                                                                                    $mainPageHeading = $Data['Main Page Heading'];

                                                                                    // Replace <strong> tags with <span> tags
                                                                                    $mainPageHeading = str_replace('<strong>', '<span>', $mainPageHeading);
                                                                                    $mainPageHeading = str_replace('</strong>', '</span>', $mainPageHeading);
                                                                                    echo $mainPageHeading;
                                                                                } else {
                                                                                    echo "Default Main Page Heading"; // Provide a default if no content is found
                                                                                }
                                                                            } else {
                                                                                echo "Default Main Page Heading"; // Provide a default if no content is found
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                        <p class="wow animate__animated animate__fadeIn">
                                                                            <?php
                                                                            if (isset($Data['Main Page SubHeading'])) {
                                                                                echo $Data['Main Page SubHeading'];
                                                                            } else {
                                                                                echo "Default Main Page SubHeading"; // Provide a default if no content is found
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                        <p class="wow desc_two animate__animated animate__fadeIn">
                                                                            <?php
                                                                            if (isset($Data['Main Page SubHeading2'])) {
                                                                                echo $Data['Main Page SubHeading2'];
                                                                            } else {
                                                                                echo "Default Main Page SubHeading"; // Provide a default if no content is found
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                        <div>
                                                                            <ul class="button_group">
                                                                                <li>
                                                                                    <a class="theme_btn one  wow animate__animated animate__fadeInUp"
                                                                                        href="index.php#services">
                                                                                        Our Services </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="theme_btn two  wow animate__animated animate__fadeInUp"
                                                                                        href="contact_us.php">
                                                                                        Get Quote </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                                            <div class="image_box mx-auto">

                                                                <div class="relative">
                                                                    <img decoding="async"
                                                                        class="wow animate__animated animate__fadeInUp"
                                                                        src="img/hero_img.png" alt="image" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br><br>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ed4cef9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="ed4cef9" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4357cdd"
                                data-id="4357cdd" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-355ce53 elementor-widget elementor-widget-monst-fun-facts-v1"
                                        data-id="355ce53" data-element_type="widget"
                                        data-widget_type="monst-fun-facts-v1.default">
                                        <div class="elementor-widget-container">

                                            <div class="fun_box_one wow animate__ animate__fadeInUp animated"
                                                data-wow-delay="0"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="icon_bx">
                                                    <img src="img/countries.png" />
                                                </div>
                                                <div class="content_box">
                                                    <span class="count"> 45+</span>
                                                    <p class="title">Countries Served </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-847991e"
                                data-id="847991e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9649544 elementor-widget elementor-widget-monst-fun-facts-v1"
                                        data-id="9649544" data-element_type="widget"
                                        data-widget_type="monst-fun-facts-v1.default">
                                        <div class="elementor-widget-container">

                                            <div class="fun_box_one wow animate__ animate__fadeInUp animated"
                                                data-wow-delay="0"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="icon_bx">
                                                    <img src="img/experience.png" />
                                                </div>
                                                <div class="content_box">
                                                    <span class="count"> 100+ years</span>
                                                    <p class="title">Cumulative Experience </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f0fd79c"
                                data-id="f0fd79c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9c9607f elementor-widget elementor-widget-monst-fun-facts-v1"
                                        data-id="9c9607f" data-element_type="widget"
                                        data-widget_type="monst-fun-facts-v1.default">
                                        <div class="elementor-widget-container">

                                            <div class="fun_box_one wow animate__ animate__fadeInUp animated"
                                                data-wow-delay="0"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="icon_bx">
                                                    <img src="img/clients.png" />
                                                </div>
                                                <div class="content_box">
                                                    <span class="count"> 200+</span>
                                                    <p class="title">Active Clients </p>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4cebec4"
                                data-id="4cebec4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-724f254 elementor-widget elementor-widget-monst-fun-facts-v1"
                                        data-id="724f254" data-element_type="widget"
                                        data-widget_type="monst-fun-facts-v1.default">
                                        <div class="elementor-widget-container">

                                            <div class="fun_box_one wow animate__ animate__fadeInUp animated"
                                                data-wow-delay="0"
                                                style="visibility: visible; animation-name: fadeInUp;">
                                                <div class="icon_bx">
                                                    <img src="img/global_presence.png" />
                                                </div>
                                                <div class="content_box">
                                                    <span class="count"> 15+ years</span>
                                                    <p class="title">Global Presence </p>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="services"></div>
                    <br><br><br>
                    <!-- start: Services -->
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-3bfa03f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="3bfa03f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-d66bdfe"
                                data-id="d66bdfe" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-e5ed6a1"
                                data-id="e5ed6a1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ee35dbb elementor-widget elementor-widget-monst-title-v1"
                                        data-id="ee35dbb" data-element_type="widget"
                                        data-widget_type="monst-title-v1.default">
                                        <div class="elementor-widget-container">
                                            <div class="section_title type_one">
                                                <div class="title_whole">
                                                    <div class="title">High-Impact <span>Business
                                                            Services</span></div>
                                                </div>
                                                <p>Empowering Success: Comprehensive Services for Enhanced
                                                    Business Competence</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-a4f1a75"
                                data-id="a4f1a75" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div data-toggle="modal" data-target="#service_modal"
                                onclick="update_content_of_service('competence')"
                                class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-49b3139"
                                data-id="49b3139" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-0d4c498 elementor-widget elementor-widget-monst-icon-box-v1"
                                        data-id="0d4c498" data-element_type="widget"
                                        data-widget_type="monst-icon-box-v1.default">
                                        <div class="busi_services_box elementor-widget-container">
                                            <div class="icon_simple_box two wow animate__animated animate__fadeInUp inside_service_box"
                                                data-wow-delay="0">
                                                <img width="100" height="100" src="img/competence.png" />
                                                <div class="content_box">
                                                    <h3 class="font-heading"><a href="#service_modal"
                                                            onclick="update_content_of_service('competence')">Competence
                                                            Enhancement</a></h3>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-toggle="modal" data-target="#service_modal"
                                onclick="update_content_of_service('advisory')"
                                class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-de4e97c"
                                data-id="de4e97c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-e355e86 elementor-widget elementor-widget-monst-icon-box-v1"
                                        data-id="e355e86" data-element_type="widget"
                                        data-widget_type="monst-icon-box-v1.default">
                                        <div class="busi_services_box elementor-widget-container">
                                            <div class="icon_simple_box two wow animate__animated animate__fadeInUp inside_service_box"
                                                data-wow-delay="0">
                                                <img width="100" height="100" src="img/advisory.png" />
                                                <div class="content_box">
                                                    <h3 class="font-heading"><a href="#service_modal"
                                                            onclick="update_content_of_service('advisory')">Advisory &
                                                            Consulting</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-toggle="modal" data-target="#service_modal"
                                onclick="update_content_of_service('audit')"
                                class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-d452ba5"
                                data-id="d452ba5" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9339014 elementor-widget elementor-widget-monst-icon-box-v1"
                                        data-id="9339014" data-element_type="widget"
                                        data-widget_type="monst-icon-box-v1.default">
                                        <div class="busi_services_box elementor-widget-container">
                                            <div class="icon_simple_box two wow animate__animated animate__fadeInUp inside_service_box"
                                                data-wow-delay="0">
                                                <img width="100" height="100" src="img/audit.png" />
                                                <div class="content_box">
                                                    <h3 class="font-heading"><a href="#framework_modal"
                                                            onclick="update_content_of_service('audit')">Audit &
                                                            Assessment</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-toggle="modal" data-target="#service_modal"
                                onclick="update_content_of_service('security')"
                                class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-d452ba5"
                                data-id="d452ba5" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9339014 elementor-widget elementor-widget-monst-icon-box-v1"
                                        data-id="9339014" data-element_type="widget"
                                        data-widget_type="monst-icon-box-v1.default">
                                        <div class="busi_services_box elementor-widget-container">
                                            <div class="icon_simple_box two wow animate__animated animate__fadeInUp inside_service_box"
                                                data-wow-delay="0">
                                                <img width="100" height="100" src="img/security.png" />
                                                <div class="content_box">
                                                    <h3 class="font-heading"><a href="#framework_modal"
                                                            onclick="update_content_of_model('security')">Network &
                                                            Application Security</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-toggle="modal" data-target="#service_modal"
                                onclick="update_content_of_service('reporting')"
                                class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-19a29c2"
                                data-id="19a29c2" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-19a29c2 elementor-widget elementor-widget-monst-icon-box-v1"
                                        data-id="19a29c2" data-element_type="widget"
                                        data-widget_type="monst-icon-box-v1.default">
                                        <div class="elementor-widget-container busi_services_box">
                                            <div class="icon_simple_box two wow animate__animated animate__fadeInUp inside_service_box"
                                                data-wow-delay="0">
                                                <img width="100" height="100" src="img/reporting.png" />
                                                <div class="content_box">
                                                    <h3 class="font-heading"><a href="#service_modal"
                                                            onclick="update_content_of_service('reporting')">Reporting</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
                <!-- end: Services -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-59611ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="59611ea" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c26077"
                            data-id="6c26077" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-073949d elementor-widget elementor-widget-monst-themebtns-v1"
                                    data-id="073949d" data-element_type="widget"
                                    data-widget_type="monst-themebtns-v1.default">
                                    <div class="elementor-widget-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- start: Standards & Framework -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d8d16d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d8d16d7" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill"
                                d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z" />
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e96979"
                            data-id="1e96979" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3bfa03f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="3bfa03f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d66bdfe"
                                            data-id="d66bdfe" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="w-100 text-center mt-5 mb-2 elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e5ed6a1"
                                            data-id="e5ed6a1" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-ee35dbb elementor-widget elementor-widget-monst-title-v1"
                                                    data-id="ee35dbb" data-element_type="widget"
                                                    data-widget_type="monst-title-v1.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="section_title type_one">
                                                            <div class="title_whole">

                                                                <div class="title">
                                                                    <span>Standards</span> And
                                                                    <span>Frameworks</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a4f1a75"
                                            data-id="a4f1a75" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- start: Script -->
                                <script>
                                    function update_content_of_model(id) {
                                        var contentMap = {
                                            "ic1": {
                                                "image": "img/ic1.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 1"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 1"]) . '"' ?>
                                            },
                                            "ic2": {
                                                "image": "img/ic2.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 2"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 2"]) . '"' ?>
                                            },
                                            "ic3": {
                                                "image": "img/ic3.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 3"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 3"]) . '"' ?>
                                            },
                                            "ic4": {
                                                "image": "img/ic4.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 4"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 4"]) . '"' ?>
                                            },
                                            "ic5": {
                                                "image": "img/ic5.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 5"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 5"]) . '"' ?>
                                            },
                                            "ic6": {
                                                "image": "img/ic6.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 6"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 6"]) . '"' ?>
                                            },
                                            "ic7": {
                                                "image": "img/ic7.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 7"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 7"]) . '"' ?>
                                            },
                                            "ic8": {
                                                "image": "img/ic8.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 8"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 8"]) . '"' ?>
                                            },
                                            "ic9": {
                                                "image": "img/ic9.png",
                                                "title": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Service Name) - 9"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Information & Cyber Security (Content) - 9"]) . '"' ?>
                                            },


                                            "s1": {
                                                "image": "img/s1.gif",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 1"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 1"]) . '"' ?>
                                            },
                                            "s2": {
                                                "image": "img/s2.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 2"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 2"]) . '"' ?>
                                            },
                                            "s3": {
                                                "image": "img/s3.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 3"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 3"]) . '"' ?>
                                            },
                                            "s4": {
                                                "image": "img/s4.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 4"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 4"]) . '"' ?>
                                            },
                                            "s5": {
                                                "image": "img/s5.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 5"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 5"]) . '"' ?>
                                            },
                                            "s6": {
                                                "image": "img/s6.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 6"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 6"]) . '"' ?>
                                            },
                                            "s7": {
                                                "image": "img/s7.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 7"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 7"]) . '"' ?>
                                            },
                                            "s8": {
                                                "image": "img/s8.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 8"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 8"]) . '"' ?>
                                            },
                                            "s9": {
                                                "image": "img/s9.png",
                                                "title": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Service Name) - 9"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Safety & Sustainability (Content) - 9"]) . '"' ?>
                                            },

                                            "e1": {
                                                "image": "img/e1.gif",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 1"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 1"]) . '"' ?>
                                            },
                                            "e2": {
                                                "image": "img/e2.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 2"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 2"]) . '"' ?>
                                            },
                                            "e3": {
                                                "image": "img/e3.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 3"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 3"]) . '"' ?>
                                            },
                                            "e4": {
                                                "image": "img/e4.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 4"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 4"]) . '"' ?>

                                            },
                                            "e5": {
                                                "image": "img/e5.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 5"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 5"]) . '"' ?>
                                            },
                                            "e6": {
                                                "image": "img/e6.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 6"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 6"]) . '"' ?>
                                            },
                                            "e7": {
                                                "image": "img/e7.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 7"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 7"]) . '"' ?>
                                            },
                                            "e8": {
                                                "image": "img/e8.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 8"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 8"]) . '"' ?>
                                            },
                                            "e9": {
                                                "image": "img/e9.png",
                                                "title": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Service Name) - 9"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Enterprise Quality & Process Excellence (Content) - 9"]) . '"' ?>
                                            },

                                            "c1": {
                                                "image": "img/c1.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 1"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 1"]) . '"' ?>
                                            },
                                            "c2": {
                                                "image": "img/c2.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 2"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 2"]) . '"' ?>
                                            },
                                            "c3": {
                                                "image": "img/c3.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 3"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 3"]) . '"' ?>
                                            },
                                            "c4": {
                                                "image": "img/c4.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 4"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 4"]) . '"' ?>
                                            },
                                            "c5": {
                                                "image": "img/c5.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 5"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 5"]) . '"' ?>
                                            },
                                            "c6": {
                                                "image": "img/c6.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 6"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 6"]) . '"' ?>
                                            },
                                            "c7": {
                                                "image": "img/c7.jpg",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 7"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 7"]) . '"' ?>
                                            },
                                            "c8": {
                                                "image": "img/c8.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 8"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 8"]) . '"' ?>
                                            },
                                            "c9": {
                                                "image": "img/c9.png",
                                                "title": <?php echo '"' . base64_encode($Data["Compliance (Service Name) - 9"]) . '"' ?>,
                                                "content": <?php echo '"' . base64_encode($Data["Compliance (Content) - 9"]) . '"' ?>
                                            }
                                        };

                                        var modelContentDiv = document.getElementById("model_content");
                                        var modelTitle = document.getElementById("model_title");
                                        var modalImage = document.getElementById("modal_image");
                                        var image = contentMap[id]["image"];
                                        var title = atob(contentMap[id]["title"]);
                                        var content = atob(contentMap[id]["content"]);

                                        if (image) {
                                            modelContentDiv.innerHTML = content;
                                            modelTitle.textContent = title;
                                            modalImage.src = image;
                                        } else {
                                            // Handle case when id doesn't match any predefined id
                                            modelContentDiv.textContent = "Invalid ID";
                                            modelTitle.textContent = "Invalid ID";
                                        }
                                    }
                                </script>
                                <!-- end: Script -->
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-666ee25 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="666ee25" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-49b3139"
                                            data-id="49b3139" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-0d4c498 elementor-widget elementor-widget-monst-icon-box-v1"
                                                    data-id="0d4c498" data-element_type="widget"
                                                    data-widget_type="monst-icon-box-v1.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="standards_box icon_simple_box two wow animate__animated animate__fadeInUp"
                                                            data-wow-delay="0">
                                                            <img width="100" height="100" src="img/security.png" />
                                                            <div class="content_box">
                                                                <h3 class="font-heading">
                                                                    <a href="">
                                                                        Information & Cyber Security
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        for ($i = 1; $i <= 9; $i++) {
                                                            if (isset($Data["Information & Cyber Security (Service Name) - $i"])) {
                                                                $isEven = $i % 2 === 0;
                                                                echo '<p class="theme_btn one services_box';

                                                                if ($isEven) {
                                                                    echo ' alter_btn';
                                                                }

                                                                echo '" data-toggle="modal" data-target="#framework_modal" onclick="update_content_of_model(\'ic' . $i . '\')">';

                                                                $sname = $Data["Information & Cyber Security (Service Name) - $i"];
                                                                $sname = str_replace("<p>", "", $sname);
                                                                $sname = str_replace("(ISO", "<br>(ISO", $sname);
                                                                echo $sname;
                                                            } else {
                                                                echo "<p class='theme_btn one services_box' data-toggle='modal' data-target='#framework_modal' onclick='update_content_of_model(\'ic' . $i . '\')'>Default Information & Cyber Security (Service Name) - $i</p>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-de4e97c"
                                            data-id="de4e97c" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-e355e86 elementor-widget elementor-widget-monst-icon-box-v1"
                                                    data-id="e355e86" data-element_type="widget"
                                                    data-widget_type="monst-icon-box-v1.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="standards_box icon_simple_box two wow animate__animated animate__fadeInUp"
                                                            data-wow-delay="0">
                                                            <img width="100" height="100" src="img/safety.png" />
                                                            <div class="content_box">
                                                                <h3 class="font-heading">
                                                                    <a href="">
                                                                        Safety & Sustainability </a>
                                                                </h3>


                                                            </div>
                                                        </div>
                                                        <?php
                                                        for ($i = 1; $i <= 9; $i++) {
                                                            if (isset($Data["Safety & Sustainability (Service Name) - $i"])) {
                                                                $isOdd = $i % 2 != 0;
                                                                echo '<p class="theme_btn one services_box';

                                                                if ($isOdd) {
                                                                    echo ' alter_btn';
                                                                }

                                                                echo '" data-toggle="modal" data-target="#framework_modal" onclick="update_content_of_model(\'s' . $i . '\')">';

                                                                $sname = $Data["Safety & Sustainability (Service Name) - $i"];
                                                                $sname = str_replace("<p>", "", $sname);
                                                                $sname = str_replace("(ISO", "<br>(ISO", $sname);
                                                                echo $sname;
                                                            } else {
                                                                echo "<p class='theme_btn one services_box' data-toggle='modal' data-target='#framework_modal' onclick='update_content_of_model(\'s' . $i . '\')'>Default Safety & Sustainability (Service Name) - $i</p>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d452ba5"
                                            data-id="d452ba5" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9339014 elementor-widget elementor-widget-monst-icon-box-v1"
                                                    data-id="9339014" data-element_type="widget"
                                                    data-widget_type="monst-icon-box-v1.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="standards_box icon_simple_box two wow animate__animated animate__fadeInUp"
                                                            data-wow-delay="0">
                                                            <img width="100" height="100" src="img/audit.png" />
                                                            <div class="content_box">
                                                                <h3 class="font-heading">
                                                                    <a href="">
                                                                        Enterprise Quality & Process Excellence </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        for ($i = 1; $i <= 9; $i++) {
                                                            if (isset($Data["Enterprise Quality & Process Excellence (Service Name) - $i"])) {
                                                                $isEven = $i % 2 === 0;

                                                                echo '<p class="theme_btn one services_box';

                                                                if ($isEven) {
                                                                    echo ' alter_btn';
                                                                }
                                                                echo '" data-toggle="modal" data-target="#framework_modal" onclick="update_content_of_model(\'e' . $i . '\')">';
                                                                $sname = $Data["Enterprise Quality & Process Excellence (Service Name) - $i"];
                                                                $sname = str_replace("<p>", "", $sname);
                                                                $sname = str_replace("(ISO", "<br>(ISO", $sname);
                                                                echo $sname;
                                                            } else {
                                                                echo "<p class='theme_btn one services_box' data-toggle='modal' data-target='#framework_modal' onclick='update_content_of_model(\'e' . $i . '\')'>Default Information & Cyber Security (Service Name) - $i</p>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ed5d541"
                                            data-id="ed5d541" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-19a29c2 elementor-widget elementor-widget-monst-icon-box-v1"
                                                    data-id="19a29c2" data-element_type="widget"
                                                    data-widget_type="monst-icon-box-v1.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="standards_box icon_simple_box two wow animate__animated animate__fadeInUp"
                                                            data-wow-delay="0">
                                                            <img width="100" height="100" src="img/compliance.png" />
                                                            <div class="content_box">
                                                                <h3 class="font-heading">
                                                                    <a href=""> Compliance<br><br> </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        for ($i = 1; $i <= 9; $i++) {
                                                            if (isset($Data["Compliance (Service Name) - $i"])) {
                                                                $isOdd = $i % 2 != 0;
                                                                echo '<p class="theme_btn one services_box';

                                                                if ($isOdd) {
                                                                    echo ' alter_btn';
                                                                }

                                                                echo '" data-toggle="modal" data-target="#framework_modal" onclick="update_content_of_model(\'c' . $i . '\')">';

                                                                $sname = $Data["Compliance (Service Name) - $i"];
                                                                $sname = str_replace("<p>", "", $sname);
                                                                $sname = str_replace("(ISO", "<br>(ISO", $sname);
                                                                echo $sname;
                                                            } else {
                                                                echo "<p class='theme_btn one services_box' data-toggle='modal' data-target='#framework_modal' onclick='update_content_of_model(\'c' . $i . '\')'>Default Compliance (Service Name) - $i</p>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Standards & Framework -->

                <!-- start: Modals for Standards & Framework -->
                <div class="modal fade" id="framework_modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="model_title">Building & Other Constructions
                                    Worker Act (BOCW)</h5>
                                <button type="button" class="dismiss_btn" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal_img_center"><img src="" id="modal_image" /></div>
                            <div class="modal-body" id="model_content">
                                LOL
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn theme_btn one center"
                                    onclick="window.location.href='contact_us.php'">Request for Further
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Modals for Standards & Framework -->

                <!-- start: Modals for Services -->
                <div class="modal fade" id="service_modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="model_title_service">Building & Other Constructions
                                    Worker Act (BOCW)</h5>
                                <button type="button" class="dismiss_btn" data-dismiss="modal" aria-label="Close"
                                    onclick="reset_service_modal()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="model_content_service">
                                <p class="text-center" id="service_desc"></p>
                                <div id="button_area_service" class="text-center"></div>

                            </div>
                            <div class="modal_img_center"><img src="" id="modal_image_service" /></div>
                            <div id="text_area_service"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn theme_btn one center"
                                    onclick="window.location.href='contact_us.php'">Request for Further
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Modals for Services -->

                <!-- start: Steps -->

                <section
                    class="step_flow_section elementor-section elementor-inner-section elementor-element elementor-element-3bfa03f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3bfa03f" data-element_type="section">
                    <div class="step_flow_heading">
                        <div class="section-title">
                            <h2>Management System Design & Deployment Process</h2>
                            <p>Plan and framework creation, followed by implementation and testing
                                process.</p>
                        </div>
                    </div>


                    <div class="steps_flow" id="steps">
                        <div class="steps-main">
                            <div class="tabs">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div aria-label="Basic example" role="group" class="btn-group">
                                            <button data-step="1" type="button" class="tab1 btn btn-secondary active"
                                                data-node-index="0">
                                                <img width="25px" height="25px" src="img/baselining.png" alt="tab-icon" class="step_flow_image">
                                                <img width="25px" height="25px" src="img/baselining_white.png" alt="tab-icon" class="step_flow_image_white">
                                                <div>Baselining</div>
                                            </button>

                                            <button data-step="2" type="button"
                                                class="tab2 in-complete btn btn-secondary" data-node-index="1">
                                                <img width="25px" height="25px" src="img/awareness.png" alt="tab-icon" class="step_flow_image">
                                                <img width="25px" height="25px" src="img/awareness_white.png" alt="tab-icon" class="step_flow_image_white">
                                                <div>Awareness Enhancement</div>
                                            </button>

                                            <button data-step="3" type="button"
                                                class="tab3 in-complete btn btn-secondary" data-node-index="2">
                                                <img width="25px" height="25px" src="img/document_framework.png" alt="tab-icon" class="step_flow_image">
                                                <img width="25px" height="25px" src="img/document_framework_white.png" alt="tab-icon" class="step_flow_image_white">
                                                <div>Document Framework</div>
                                            </button>

                                            <button data-step="4" type="button"
                                                class="tab4 in-complete btn btn-secondary" data-node-index="3">
                                                <img width="25px" height="25px" src="img/deployment.png" alt="tab-icon" class="step_flow_image">
                                                <img width="25px" height="25px" src="img/deployment_white.png" alt="tab-icon" class="step_flow_image_white">
                                                <div>Deployment</div>
                                            </button>

                                            <button data-step="5" type="button"
                                                class="tab5 in-complete btn btn-secondary" data-node-index="4">
                                                <img width="25px" height="25px" src="img/performance_evaluation.png" alt="tab-icon" class="step_flow_image">
                                                <img width="25px" height="25px" src="img/performance_evaluation_white.png" alt="tab-icon" class="step_flow_image_white">
                                                <div>Performance Evaluation</div>
                                            </button>

                                            <button data-step="6" type="button"
                                                class="tab6 in-complete btn btn-secondary" data-node-index="5">
                                                <img width="25px" height="25px" src="img/assessment.png" alt="tab-icon" class="step_flow_image">
                                                <img width="25px" height="25px" src="img/assessment_white.png" alt="tab-icon" class="step_flow_image_white">
                                                <div>Assessment &amp; Review</div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step_flow_contents" id="contents">
                        <div class="step_flow_content active" data-step="1">
                            <div class="content__box">
                                <h4>Baselining</h4><br>
                                Scope Finalization & Gap Assessment To Baseline The As-Is Status & Develop Customized
                                Project Plan.
                            </div>
                        </div>
                        <div class="step_flow_content" data-step="2">
                            <div class="content__box">
                                <h4>Awareness Enhancement</h4><br>
                                Core Team Identification & Training Leading To Their Competence Enhancement.
                            </div>
                        </div>
                        <div class="step_flow_content" data-step="3">
                            <div class="content__box">
                                <h4>Document Framework</h4><br>
                                Facilitate To Establish The Desired & Mandatory Documentation & Templates.
                            </div>
                        </div>
                        <div class="step_flow_content" data-step="4">
                            <div class="content__box">
                                <h4>Deployment‍</h4><br>
                                Facilitate & Hand-Hold To Ensure Effective Deployment Of Processes & Controls.
                            </div>
                        </div>
                        <div class="step_flow_content" data-step="5">
                            <div class="content__box">
                                <h4>Performance Evaluation</h4><br>
                                Establish An Effective Monitoring & Measurement Framework Leading To Ongoing & Periodic
                                Evaluation Of The Processes & Controls Resulting In Achievement Of The Desired
                                Objectives.
                            </div>
                        </div>
                        <div class="step_flow_content" data-step="6">
                            <div class="content__box">
                                <h4>Assessment & Review</h4><br>
                                Facilitate An Ongoing Review Framework With Customized Dash-Bards & Review Mechanism To
                                Ensure Effective Review Of Ongoing Performance & Identification Of Opportunities For
                                Continual Improvement.
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Steps -->
                <!-- start: Testimonial -->
                <div class="section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Hear What Our Great Customers Say</h2>
                                    <div class="section-borders">
                                        <span></span>
                                        <span class="black-border"></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel client-testimonial-carousel">
                                    <?php
                                    include('php/connection.php');

                                    $sql = "SELECT company_logo, message, person_name, position FROM testimonials";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<div class="single-testimonial-item">';
                                            echo '<img class="testimonial_img" src="' . $row['company_logo'] . '" />';
                                            echo '<p>' . $row['message'] . '</p>';
                                            echo '<h3>' . $row['person_name'] . '<span>' . $row['position'] . '</span></h3>';
                                            echo '</div>';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Testimonial -->
                <!-- start: Trusted By -->
                <section class="brands text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Trusted By The Best Companies Around The Globe</h2>
                                    <div class="section-borders">
                                        <span></span>
                                        <span class="black-border"></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brand-logos-wrapper">
                        <ul class="brand-logos">
                            <!-- List of 22 logos -->
                            <li><img alt="Aricent" height="38" width="175" src="img/trusted_by/aricent.png"></li>
                            <li><img alt="Batra Hospital" height="38" width="175" src="img/trusted_by/batra_hospital.png"></li>
                            <li><img alt="BCG" height="38" width="175" src="img/trusted_by/BCG.png"></li>
                            <li><img alt="Benori" height="38" width="175" src="img/trusted_by/benori.png"></li>
                            <li><img alt="Boston Scientific" height="38" width="175" src="img/trusted_by/boston_scientific.png"></li>
                            <li><img alt="Bursa Malaysia" height="38" width="175" src="img/trusted_by/bursa_malaysia.png"></li>
                            <li><img alt="Ciria" height="38" width="175" src="img/trusted_by/ciria.png"></li>
                            <li><img alt="Cyber Security Malaysia" height="38" width="175" src="img/trusted_by/cyber_security_malaysia.png"></li>
                            <li><img alt="DHLI" height="38" width="175" src="img/trusted_by/dhli.png"></li>
                            <li><img alt="Dubai Customs" height="38" width="175" src="img/trusted_by/dubai_customs.png"></li>
                            <li><img alt="EVS" height="38" width="175" src="img/trusted_by/evs.png"></li>
                            <li><img alt="Global Logic" height="38" width="175" src="img/trusted_by/global_logic.png"></li>
                            <li><img alt="GNRC" height="38" width="175" src="img/trusted_by/GNRC.png"></li>
                            <li><img alt="Grant Thornton" height="38" width="175" src="img/trusted_by/grant_thornton.png"></li>
                            <li><img alt="Hale Healthcare" height="38" width="175" src="img/trusted_by/hale_healthcare.png"></li>
                            <li><img alt="IGT" height="38" width="175" src="img/trusted_by/igt.png"></li>
                            <li><img alt="Intarvo" height="38" width="175" src="img/trusted_by/intarvo.png"></li>
                            <li><img alt="Interglobe" height="38" width="175" src="img/trusted_by/interglobe.png"></li>
                            <li><img alt="Ixigo" height="38" width="175" src="img/trusted_by/ixigo.png"></li>
                            <li><img alt="Mindfire" height="38" width="175" src="img/trusted_by/mindfire.png"></li>
                            <li><img alt="Nokia" height="38" width="175" src="img/trusted_by/nokia.png"></li>
                            <li><img alt="PeopleStrong" height="38" width="175" src="img/trusted_by/people_strong.png"></li>
                            <li><img alt="Perfetti Van Melle" height="38" width="175" src="img/trusted_by/perfetti_van_melle.png"></li>
                            <li><img alt="Pertamina" height="38" width="175" src="img/trusted_by/pertamina.png"></li>
                            <li><img alt="QCI" height="38" width="175" src="img/trusted_by/QCI.png"></li>
                            <li><img alt="RBS" height="38" width="175" src="img/trusted_by/RBS.png"></li>
                            <li><img alt="RKGIT" height="38" width="175" src="img/trusted_by/rkgit.png"></li>
                            <li><img alt="Rockland Hospital" height="38" width="175" src="img/trusted_by/rockland_hospital.png"></li>
                            <li><img alt="Rooter Sports Logo" height="38" width="175" src="img/trusted_by/rooter_sports.png"></li>
                            <li><img alt="RT Outsourcing" height="38" width="175" src="img/trusted_by/rt_outsourcing.png"></li>
                            <li><img alt="SNU" height="38" width="175" src="img/trusted_by/snu.png"></li>
                            <li><img alt="UTM" height="38" width="175" src="img/trusted_by/UTM.png"></li>
                        </ul>
                    </div>
                </section>
                <!-- end: Trusted By -->

                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-59611ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="59611ea" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c26077"
                            data-id="6c26077" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-073949d elementor-widget elementor-widget-monst-themebtns-v1"
                                    data-id="073949d" data-element_type="widget"
                                    data-widget_type="monst-themebtns-v1.default">
                                    <div class="elementor-widget-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- start: Testimonials Js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom_js/testimonials.js"></script>
<!-- end: Testimonials Js -->

<!-- start: Modal Content Js -->
<script src="js/custom_js/index_model_content.js"></script>
<!-- end: Modal Content Js -->

<!-- start: Step flow -->
<script src="js/custom_js/step_flow.js"></script>
<!-- end: Step flow -->

<!-- start: Step flow buttons -->
<script src='js/custom_js/step_flow_button.js'></script>
<!-- end: Step flow buttons -->

<?php include('php/footer.php'); ?>