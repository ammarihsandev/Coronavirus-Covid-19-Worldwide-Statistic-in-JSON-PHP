<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>About Us | covids.asia</title>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="image/logocovids.png" type="img/puanmarynetworkicon.png">
<link rel="shortcut icon" href="image/logocovids.png" type="img/x-icon">
<meta content="Updated Information and Statistics of Coronavirus COVID-19 Worldwide. Our data is from trusted and reliable sources. Find and check the COVID-19 in covids.asia" name="description" >
<meta content='Coronacirus, covid-19, covid19, covid 19, corona, virus corona, worldwide virus, china, epidemi, pandemi, lockdown, virus attack, who, malaysia, asia, china, indonesia, singapore, social distance, graph, statistic, covids.asia' name='keywords'/>
<meta content='Malaysia' name='geo.placename'/>
<meta name='author' content='Ammar Ihsan Nasution, hello@ammarihsan.my.id'>
<meta name='designer' content='Ammar Ihsan Nasution'>
<meta content='my' name='geo.country'/>
  
  
  			<meta property="og:image" content="image/thumbnail.PNG" />
  			<meta name="twitter:image" content="image/thumbnail.PNG">
  			
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet"> 
  <script src="js/jquery-3.3.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script> 
<script src="js/script.js"></script> 
 <script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7589ef30c7aa0012af0aea&product=sticky-share-buttons"></script>

 

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
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
           <center><a href="index.php"><img src="image/logocovids.png" width="60px"></a>
           
        </ul>
            </center>
    </div>
    <div class="navbar-collapse collapse">
        
    </div>
</nav>


<div class="container">

    
  <br/><Br/><h1><b>About US</b></h1> 

<p>Welcome to covids.asia, your reference website for <b>Coronavirus Covid-19</b> Case. <b><a href="https://covids.asia">Covids.asia</a></b> is a website that display all the Statistic of <b>Coronavirus COVID-19</b> cases worldwide. We don't affiliate and not represent any organization.
</p>
<p>Our data taken from the trusted and reliable sources (Thank you to the sources that listed below for providing open source data) and updated every 20-30 minutes (following the data source). So, never get HOAX again. We display the data according to your needs, and we also put some percentage so that it is easy for you to understand the current situation of <b>Coronavirus COVID-19</b>.
</p>
<p>We hope this website can help you to get information regarding the number and statistics of the coronavirus cases. If you have any questions and suggestions, feel free to reach us at <a href="mailto:info@covids.asia">info@covids.asia</a>
</p>
<p>Last, Let's pray for the best and fight the <b>Coronavirus COVID-19</b>! Hopefully, we can have a brighter future!
</p><br/>
<p>Sincerely,<br/>
<b><a href="https://covids.asia">Covids.asia</a></b></p>

<Br/>
<hr/>
<h3><b>Sources and References</b></h3>
<p><a target="_blank" href="https://who.int">> WHO Official Website</a></p>
<p><a target="_blank" href="https://kawalcorona.com/api/">> API Kawal Corona</a></p>
<p><a target="_blank" href="https://systems.jhu.edu/">> Johns Hopkins University</a></p>
<p><a target="_blank" href="https://www.datawrapper.de/">> Datawrapper Chart and Graph</a></p>
<p><a target="_blank" href="https://twitter.com/who">> WHO Official Twitter</a></p>
<br/>
<center><a href="index.php"><button type="button" class="btn btn-success btn-lg btn-block">Back to Home</button></a></center>
</div>

</div>


</body>
   
    <br>
    <br>
</html>
