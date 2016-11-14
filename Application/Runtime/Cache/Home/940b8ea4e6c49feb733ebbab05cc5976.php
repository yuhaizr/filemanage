<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>404 haook.cn</title>
<meta http-equiv='Refresh' content='<?php echo ($waitSecond); ?>;URL=<?php echo ($jumpUrl); ?>'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<style type="text/css">


/*--reset--*/
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/*--start editing from here--*/
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*--end reset--*/
body {
    font-family: 'Roboto Condensed', sans-serif;
    background-attachment: fixed;
	background-color:#2292a7; 
}
h1 {
    font-size: 3.5em;
    text-align: center;
    color: #fff;
    font-weight: 200;
}
/*--main--*/
.main {
    padding: 3em 0 0;
}
.error-page {
    width: 60%;
    margin: 4em auto;
    padding: 2em 3em;
    background: url(/filemanage/assets/images/bg.jpg)repeat 0px 0px;
	-webkit-background-size: cover;
	-moz-background-size: cover; 
    background-size: cover;
    -webkit-box-shadow: 0 0 13px rgb(0, 0, 0);
    -moz-box-shadow: 0 0 13px rgb(0, 0, 0);
    box-shadow: 0 0 13px rgb(0, 0, 0);
}
.error-page-left {
    float: left;
    width: 50%;
}
.error-page h2 {
    font-size: 12em;
    text-align: center;
    color: #e43a12;
    font-weight: 100;
    font-family: 'Akronim', cursive;
}
.error-page h3 {
    font-size: 7em;
    color: #e43a12;
    margin-top: 0.2em;
    font-weight: 300;
    letter-spacing: -10px;
}
.error-page p {
    font-size: 2.5em;
    font-weight: 800;
    color: #000;
    text-shadow: 1px 2px #e43a12;
    text-align: center;
}
.search {
    margin-top: 3em;
}
.search input[type="text"] {
    width: 78%;
    padding: 0.8em 3.3em .8em .8em;
    font-size: 1em;
    color: #999;
    outline: none;
    border: 1px solid #2292A7;
    background: none;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px; 
    border-radius: 4px;
}
.search input[type="submit"] {
    border: none;
    width: 48px;
    height: 44px;
    outline: none;
    box-shadow: none;
    background: #2292A7;
    padding: 0;
    color: #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px; 
    border-radius: 3px;
    margin-left: -3.3em;
	cursor:pointer;
	font-size:1em;
}
.copyright {
    margin:2em 0;
    text-align: center;
}
.copyright p {
    font-size: 1em;
    color: #fff;
	line-height: 1.8em;
}
.copyright p a{
    color: #000;
	-webkit-transition:.5s all;
	-moz-transition:.5s all; 
	transition:.5s all;
}
.copyright p a:hover{
    color: #fff;
}
/*-- //main --*/
/*-- responsive-design --*/
@media(max-width:1440px){
.main {
    padding: 2em 0 0;
}
.error-page { 
    margin: 3em auto; 
}
}
@media(max-width:1366px){
.search input[type="submit"] { 
    margin-left: -3.2em; 
}
}
@media(max-width:1280px){
.error-page h2 {
    font-size: 18em; 
}
.error-page h3 {
    font-size: 8.5em; 
}
.search input[type="submit"] {
    margin-left: -3.3em;
    height: 45px;
}
}
@media(max-width:1080px){
.error-page {
    width: 65%; 
} 
.error-page h2 {
    font-size: 16em;
    text-align: left;
}
.error-page h3 {
    font-size: 8em;
    margin-top: 0.1em;
}
h1 {
    font-size: 3.2em; 
}
}
@media(max-width:991px){
.search input[type="text"] { 
    padding: 0.8em 3.2em .8em .8em; 
}
}
@media(max-width:900px){
.error-page {
    width: 75%;
	padding:2em;
}
}
@media(max-width:800px){
.error-page h3 {
    font-size: 6.5em; 
	margin-top: 0;
}
.error-page h2 {
    font-size: 13em; 
}
.search input[type="text"] {
    width: 73%; 
}
h1 {
    font-size: 3em;
}
}
@media(max-width:667px){
.error-page p {
    font-size: 2.2em; 
}
.error-page h2 {
    font-size: 12em;
}
.search input[type="text"] {
    width: 71%;
}
}
@media(max-width:640px){
.error-page h2 {
    font-size: 12em;
	line-height: 1.2em;
}
.error-page h3 {
    font-size: 5em; 
    letter-spacing: 0px;
}
.error-page p {
    font-size: 1.6em; 
}
.search input[type="text"] {
    width: 72%;
    padding: 0.6em 3.6em .6em .6em;
    font-size: 0.9em;
}
.search input[type="submit"] {
    width: 43px;
    height: 35px;
    font-size: 0.9em;
}
h1 {
    font-size: 2.6em
}
}
@media(max-width:600px){
.error-page h3 {
    font-size: 4.5em; 
}
.search input[type="submit"] {
    width: 45px;
    height: 35px;
    font-size: 0.9em;
    margin-left: -3.4em;
}
.search input[type="text"] {
    width: 69%; 
}
}
@media(max-width:568px){
.error-page h2 {
    font-size: 11em;
    line-height: 1.3em;
}
.error-page {
    width: 80%;
    padding: 1.5em;
}
}
@media(max-width:480px){
.error-page-left {
    float: none;
    width: 100%;
}
.error-page h2 {
    font-size: 9em;
    line-height: 0.9em;
	text-align:center;
}
.error-page { 
    text-align: center;
	padding: 1em;
}
.error-page h3 {
    font-size: 4em; 
}
.error-page p {
    font-size: 1.4em;
}
.search {
    margin: 2em 0;
}
.copyright p {
    font-size: 0.9em; 
	padding: 0 1em;
}
h1 {
    font-size: 2.2em;
}
.error-page {
    margin: 2em auto;
}
}
@media(max-width:414px){
.search {
    margin: 1.5em 0 1em;
}
}
@media(max-width:320px){
h1 {
    font-size: 1.8em;
}
.error-page {
    margin: 1.5em auto;
}
.error-page h3 {
    font-size: 3.5em;
}
.error-page p {
    font-size: 1.2em;
}
.error-page h2 {
    font-size: 8em;
    line-height: 0.8em; 
}
}
/*-- //responsive-design --*/


</style>
<!-- //Custom Theme files -->

</head>
<body>
	<!-- main -->
	<div class="main" style="color: #FB6E52"> 
	
		<h1 style="color: #FB6E52;"> ERROR </h1>
		<div class="error-page">
	<!-- 		<div class="error-page-left">
				<h2>error </h2>
			</div> -->
			<div class="" style="text-align: center;min-height: 200px; "> 
				<!-- <h3>哎哟哎</h3> -->
				<p style="line-height: 200px;height: 200px;color: #FB6E52;"><?php echo ($error); ?></p>
				<a href="<?php echo ($jumpUrl); ?>" class="return-btn"><i class="fa fa-home"></i>返回</a>
<!-- 				<div class="search"> 
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="输入信息" id="search" required="">
						<input type="submit" value="提交">
					</form> 
				</div> -->
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<!-- //main -->
	<!-- copyright -->
<!-- 	<div class="copyright">
		<p>Copyright &copy; <a href="http://www.haook.cn" title="HTML模板网">www.haook.cn</a></p>
	</div> -->
	<!-- //copyright -->
</body>
</html>