<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Coronavirus COVID-19 Statistics in ASEAN | covids.asia</title>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../image/logocovids.png" type="img/puanmarynetworkicon.png">
<link rel="shortcut icon" href="../image/logocovids.png" type="img/x-icon">
<meta content="Updated Information and Statistics of Coronavirus COVID-19 Worldwide. Our data is from trusted and reliable sources. Find and check the COVID-19 in covids.asia" name="description" >
<meta content='Coronacirus, covid-19, covid19, covid 19, corona, virus corona, worldwide virus, china, epidemi, pandemi, lockdown, virus attack, who, malaysia, asia, china, indonesia, singapore, social distance, graph, statistic, covids.asia' name='keywords'/>
<meta content='Malaysia' name='geo.placename'/>
<meta name='author' content='Ammar Ihsan Nasution, hello@ammarihsan.web.id'>
<meta name='designer' content='Ammar Ihsan Nasution'>
<meta content='my' name='geo.country'/>
<script data-ad-client="ca-pub-6027174173746609" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  			<meta property="og:image" content="../image/worldcovid.jpg" />
  			<meta name="twitter:image" content="../image/worldcovid.jpg">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  <link href="../css/dataTables.bootstrap.min.css" rel="stylesheet"> 
  <script src="../js/jquery-3.3.1.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script> 
<script src="../js/script.js"></script> 
 <script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7589ef30c7aa0012af0aea&product=sticky-share-buttons"></script>

 

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[15, 25, 50, 100, -1], [15, 25, 50, 100, "All"]]
    } );
} );</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36255734-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-36255734-16');
</script>

  </head>
<body>
  <?php
  $thistotalcase=json_decode(file_get_contents("https://api.kawalcorona.com/positif/"),true);
  $thisrecovered=json_decode(file_get_contents("https://api.kawalcorona.com/sembuh/"),true);
  $thisdeath=json_decode(file_get_contents("https://api.kawalcorona.com/meninggal/"),true);
  ?>

  
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header navbar-center">
        <ul class="nav navbar-nav navbar-center">
           <center><img src="../image/logocovids.png" width="60px">
           
        </ul>
            </center>
    </div>
    <div class="navbar-collapse collapse">
        
    </div>
</nav>


<div class="container">

    
  <br/><Br/>

 

  <h1><b>Coronavirus COVID-19 Statistics in ASEAN Countries</b></h1>
<br> <div class="table-responsive">

<table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Country</th>
      <th>Confirmed Cases</th>
      <th>Death</th>
      <th>Recovered</th>
      <th>Active Cases</th>
    </tr>
  </thead>
<?php
$url="https://api.kawalcorona.com/";
$req=file_get_contents($url);
$get_json=json_decode($req,true);
$number=1;
for($i=0;$i<count($get_json);$i++){
    $country = $get_json[$i]['attributes']['Country_Region'];
    $confirmed = $get_json[$i]['attributes']['Confirmed'];
    $recovered = $get_json[$i]['attributes']['Recovered'];
    $deaths = $get_json[$i]['attributes']['Deaths'];
    $active = ($confirmed - $recovered - $deaths);
    $pactive = ($active / $confirmed * 100);
    $precovered = ($recovered / $confirmed * 100);
    $pdeaths = ($deaths / $confirmed * 100);

    if ($active == 0){
    $tablecolour ="<tr class=\"success\">";}
    else if ($deaths > 500){
    $tablecolour ="<tr class=\"danger\">";}
    else if ($active > 500){
    $tablecolour ="<tr class=\"warning\">";}
    else {
    $tablecolour ="<tr>";}
    
    if ($country == "Indonesia"){
    $countryl = "<a href=\"https://covids.asia/id\">Indonesia</a>";}
    else if ($country == "Malaysia"){
    $countryl = "<a href=\"https://newslab.malaysiakini.com/covid-19/en\" target=\"_blank\">Malaysia</a>";}
    else {
        $countryl = $country;
    }
    
    
    
    
    
    
  ?>
  
  <?php
  if ($country == "Indonesia" OR $country == "Malaysia" OR $country == "Singapore" OR $country == "Thailand" OR $country == "Philippines" OR $country == "Vietnam" OR $country == "Brunei" OR $country == "Cambodia" OR $country == "Laos" OR $country == "Burma" OR $country == "Timor-Leste"){
  echo $tablecolour;
  echo "<td>".$number++."</td>";
  echo "<td>".$countryl."</td>";
  echo "<td>".$confirmed."</td>";
  echo "<td>".$deaths." <mark>(".round($pdeaths, 2)."%)</mark></td>";
  echo "<td>".$recovered." <mark>(".round($precovered, 2)."%)</mark></td>";
  echo "<td>".$active." <mark>(".round($pactive, 2)."%)</mark></td></tr>";
  ?>
  <?php
}
}
?>
</table></div>
<h6><i>*Highlighted in red = country with more than 500 death cases<br/>
*Highlighted in orange = country with more than 500 active cases<br/>
*Highlighted in green = all cases have recovered from the infection<br/></i></h6><br/>
<center><a href="../livemap.php"><button type="button" class="btn btn-primary btn-lg btn-block">View Live Map</button></a></center>
<hr/>
<h1><b>Coronavirus COVID-19 Daily Cases Statistics</b></h1>

<iframe title="" aria-label="Interactive line chart" id="datawrapper-chart-tUXd4" src="//datawrapper.dwcdn.net/tUXd4/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="566"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();
</script>

<br/><br/><hr/>
<h1><b>Coronavirus COVID-19 Important Information</b></h1>
<br/>
 <div class="col-md-3 col-sm-4">
<a class="twitter-timeline" data-width="300" data-height="320" data-dnt="true" href="https://twitter.com/WHO?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
 <div class="col-md-6 col-sm-4">
<iframe width="100%" height="320" src="https://www.youtube.com/embed/1APwq1df6Mw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
 <div class="col-md-3 col-sm-4">
<h3>What you need to know</h3><hr/>
<b><a href="https://www.who.int/health-topics/coronavirus" target="_blank">What is a coronavirus? →</a><br/>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="_blank">How to protect yourself →</a><br/>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/myth-busters" target="_blank">Myth-busters →</a><br/>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/travel-advice" target="_blank">Travel advice →</a><br/>
<a href="https://www.who.int/news-room/q-a-detail/q-a-coronaviruses" target="_blank">Questions & answers →</a><br/>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/videos" target="_blank">See all COVID-19 videos →</a><br/>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/training/online-training" target="_blank">Training and e-learning →</a><br/></b>
<br/>
<h5><b><a href="about.php">About Us</a><br/><a href="mailto:info@covids.asia">Contact Us</a></b></h5><h6><br/><b>Copyright &copy; 2020. All rights Reserved</b></h6>



</div>


</div>




</body>
   
    <br>
    <br>
</html>
