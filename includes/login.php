<!-- Bloc Group -->
<div class='bloc-group'>

<!-- bloc-3 -->
<div class="bloc l-bloc  bloc-tile-2" id="bloc-3">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="mg-md" style="color:#e12e45; font-size:28px;">
					Login
				</h4>
                <form name="login" method="POST" action="verif/verif_login.php">
				    <div class="form-group">
					   <label>Email</label>
					   <input type="email" class="form-control" name="email" id="emaillog" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>" />
				    </div>
				    <div class="form-group">
					   <label>Password</label>
					   <input type="password" class="form-control" name="password" id="passwordlog" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"/>
				    </div>
                    <input type="button" name="submit" value="Login" class="btn  btn-d  btn-lg animated flipInX" onclick="checkco()">
                    <div id='reponse3' style="color:red"></div>
                        <script src="js/scriptlog.js"></script>
                </form>
			</div>
		</div>
	</div>
</div>
<!-- bloc-3 END -->

<!-- bloc-4 -->
<div class="bloc l-bloc  bloc-tile-2" id="bloc-4">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="mg-md" style="color:#e12e45; font-size:28px;">
					Sign Up
				</h4>
                <form name="signup" method="POST" action="" id="myForm" name="myForm">
                    <div class="form-group">
					   <label>Name</label>
					   <input type="text" class="form-control" name="name" value="<?php if (isset($_POST['name'])) echo htmlentities(trim($_POST['name'])); ?>" id="username1" onblur="validate('username', this.value)" />
                        <div id='username' style="color:red;"></div>
				    </div>
                    <div class="form-group">
					   <label>First Name</label>
					   <input type="text" class="form-control" name="firstname" value="<?php if (isset($_POST['firstname'])) echo htmlentities(trim($_POST['firstname'])); ?>" id="firstname1" onblur="validate('firstname', this.value)"/>
                        <div id='firstname' style="color:red;"></div>
				    </div>
				    <div class="form-group">
					   <label>Email</label>
					   <input type="email" class="form-control" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>" id="email1" onblur="validate('email', this.value)"/>
                        <div id='email' style="color:red;"></div>
				    </div>
				    <div class="form-group">
					   <label>Password</label>
					   <input type="password" class="form-control" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>" id="password1"  onblur="validate('password3', this.value)"/>
                        <div id='password3' style="color:red;"></div>
				    </div>
                    <div class="form-group">
					   <label>Confirm password</label>
					   <input type="password" class="form-control" name="confirm" value="<?php if (isset($_POST['confirm'])) echo htmlentities(trim($_POST['confirm'])); ?>" id="password2"   onblur="validate('password4', this.value)"/>
                        <div id='password4' style="color:red;"></div>
				    </div>
                    <input type="button" name="submit" value="Sign Up" class="btn  btn-d  btn-lg animated flipInX" onclick="checkForm()">
                    <div id='reponse'></div>
                        <script src="js/script.js"></script>
                </form>
			</div>
		</div>
	</div>
</div>
<!-- bloc-4 END -->
</div>
<!-- Bloc Group END -->