<!-- Navigation Bloc -->
<link rel='stylesheet' href='css/animatemenu.css' />
<div class="bloc bgc-2 l-bloc" id="nav-bloc">
	<div class="container bloc-sm b-divider">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt='' />CV - Online</a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<ul class="site-navigation nav">
					<li>
						<a href="index.php" class="ltc-5 animated fadeInUp">Home</a>
					</li>
                <?php 
                    if(empty($_SESSION['email']))
                    {
                        echo "<li><a href=\"login.php\" class=\"ltc-5 animated fadeInUp\">Login</a></li>";
                    }
                    else 
                    {

                        include("includes/connect_db.php");
                        $email = $_SESSION['email'];
                        $sql1 = "SELECT * FROM user WHERE email=\"$email\"";
                        $req = mysqli_query($base,$sql1) or die("Erreur SQL");
                        while (($data = mysqli_fetch_array($req, MYSQLI_BOTH))!=false) 
                        {
                            $template = $data['template'];
                        }


                        echo "<li><a href=\"edit_resume.php\" class=\"ltc-5 animated fadeInUp\">Edit your profile</a></li>";
                        echo "<li><a href=\"template".$template."/index.php?id=".$_SESSION['id']."\" target=\"_blank\" class=\"ltc-5 animated fadeInUp\">My Page</a></li>";
                        echo "<ul id=\"menu-deroulant\" >
                        <li><a class=\"ltc-5 animated fadeInUp\">".$_SESSION['email']."</a>
                            <ul>
                             <li><a href=\"includes/logout.php\" class=\"ltc-5 animated fadeInUp\">Log Out</a></li>
                            </ul>
                            </li>
                            </ul>";                        
                    }
                ?>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- Navigation Bloc END -->