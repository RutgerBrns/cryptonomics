<nav>
	<div class="container-fluid navigation" id="navigation">
		<div class="nav navbar-nav logo-menu-white" id="logo-menu-white">
        	<a href="#">Cryptonomics</a>
    	</div>
		<div class="navbar-nav navbar-right">
  		 	<a href="<?php echo url::to(''); ?>">Over ons</a>|
  		 	<a href="<?php echo url::to('newFactsheet'); ?>">Factsheets</a>|
  		 	<a href="<?php echo url::to(''); ?>">Video's</a>|
  		 	<a href="<?php echo url::to(''); ?>">E-Book</a>|
  		 	<a href="<?php echo url::to(''); ?>">Blog</a>
  		 	<button class="log-in-button-gold" id="log-in-button-gold">log in</button>
    	</div>
    <!-- <a href="<?php echo url::to('Tasks'); ?>">Tasks</a> -->
    <!-- <a href="<?php echo url::to('Users'); ?>">Users</a> -->
</nav>

<style type="text/css">

body {
	font-family: 'Montserrat', sans-serif;
}
	
#navigation {
	background-color: #052453;
	color: #c6a700;	
	padding-top: 0.5em;
}

#navigation a {
	color: white;
	margin: 2em;	
}

#logo-menu-white {
	font-size: 20px;
}

#log-in-button-gold {
	background-color: #c6a700;
    color: #052453;
    border-color: #c6a700;
    border-radius: 4px;
    margin-right: 0.5em;    
}

</style>

