<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="css/custom_css/login123.css">
  <style>
    body {
      margin: 0;
      overflow: hidden;
    }

    /* Container for scrolling text */
    .scroll-box {
      width: 30rem;
      height: 12rem; /* Fixed height to create a box */
      margin: 2rem auto; 
      font-size: 1.2rem;
      font-weight: bold;
      color: white;
      overflow: hidden; /* Hide the overflowing text */
      position: relative;
      border: 2px solid white;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.5); /* Optional for better visibility */
      margin-left: -7rem;
    }

    /* The animated text */
    .scroll-text {
      position: absolute;
      animation: scrollUp 15s linear infinite;
    }

    @keyframes scrollUp {
      0% {
        top: 100%;
      }
      100% {
        top: -100%;
      }
    }

    .video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .container {
      position: relative;
      z-index: 1;
    }

    .Agile_img .img1 {
      height: 40rem;
      width: 58rem;
      margin-right: 5rem;
      margin-left: -8rem;
      display: none;
      visibility: hidden;
    }
  </style>
</head>

<body>
  <video class="video-background" autoplay muted loop>
    <source src="img/login/Lock_vid.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div id="content" class="site-content">
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
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62b81ee"
                  data-id="62b81ee" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                      class="elementor-element elementor-element-aded624 elementor-widget elementor-widget-monst-single-banner-v1"
                      data-id="aded624" data-element_type="widget" data-widget_type="monst-single-banner-v1.default">
                      <div class="elementor-widget-container">
                        <div class="sc-dovKpQ ieFsZL">
                          <section class="sc-czpcHH hgjRGx"></section>
                          <h1 style="margin-left: 53rem; font-size: 4rem; margin-bottom: -11rem; color: white;" class="sc-bRJSeJ bpbabR">Welcome to ROAR</h1>

                          <div class="Agile_cont">
                            <div class="Agile_img">
                              <img class="img1" src="img/login/login_logo1a.png" alt="error">
                            </div>

                            <div class="scroll-box">
                              <div id="animatedText" class="scroll-text"></div>
                            </div>
                            <div class="login_form" style="margin-top: 2rem;">
                              <!-- Login form container -->
                              <?php if (isset($error_message)) { ?>
                                <div class="alert alert-danger">
                                  <?php echo $error_message; ?>
                                </div>
                              <?php } ?>
                              <form method="post">
                                <h2>Sign into ROAR</h2>

                                <!-- Email input box -->
                                <div class="input_box">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" placeholder="Enter email address" name="email" required />
                                </div>

                                <!-- Password input box -->
                                <div class="input_box">
                                  <div class="password_title">
                                    <label for="password">Password</label>
                                  </div>
                                  <input type="password" id="password" name="password" placeholder="Enter your password" required />
                                </div>

                                <!-- Login button -->
                                <div style="margin-top: 10px; margin-bottom: 5px;" class="mb-3 g-recaptcha" data-sitekey="6LfA5rInAAAAAKYfpJjyAR_3CNQpd9Dey-LbOhZ0"></div>
                                <button type="submit">Log In</button>

                                <p class="sign_up">Can't access your account? <a href="contact_us.php">Click here</a></p>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
            <!-- end: -->

          </div>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-59611ea elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="59611ea" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c26077"
                data-id="6c26077" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-073949d elementor-widget elementor-widget-monst-themebtns-v1"
                    data-id="073949d" data-element_type="widget" data-widget_type="monst-themebtns-v1.default">
                    <div class="elementor-widget-container">
                    </div>
                  </div>
                </div>
              </div>
          </section>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const text = "Risk and opportunity assessment tool (ROAR) is designed to facilitate comprehensive context based risk and opportunity assessment from information security perspective.<br> The tool ensures ease as well as accuracy in identification of risks and/or opportunities.<br> The AI chatbot embedded helps the users in accurate statement of context, identification of risk and recommends controls which could be deployed to effectively mitigate the risk.";
      const textContainer = document.getElementById("animatedText");
      
      textContainer.innerHTML = text; // Set the entire text to be displayed inside the container
    });
  </script>

</body>

</html>
