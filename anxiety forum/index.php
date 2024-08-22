<!doctype html>
<html lang="en">
<!-- Mirrored from html.merku.love/talking-minds/service_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 08:09:29 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mental health Project 2024</title>

  <link rel="shortcut icon" href="../assets/images/site_logo/favourite_icon.svg">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/cursor.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/slick.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/odometer.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="main.js"></script>
  <style>
      body { 
        background-color: #f4fcfa;
        font-family: Arial, sans-serif;
    }
    .container {
        width: 60%;
        margin-top:10%;
    }
    .panel-default {
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 10px;
    }
    .panel-body h3, .panel-body h4 {
        font-weight: bold;
        color: #333;
    }
    .form-group label {
        color: #555;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
    .modal-content {
        border-radius: 5px;
    }
    .modal-header, .modal-footer {
        border-bottom: none;
        border-top: none;
    }
    #MyTable {
        background-color: #ffffff;
        border: none;
        border-radius: 10px;
    }
    #MyTable tbody tr {
        transition: background-color 0.3s;
    }
    #MyTable tbody tr:hover {
        background-color: #f4fcfa;

    }
    #MyTable tbody tr td {
        padding: 15px;
        border-top: none;
    }
</style>
</head>

<body>
  <div class="page_wrapper">
    <div class="backtotop"><a href="#" class="scroll"><i class="fa-solid fa-arrow-up"></i></a></div>
    <header class="site_header" >
      <div class="container1">
        <div class="row align-items-center">
          <div class="col-lg-3 col-5">
            <div class="site_logo"><a class="site_link" href="index.html"><img
                  src="../assets/images/site_logo/HS-logo-1.png"
                  alt="Site Logo – Talking Minds – Psychotherapist Site "></a></div>
          </div>
          <div class="col-lg-6 col-2">
            <nav class="main_menu navbar navbar-expand-lg">
              <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                <ul class="main_menu_list unordered_list">
                  <li ><a class="nav-link" href="../index.html" style="text-decoration:none;">Home</a></li>
                  <li class="dropdown"><a class="nav-link" href="#" id="programs_submenu" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration:none;">Conditions</a>
                    <ul class="dropdown-menu" aria-labelledby="programs_submenu">
                      <li><a href="../Pstd.html">PTSD</a></li>
                      <li><a href="../Anxiety.html">Generalised Anxiety Disorder</a></li>
                      <li><a href="../Depression.html">Clinical Depression</a></li>
                      
                    </ul>
                  </li>
                  <li ><a class="nav-link" href="../mentaltest.html" style="text-decoration:none;">Mental Health Test</a></li>
                  <li class="active"><a class="nav-link" href="../forum.html" style="text-decoration:none;">Forum</a></li>
                  <li><a class="nav-link" href="../Therapy.html" style="text-decoration:none;">Therapy Room</a></li>
                </ul>
              </div>
            </nav>
          </div>

          
        </div>
      </div>
    </header>
    <div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">add comment</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your comment:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3> Anxiety Community forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your story:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent stories</h4>           
	<table class="table" id="MyTable">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>
</div>




    </main>
    <footer class="site_footer bg_primary">
      <div class="container">
        <div class="copyright_widget text-center">
          <p class="copyright_text m-0">Copyright © <b> Heal space </b>  All rights reserved 2024</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/bootstrap-dropdown-ml-hack.min.js"></script>
  <script src="../assets/js/cursor.min.js"></script>
  <script src="../assets/js/slick.min.js"></script>
  <script src="../assets/js/magnific-popup.min.js"></script>
  <script src="../assets/js/appear.min.js"></script>
  <script src="../assets/js/odometer.min.js"></script>
  <script src="../assets/js/main.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8CZB4YJTLB"></script>
  <script>window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-8CZB4YJTLB');</script>
</body>
<!-- Mirrored from html.merku.love/talking-minds/service_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2024 08:09:30 GMT -->

</html>