<?php define("ABSPATH",dirname(__FILE__)."/"); ?>
<head>
<title>Services</title>
<meta name="description" content="">
<meta name="keyword" content="">
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php	include(ABSPATH.'text.php'); ?>
</head>
<body>
<div id="homespacecontainer" style="height:930px;">
	<div id="verticallogoblock">
	</div>
	<div id="socialmediacontainer">
		<div class="menufloatright" id="spacemenudiv">
			<ul id="topmenu">
				<li><a href="index.php">Home</a>
				</li><li>
					<a href="#">Services</a>
				</li><li>
					<a href="#">Store</a>
				</li><li>
					<a href="#">Contact Us</a>
				</li><li>
					<a href="#">About Us</a>
				</li>
			</ul>
		</div>
	</div> 
	<div id="scontainer">
		<div id="manintro">

		<div style="padding: 20px 50px 0 120px; font-size: large;">
			<p>Comprehensive computer and server repairs, networking, installations, upgrades, 
		and solutions for your business. Our professionals have the experience and the knowledge to diagnose and resolve an issue.</p>
		</div>		
		</div>
<h3 id="headlines"></h3>
	<div id="mandiv">
		<img src="map.png" alt="map" height="120" width="320" style="padding: 13px 25px 0 0; float: left;"/>
		<h3>Managed Services</h3>
		<p>With today's demand for systems that are reliable, secure and flexible, Our business delivers the necessary tools to keep your business going. 
		With comprehensive IT Support, you can be sure your business has the right solutions. We can custom build the support you need. A managed service 
		agreement is a bundle of services that provide a framework for us to manage and maintain your infrastructure at an affordable and predictable rate.</p>
	</div>
	<div class="srvleftdiv"  id="listtext">  
        <ul id="menulisttext" style="color:#3b83c5;">
              <li id="s1">Project Design, Management & Consultation</li>
              <li id="s2">Help Desk Services</li>
              <li id="s3">Security</li>
              <li id="s4">Spam & Malware Protection</li>
              <li id="s5">Break Fix Services</li>
              <li id="s6">Backup, Disaster Recovery & Data Recovery</li>
              <li id="s7">Network Health Monitoring</li>
			  <li id="s8">Paperless Office</li>
        </ul> 	
	</div>

		<div class="srvrightdiv" id="textholder">
			<img src="itimg.png" height="" width="" style="padding: 10px 40px 10px 100px;"/>
			<h2 style="padding-left: 115px;">Select a service to learn more.</h2>
			<p id="listtext" style="padding-left: 130px;">Or call us today to schedule an analysis.</p>
			<p id="listtext" style="padding-left: 230px;">(301) 123-1234</p>
		</div> 
	</div>
</div>
<?php include(ABSPATH.'bottom.php'); ?>
</body>
</html>