<?php
include("php/check_auth.php");
include('php/header.php');

// Include your database connection code
include("php/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $department = $_POST["department"];
    $company = $_POST["company"];

    if ((strlen($password) < 10) || (!ctype_alnum($password))) {
        $error_message = "Password must be more than 10 characters & should be Alpha Numeric";
    } else {
        // Insert the user data into the database
        $insert_query = "INSERT INTO login (name, email, password, Role, department, company) VALUES ('$username', '$email', '$password', '$role', '$department', '$company')";
        $insert_result = $conn->query($insert_query);

        if ($insert_result) {
            $sucess_message = "Sucessfully Created a User";
        } else {
            $error_message = "Error creating user. Please try again.";
        }
    }
}

?>

<div id="content" class="site-content ">
    <div class="no-container">
        <div class="no-row">
            <div class="full_width_box">
                <div data-elementor-type="wp-page" data-elementor-id="25" class="elementor elementor-25">

                    <!-- start: -->
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e81c007 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="e81c007" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">

                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62b81ee"
                                data-id="62b81ee" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-aded624 elementor-widget elementor-widget-monst-single-banner-v1"
                                        data-id="aded624" data-element_type="widget"
                                        data-widget_type="monst-single-banner-v1.default">
                                        <div class="elementor-widget-container">

                                            <section class="single_banner one">
                                                <div class="container">
                                                    <div class="banner_box_in">

                                                        <div class="text-center">
                                                            <div class="content_box">


                                                                <div class="title wow animate__ animate__fadeIn animated"
                                                                    style="visibility: visible; animation-name: fadeIn;">
                                                                    Create User
                                                                </div>

                                                                <p class="text-blueGray-400 leading-relaxed wow animate__ animate__fadeIn animated"
                                                                    style="visibility: visible; animation-name: fadeIn;">
                                                                    <a href="dashboard.php">Goto Dashboard</a>
                                                                </p>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <!-- start: Create User form -->

                                                    <div class="container mt-5">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        Create User
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <?php if (isset($error_message)) { ?>
                                                                            <div class="alert alert-danger">
                                                                                <?php echo $error_message; ?>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php if (isset($sucess_message)) { ?>
                                                                            <div class="alert alert-success">
                                                                                <?php echo $sucess_message; ?>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <form method="post">
                                                                            <div class="mb-3">
                                                                                <label for="username"
                                                                                    class="form-label">Username:</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="username" name="username"
                                                                                    required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="email"
                                                                                    class="form-label">Email:</label>
                                                                                <input type="email" class="form-control"
                                                                                    id="email" name="email" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="password"
                                                                                    class="form-label">Password:</label>
                                                                                <input type="password"
                                                                                    class="form-control" id="password"
                                                                                    name="password" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="company"
                                                                                    class="form-label">Company:</label>
                                                                                <input type="company"
                                                                                    class="form-control" id="company"
                                                                                    name="company" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="role"
                                                                                    class="form-label">Role:</label>
                                                                                <select class="form-control" id="role"
                                                                                    name="role" required>
                                                                                    <option value="Super admin">Super Admin</option>
                                                                                    <option value="admin">Admin</option>
                                                                                    <option value="user">User</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="container-fluid ">
                                                                                <div class="row mb-3">
                                                                                    <div class="col-lg-6 col-md-12 w-100">
                                                                                        <div class="form-group ">
                                                                                            <label for="department"
                                                                                                class="form-label">Department:</label>
                                                                                            <select class="form-control" id="department" name="department" required>
                                                                                                <!-- Placeholder option -->
                                                                                                <option value=""
                                                                                                    disabled selected>
                                                                                                    Select Department
                                                                                                </option>
                                                                                                <option value="all">
                                                                                                    All Department
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <script>
                                                                                const departmentSelect = document.getElementById("department");

                                                                                fetch("php/get_dropdown.php?action=department")
                                                                                    .then(response => response.json())
                                                                                    .then(departments => {

                                                                                        departments.forEach(function(department) {
                                                                                            departmentSelect.appendChild(new Option(department, department));
                                                                                        });
                                                                                    });
                                                                            </script>

                                                                            <button type="submit"
                                                                                class="w-100 btn btn-primary">Create
                                                                                User</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- end: Create User form -->
                                                </div>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-59611ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="59611ea" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c26077"
                                                            data-id="6c26077" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
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

                            <?php include('php/footer.php'); ?>