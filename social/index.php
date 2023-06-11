<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Chat World - Sin up, Log in, Chat </title>
		
	</head>
	<style>
	body {
    background-color:#2C175C;
    }

#header {
    width: 100%;
    margin-top: -8px;
}

.head-view {
    margin: auto;
    width: 1000px;
    line-height: 50px;
}

.head-view ul {
    width: 1000px;
    margin: auto;
}

.head-view li {
    display: inline;
    color: #fff;
    margin: 0px 80px 0px 5px;
}

.head-view b {
    color: #0bacff;
    text-shadow: 3px 3px 3px #000000;
    font-size: 50px;
}

.btn-sign-in {
    color: #ffffff;
    font-size: 19px;
    width: 100px;
    line-height: 30px;
    background-color: #2C175C;
    border: 2px solid #0bacff;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -o-border-radius: 100px;
}

.btn-sign-in:hover {
    color: #8cea56;
    background-color: #2C175C;
    border: 2px solid #8cea56;
}

.btn-sign-up {
    color: #ffffff;
    font-size: 19px;
    width: 100px;
    line-height: 30px;
    background-color: #2C175C;
    border: 2px solid #0bacff;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -o-border-radius: 100px;
}

.btn-sign-up:hover {
    color: #8cea56;
    background-color: #2C175C;
    border: 2px solid #8cea56;
}

#container {
    width: 1200px;
    margin: auto;
}

.image-display {
    width: 850px;
    margin: auto;
}

.img-style {
    width: 90%;
    height: 900%;
}
</style>

<body>

	<div id="header">
   	
    &nbsp;&nbsp;<h1 style="padding-left: 40px; color:#0bacff">Welcome to Chat World</h1>
		

		<div class="head-view">
			<ul>
				<li><b></b></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
                <li></li>
                <li></li>
               
			<li><a href="signin.php" title="Sign in"><button class="btn-sign-in" value="Sign in">Log in</button></a></li>
				<li><a href="signup.php" title="Sign up"><button class="btn-sign-up" value="Sign up">Sign up</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<div class="image-display">
		<img src="image/singing.gif" class="img-style" />
		</div>
	</div>

</body>

</html>