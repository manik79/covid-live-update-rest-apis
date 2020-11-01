<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>COVID-19 | Corona Kotha Bole</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 pd-none">
          <div class="header-menu text-center">
            <a href="index.php"><img src="img/corona-logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- main funtion option start -->
  <?php
     date_default_timezone_set("Asia/Dhaka");
     $date = date("d M, Y");
     $time = date('h:i A');
     $copy = date("Y");
   ?>
  <!-- slider-area -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 pd-none">
        <div class="slider">
          <marquee behavior="scroll" direction="left" style="font-family: BenSen"><b>করোনা ভাইরাসের হটলাইন নম্বরঃ</b>
            নিজের অথবা পরিবারের কারো করোনা ভাইরাসে আক্রান্ত হওয়ার লক্ষন দেখা দিলে “ইনস্টিটিউট অব এপিডেমোলোজি ডিজিজ
            কন্ট্রোল এন্ড রিসার্চ”
            আইইডিসিআরে যোগাযোগ করুন। <span><b>IEDCR
                Hotline :</b> +8801937000011, +8801937110011, +8801927711784, +8801927711785 |</span> করোনা প্রতিরোধে
            নিজে ‍সচেতন থাকুন, অন্যকে ‍সচেতন রাখুন। বাহিরে বের হলে সর্বদা মাস্ক পরিধান করুন ও হ্যান্ড স্যানিটাইজার
            ব্যবহার করুন। জরুরী প্রয়োজন ছাড়া বাহিরে বের হবেন না। </marquee>
        </div>
      </div>
    </div>
  </div>
  <div class="function-area pt-15 pb-15">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="dateandtime d-flex justify-content-between">
            <span class="d-block date"><i class="fas fa-clock"></i> <?php echo "Date : " . $date; ?> </span>
            <span class="d-block time"><i class="fas fa-clock"></i><?php echo "Time : " . $time; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main funtion option end -->
  <!-- table start -->
  <div class="global text-center">
    <h3>Global Wise</h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <table class="table v-middle">
          <thead>
            <tr>
              <th>New Confirmed</th>
              <th>Total Confirmed</th>
              <th>New Deaths</th>
              <th>Total Deaths</th>
              <th>New Recovered</th>
              <th>Total Recovered</th>
            </tr>
          </thead>
          <tbody id="global-wise">
            <td id="first"></td>
            <td id="second"></td>
            <td id="third"></td>
            <td id="fourth"></td>
            <td id="fifth"></td>
            <td id="sixth"></td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- country-wise -->
  <div class="global text-center">
    <h3>Country Wise</h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Country</th>
              <th>New Confirmed</th>
              <th>Total Confirmed</th>
              <th>New Deaths</th>
              <th>Total Deaths</th>
              <th>New Recovered</th>
              <th>Total Recovered</th>
            </tr>
          </thead>
          <tbody id="country-data">
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer>
    <div class="copyright text-center">
      <p style="font-family: sans-serif; background-color: #7d3b3b; padding: 7px 0; margin: 15px 0; color: #fff;">Copyright &copy; <?php echo $copy; ?> Mahmudul Hasan Manik. All Rights Reserved</p>
    </div>
  </footer>
  <!-- table end -->
  <!-- JS here -->
  <script src="js/vendor/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
