<?php
$url = 'https://fids.airport.ir/103/';
$ch = curl_init();
curl_setopt_array($ch, array(
 CURLOPT_URL => $url, 
 CURLOPT_ENCODING => '',   
 CURLOPT_HEADER => 1,
 CURLOPT_RETURNTRANSFER => 1,
 CURLOPT_CONNECTION_TIMEOUT => 5
));
$curlResult =curl_exec($ch);
curl_close($ch);
$dom = new DOMDocument();
$dom->loadHTML(mb_convert_encoding($curlResult, 'HTML-ENTITIES', 'UTF-8'));





$dom->preserveWhiteSpace = false;
$tables = $dom->getElementsByTagName('table');

$rows = $tables->item(1)->getElementsByTagName('tbody');

?>

<!doctype html>
<html lang="fa-IR" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Curl project</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg text-dark bg-dark">
          <div class="navbar-nav">
            <a href="#" class=" text-light navbar-brand">اطلاعات فرودگاه ها</a>
        </div>
        </nav>
        <ul class="nav nav-fill nav-pills bg-dark">
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="/mashhad.php">مشهد</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link btn btn-light mr-1" href="/shiraz.php">شیراز</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light mr-1 ml-5" href="/tabriz.php">تبریز</a>
                </li>
</ul>
      <div class="container">
      <div class="responsive-table mt-4">
        <div style="overflow:auto; height:100vh;">
         <table class="table borderless table-striped table-hover">
            <thead>
               <tr>
                  <th>زمان برنامه ای</th>
                  <th>ایرلاین</th>
                  <th>شماره پرواز</th>
                  <th>مبدا</th>
                  <th>وضعیت</th>
                  <th>کانتر</th>
                  <th>زمان واقعی</th>
                  <th>هواپیما</th>
                  <th>روز پرواز</th>
               </tr>
              </thead>
         <?php       
            foreach($rows as $key => $var) {
               $var->getElementsByTagName('td');
               echo $dom->saveHTML($var);
              }
         ?>
         </div>
    </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>