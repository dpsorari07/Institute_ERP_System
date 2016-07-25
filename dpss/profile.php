<?php session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $_SESSION['name'];?>'s Profile</title>
  <meta name="author" content="Divyam Jain">
 <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
</head>

<body>
	<div id="w" itemscope itemtype="http://schema.org/Person">
		<header class="clearfix">
			<div id="info">			
				<h1><span itemprop="name"><?php echo $_SESSION['name'];?></span></h1>
				<h3><span itemprop="jobTitle"><?php echo $_SESSION['branch'];?></span></h3>
				<h3><span itemprop="jobTitle">IIIT Kota</span></h3>
				<small><span itemprop="email"><?php echo $_SESSION['email'];?></span></small>
			</div>
			
			<div id="photo">
				<img src="getImage.php?id=1" alt="Profile_pic" itemprop="image" />
			</div>
		</header>
		
		<section id="profile">
			<h2>My History &amp; Profile</h2>
			<p itemprop="description"><?php echo $_SESSION['info'];?></p>
		</section>
		
		<section id="skills" class="clearfix" itemscope itemtype="http://schema.org/ItemList">
			<h2>Skills</h2>
			<p><?php echo $_SESSION['edu'];?></p>
		</section>
		
		<section id="education">
			<h2>Past Education</h2>
			<p><span itemprop="alumniOf"><?php echo $_SESSION['edu'];?></span></p>
		</section>
		
		<section id="experience">
			<h2>Work Experience</h2>
			<p><?php echo $_SESSION['experience'];?></p>
		</section>
	</div>
</body>
</html>
