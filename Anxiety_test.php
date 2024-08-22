<!doctype html>
<html lang="en">
<!-- Mirrored from html.merku.love/talking-minds/service_details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 08:09:29 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mental health Project 2024</title>

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
  <style>
    .container2 {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 55%;
        margin-top: 10%;
    }

    .heading-box {
        background-color: #26aba3;
        color: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        margin-bottom: 20px;
    }

    h1, h3 ,h5{
        margin: 0;
        color:#fff;
        line-height: 2;
    }

    .question {
        margin-bottom: 20px;
    }

    .question label {
        display: block;
        margin-bottom: 10px;
       
    }

    .options {
        display: flex;
        gap: 10px;
        flex-wrap: nowrap;
    }

    .options input[type="radio"] {
        display: none;
    }

    .options label {
        background-color: #e9ecef;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        border: 2px solid transparent;
        text-align: center;
        flex: 1;
    }

    .options input[type="radio"]:checked + label {
        background-color: #26aba3;
        color: white;
        border: 2px solid #26aba3;
    }

    button {
        display: block;
        width: 100%;
        padding: 15px;
        background-color: #26aba3;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        margin-top: 20px;
    }

    button:hover {
        background-color: #26aba3;
    }

    .result {
        display: none;
        margin-top: 20px;
        padding: 20px;
        background-color: #e0f7fa;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .result h2, .result h4 {
        text-align: center;
    }

    .result p {
        margin: 10px 0;
        text-align: justify;
    }

    .result .tips {
        margin-top: 20px;
    }

    @media print {
        .heading-box, .question, button {
            display: none;
        }
        .result {
            display: block;
        }
    }
</style>
</head>

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
                  <li ><a class="nav-link" href="index.php">Home</a></li>
                  <li class="dropdown"><a class="nav-link" href="#" id="programs_submenu" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">Conditions</a>
                    <ul class="dropdown-menu" aria-labelledby="programs_submenu">
                      <li><a href="Pstd.php">PTSD</a></li>
                      <li><a href="Anxiety.php">Generalised Anxiety Disorder</a></li>
                      <li><a href="Depression.php">Clinical Depression</a></li>
                      
                    </ul>
                  </li>
                  <li class="active"><a class="nav-link" href="mentaltest.php">Mental Health Test</a></li>
                  <li><a class="nav-link" href="forum.php">Forum</a></li>
                  <li><a class="nav-link" href="Therapy.php">Therapy Room</a></li>
                </ul>
              </div>
            </nav>
          </div>

          
        </div>
      </div>
    </header>
    <center>
        <div class="container2">
            <div class="heading-box">
                <h3>Anxiety Self Assessment</h3>
                <h5>"Make Your Assessment Today And Get To Know Your Anxiety Stage"</h5>
            </div>
            <div>
                <p style="text-align: justify;">
                    <b>Generalized Anxiety Disorder 7-item (GAD-7)</b> is a widely used self-report questionnaire designed to screen for and measure the severity of generalized anxiety disorder (GAD). It consists of 7 items, each addressing a different symptom of GAD.

                </p>
                <p style="text-align: justify;"><b>Instructions:</b> Please read each statement and indicate how often you have been bothered by the following problems over the past two weeks:
                    </p>
            </div>
            <div style="height: 20px;">

            </div>
            <form id="assessment-form">
                <div class="question">
                    <label style="text-align:left;"><b>1. Feeling nervous, anxious, or on edge</b></label>
                    <div class="options">
                        <input type="radio" id="q1_0" name="q1" value="0">
                        <label for="q1_0">Not at all</label>
                        <input type="radio" id="q1_1" name="q1" value="1">
                        <label for="q1_1">Several days</label>
                        <input type="radio" id="q1_2" name="q1" value="2">
                        <label for="q1_2">More than a day</label>
                        <input type="radio" id="q1_3" name="q1" value="3">
                        <label for="q1_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>2. Not being able to stop or control worrying</b></label>
                    <div class="options">
                        <input type="radio" id="q2_0" name="q2" value="0">
                        <label for="q2_0">Not at all</label>
                        <input type="radio" id="q2_1" name="q2" value="1">
                        <label for="q2_1">Several days</label>
                        <input type="radio" id="q2_2" name="q2" value="2">
                        <label for="q2_2">More than a day</label>
                        <input type="radio" id="q2_3" name="q2" value="3">
                        <label for="q2_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>3. Worrying too much about different things</b></label>
                    <div class="options">
                        <input type="radio" id="q3_0" name="q3" value="0">
                        <label for="q3_0">Not at all</label>
                        <input type="radio" id="q3_1" name="q3" value="1">
                        <label for="q3_1">Several days</label>
                        <input type="radio" id="q3_2" name="q3" value="2">
                        <label for="q3_2">More than a day</label>
                        <input type="radio" id="q3_3" name="q3" value="3">
                        <label for="q3_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>4. Trouble relaxing</b></label>
                    <div class="options">
                        <input type="radio" id="q4_0" name="q4" value="0">
                        <label for="q4_0">Not at all</label>
                        <input type="radio" id="q4_1" name="q4" value="1">
                        <label for="q4_1">Several days</label>
                        <input type="radio" id="q4_2" name="q4" value="2">
                        <label for="q4_2">More than a day</label>
                        <input type="radio" id="q4_3" name="q4" value="3">
                        <label for="q4_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>5. Being so restless that it is hard to sit still</b></label>
                    <div class="options">
                        <input type="radio" id="q5_0" name="q5" value="0">
                        <label for="q5_0">Not at all</label>
                        <input type="radio" id="q5_1" name="q5" value="1">
                        <label for="q5_1">Several days</label>
                        <input type="radio" id="q5_2" name="q5" value="2">
                        <label for="q5_2">More than a day</label>
                        <input type="radio" id="q5_3" name="q5" value="3">
                        <label for="q5_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>6. Becoming easily annoyed or irritable</b></label>
                    <div class="options">
                        <input type="radio" id="q6_0" name="q6" value="0">
                        <label for="q6_0">Not at all</label>
                        <input type="radio" id="q6_1" name="q6" value="1">
                        <label for="q6_1">Several days</label>
                        <input type="radio" id="q6_2" name="q6" value="2">
                        <label for="q6_2">More than a day</label>
                        <input type="radio" id="q6_3" name="q6" value="3">
                        <label for="q6_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>7. Feeling afraid, as if something awful might happen</b></label>
                    <div class="options">
                        <input type="radio" id="q7_0" name="q7" value="0">
                        <label for="q7_0">Not at all</label>
                        <input type="radio" id="q7_1" name="q7" value="1">
                        <label for="q7_1">Several days</label>
                        <input type="radio" id="q7_2" name="q7" value="2">
                        <label for="q7_2">More than a day</label>
                        <input type="radio" id="q7_3" name="q7" value="3">
                        <label for="q7_3">Nearly every day</label>
                    </div>
                </div>
                <center><button  style="background-color: #26aba3; font-weight:bold;  color: white; padding: 10px 20px; border-radius: 10px; cursor: pointer; margin-top: 10px; font-size: 15px; text-align: center; height:50px; width:500px;" type="button" onclick="calculateResult()">Submit</button></center>
            </form>
            <div id="result" class="result"></div>
        </div>
    </center>
    <script>
          function calculateResult() {
              const form = document.getElementById('assessment-form');
              const resultDiv = document.getElementById('result');
              let totalScore = 0;
              let allAnswered = true;
    
              for (let i = 1; i <= 7; i++) {
                  const radios = form['q' + i];
                  let questionAnswered = false;
                  for (let radio of radios) {
                      if (radio.checked) {
                          totalScore += parseInt(radio.value);
                          questionAnswered = true;
                          break;
                      }
                  }
                  if (!questionAnswered) {
                      allAnswered = false;
                      break;
                  }
              }
    
              if (!allAnswered) {
                  alert("Please answer every question.");
                  return;
              }
    
              let resultText = '';
              let tips = '';
              if (totalScore >= 0 && totalScore <= 4) {
                  resultText = 'Minimal anxiety';
                  tips = `
                      <ol style="text-align: justify;">
                          <li>Maintain a balanced diet and regular exercise.</li><br>
                          <li>Practice mindfulness and meditation.</li><br>
                          <li>Stay socially connected with friends and family.</li><br>
                          <li>Engage in hobbies and activities you enjoy.</li><br>
                          <li>Ensure you get enough sleep each night.</li><br>
                      </ol>
                  `;
              } else if (totalScore >= 5 && totalScore <= 9) {
                  resultText = 'Mild anxiety';
                  tips = `
                      <ol style="text-align: justify;">
                          <li>Incorporate stress-relieving activities like yoga or walking.</li><br>
                          <li>Talk to someone you trust about your feelings.</li><br>
                          <li>Limit caffeine and alcohol intake.</li><br>
                          <li>Practice deep breathing exercises.</li><br>
                          <li>Set aside time for relaxation and self-care.</li><br>
                      </ol>
                  `;
              } else if (totalScore >= 10 && totalScore <= 14) {
                  resultText = 'Moderate anxiety';
                  tips = `
                      <ol style="text-align: justify;">
                          <li>Consider speaking with a mental health professional.</li><br>
                          <li>Keep a journal to track your thoughts and feelings.</li><br>
                          <li>Develop a routine that includes relaxation techniques.</li><br>
                          <li>Join a support group for anxiety.</li><br>
                          <li>Focus on maintaining a healthy work-life balance.</li><br>
                      </ol>
                  `;
              } else if (totalScore >= 15 && totalScore <= 21) {
                  resultText = 'Severe anxiety';
                  tips = `
                      <ol style="text-align: justify;">
                          <li>Seek support from a mental health professional immediately.</li><br>
                          <li>Join a chat room or support group for more help.</li><br>
                          <li>Practice regular physical activity to reduce stress.</li><br>
                          <li>Explore relaxation techniques like progressive muscle relaxation.</li><br>
                          <li>Avoid substances that can increase anxiety, such as caffeine.</li><br>
                      </ol>
                  `;
              }
    
              resultDiv.innerHTML = `
                  <div style="text-align: center; font-family: 'Milkshake', cursive; font-size: 15px;">
                      <h2>Result For Generalised Anxiety Mental Health Test</h2>
                      <p><b>Your total score:</b>${totalScore}</p>
                      <p><b>Level Of Severity:</b> ${resultText}</p>
                      <p> <b>NB:</b> If you have another symptom that is not specified in this Test we advise you to go to the therapy room for further consultation with the qualified Psychologist
                        <a href="Therapy.php"> Go to Therapy room</a>
                        </p>
                      <div class="tips" style="text-align: center;">
                          <h2>Self Help Tips</h2>
                          ${tips}
                      </div>
                      <center><button style="background-color: #26aba3; font-weight:bold; color: white; padding: 10px 20px; border: 2px solid black; border-radius: 10px; cursor: pointer; margin-top: 10px; font-size: 15px; text-align: center; height:50px; width:500px;" onclick="window.print()">Print Result</button></center>
                  </div>
              `;
              resultDiv.style.display = 'block';
          }
      </script>
     
    </main>
    <footer class="site_footer bg_primary">
      <div class="container">
        <div class="copyright_widget text-center">
          <p class="copyright_text m-0">Copyright © <b> Heal space </b>  All rights reserved 2024</p>
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
<!-- Mirrored from html.merku.love/talking-minds/service_details.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 08:09:30 GMT -->

</html>