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

    h1, h3, h5 {
        margin: 0;
        color: white;
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
</style>
</head>

<body>
  <div class="page_wrapper">
    <div class="backtotop"><a href="#" class="scroll"><i class="fa-solid fa-arrow-up"></i></a></div>
    <header class="site_header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-5">
            <div class="site_logo"><a class="site_link" href="index.php"><img
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
                <h3>Depression Assessment</h3>
                <h5>"Make Your Assessment Today And Get To Know Your Depression"</h5>
            </div>
            <div>
                <p style="text-align: justify;">
                    <b>The Patient Health Questionnaire-9 (PHQ-9)</b> is a widely used screening tool for depression in 
clinical practice and research settings. It's a self-administered questionnaire that assesses the 
severity of depression symptoms over the past two weeks.

                </p>
                <p style="text-align: justify;"><b>Instructions:</b> For each of the following nine items, indicate how often you have been bothered by 
                    the following problems over the past two weeks by selecting the appropriate response:
                    </p>
            </div>
            <div style="height: 20px;">

            </div>
            <form id="assessmentForm">
                <div class="question">
                    <label style="text-align:left;"><b>1. Little interest or pleasure in doing things</b></label>
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
                <!-- Repeat for all questions from 2 to 9 -->
                <div class="question">
                    <label style="text-align:left;"><b>2. Feeling down, depressed, or hopeless</b></label>
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
                    <label style="text-align:left;"><b>3. Trouble falling or staying asleep, or sleeping too much</b></label>
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
                    <label style="text-align:left;"><b>4. Feeling tired or having little energy</b></label>
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
                    <label style="text-align:left;"><b>5. Poor appetite or overeating</b></label>
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
                    <label style="text-align:left;"><b>6. Feeling bad about yourself — or that you are a failure or have let yourself or your family down</b></label>
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
                    <label style="text-align:left;"><b>7. Trouble concentrating on things, such as reading the newspaper or watching television</b></label>
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
                <div class="question">
                    <label style="text-align:left;"><b>8. Moving or speaking so slowly that other people could have noticed. Or the opposite </b></label>
                    <div class="options">
                        <input type="radio" id="q8_0" name="q8" value="0">
                        <label for="q8_0">Not at all</label>
                        <input type="radio" id="q8_1" name="q8" value="1">
                        <label for="q8_1">Several days</label>
                        <input type="radio" id="q8_2" name="q8" value="2">
                        <label for="q8_2">More than a day</label>
                        <input type="radio" id="q8_3" name="q8" value="3">
                        <label for="q8_3">Nearly every day</label>
                    </div>
                </div>
                <div class="question">
                    <label style="text-align:left;"><b>9. Thoughts that you would be better off dead, or of hurting yourself in some way</b></label>
                    <div class="options">
                        <input type="radio" id="q9_0" name="q9" value="0">
                        <label for="q9_0">Not at all</label>
                        <input type="radio" id="q9_1" name="q9" value="1">
                        <label for="q9_1">Several days</label>
                        <input type="radio" id="q9_2" name="q9" value="2">
                        <label for="q9_2">More than a day</label>
                        <input type="radio" id="q9_3" name="q9" value="3">
                        <label for="q9_3">Nearly every day</label>
                    </div>
                </div>
                <center><button  style="background-color: #26aba3; font-weight:bold;  color: white; padding: 10px 20px; border-radius: 10px; cursor: pointer; margin-top: 10px; font-size: 15px; text-align: center; height:50px; width:500px;" type="button" onclick="calculateScore()">Submit</button></center>
            </form>
            <div id="result"></div>
        </div>
    
        
    </center>
    <script>
        function calculateScore() {
            const form = document.getElementById('assessmentForm');
            const resultDiv = document.getElementById('result');
            let score = 0;
            let allAnswered = true;

            for (let i = 1; i <= 9; i++) {
                const radios = form.querySelectorAll(`input[name="q${i}"]`);
                let questionAnswered = false;
                for (const radio of radios) {
                    if (radio.checked) {
                        score += parseInt(radio.value);
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
            if (score <= 4) {
                resultText = 'Minimal depression';
                tips = `
                    <ol style="text-align: justify;">
                        <li>Maintain a regular sleep schedule.</li><br>
                        <li>Engage in physical activities daily.</li><br>
                        <li>Eat a balanced diet rich in nutrients.</li><br>
                        <li>Stay connected with loved ones.</li><br>
                        <li>Practice mindfulness and relaxation techniques.</li><br>
                    </ol>
                `;
            } else if (score <= 9) {
                resultText = 'Mild depression';
                tips = `
                    <ol style="text-align: justify;">
                        <li>Track your mood changes in a journal.</li><br>
                        <li>Incorporate stress-reducing activities into your routine.</li><br>
                        <li>Spend time in nature whenever possible.</li><br>
                        <li>Engage in hobbies that you enjoy.</li><br>
                        <li>Talk about your feelings with a trusted person.</li><br>
                    </ol>
                `;
            } else if (score <= 14) {
                resultText = 'Moderate depression';
                tips = `
                    <ol style="text-align: justify;">
                        <li>Consider talking to a healthcare provider or therapist.</li><br>
                        <li>Practice regular meditation or yoga.</li><br>
                        <li>Set realistic goals for yourself each day.</li><br>
                        <li>Join a support group for people with similar experiences.</li><br>
                        <li>Focus on positive self-talk and affirmations.</li><br>
                    </ol>
                `;
            } else if (score <= 19) {
                resultText = 'Moderately severe depression';
                tips = `
                    <ol style="text-align: justify;">
                        <li>Seek support from a mental health professional immediately.</li><br>
                        <li>Reach out to friends or family for support.</li><br>
                        <li>Engage in regular physical activity to improve mood.</li><br>
                        <li>Avoid alcohol and recreational drugs.</li><br>
                        <li>Establish a daily routine to add structure to your day.</li><br>
                    </ol>
                `;
            } else if (score <= 27) {
                resultText = 'Severe depression';
                tips = `
                    <ol style="text-align: justify;">
                        <li>Immediate professional help is highly recommended.</li><br>
                        <li>Do not hesitate to call emergency services if needed.</li><br>
                        <li>Stay connected with a support network.</li><br>
                        <li>Practice deep breathing and relaxation techniques.</li><br>
                        <li>Avoid isolation; stay in touch with loved ones.</li><br>
                    </ol>
                `;
            }

            resultDiv.innerHTML = `
                <div style="background-color: #e0f7fa; border-radius: 30px; margin-top: 30px; font-family: 'Arial', cursive; font-size: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px;">
                    <center><h2>Result for Depression Assessment</h2></center>
                    <p><b>Your total score:</b> ${score}</p>
                    <p><b>Level Of Depression severity:</b> ${resultText}</p>
                    <p> <b>NB:</b> If you have another symptom that is not specified in this Test we advise you to go to the therapy room for further consultation with the qualified Psychologist
                        <a href="Therapy.php"> Go to Therapy room</a>
                        </p>
                    <div class="tips" style="text-align: center;">
                        <h2>Tips for a better life</h2>
                        ${tips}
                    </div>
                    <center><button style="background-color: #26aba3; font-weight:bold; color: white; padding: 10px 20px; border: 2px solid black; border-radius: 10px; cursor: pointer; margin-top: 10px; font-size: 15px; text-align: center; height:50px; width:500px;" onclick="printResult()">Print Result</button></center>
                </div>
            `;
            resultDiv.style.display = 'block';
        }

        function printResult() {
            const resultContent = document.getElementById('result').innerHTML;
            const originalContent = document.body.innerHTML;

            document.body.innerHTML = resultContent;
            window.print();
            document.body.innerHTML = originalContent;
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