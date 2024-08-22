<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "therapy_room";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variable
$message = '';
$alert_message = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_message = $_POST['comment'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $user_message);

    if ($stmt->execute()) {
        $message = "Message successfully submitted.";
        $alert_message = "Message successfully submitted.";
    } else {
        $message = "Error: " . $stmt->error;
        $alert_message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>



<html lang="en">
<!-- Mirrored from html.merku.love/talking-minds/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 08:09:01 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home - Heal Space</title>
  <style>
    /* Internal CSS for image styling */
    .images_group_widget {
      display: flex;
      justify-content: center;
      /* Center the images horizontally */
      align-items: center;
      /* Center the images vertically */
    }

    .unordered_list {
      list-style-type: none;
      /* Remove bullet points */
      padding: 0;
      margin: 0;
    }

    .unordered_list img {
      max-width: 100%;
      /* Ensure images don't exceed container width */
      height: auto;
      /* Maintain aspect ratio */
      margin: 10px;
      /* Add spacing between images */
    }
  </style>
  <link rel="shortcut icon" href="assets/images/site_logo/favourite_icon.svg">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/cursor.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>
<?php if (!empty($alert_message)): ?>
    <script>
        alert("<?php echo $alert_message; ?>");
    </script>
<?php endif; ?>
<body>
  <div class="page_wrapper">
    <div class="backtotop"><a href="#" class="scroll"><i class="fa-solid fa-arrow-up"></i></a></div>
    <header class="site_header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-5">
            <div class="site_logo"><a class="site_link" href="index.html"><img
                  src="assets/images/site_logo/HS-logo-1.png"
                  alt="Site Logo – Talking Minds – Psychotherapist Site "></a></div>
          </div>
          <div class="col-lg-6 col-2">
            <nav class="main_menu navbar navbar-expand-lg">
              <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                <ul class="main_menu_list unordered_list">
                  <li class="active"><a class="nav-link" href="index.php">Home</a></li>
                  <li class="dropdown"><a class="nav-link" href="#" id="programs_submenu" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">Conditions</a>
                    <ul class="dropdown-menu" aria-labelledby="programs_submenu">
                      <li><a href="Pstd.php">PTSD</a></li>
                      <li><a href="Anxiety.php">Generalised Anxiety Disorder</a></li>
                      <li><a href="Depression.php">Clinical Depression</a></li>

                    </ul>
                  </li>
                  <li><a class="nav-link" href="mentaltest.php">Mental Health Test</a></li>
                  <li><a class="nav-link" href="forum.php">Forum</a></li>
                  <li><a class="nav-link" href="Therapy.php">Therapy Room</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="col-lg-3 col-5">
            <ul class="header_btns_group unordered_list justify-content-end">
              <li><button class="mobile_menu_btn" type="button" data-bs-toggle="collapse"
                  data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="far fa-bars"></i></button></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main class="page_content">
      <section class="hero_section decoration_wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="hero_content_wrap">
                <h3 class="heading_text">Welcome to
                  The Heal Space</h3>
                <p class="heading_description">Your top destination for enhancing mental health, boosting overall
                  well-being, and achieving better performance.</p>
         
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero_image_wrap"><img src="assets/images/hero/medium-shot-mother-playing-with-kid.jpg"
                  alt="Talking Minds – Psychotherapist Site "></div>
            </div>
          </div>
        </div>
        <div class="decoration_item shape_blur_shadow"></div>
        <div class="decoration_item shape_leaf"><img src="assets/images/shapes/shape_leaf_left_top.svg"
            alt="Shape Leaf - HealSpace - Psychotherapist Site "></div>
      </section>
      <section class="service_section section_space_lg bg_primary_light">
        <div class="container">
          <div class="section_heading text-center">
            <h2 class="section_heading_text">Get reliable information about mental health conditions</h2>
            <p class="section_heading_description mb-0"></p>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service_item">
                <div class="item_icon"><img src="assets/images/icons/icon_brain.svg"
                    alt="Brain Icon - Talking Minds – Psychotherapist Site "></div>
                <div class="item_contact">
                  <h3 class="item_title">Clinical Depression</h3>
                  <p>Professional therapy to address depression, providing support, coping strategies, and guidance for
                    emotional well-being.</p><a class="btn-link" href="Depression.html"><span class="btn_text">More
                      Info</span> <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">


              <div class="service_item">
                <div class="item_icon"><img src="assets/images/icons/icon_head.svg"
                    alt="Brain Icon - Talking Minds – Psychotherapist Site Help"></div>
                <div class="item_contact">
                  <h3 class="item_title">Post-traumatic Stress Disorder(PTSD)</h3>
                  <p>This is a mental health condition triggered by a terrifying event, causing flashbacks, nightmares,
                    and severe anxiety.</p><a class="btn-link" href="Pstd.html"><span class="btn_text">More Info</span>
                    <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                </div>
              </div>


            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service_item">
                <div class="item_icon"><img src="assets/images/icons/icon_head.svg"
                    alt="Brain Icon - Talking Minds – Psychotherapist Site "></div>
                <div class="item_contact">
                  <h3 class="item_title">Generalised Anxiety Disorder</h3>
                  <p>Anxiety is excessive worry or fear, often uncontrollable, causing physical symptoms like
                    restlessness, tension, and rapid heartbeat.</p><a class="btn-link" href="Anxiety.html"><span
                      class="btn_text">More Info</span> <span class="btn_icon"><i
                        class="fa-solid fa-arrow-up-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
      </section>
      <section class="about_section section_space_lg">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 order-lg-last">
              <div class="image_widget"><img src="assets/images/about/about_image_1-min.jpg"
                  alt="About Image - Talking Minds – Psychotherapist Site ">
                <div class="image_shape bg_primary_light"></div>
                <div class="about_video_icon"><a class="video_play_btn popup_video"
                    href="assets/images/about/one.mp4"><i class="fa-duotone fa-play"></i></a></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about_content">
                <div class="section_heading mb-4">
                  <h2 class="section_heading_text"><mark>Rwandan Youth Today</mark> — On Mental Health and Counseloring.
                  </h2>
                  <p class="section_heading_description mb-0">

                    "Young people today face many challenges that can affect their mental health. This video helps us
                    understand where we stand and what to do next."</p>
                </div>
                
          </div>
        </div>
      </section>


      <section class="faq_section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 ">
              <div class="image_widget"><img src="assets/images/about/about_image_3-min.jpg"
                  alt="About Image - Talking Minds – Psychotherapist Site ">
                <div class="image_shape bg_primary_light"></div>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="ps-lg-5">
                <div class="section_heading mb-lg-4 mb-2">
                  <h2 class="section_heading_text mb-0">The most popular questions to discuss mental health</h2>
                </div>
                <div class="accordion" id="faq_accordion">
                  <div class="accordion-item">
                    <div class="accordion-header" id="heading_one"><button class="accordion-button" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse_one" aria-expanded="true"
                        aria-controls="collapse_one">What is mental health?</button></div>
                    <div id="collapse_one" class="accordion-collapse collapse show" aria-labelledby="heading_one"
                      data-bs-parent="#faq_accordion">
                      <div class="accordion-body">
                        <p class="m-0">Mental health refers to a person's psychological and emotional well-being,
                          encompassing their thoughts, feelings, and behaviors. It includes aspects like mood stability,
                          coping with stress, maintaining relationships, and overall mental functioning.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="heading_two"><button class="accordion-button collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse_two" aria-expanded="false"
                        aria-controls="collapse_two">What do I do if the support doesn't help?</button></div>
                    <div id="collapse_two" class="accordion-collapse collapse" aria-labelledby="heading_two"
                      data-bs-parent="#faq_accordion">
                      <div class="accordion-body">
                        <p class="m-0">If the support you're receiving isn't helpful, it's important to communicate your
                          concerns, seek
                          alternative sources of support like friends, family, or professionals, and prioritize
                          self-care while persistently
                          exploring different options until you find the support that best meets your needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="heading_three"><button class="accordion-button collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse_three" aria-expanded="false"
                        aria-controls="collapse_three">Can you prevent mental health problems?</button></div>
                    <div id="collapse_three" class="accordion-collapse collapse" aria-labelledby="heading_three"
                      data-bs-parent="#faq_accordion">
                      <div class="accordion-body">
                        <p class="m-0">While it's not always possible to prevent mental health problems entirely,
                          there are steps individuals can take to reduce their risk and promote overall well-being.
                          Engaging in regular exercise, maintaining a balanced diet, getting enough sleep, managing
                          stress effectively,
                          nurturing positive relationships, seeking support when needed, and practicing self-care can
                          all contribute
                          to mental health resilience. Early intervention and seeking professional
                          help when experiencing symptoms can also mitigate the impact of mental health issues.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="heading_four"><button class="accordion-button collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse_four" aria-expanded="false"
                        aria-controls="collapse_four">What are the 7 components of mental health?</button></div>
                    <div id="collapse_four" class="accordion-collapse collapse" aria-labelledby="heading_four"
                      data-bs-parent="#faq_accordion">
                      <div class="accordion-body">
                        <p class="m-0">The 7 components of mental health, as outlined by the World Health Organization
                          (WHO), are:<br>

                          1. Emotional well-being: Understanding and managing emotions in a healthy way.<br>
                          2. Psychological well-being: Maintaining a positive mindset and resilience in the face of
                          challenges.<br>
                          3. Social well-being: Building and maintaining meaningful relationships and connections with
                          others.<br>
                          4. Spiritual well-being: Finding meaning and purpose in life, and nurturing a sense of inner
                          peace.<br>
                          5. Physical well-being: Taking care of one's body through regular exercise, nutrition, and
                          adequate sleep.<br>
                          6. Environmental well-being: Creating and maintaining a supportive and safe environment.<br>
                          7. Occupational well-being: Experiencing satisfaction and fulfillment in one's work or daily
                          activities.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="heading_five"><button class="accordion-button collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapse_five" aria-expanded="false"
                        aria-controls="collapse_five">Are there cures for mental health problems?</button></div>
                    <div id="collapse_five" class="accordion-collapse collapse" aria-labelledby="heading_five"
                      data-bs-parent="#faq_accordion">
                      <div class="accordion-body">
                        <p class="m-0">While some mental health conditions can be effectively managed and treated, there
                          isn't
                          typically a "cure" in the traditional sense. Treatment often involves a combination of
                          therapy, medication,
                          lifestyle changes, and support networks tailored to the individual's needs. These
                          interventions can help alleviate
                          symptoms, improve functioning, and enhance overall well-being. However, it's important to
                          recognize that mental
                          health is complex and multifaceted, and what works for one person may not work for another.
                          Additionally, some
                          conditions may require ongoing management to maintain stability and prevent relapse. Early
                          intervention, proper
                          diagnosis,
                          and consistent treatment are key factors in effectively managing mental health concerns.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <section class="contact_section ">
        <div class="container">
          <div class="conatiner_box">
            <div class="section_heading mb-4">
              <div class="row justify-content-lg-between">
                <div class="col-lg-6">
                  <h2 class="section_heading_text mb-0">Take care of your mental health now</h2>
                </div>
                <div class="col-lg-6" >
                  <p></p>
                  <p class="section_heading_description mb-0 ps-lg-4">Contact us with your needs, and we'll guide you promptly. Whether you seek assistance with anxiety, PTSD, depression, 
                    or other mental health concerns, we're here to support you..</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
       
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input_name">Name</label>
                                <input id="input_name" class="form-control" type="text" name="name" placeholder="Your name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input_phone">Email</label>
                                <input id="input_phone" class="form-control" type="email" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-4">
                                <label for="input_message">Message</label>
                                <textarea id="input_message" class="form-control" name="comment" placeholder="Your message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <span class="btn_text" data-text="Submit Message">Submit Message</span>
                                <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
              <div class="col-lg-6">
                <div class="ps-lg-4">
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <ul class="contact_info_list unordered_list_block">
                        <li>
                          <div class="item_icon"><i class="fa-solid fa-phone"></i></div>
                          <div class="item_content">
                            <h3 class="item_title">Phone Number</h3>
                            <p class="item_info mb-0">+250780527954</p>
                          </div>
                        </li>
                       
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="contact_info_list unordered_list_block">
                        <li>
                          <div class="item_icon"><i class="fa-solid fa-envelope"></i></div>
                          <div class="item_content">
                            <h3 class="item_title">Email</h3>
                            <p class="item_info mb-0">info@youthhelp.com</p>
                          </div>
                        </li>
                      
                      </ul>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
    <footer class="site_footer bg_primary">
      <div class="container">
        <div class="copyright_widget text-center">
          <p class="copyright_text m-0">Copyright © <b>Heal space</b> All rights reserved 2024</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-dropdown-ml-hack.min.js"></script>
  <script src="assets/js/cursor.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/magnific-popup.min.js"></script>
  <script src="assets/js/appear.min.js"></script>
  <script src="assets/js/odometer.min.js"></script>
  <script src="assets/js/main.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8CZB4YJTLB"></script>
  <script>window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-8CZB4YJTLB');</script>
</body>
<!-- Mirrored from html.merku.love/talking-minds/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 08:09:20 GMT -->

</html>