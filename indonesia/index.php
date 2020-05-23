<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Statistik Virus Corona COVID-19 Di Indonesia | covids.asia</title>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../image/logocovids.png" type="img/covidsasia.png">
<link rel="shortcut icon" href="image/logocovids.png" type="img/x-icon">
<meta content="Informasi dan Statistik terupdate mengenai virus Corona yang di update setiap saat dari sumber terpercaya. Kunjungi covids.asia" name="description" >
<meta content='Virus Corona, Statistik Indonesia, Coronacirus, covid-19, covid19, covid 19, corona, virus corona, worldwide virus, china, epidemi, pandemi, lockdown, virus attack, who, malaysia, asia, china, indonesia, singapore, social distance, graph, statistic, covids.asia' name='keywords'/>
<meta content='Malaysia' name='geo.placename'/>
<meta name='author' content='Ammar Ihsan Nasution, ammarihsan04@gmail.com'>
<meta name='designer' content='Ammar Ihsan Nasution'>
<meta content='my' name='geo.country'/>

  			<meta property="og:image" content="../image/covidid.jpg" />
  			<meta name="twitter:image" content="../image/covidid.jpg">

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
  $thistotalcase=json_decode(file_get_contents("https://api.kawalcorona.com/indonesia"),true);
  ?>

  
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header navbar-center">
        <ul class="nav navbar-nav navbar-center">
           <center><a href="../index.php"><img src="../image/logocovids.png" width="60px"></a>
           
        </ul>
            </center>
    </div>
    <div class="navbar-collapse collapse">
        
    </div>
</nav>


<div class="container">

    
  <br/><Br/><h1><b>Statistik Virus Corona COVID-19 di Indonesia</b></h1>
  <br>

<?php  

$thisindo=json_decode(substr(file_get_contents("https://api.kawalcorona.com/indonesia"), 1, -1),true);


  
$totalcase = str_replace(",", "", $thisindo['positif']); 
$totaldeath = str_replace(",", "", $thisindo['meninggal']);
$totalrecovered = str_replace(",", "", $thisindo['sembuh']);

$totalactive = $totalcase - $totaldeath - $totalrecovered;

$ptotalcase = $totalcase/$totalcase*100;
$ptotaldeath = $totaldeath/$totalcase*100;
$ptotalrecovered = $totalrecovered/$totalcase*100;
$ptotalactive = $totalactive/$totalcase*100;


?>

 
	 <div class="row userMain">
       <div class="col-md-3 col-sm-4">
           <div class="userBlock">
               <div class="backgrounImg">
                   <img src="../image/confirmedbg.jpg" title="Confirmed Cases">
               </div>
               <div class="userImg">
                   <img src="../image/confirmed.png" title="Confirmed Cases">
               </div>
               <div class="userDescription">
                   <h2><?php echo $totalcase; ?></h2>
                   <p><mark><?php echo round($ptotalcase, 2); ?>%</mark></p>
                  <p><b>KASUS POSITIF</b></p>
                  
               </div>
              
           </div>
       </div>
       <div class="col-md-3 col-sm-4">
           <div class="userBlock">
               <div class="backgrounImg">
                   <img src="../image/deathbg.jpg" title="Death Cases">
               </div>
               <div class="userImg">
                   <img src="../image/death.png" title="Death Cases">
               </div>
               <div class="userDescription">
                   <h2><?php echo $totaldeath; ?></h2>
                    <p><mark><?php echo round($ptotaldeath, 2); ?>%</mark></p>
                  <p><b>TOTAL MENINGGAL</b></p>
                  
               </div>
             
           </div>
       </div>
       <div class="col-md-3 col-sm-4">
           <div class="userBlock">
               <div class="backgrounImg">
                   <img src="../image/recoveredbg.jpg" title="Recovered Cases">
               </div>
               <div class="userImg">
                   <img src="../image/recovered.png" title="Recovered Cases">
               </div>
               <div class="userDescription">
                   <h2><?php echo $totalrecovered; ?></h2>
                    <p><mark><?php echo round($ptotalrecovered, 2); ?>%</mark></p>
                  <p><b>TOTAL SEMBUH</b></p>
                  
               </div>
              
           </div>
       </div>
       <div class="col-md-3 col-sm-4">
           <div class="userBlock">
               <div class="backgrounImg">
                   <img src="../image/activecasebg.jpg" title="Active Cases">
               </div>
               <div class="userImg">
                   <img src="../image/activecase.png" title="Active Cases">
               </div>
               <div class="userDescription">
                   <h2><?php echo $totalactive; ?></h2>
                    <p><mark><?php echo round($ptotalactive, 2); ?>%</mark></p>
                  <p><b>KASUS AKTIF</b></p>
                  
               </div>
             
           </div>
       </div> 
      
    </div> 




  
  <hr>
  <h1><b>Statistik Virus Corona COVID-19 Berdasarkan Provinsi</b></h1>
<br> <div class="table-responsive">

<table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Provinsi</th>
      <th>Kasus Positif</th>
      <th>Meninggal</th>
      <th>Sembuh</th>
      <th>Kasus Aktif</th>
    </tr>
  </thead>
<?php
$url="https://api.kawalcorona.com/indonesia/provinsi/";
$req=file_get_contents($url);
$get_json=json_decode($req,true);
$number=1;
for($i=0;$i<count($get_json);$i++){
    $provinsi = $get_json[$i]['attributes']['Provinsi'];
    $confirmed = $get_json[$i]['attributes']['Kasus_Posi'];
    $recovered = $get_json[$i]['attributes']['Kasus_Semb'];
    $deaths = $get_json[$i]['attributes']['Kasus_Meni'];
    $active = ($confirmed - $recovered - $deaths);
    $pactive = ($active / $confirmed * 100);
    $precovered = ($recovered / $confirmed * 100);
    $pdeaths = ($deaths / $confirmed * 100);

    if ($active == 0){
    $tablecolour ="<tr class=\"success\">";}
    else if ($deaths > 25){
    $tablecolour ="<tr class=\"danger\">";}
    else if ($active > 25){
    $tablecolour ="<tr class=\"warning\">";}
    else {
    $tablecolour ="<tr>";}
    
  ?>
  <?php
  echo $tablecolour;
  echo "<td>".$number++."</td>";
  echo "<td>".$provinsi."</td>";
  echo "<td>".$confirmed."</td>";
  echo "<td>".$deaths." <mark>(".round($pdeaths, 2)."%)</mark></td>";
  echo "<td>".$recovered." <mark>(".round($precovered, 2)."%)</mark></td>";
  echo "<td>".$active." <mark>(".round($pactive, 2)."%)</mark></td></tr>";
  ?>
  <?php
}
?>
</table></div>
<h6><i>*Baris berwarna merah = Provinsi dengan angka kematian lebih dari 50 orang<br/>
*Baris berwarna orange = Provinsi dengan angka kasus aktif lebih dari 25 orang<br/>
*Baris berwarna hijau = Provinsi tanpa kasus aktif<br/></i></h6><br/>
<center><a href="livemap.php"><button type="button" class="btn btn-primary btn-lg btn-block">Lihat Peta Penyebaran Corona</button></a></center>

<!--

<hr/>
<h1><b>Statistik Perkembangan Virus Corona COVID-19</b></h1>

<center><img src="../image/dailyid2.PNG" width="80%"></center>


<iframe title="" aria-label="Interactive line chart" id="datawrapper-chart-tUXd4" src="//datawrapper.dwcdn.net/tUXd4/3/" scrolling="no" frameborder="0" style="width: 0; min-width: 100% !important; border: none;" height="566"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",function(a){if(void 0!==a.data["datawrapper-height"])for(var e in a.data["datawrapper-height"]){var t=document.getElementById("datawrapper-chart-"+e)||document.querySelector("iframe[src*='"+e+"']");t&&(t.style.height=a.data["datawrapper-height"][e]+"px")}})}();
</script>

<br/><br/>
-->
<hr/>
<h1><b>Informasi Penting Berkaitan Virus Corona COVID-19</b></h1>
<br/>
 <div class="col-md-3 col-sm-4">
<a class="twitter-timeline" data-width="300" data-height="320" data-dnt="true" href="https://twitter.com/BNPB_Indonesia?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
 <div class="col-md-6 col-sm-4">
<iframe width="100%" height="320" src="https://www.youtube.com/embed/LVixAa-6zf4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
 <div class="col-md-3 col-sm-4">
<h3>Link/Pranala Penting</h3><hr/>
<b><a href="https://www.covid19.go.id/" target="_blank">Web Resmi Pemerintah (COVID-19) →</a><br/>
<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank">Web Resmi WHO (COVID-19) →</a><br/>
<a href="http://covid-monitoring.kemkes.go.id/" target="_blank">Web Resmi KEMENKES (COVID-19) →</a><br/>
<a href="http://covid-monitoring.kemkes.go.id/self_assessment" target="_blank">Ada gejala Corona? Cek disini →</a><br/>
<a href="https://corona.jakarta.go.id/" target="_blank">Web Corona Jakarta →</a><br/>
<a href="https://pikobar.jabarprov.go.id/" target="_blank">Web Corona Jawa Barat →</a><br/>
<a href="https://corona.jatengprov.go.id/" target="_blank">Web Corona Jawa Timur →</a><br/></b>
<br/>
<h5><b><a href="../about.php">About Us</a><br/><a href="mailto:info@covids.asia">Contact Us</a></b></h5><h6><br/><b>Copyright &copy; 2020. All rights Reserved</b></h6>



</div>


</div>




</body>
   
    <br>
    <br>
</html>
