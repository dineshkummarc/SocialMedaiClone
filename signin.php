<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sin up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">

		<style> 
body {
  background-image: url("wbb.png");
  background-color: #2C175C;
}


#highlighted {
  position: relative;
  background-color: #dc143c;
}
#highlighted .container-fluid h1, 
#highlighted .container-fluid p {
  color: #fff;
}
#highlighted .container-fluid h1 {
  font-size: 54px;
  font-family: Verlag,museo-sans,'Helvetica Neue',Helvetica,Arial,sans-serif;
  color: #414141;
  font-weight: 300;
}
#content {
  background-position: right bottom;
  background-repeat: no-repeat;
}
.interior-page {
  background-color: #FFF;
  padding-bottom: 30px;
}
#highlighted+#content.interior-page .interior-page-nav {
  margin-top: -4em;
}
#highlighted+#content.interior-page .interior-page-nav, 
.interior-page .interior-page-nav {
  padding-left: 0;
}
.sidebar {
  margin-top: 2em;
}
.content-area-right {
  max-width: 1200px;
  padding-right: 15px;
  padding-left: 15px;
}
.container-fluid>.row h2.crumb-title {
  margin-bottom: 0;
}
.page-title {
  min-height: 50px;
}
.page-title, ul {
  margin: 0;
  list-style: none;
}
.content-crumb-div {
  margin: 5px 0 20px;
}
a {
  text-decoration: none;
}
.container-fluid .row .modal, 
.page .modal {
  position: fixed;
  top: 35%;
}
#highlighted+#content.interior-page .interior-page-nav, 
.interior-page .interior-page-nav {
  padding-left: 0;
}
#highlighted+#content.interior-page .interior-page-nav {
  margin-top: -4em;
}
.dynamicDiv.panel-group {
  border: 1px solid #E7E9E9;
  margin-left: 30px;
}
.panel-group {
  margin-bottom: 0;
  background-color: #fff;
}
.panel-group .panel {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  border: none;
  box-shadow: none;
}
.panel-group .panel-heading {
  padding: 0;
  border: none;
}
.panel-default>.panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-group .panel-heading .panel-title {
  font-size: 1.1em;
  font-family: Verlag,museo-sans,'Helvetica Neue',Helvetica,Arial,sans-serif;
}
.interior-page-nav .panel-group .panel-heading .panel-title a {
  background: 0 0;
}
.panel-group .panel-heading .panel-title a {
  display: block;
  padding: 15px 45px 15px 15px;
  background: url(/resources/images/misc/icon_accordion-open.png) 95% center no-repeat #f6f6f6;
}
span.subMenuHighlight, 
ul.panel-heading li.panel-title a:hover {
  color: #ed3c95;
}
.panel-group .panel-heading .panel-title {
  font-size: 1.1em;
  font-family: Verlag,museo-sans,'Helvetica Neue',Helvetica,Arial,sans-serif;
}
ul.panel-heading {
  margin-bottom: 1px;
}
.panel-group .panel-heading .panel-title a {
  display: block;
  padding: 15px 45px 15px 15px;
  background: url(/resources/images/misc/icon_accordion-open.png) 95% center no-repeat #f6f6f6;
}
.panel-group {
  margin-bottom: 0;
  background-color: #fff;
}
.label-default {
  background-color: #fff;
  margin-top: 10px;
}
label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: 700;
}
.form-control {
  border-radius: 0;
}
.btn-primary {
  color: #fff;
  background-color: #dc143c;
  border-color: #ea3e10;
  width: 100%;
}
.btn-block {
  display: block;
}
.btn {
  padding: 8px 28px;
  font-weight: 400;
  -webkit-transition: background .3s ease-in;
  transition: background .3s ease-in;
  white-space: normal;
  border-width: 0 0 1px;
}
.content-area-right {
  margin-top: 10px;
}



</style>
	</head>

<body>

	<div id="container">
	<img src="image/singing.gif" width="200" height="300" >
		<div class="sign-in-form">
			<table>
			<h1>Welcome to Chat World</h1> 
			<h2>Log in</h2>
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="example@razor.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="~____________~" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		</div>
	</div>
</body>

</html>