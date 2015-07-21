<?php
	$id = $_GET['id'];
	$dom = new DomDocument;
  	$dom->load("../users/infos".$id.".xml");

  	$infos = $dom->getElementsByTagName('name');
  	foreach($infos as $name)
    	$name=$name->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('first_name');
  	foreach($infos as $first_name)
    	$first_name=$first_name->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('email');
  	foreach($infos as $email)
    	$email=$email->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('city');
  	foreach($infos as $city)
    	$city=$city->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('date');
  	foreach($infos as $date)
    	$date=$date->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('high_school_name');
  	foreach($infos as $high_school_name)
    	$high_school_name=$high_school_name->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('high_school_graduation');
  	foreach($infos as $high_school_graduation)
    	$high_school_graduation=$high_school_graduation->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('high_school_description');
  	foreach($infos as $high_school_description)
    	$high_school_description=$high_school_description->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('upper_school_name');
  	foreach($infos as $upper_school_name)
    	$upper_school_name=$upper_school_name->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('upper_school_graduation');
  	foreach($infos as $upper_school_graduation)
    	$upper_school_graduation=$upper_school_graduation->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('upper_school_description');
  	foreach($infos as $upper_school_description)
    	$upper_school_description=$upper_school_description->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('twitter');
  	foreach($infos as $twitter)
    	$twitter=$twitter->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('facebook');
  	foreach($infos as $facebook)
    	$facebook=$facebook->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('google');
  	foreach($infos as $google)
    	$google=$google->firstChild->nodeValue;

    $infos = $dom->getElementsByTagName('instagram');
  	foreach($infos as $instagram)
    	$instagram=$instagram->firstChild->nodeValue;
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="style.css">
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/blocs.js"></script>
    <?php
    	echo "<title>".$first_name." ".$name."'s CV</title>";
    ?>
</head>
<body>
<!-- Main container -->
<div class="page-container">
    
<!-- bloc-0 -->
<div class="bloc  bg-golden-gate-overlay d-bloc b-parallax" id="bloc-0">
	<div class="container bloc-lg">
		<div class="col-sm-2 col-md-offset-5">
			<?php
					$photo = "../users/id".$_GET['id'].".png";
					if ((file_exists($photo))==1)
					{
						echo "<img src=\"".$photo."\" class=\"img-circle\" width=\"200\" height=\"200\"/>";
							
					}
					else
					{
						echo "<img src=\"../users/placeholder-user.png\" class=\"img-circle\" width=\"200\" height=\"200\"/>";
						
					}
				?>
		</div>
		<div class="col-sm-12 col-md-8 col-md-offset-2">
			<h3 class="text-center  mg-md ">
				<?php
					echo "".$first_name." ".$name."";
					echo "<br>";
					echo "<span class=\"fa fa-birthday-cake\"></span> ".$date;
					echo "<br>";
					echo "<span class=\"fa fa-map-marker\"></span> ".$city;
				?>
			</h3>
		</div>
	</div>
</div>
<!-- bloc-0 END -->

<!-- bloc-1 -->
<div class="bloc  b-parallax d-bloc bg-tile-d-bg bg-repeat" id="bloc-1">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-md-offset-3">
				<div class="col-sm-3 text-center">
					<?php
						echo "<a class=\"social\" href=\"".$twitter."\"><span class=\"fa fa-twitter icon-md icon-3\"></span></a>"
					?>	
				</div>
				<div class="col-sm-3 text-center">
					<?php
						echo "<a class=\"social\" href=\"".$facebook."\"><span class=\"fa fa-facebook icon-md icon-3\"></span></a>"
					?>
				</div>
				<div class="col-sm-3 text-center">
					<?php
						echo "<a class=\"social\" href=\"".$google."\"><span class=\"fa fa-google-plus-square icon-md icon-3\"></span></a>"
					?>
				</div>
				<div class="col-sm-3 text-center">
					<?php
						echo "<a class=\"social\" href=\"".$instagram ."\"><span class=\"fa fa-instagram icon-md icon-3\"></span></a>"
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bloc-1 END -->

<!-- bloc-2 -->
<div class="bloc l-bloc " id="bloc-2">
	<div class="container bloc-lg">
		<div class="row voffset">
			<div class="col-sm-6">
				<h3 class="mg-md">
					<span class="fa fa-star"></span> High School Informations
				</h3>
				<h4 class="mg-md ">
				<span class="fa fa-university"></span> Name
			</h4>
			<p>
				<?php
					echo $high_school_name;
				?>
			</p>
			<h4 class="mg-md ">
				<span class="fa fa-calendar"></span> Graduation
			</h4>
			<p>
				<?php
					echo $high_school_graduation;
				?>
			</p>
			<h4 class="mg-md ">
				<span class="fa fa-book"></span> Description
			</h4>
			<p>
				<?php
					echo $high_school_description;
				?>
			</p>
			</div>


			<div class="col-sm-6">
				<h3 class="mg-md">
					<span class="fa fa-star"></span> Upper School Informations
				</h3>
				<h4 class="mg-md ">
				<span class="fa fa-university"></span> Name
			</h4>
			<p>
				<?php
					echo $upper_school_name;
				?>
			</p>
			<h4 class="mg-md ">
				<span class="fa fa-calendar"></span> Graduation
			</h4>
			<p>
				<?php
					echo $upper_school_graduation;
				?>
			</p>
			<h4 class="mg-md ">
				<span class="fa fa-book"></span> Description
			</h4>
			<p>
				<?php
					echo $upper_school_description;
				?>
			</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-2 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><icon class="fa fa-chevron-up"></icon></a>
<!-- ScrollToTop Button END-->


<!-- Footer - bloc-3 -->
<div class="bloc l-bloc " id="bloc-3">
	<div class="container bloc-lg">
		<div class="row">
			<div class="text-center">
				<p>Made with CVONLINE</p>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-3 END -->
</div>
<!-- Main container END -->

</body>
    
<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
