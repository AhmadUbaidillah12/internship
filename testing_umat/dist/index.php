<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kota_yogyakarta ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Accordion Menu</title>
  <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="script.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
      <a href="index.html"><i class="fa fa-dashboard"></i><span>Provinsi DIY</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Kota Yogyakarta</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="ui-alerts-notifications.html">Danurejan</a>
          </li>
          <li><a href="ui-panels.html">Gedongtengen</a>
          </li>
          <li><a href="ui-buttons.html">Gondokusuman</a>
          </li>
          <li><a href="ui-slider-progress.html">Gondomanan</a>
          </li>
          <li><a href="ui-modals-popups.html">Jetis</a>
          </li>
          <li><a href="ui-icons.html">Kotagede</a>
          </li>
          <li><a href="ui-grid.html">kraton</a>
          </li>
          <li><a href="ui-tabs-accordions.html">Mantrijeron</a>
          </li>
          <li><a href="ui-nestable-list.html">Mergangsan</a>
          </li>
          <li><a href="ui-modals-popups.html">Ngampilan</a>
          </li>
          <li><a href="ui-icons.html">Pakualaman</a>
          </li>
          <li><a href="ui-grid.html">Tegalrejo</a>
          </li>
          <li><a href="ui-tabs-accordions.html">Umbulharjo</a>
          </li>
          <li><a href="ui-nestable-list.html">Wirobrajan</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Kabupaten Sleman</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="tables-basic.html">Berbah</a>
          </li>
          <li><a href="tables-data.html">Cangkringan</a>
          </li>
          <li><a href="tables-data.html">Depok</a>
          </li>
          <li><a href="tables-data.html">Gamping</a>
          </li>
          <li><a href="tables-data.html">Godean</a>
          </li>
          <li><a href="tables-data.html">Kalasan</a>
          </li>
          <li><a href="tables-data.html">Minggir</a>
          </li>
          <li><a href="tables-data.html">Mlati</a>
          </li>
          <li><a href="tables-data.html">Moyudan</a>
          </li>
          <li><a href="tables-data.html">Ngaglik</a>
          </li>
          <li><a href="tables-data.html">Ngemplak</a>
          </li>
          <li><a href="tables-data.html">Pakem</a>
          </li>
          <li><a href="tables-data.html">Prambanan</a>
          </li>
          <li><a href="tables-data.html">Seyegan</a>
          </li>
          <li><a href="tables-data.html">Sleman</a>
          </li>
          <li><a href="tables-data.html">Tempel</a>
          </li>
          <li><a href="tables-data.html">Turi</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu active">
        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Mail</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li class="active"><a href="mail-inbox.html">Inbox</a>
          </li>
          <li><a href="mail-compose.html">Compose Mail</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="charts-chartjs.html">Chartjs</a>
          </li>
          <li><a href="charts-morris.html">Morris</a>
          </li>
          <li><a href="charts-c3.html">C3 Charts</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Maps</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="map-google.html">Google Map</a>
          </li>
          <li><a href="map-vector.html">Vector Map</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Pages</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="pages-blank.html">Blank Page</a>
          </li>
          <li><a href="pages-login.html">Login</a>
          </li>
          <li><a href="pages-sign-up.html">Sign Up</a>
          </li>
          <li><a href="pages-calendar.html">Calendar</a>
          </li>
          <li><a href="pages-timeline.html">Timeline</a>
          </li>
          <li><a href="pages-404.html">404</a>
          </li>
          <li><a href="pages-500.html">500</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>
<article>
  <h1>Home</h1>
  <div class="container">
  <div class="content">
 
<html>
<body>

<table width='100%' border=3>

<tr>
<th>Nomor</th><th>Wilayah</th> <th>Agama</th> <th>Laki-laki</th> <th>Perempuan</th><th>Total</th><th>Option</th>
</tr>
<?php  
while($user_data = mysqli_fetch_array($result)) {         
  echo "<tr>";
  echo "<td>".$user_data['Wilayah']."</td>";
  echo "<td>".$user_data['Agama']."</td>";
  echo "<td>".$user_data['L']."</td>"; 
  echo "<td>".$user_data['P']."</td>";
  echo "<td>".$user_data['Total']."</td>";   
  echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
}
?>
</table>          
  </div>
</body>
</html>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>

</body>
</html>
