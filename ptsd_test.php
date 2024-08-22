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
        width: 60%;
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
    h1{
        color: #000;
    }
     h3,h5 {
        margin: 0;
        line-height: 2;
        color: #fff;
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
                <h3>Post-Traumatic Stress Disorder Assessment</h3>
                <h5>"Make Your Assessment Today And Get To Know Your PTSD Stage""</h5>
            </div>
            <div>
                <p style="text-align: justify;">
                    <b>The PTSD Checklist for DSM-5 (PCL-5)</b> is a self-report measure used to assess the presence and severity of PTSD symptoms based on the DSM-5 criteria.

                </p>
                <p style="text-align: justify;"><b>Instructions:</b> Please read each statement and indicate how often you have been bothered by the following problems over the past two weeks:
                    </p>
            </div>
            
            <div style="height: 20px;">

            </div>
            <form id="assessmentForm">
                <!-- Questions will be inserted here by JavaScript -->
            </form>
            <center>
        <button  style="background-color: #26aba3; font-weight:bold;  color: white; padding: 10px 20px; border-radius: 10px; cursor: pointer; margin-top: 10px; font-size: 15px; text-align: center; height:50px; width:500px;" type="button" onclick="calculateScore()">Submit</button>
            </center>
            <div id="result"></div>
        </div>
    </center>
    <script>
            const questions = [
                "Repeated, disturbing, and unwanted memories of the stressful experience?",
                "Repeated, disturbing dreams of the stressful experience?",
                "Suddenly feeling or acting as if the stressful experience were actually happening again (as if you were actually back there reliving it)?",
                "Feeling very upset when something reminded you of the stressful experience?",
                "Having strong physical reactions when something reminded you of the stressful experience (for example, heart pounding, trouble breathing, sweating)?",
                "Avoiding memories, thoughts, or feelings related to the stressful experience?",
                "Avoiding external reminders of the stressful experience (for example, people, places, conversations, activities, objects, or situations)?",
                "Trouble remembering important parts of the stressful experience?",
                "Having strong negative beliefs about yourself, other people, or the world (for example, having thoughts such as: I am bad, there is something seriously wrong with me, no one can be trusted, the world is completely dangerous)?",
                "Blaming yourself or someone else for the stressful experience or what happened after it?",
                "Having strong negative feelings such as fear, horror, anger, guilt, or shame?",
                "Loss of interest in activities that you used to enjoy?",
                "Feeling distant or cut off from other people?",
                "Trouble experiencing positive feelings (for example, being unable to feel happiness or have loving feelings for people close to you)?",
                "Irritable behavior, angry outbursts, or acting aggressively?",
                "Taking too many risks or doing things that could cause you harm?",
                "Being ‘superalert’ or watchful or on guard?",
                "Feeling jumpy or easily startled?",
                "Having difficulty concentrating?",
                "Trouble falling or staying asleep?"
            ];
    
            const levels = [
                { min: 0, max: 20, label: "Minimal PTSD", tips: [
                    "Maintain a regular sleep schedule.",
                    "Engage in physical activities daily.",
                    "Eat a balanced diet rich in nutrients.",
                    "Stay connected with loved ones.",
                    "Practice mindfulness and relaxation techniques."
                ] },
                { min: 21, max: 40, label: "Mild PTSD", tips: [
                    "Track your mood changes in a journal.",
                    "Incorporate stress-reducing activities into your routine.",
                    "Spend time in nature whenever possible.",
                    "Engage in hobbies that you enjoy.",
                    "Talk about your feelings with a trusted person."
                ] },
                { min: 41, max: 60, label: "Moderate PTSD", tips: [
                    "Consider talking to a healthcare provider or therapist.",
                    "Practice regular meditation or yoga.",
                    "Set realistic goals for yourself each day.",
                    "Join a support group for people with similar experiences.",
                    "Focus on positive self-talk and affirmations."
                ] },
                { min: 61, max: 80, label: "Moderately Severe PTSD", tips: [
                    "Seek support from a mental health professional immediately.",
                    "Reach out to friends or family for support.",
                    "Engage in regular physical activity to improve mood.",
                    "Avoid alcohol and recreational drugs.",
                    "Establish a daily routine to add structure to your day."
                ] },
                { min: 81, max: 100, label: "Severe PTSD", tips: [
                    "Immediate professional help is highly recommended.",
                    "Do not hesitate to call emergency services if needed.",
                    "Stay connected with a support network.",
                    "Practice deep breathing and relaxation techniques.",
                    "Avoid isolation; stay in touch with loved ones."
                ] }
            ];
    
            function renderQuestions() {
                const form = document.getElementById('assessmentForm');
                questions.forEach((question, index) => {
                    const questionDiv = document.createElement('div');
                    questionDiv.className = 'question';
                    questionDiv.innerHTML = `
                        <label style="text-align:left;"><b>${index + 1}. ${question}</b></label>
                        <div class="options">
                            <input type="radio" id="q${index}_0" name="q${index}" value="0">
                            <label for="q${index}_0">Not at all</label>
                            <input type="radio" id="q${index}_1" name="q${index}" value="1">
                            <label for="q${index}_1">A little bit</label>
                            <input type="radio" id="q${index}_2" name="q${index}" value="2">
                            <label for="q${index}_2">Moderately</label>
                            <input type="radio" id="q${index}_3" name="q${index}" value="3">
                            <label for="q${index}_3">Quite a bit</label>
                            <input type="radio" id="q${index}_4" name="q${index}" value="4">
                            <label for="q${index}_4">Extremely</label>
                        </div>
                    `;
                    form.appendChild(questionDiv);
                });
            }
    
            function calculateScore() {
                const form = document.getElementById('assessmentForm');
                const resultDiv = document.getElementById('result');
                let score = 0;
                let allAnswered = true;
    
                for (let i = 0; i < questions.length; i++) {
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
                for (const level of levels) {
                    if (score >= level.min && score <= level.max) {
                        resultText = level.label;
                        tips = level.tips.map(tip => `<li>${tip}</li>`).join('');
                        break;
                    }
                }
    
                resultDiv.innerHTML = `
                <div style="background-color: #e0f7fa; border-radius: 30px; margin-top: 30px; font-family: 'Milkshake', cursive; font-size: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px;">
                <center><h2>Result for PTSD Assessment</h2></center>
                <p><b>Your total score:</b> ${score}</p>
                    <p><b>Level Of PTSD severity:</b> ${resultText}</p>
                    <p> <b>NB:</b> If you have another symptom that is not specified in this Test we advise you to go to the therapy room for further consultation with the qualified Psychologist
                        <a href="Therapy.php"> Go to Therapy room</a>
                        </p>
                    <center><h2>Tips for a better life</h2></center>
                    <ul>${tips}</ul>
                  <center>  <button style="background-color: #007bff; color: white; padding: 10px 20px; border: 2px solid black; border-radius: 10px; cursor: pointer; margin-top: 10px; font-size: 15px; text-align: center; height:50px; width:500px;" onclick="printResult()">Print</button></center>
                  </div>
                `;
            }
    
            function printResult() {
                const resultDiv = document.getElementById('result');
                const printWindow = window.open('', '', 'height=600,width=800');
                printWindow.document.write('<html><head><title>PTSD Assessment Result</title></head><body >');
                printWindow.document.write(resultDiv.innerHTML);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            }
    
            document.addEventListener('DOMContentLoaded', () => {
                renderQuestions();
            });
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