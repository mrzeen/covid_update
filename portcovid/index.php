<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Api Covid-19</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

</head>
<body>

<?php

$api = file_get_contents("https://covid19.th-stat.com/api/open/today");
$data = json_decode($api,true);
// echo "<pre>";
// print_r($data); "$data";
// echo "</pre>";
?>
    
    <div class="mt-5">
        <div class="container">

            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="text-center my-4">
                        <h2>รายงานสถานการณ์ โควิด-19</h2>
                        <h4>อัพเดทข้อมูลล่าสุด : <?php echo $data["UpdateDate"];?></h4>
                    </div>
             
                    <div class="card text-center text-white bg-danger mb-3">
                        <div class="card-header">ติดเชื้อสะสม</div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Confirmed"]);?></h5>
                          <p class="card-text text-white">(เพิ่มขึ้น <?php echo number_format($data["NewConfirmed"]);?>)</p>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="card text-center text-white bg-success mb-3" >
                        <div class="card-header">หายแล้ว
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Recovered"]);?></h5>
                          <p class="card-text text-white">(เพิ่มขึ้น <?php echo number_format($data["NewRecovered"]);?>)</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card text-center text-white bg-info mb-3" >
                        <div class="card-header">รักษาอยู่ใน รพ.</div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Hospitalized"]);?></h5>
                          <p class="card-text text-white">&nbsp;</p>
                        </div>
                      </div>
                </div>
                <div class="col-4">
                    <div class="card text-center bg-dark text-white mb-3" >
                        <div class="card-header">เสียชีวิต
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo number_format($data["Deaths"]);?></h5>
                          <p class="card-text text-white">&nbsp;</p>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </div>
    

    <div class="text-center">
        <p>https://covid19.ddc.moph.go.th/th</p>
    </div>



    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
</body>
</html>