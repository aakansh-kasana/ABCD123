<?php
session_start();

// Function to check if the user is authenticated
function checkAuthentication() {
    if (!isset($_SESSION["loggedin"]) || !isset($_SESSION["role"])) {
        header("Location: login.php");
        exit();
    }
}

// Function to check if the user has the required role for a page
function checkRole($allowed_roles) {
    if (($_SESSION["role"] != $allowed_roles) && ($_SESSION["role"] != "admin") && ($_SESSION["role"] != "Super_admin")) {
        header("Location: dashboard.php");
        exit();
    }
}

$userRestrictedPages = array(
    "dashboard.php",
    "roar_tool.php",
    "roar_report.php",
    "update_password.php",
    "risk_treatment.php",
);

$adminRestrictedPages = array(
    "dashboard.php",
    "roar_tool.php",
    "update_password.php",
    "create_user.php",
    "risk_treatment.php",
);

$Super_adminRestrictedPages = array(
    "dashboard.php",
    "roar_tool.php",
    "manage_blogs.php",
    "update_content.php",
    "update_testimonials.php",
    "update_password.php",
    "create_user.php",
    "add_cert.php",
    "update_api_key.php",
    "update_tool.php",
    "risk_treatment.php",
    "manage_image.php",
);

$currentPage = basename($_SERVER['PHP_SELF']);

if (in_array($currentPage, $userRestrictedPages) || in_array($currentPage, $adminRestrictedPages) || in_array($currentPage, $Super_adminRestrictedPages)) {
    checkAuthentication();
    if (in_array($currentPage, $userRestrictedPages)) {
        checkRole("user");
    }
    
    else if (in_array($currentPage, $adminRestrictedPages)) {
        checkRole("admin");
    }

    else if (in_array($currentPage, $Super_adminRestrictedPages)) {
        checkRole("Super_admin");
    }
}
?>
