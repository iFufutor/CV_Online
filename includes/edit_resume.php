<!-- bloc-5 -->
<div class="bloc l-bloc " id="bloc-1">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-8">
              <form name="update_infos" method="POST" action="" id="myForm1" name="myForm" enctype="multipart/form-data">
				<h4 class="mg-md" style="color:#e12e45; font-size:28px;">Personal informations</h4>
				<div class="form-group">
					<label>Name</label>
					<?php
						$id = $_SESSION['id'];
						$dom = new DomDocument;
              			$dom->load("users/infos".$id.".xml");

              			$infos = $dom->getElementsByTagName('name');
              			foreach($infos as $name)
                			$name=$name->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="name" id="name1" onblur="validateedit(\'name\', this.value)" value="'.$name.'"/>';
					?>
                        <div id='name' style="color:red;"></div>
				</div>
                <div class="form-group">
					<label>First name</label>
					<?php
              			$infos = $dom->getElementsByTagName('first_name');
              			foreach($infos as $first_name)
                			$first_name=$first_name->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="first_name" id="firstname1" onblur="validateedit(\'firstname\', this.value)" value="'.$first_name.'"/>';
					?>
						<div id='firstname' style="color:red;"></div>
				</div>
                <div class="form-group">
					<label>Email</label>
					<?php
              			$infos = $dom->getElementsByTagName('email');
              			foreach($infos as $email)
                			$email=$email->firstChild->nodeValue;
						echo '<input class="form-control" type="email" name="email" id="email1" onblur="validateedit(\'email\', this.value)" value="'.$email.'"/>';
					?>
                        <div id='email' style="color:red;"></div>
				</div>
                <div class="form-group">
					<label>City</label>
					<?php
              			$infos = $dom->getElementsByTagName('city');
              			foreach($infos as $city)
                			$city=$city->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="city" id="city1" onblur="validateedit(\'city\', this.value)" value="'.$city.'"/>';
					?>
                        <div id='city' style="color:red;"></div>
				</div>
                <div class="form-group">
					<label>Date of Birth (dd/mm/YYYY)</label>
					<?php
              			$infos = $dom->getElementsByTagName('date');
              			foreach($infos as $date)
                			$date=$date->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="birthday" id="birthday1" value="'.$date.'"/>';
					?>
				</div>
                
                <h4 class="mg-md" style="color:#e12e45; font-size:28px;">Education</h4>
                <div class="form-group">
					<label>High School</label>
					<?php
              			$infos = $dom->getElementsByTagName('high_school_name');
              			foreach($infos as $high_school_name)
                			$high_school_name=$high_school_name->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="high_school" id="high1" onblur="validateedit(\'high\', this.value)" value="'.$high_school_name.'"/>';
					?>
                        <div id='high' style="color:red;"></div>
				</div>
                <div class="form-group">
					<label>Date of Graduation (dd/mm/YYYY)</label>
					<?php
              			$infos = $dom->getElementsByTagName('high_school_graduation');
              			foreach($infos as $high_school_graduation)
                			$high_school_graduation=$high_school_graduation->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="high_school_grade" id="highschoolgrade1" value="'.$high_school_graduation.'"/>';
					?>
				</div>
                  
				<div class="form-group">
					<label>Description</label>
					<?php
              			$infos = $dom->getElementsByTagName('high_school_description');
              			foreach($infos as $high_school_description)
                			$high_school_description=$high_school_description->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="high_school_description" id="description3" onblur="validateedit(\'description\', this.value)" value="'.$high_school_description.'"/>';
					?>
						<div id='description' style="color:red;"></div>
				</div>
                  
                <div class="form-group">
					<label>Upper School</label>
					<?php
              			$infos = $dom->getElementsByTagName('upper_school_name');
              			foreach($infos as $upper_school_name)
                			$upper_school_name=$upper_school_name->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="upper_school" id="upper1" onblur="validateedit(\'upper\', this.value)" value="'.$upper_school_name.'"/>';
					?>
                        <div id='upper' style="color:red;"></div>
				</div>
                <div class="form-group">
					<label>Date of Graduation (dd/mm/YYYY)</label>
					<?php
              			$infos = $dom->getElementsByTagName('upper_school_graduation');
              			foreach($infos as $upper_school_graduation)
                			$upper_school_graduation=$upper_school_graduation->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="upper_school_grade" id="upperschoolgrade1" value="'.$upper_school_graduation.'"/>';
					?>
				</div>
				<div class="form-group">
					<label>Description</label>
					<?php
              			$infos = $dom->getElementsByTagName('upper_school_description');
              			foreach($infos as $upper_school_description)
                			$upper_school_description=$upper_school_description->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="upper_school_description" id="description4" onblur="validateedit(\'description2\', this.value)" value="'.$upper_school_description.'"/>';
					?>
                        <div id='description2' style="color:red;"></div>
				</div>

				<h4 class="mg-md" style="color:#e12e45; font-size:28px;">Social links</h4>
				<div class="form-group">
					<span class="fa fa-twitter icon-md"></span>
					<label>Twitter </label>
					<?php
              			$infos = $dom->getElementsByTagName('twitter');
              			foreach($infos as $twitter)
                			$twitter=$twitter->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="twitter" id="twitter1" value="'.$twitter.'" placeholder="http://" />';
					?>
				</div>
				<div class="form-group">
					<span class="fa fa-facebook icon-md"></span>
					<label>Facebook</label>
					<?php
              			$infos = $dom->getElementsByTagName('facebook');
              			foreach($infos as $facebook)
                			$facebook=$facebook->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="facebook" id="facebook1" value="'.$facebook.'" placeholder="http://" />';
					?>
				</div>
				<div class="form-group">
					<span class="fa fa-google-plus-square icon-md"></span>
					<label>Google Plus</label>
					<?php
              			$infos = $dom->getElementsByTagName('google');
              			foreach($infos as $google)
                			$google=$google->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="google" id="google1" value="'.$google.'" placeholder="http://" />';
					?>
				</div>
				<div class="form-group">
					<span class="fa fa-instagram icon-md"></span>
					<label>Instagram</label>
					<?php
              			$infos = $dom->getElementsByTagName('instagram');
              			foreach($infos as $instagram)
                			$instagram=$instagram->firstChild->nodeValue;
						echo '<input class="form-control" type="text" name="instagram" id="instagram1" value="'.$instagram.'" placeholder="http://" />';
					?>
				</div>

				<br>
                <input type="button" name="submit" value="Update your infos" class="btn  btn-d  btn-lg animated flipInX" onclick="checkFormedit();">
                    <div id='reponse1'></div>
                <script src="js/script1.js"></script>
              </form>

              <form name="update_photo" method="POST" action="verif/update_photo.php" name="myForm2" enctype="multipart/form-data">
              <?php
					$photo = "users/id".$_SESSION['id'].".png";

					if ((file_exists($photo))==1)
					{
						echo "<img src=\"".$photo."\" class=\"img-responsive img-circle center-block img-rd-md\" width=\"200\" height=\"200\"/>";
					}
					else
					{
						echo "<img src=\"users/placeholder-user.png\" class=\"img-responsive img-circle center-block img-rd-md\" width=\"200\" height=\"200\"/>";
						
					}
				?>
				<input type="file" name="file"/>
				<br>
                <input type="submit" name="submit" value="Update your photo" class="btn  btn-d  btn-lg animated flipInX">
			</form>
		</div>
            
			<div class="col-sm-4">
              <form name="update_theme" method="POST" action="verif/update_theme.php">
				<h4 class="mg-md" style="color:#e12e45; font-size:28px;">Theme of your page</h4>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios" value="1" />Theme 1
					</label>
				</div><img src="img/templates_examples/template1.png" class="img-responsive" width="400" alt='' style="border: 1px solid #BDBDBD;"/>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="2" />Theme 2
					</label>
				</div>
                  <img src="img/templates_examples/template2.png" class="img-responsive" width="400" alt=''  style="border: 1px solid #BDBDBD;"/> 
                <div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="3" />Theme 3
					</label>
				</div><img src="img/templates_examples/template3.png" class="img-responsive" width="400" alt=''  style="border: 1px solid #BDBDBD;"/>

                  <br>
                  <input type="button" name="submit" value="Update your theme" class="btn  btn-d  btn-lg animated flipInX"
                        onclick="checktheme()">
                  <script src="js/scripttheme.js"></script>
                  <div id="reponse3"></div>
            </form>
			</div>
		</div>
	</div>
</div>
<!-- bloc-5 END -->