<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <meta charset="utf-8">
  
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100 d-flex justify-content-centeral align-items-center">
        <div class="col-lg-5 col-md-5 col-12" order-lg-1 order-2>
            <div class="leftside w-100 h-100">
                <img src="image/unity.jpg" width="300" height="300">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12" order-lg-2 order-1>
            <div class="rightside w-100 h-100 d-flex justify-content-centeral align-items-center"></div>
            <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="image/corona.png" width="50" height="50"></span>na Virus</h1>
        </div>
    </div>
</div>
<!--data fetch-->
<section class="corona_update container-fluid">
    <div class="mb-3">
        <h3 class="text-center">COVID-19  Updates</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>TotalConfirmed</th>
                <th>TotalRecovered</th>
                <th>TotalDeaths</th>
                <th>NewConfirmed</th>
                <th>NewRecovered</th>
                <th>NewDeaths</th>
            </tr>
        </table>
    </div>
</section>

<!--about section-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5">
            <img src="image/about.jpeg " class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (Corona-Virus)</h2>
            <p>COVID-19 is the infection disease caused by the most recently discovered corona virus. This new virus and disease were unknown before the out break began in Wuhan, China, in December 2019. </p>
            <p>Corona viruses are a large family of the viruses which may cause illness in animals or humans. In humans, several corona viruses are known to cause respiratory infections ranging from the common cold to more severe disease such Middle East Respiratory Syndrome (MERS) and severe Acute Respiratory Syndrome (SARS). The most recently discovered corona virus cause corona viruse disease COVID-19.</p>
        </div>
    </div>
</div>


<!--symptoms-->
<div class="container-fluid  pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>Corona Virus Symptoms</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="image/cough.png" class="img-fluid" width="120" height="120">
                <figcaption>COUGH</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="image/runny nose.png" class="img-fluid" width="120" height="120">
                <figcaption>RUNNY NOSE</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="image/fever.png" class="img-fluid" width="120" height="120">
                <figcaption>FEVER</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="image/cold.png" class="img-fluid" width="120" height="120">
                <figcaption>COLD</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="image/tiredness.png" class="img-fluid" width="120" height="120">
                <figcaption>TIREDNESS</figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="image/breathing.png" class="img-fluid" width="120" height="120">
                <figcaption>DIFFICULTY BREATHINF (SEVERE)</figcaption>
                </figure>
            </div>
        </div>
    </div>


    <!--prevention-->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>6 Steps to Prevent</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="image/hand.png" class="img-fluid" width="90" height="90">
                </figure>
                    </div>
                    <div class="col-lg-8 col-mg-8 col-12">
                        <p>Wash your hands regularly for the 20 seconds, with soap and water or alchol-based hand rub.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="image/mask.png" class="img-fluid" width="90" height="90">
                </figure>
                    </div>
                    <div class="col-lg-8 col-mg-8 col-12">
                        <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="image/distance.png" class="img-fluid" width="90" height="90">
                </figure>
                    </div>
                    <div class="col-lg-8 col-mg-8 col-12">
                        <p>Avoid close contact(2 meter or 6 feet) With people who are unwell.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="image/home.png" class="img-fluid" width="90" height="90">
                </figure>
                    </div>
                    <div class="col-lg-8 col-mg-8 col-12">
                        <p>Stay home and self-isolate from others in the household if you feel unwell.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="image/news.png" class="img-fluid" width="90" height="90">
                </figure>
                    </div>
                    <div class="col-lg-8 col-mg-8 col-12">
                        <p>Stay informed by watching news & follow the recommended practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="image/seak.png" class="img-fluid" width="90" height="90">
                </figure>
                    </div>
                    <div class="col-lg-8 col-mg-8 col-12">
                        <p>If you have fever, cough and difficulty breathing, seek medical care early.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--contact us-->
<div class="container-fluid  pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>Contact us ASAP</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
            <form action="" method="POST">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="username" placeholder="Full Name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  </div>
  <div class="form-group">
    <label >Mobile No</label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile No" autocomplete="off" required>
  </div>
  <div class="form-group">
      <label>Select Symptoms</label> <br>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
          <label class="custom-control-label" for="customcheckbox1">Cold</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
          <label class="custom-control-label" for="customcheckbox2">Fever</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
          <label class="custom-control-label" for="customcheckbox3">Difficulty In Breathing</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
          <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
      </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
        </div>
    </div>
</div>
<!--top-->
<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" style="float:right;" aria-hidden="true"> </i>
</div>
<!--footer-->
<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>Created by Abinash Mohanty © 2022</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    //test
function check()
{
    if(window.jQuery)
    {
        alert("jquery is loaded.")
    }
    else
    {
        alert("jquery is not loading.")
    }
}
    //test
    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction(){
        if(document.body.scrollTop > 100 || document.documentElement.ScrollTop > 100){
            mybutton.style.display = "block";
        }else{
            mybutton.style.display = "none";
        }
    }
    function topFunction(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    //api fetch

    function fetch(){
        $.get("https://api.covid19api.com/summary",
        function (data){
            console.log(data['Countries']);
            var tbval= document.getElementById('tbval');
            for(var i=1; i<(data['Countries'].length);i++){
                var x=tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff';
                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';
                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';
                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';
                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';
                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';
                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';
            }
        }
        
        );
    }

</script>
</body>
</html>
<?php 
include 'dbcon.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['moblie'];
    $symp=$_POST['coronasym'];
    $msg=$_POST['msg'];

    $chk = "";
    foreach($symp as $chk1){
        $chk .= $chk1. ",";
    }

    $insertquery ="INSERT INTO `coronacase`(username, email, mobile, symp, message) VALUES ('$username','$email','$mobile','$chk','$msg')";
    $query=mysqli_query($con,$insertquery);
}






?>