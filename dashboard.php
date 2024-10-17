<?php
include("php/check_auth.php");
include('php/header.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sidebar = document.getElementById('sidebar');
        var dashboardTrigger = document.getElementById('dashboard-trigger');

        // Show sidebar on hover over the trigger or sidebar area
        dashboardTrigger.addEventListener('mouseenter', function() {
            sidebar.classList.add('show');
        });

        sidebar.addEventListener('mouseenter', function() {
            sidebar.classList.add('show');
        });

        // Hide sidebar when mouse leaves both the trigger and sidebar
        dashboardTrigger.addEventListener('mouseleave', function() {
            sidebar.classList.remove('show');
        });

        sidebar.addEventListener('mouseleave', function() {
            sidebar.classList.remove('show');
        });

        // For non-hover devices, show/hide sidebar on tap
        dashboardTrigger.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });

        // Hide sidebar when clicking outside of it
        document.addEventListener('click', function(event) {
            if (!sidebar.contains(event.target) && !dashboardTrigger.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        });
    });
</script>
<script type='text/javascript' src='js/main.js?ver=1.0.0' id='monst-main-js'></script>
</script>

<style>
    .image-container {
        margin-top: 7rem;
        display: flex;
        justify-content: space-between;
    }

    .image-container img {
        max-width: 23%;
    }

    /* Adjust to ensure all images fit within the container */

    #dashboard-trigger {
        position: fixed;
        top: 1rem;
        left: 0;
        padding: 1rem;
        background-color: #007bff;
        color: white;
        cursor: pointer;
        font-weight: bold;
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        z-index: 1100;
    }

    .sidebar {
        position: fixed;
        margin-left: 0.01rem;
        top: 6rem;
        left: -250px;
        width: 250px;
        height: calc(100% - 6rem);
        background-color: #343a40;
        color: white;
        transition: left 0.3s;
        z-index: 1000;
    }

    .sidebar-menu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .menu-item {
        padding: 10px;
        border-bottom: 1px solid #495057;
    }

    .menu-item a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
    }

    .menu-item i {
        margin-right: 10px;
    }

    .submenu {
        list-style-type: none;
        padding-left: 20px;
        display: none;
    }

    .menu-item:hover .submenu {
        display: block;
    }

    .sidebar-menu .menu-item:hover {
        background-color: #495057;
    }

    .sidebar.show {
        left: 0;
    }
</style>

<div class="image-container">
    <img src="https://www.gexcon.com/wp-content/uploads/2022/01/Picture-2.png" alt="Image 1">
    <img src="https://safetyculture.com/_next/image/?url=https%3A%2F%2Fwp-website.safetyculture.com%2Fwp-content%2Fuploads%2Fsites%2F3%2F2023%2F12%2FRisk-Analysis-for-Risk-Assessment.png&w=1200&q=75" alt="Image 2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3LmpNuN3Ufp2EJal3qsPuz-OnvDP7dsWJKw&s" alt="Image 3">
    <img src="https://as2.ftcdn.net/v2/jpg/02/70/09/61/1000_F_270096121_LLcdfkvf6vWGSqdDdqTvL6BVOSVD7RuI.jpg" alt="Image 4">
</div>

<div class="image-container">
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/bd/Pushkin_population_history.svg" alt="Image 1">
    <img src="https://www.logicmonitor.com/support-files/screensteps_images/b6dbf20a-b0ab-4f7f-91c1-8dd91a66d7ac.png" alt="Image 2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBEgtYNbusTQeklzVr7RUBPnp0kOmFefqgyQ&s" alt="Image 3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5RrRqMR-gfJJCKO6sSe5cAnAKdmBnrSGi9w&s" alt="Image 4">
</div>

<div id="content" class="site-content" style="margin-top: 6rem;">
    <!-- Sidebar trigger -->
    <div id="dashboard-trigger" class="dashboard-trigger">
        Dashboard Options
    </div>
    <div id="sidebar" class="sidebar" style="background-color: #1f2e35;">
        <ul class="sidebar-menu" style="list-style-type: none; padding-left: 0; margin: 0;">
            <li class="menu-item" style="list-style-type: none;"><a href="#"><i class='bx bx-layer nav_logo-icon'></i> Account Settings</a>
                <ul class="submenu" style="list-style-type: none; padding-left: 20px; margin: 0;">
                    <li style="list-style-type: none;"><a href="update_password.php"><i class='bx bx-key nav_icon'></i> Update Password</a></li>
                    <?php if ($_SESSION["role"] === "admin") { ?>
                        <li style="list-style-type: none;"><a href="create_user.php"><i class='bx bx-user-plus nav_icon'></i> Create New User</a></li>
                </ul>
            <li class="menu-item" style="list-style-type: none;"><a href="#"><i class='bx bx-layer nav_logo-icon'></i> ROAR</a>
                <ul class="submenu" style="list-style-type: none; padding-left: 20px; margin: 0;">
                    <li class="menu-item" style="list-style-type: none;"><a href="roar_tool.php"><i class='bx bx-tool nav_icon'></i> Risk & Opportunity Assessment Tool</a></li>
                    <li class="menu-item" style="list-style-type: none;"><a href="roar_report.php"><i class='bx bx-file nav_icon'></i> Risk & Opportunity Assessment Report</a></li>
                <?php } ?>
                </ul>
            </li>
            <?php if ($_SESSION["role"] === "Super admin") { ?>
                <li style="list-style-type: none;"><a href="create_user.php"><i class='bx bx-user-plus nav_icon'></i> Create New User</a></li>
                <li style="list-style-type: none;"><a href="add_cert.php"><i class='bx bx-certification nav_icon'></i> Add New Certificate</a></li>
                <li style="list-style-type: none;"><a href="update_api_key.php"><i class='bx bx-key nav_icon'></i> Update ChatGPT API Key</a></li>
            <?php } ?>
            
            <?php if ($_SESSION["role"] === "Super admin") { ?>
                <li class="menu-item" style="list-style-type: none;"><a href="roar_tool.php"><i class='bx bx-tool nav_icon'></i> Risk & Opportunity Assessment Tool</a></li>
                <li class="menu-item" style="list-style-type: none;"><a href="roar_report.php"><i class='bx bx-file nav_icon'></i> Risk & Opportunity Assessment Report</a></li>
                <li class="menu-item" style="list-style-type: none;"><a href="#"><i class='bx bx-edit nav_icon'></i> Manage Content</a>
                    <ul class="submenu" style="list-style-type: none; padding-left: 20px; margin: 0;">
                        <li style="list-style-type: none;"><a href="update_content.php"><i class='bx bx-pencil nav_icon'></i> Update Content</a></li>
                        <li style="list-style-type: none;"><a href="update_testimonials.php"><i class='bx bx-comment-dots nav_icon'></i> Update Testimonials</a></li>
                        <li style="list-style-type: none;"><a href="manage_blogs.php"><i class='bx bx-blog nav_icon'></i> Manage Blogs</a></li>
                    </ul>
                </li>
                <li class="menu-item" style="list-style-type: none;"><a href="update_tool.php"><i class='bx bx-data nav_icon'></i> Update ROAR Tool Data</a></li>
                <li class="menu-item" style="list-style-type: none;"><a href="manage_image.php"><i class='bx bx-images nav_icon'></i> Manage Images</a></li>
            <?php } elseif ($_SESSION["role"] === "user") { ?>
                <li class="menu-item" style="list-style-type: none;"><a href="roar_tool.php"><i class='bx bx-tool nav_icon'></i> Risk & Opportunity Assessment Tool</a></li>
                <li class="menu-item" style="list-style-type: none;"><a href="roar_report.php"><i class='bx bx-file nav_icon'></i> Risk & Opportunity Assessment Report</a></li>
                <li class="menu-item" style="list-style-type: none;"><a href="update_password.php"><i class='bx bx-key nav_icon'></i> Update Password</a></li>
            <?php } ?>
        </ul>
    </div>
</div>