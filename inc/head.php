<!DOCTYPE html>
<html>
<head>
<style>
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
* {
	
	margin:0;
	padding: 0;
	list-style:none ;
	text-decoration:none ;
}
body {
	
	text-align: left ;
	color:#fff;
	background-color:#000 ;
	font-size:100% ;
	font-family: "Trebuchet MS", Halvetica, sans-serif ;
	width: 1000px
	margin-left:auto ;
	margin-right:auto;
}
a{
	color:#C0C0F0 ;
}
 a:visted {
	color:#6B6BFF ;
}
a:hover, a:active
{
	color:#6B6BFF;
}
.mainheader {
	width:1000px;
	height:50 px;
	background-color:#000;
	margin-left:auto ;
	margin-right:auto ;
    overflow: hidden;
}
.mainheader nav ul li {
	display:inline ;
	float:left;
	
}
.mainheader nav a:link, .mainheader a:visited {
	color: #fff;
	display:inline-block;
	padding: 17px 25px;
	margin-right: 5px;
	
}

.mainheader nav a:hover, .mainheader a:active, .mainheader nav .activea:link, .mainheader .active a:visited {
	text-shadow:none ;
	color:#A6A616 ;
	cursor:pointer;
}
.fullwidth{
	height:50px;
	background-color:#000;
	width:100%;
	clear: both ;
	border-bottom: 3px solid #A6A616 ;
}
.search input {
	padding: 10px;
	margin-top: 9px;
	float: right ;
	background: #000;
	border: 1px solid #A6A616 ;
	outline: none;
	color: #FFFFF ;
	
}	
.serach input:focus {
	border: 1px solid #fff;
	color: #A6A616 ;
}
::-webkit-input-placeholder {
	color: #fff ;
	
}
:-moz-placeholder {
	color: #fff;
}
::-moz-placeholder {
	color: #fff;
}
.about {
	width:1000 px ;
	height:200px;
	margin-left: 250px;
	margin-right: 250px;
	border-left: 3px solid #A6A616 ;
	border-bottom: 3px solid #A6A616 ;
	border-right: 3px solid #A6A616 ;
	padding: 30px;
	display:none ;
}
.freechampions {
	padding: 8px ;
	width: 980px ;
	
	border: 2px solid #A6A616 ;
	margin-top :100px ;
	margin-left : 170px ;
}
.freechampionshead
{
	padding: 10px ;
	border-bottom:2px solid #fff ;
	font-size:25 px;
}
.freechampionshead h2{
	margin-bottom: 3px;
}
.freechampionsbody img {
	width: 90px;
	height:160px;
	margin-left: 2.3px ;
	margin-top : 5px;
	margin-bottom: 5px ;
}
.championinfo{
	margin-top:5px;
	border-top:2px solid #fff;
	padding: 30px;
	display: none;
}
#close {
float: right;
cursor:pointer ;	
margin-top: -27px ;
}
}
</style>
<title ><?php print $title   ?> </title>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</head>

<body>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/phpfunction.php';?>