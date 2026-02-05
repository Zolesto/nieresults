/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{
	border:0;font-size:100%;margin:0;padding:0;
	border:0 none;
margin:0;
padding:0;
	}
a{outline:none}
table{border-collapse:collapse;border-spacing:0}
fieldset,img{border:0}
del,ins{text-decoration:none}
caption,th{text-align:left}
h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}
q:before,q:after{content:''}
abbr,acronym{border:0;font-variant:normal}
sup,sub{vertical-align:baseline}
legend{color:#171717}
input,button,textarea,select,optgroup,option{font-family:inherit}
input,button,textarea,select{font-size:100%}
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters,Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later;see LICENSE.txt
 */

/* System Messages */
#system-message{
	margin-bottom:10px;
	padding:0;
}

#system-message > dt{
	font-weight:bold;
	display:none;
}

#system-message > dd{
	margin:0;
	font-weight:bold;
	text-indent:30px;
}

#system-message > dd > ul{
	color:#0055BB;
	background-position:4px top;
	background-repeat:no-repeat;
	margin-bottom:10px;
	list-style:none;
	padding:10px;
	border-top:3px solid #84A7DB;
	border-bottom:3px solid #84A7DB;
}

#system-message > dd > ul > li{
	line-height:1.5em
}

/* System Standard Messages */
#system-message > .message > ul{
	background-color:#C3D2E5;
	background-image:url(../images/notice-info.png);
}

/* System Error Messages */
#system-message > .error > ul,
#system-message > .warning > ul,
#system-message > .notice > ul{
	color:#c00;
}

#system-message > .error > ul{
	background-color:#E6C0C0;
	background-image:url(../images/notice-alert.png);
	border-color:#DE7A7B;
}

/* System Warning Messages */
#system-message > .warning > ul{
	background-color:#E6C8A6;
	background-image:url(../images/notice-note.png);
	border-color:#FFBB00;
}

/* System Notice Messages */
#system-message > .notice > ul{
	background-color:#EFE7B8;
	background-image:url(../images/notice-note.png);
	border-color:#F0DC7E;
}
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters,Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later;see LICENSE.txt
 */

/* Import project-level system CSS */
@import url(../../../media/system/css/system.css);

/* Unpublished */
.system-unpublished,tr.system-unpublished{
	background:#e8edf1;
	border-top:4px solid #c4d3df;
	border-bottom:4px solid #c4d3df;
}

span.highlight{
	background-color:#FFFFCC;
	font-weight:bold;
	padding:1px 4px;
}

.img-fulltext-float-right{
	float:right;
	margin-left:10px;
	margin-bottom:10px;
}

.img-fulltext-float-left{
	float:left;
	margin-right:10px;
	margin-bottom:10px;
}

.img-fulltext-float-none{
}

.img-intro-float-right{
	float:right;
	margin-left:5px;
	margin-bottom:5px;
}

.img-intro-float-left{
	float:left;
	margin-right:5px;
	margin-bottom:5px;
}

.img-intro-float-none{
}/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters,Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later;see LICENSE.txt
 */

/* Form validation */
.invalid{border-color:#ff0000}
label.invalid{color:#ff0000}

/* Buttons */
#editor-xtd-buttons{
	padding:5px;
}

.button2-left,
.button2-right,
.button2-left div,
.button2-right div{
	float:left;
}

.button2-left a,
.button2-right a,
.button2-left span,
.button2-right span{
	display:block;
	height:22px;
	float:left;
	line-height:22px;
	font-size:11px;
	color:#666;
	cursor:pointer;
}

.button2-left span,
.button2-right span{
	cursor:default;
	color:#999;
}

.button2-left .page a,
.button2-right .page a,
.button2-left .page span,
.button2-right .page span{
	padding:0 6px;
}

.page span{
	color:#000;
	font-weight:bold;
}

.button2-left a:hover,
.button2-right a:hover{
	text-decoration:none;
	color:#0B55C4;
}

.button2-left a,
.button2-left span{
	padding:0 24px 0 6px;
}

.button2-right a,
.button2-right span{
	padding:0 6px 0 24px;
}

.button2-left{
	background:url(../images/j_button2_left.png) no-repeat;
	float:left;
	margin-left:5px;
}

.button2-right{
	background:url(../images/j_button2_right.png) 100% 0 no-repeat;
	float:left;
	margin-left:5px;
}

.button2-left .image{
	background:url(../images/j_button2_image.png) 100% 0 no-repeat;
}

.button2-left .readmore,
.button2-left .article{
	background:url(../images/j_button2_readmore.png) 100% 0 no-repeat;
}

.button2-left .pagebreak{
	background:url(../images/j_button2_pagebreak.png) 100% 0 no-repeat;
}

.button2-left .blank{
	background:url(../images/j_button2_blank.png) 100% 0 no-repeat;
}

/* Tooltips */
div.tooltip{
	float:left;
	background:#ffc;
	border:1px solid #D4D5AA;
	padding:5px;
	max-width:200px;
	z-index:13000;
}

div.tooltip h4{
	padding:0;
	margin:0;
	font-size:95%;
	font-weight:bold;
	margin-top:-15px;
	padding-top:15px;
	padding-bottom:5px;
	background:url(../images/selector-arrow.png) no-repeat;
}

div.tooltip p{
	font-size:90%;
	margin:0;
}

/* Caption fixes */
/* Caption fixes */
.img_caption .left{
float:left;
margin-right:1em;
}

.img_caption .right{
float:right;
margin-left:1em;
}

.img_caption .left p{
clear:left;
text-align:center;
}

.img_caption .right p{
clear:right;
text-align:center;
}

.img_caption{
	text-align:center!important;
}

.img_caption.none{
	margin-left:auto;
	margin-right:auto;
}


/* Calendar */
a img.calendar{
	width:16px;
	height:16px;
	margin-left:3px;
	background:url(../images/calendar.png) no-repeat;
	cursor:pointer;
	vertical-align:middle;
}
/* TEMPLATE CSS
*********************************************/
html,body{
	margin:0px;
	padding:0px;
	
}
html{
	height:100%;
	margin-bottom:1px;
	overflow-y:scroll;
}

body{
	background-color:#ffffff;
	/*font-family:tahoma;*/
	font-family:tahoma;
	font-weight:normal;
	font-size:8pt!important;
	color:rgb(23,23,23);
	height:100%;
	text-align:center;
	line-height:18pt !important;
}
a{
	color:rgb(144,30,120);
	text-decoration:underline;
}
a:HOVER{
	color:rgb(144,30,120);
	text-decoration:underline;
}
h1{
	font-size:270%;
	line-height:100% !important;
	margin:8px;
}
h2{
	font-size:250%;
	line-height:100% !important;
	margin:6px;
}
h3{
	font-size:210%;
	line-height:100% !important;
	margin:4px;
}
h4{
	font-size:200%;
	line-height:100% !important;
	margin:2px;
}
h5{
	font-size:120%;
	line-height:100% !important;
	margin:4px;
}
h6{
	font-size:80%;
	line-height:100% !important;
	margin:2px;
}
/* LAYOUT
*********************************************/
#overall{
	background-color:#ffffff;
	margin:0 auto;
	text-align:left;
	width:960px;
	/*border-left:2px solid #eeeeee;
	border-right:2px solid #eeeeee;*/

}
#wrapIt{
	margin-left:10px;
	margin-right:10px;
	width:940px;
	
}
#header{
	height:120px;
	width:940px;
}

#main{
		min-height:500px;
}

#footer{
	background-color:#efefef;
	border:1px solid #dddddd;
}

/* Layout Classes */
.inheader{
	
}

.inmain{
	
}

.infooter{
	height:50px;
	width:100%;
}

#logo{
	width:280px;
	height:25px;
	background-color:#fff;
}

#right-top{
	width:280px;
	height:25px;
text-align:right;
	background-color:#fff;
}

#nav{
	margin-top:10px;
}
/* Floats */
.float-left{
	float:left;
}

.float-right{
	float:right;
}

.clearfix{
	clear:both;
}

.group:before,.group:after{
	content:"";
	display:table;
}

.group:after{
	clear:both;
}

.ie6 .group{
	zoom:1;
}

.ie7 .group{
	zoom:1;
}



#login-form{
	width:380px;
	height:250px;
 margin:0 auto;
	border:1px solid #eeeeee;
	 -moz-box-shadow:0px 0px 5px 5px #E1E5FA;
	 -webkit-box-shadow:0px 0px 5px 5px #E1E5FA;
	 box-shadow::0px 0px 5px 5px #E1E5FA;

}
.login-head{
	
}

.login-head1{
 margin-left:5px;
	
}
#login-header{
		font-size:22px;
		color:green;
}

.dashed-div{border-bottom:1px dashed rgb(23,23,23)}

#login-field{
	width:150px;
	height:20px;
	font-size:8pt;
	border:1px solid #bfbfbf;
background-image:url("../images/form_bg.jpg");
background-repeat:repeat-x;
color:#333333;
font-family:tahoma,arial,sans-serif;
margin-bottom:4px;
margin-right:4px;
padding:2px;
border-radius:7px 7px 7px 7px
}
.inputbox{

	height:29px;
	font-size:8pt;
	border:1px solid #bfbfbf;
background-image:url("../images/form_bg.jpg");
background-repeat:repeat-x;
color:#333333;
font-family:tahoma,arial,sans-serif;
margin-bottom:4px;
margin-right:4px;
padding:2px;
border-radius:7px 7px 7px 7px
}
.field-row{
	width:378px;
	padding-bottom:10px;
}
#field-caption{
	width:100px;
	vertical-align:middle;
	float:left;	padding-top:5px;
	margin-left:5px;
	font-size:125% !important;
}
#field-wrap{
	width:178px;
	float:left;
}
#field-wrap label{
		font-size:110% !important;
	}
#field-wrap1{
	width:278px;
	float:left;
}
#field-captionlabel{
	text-align:center;
	vertical-align:middle;
	height:29px;
	padding-left:20px;
}
.button{
	background-color:#3B5998;
	border:1px solid D4DCE6;
	padding:0px 10px;
	color:rgb(255,255,255);
	
	font-weight:bold;
	display:inline-block;
	font-size:8pt !important;
	vertical-align:middle !important;
	text-decoration:none;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;height:25px;text-align:center;
	white-space:nowrap;
	
}
.button1{
background-color:#CCCCCC;
background-image:-moz-linear-gradient(center top,#FAC205,#FDE290);
border:1px solid #D29E00;
border-radius:0.2em 0.2em 0.2em 0.2em;
color:#171717;
display:inline-block;
font:bold 1em/2em Arial,Helvetica;
margin:0.5em;
padding:0 1.5em;
text-decoration:none;
white-space:nowrap;
}
.login-button1{width:80px !important}

#links-login{
	color:#c32435;padding-left:5px;
}
#links-login a:HOVER{
	padding-left:5px;
}


#exam-grid{width:100%;border-left:1px solid #D4DCE6;border-right:1px solid #D4DCE6;border-bottom:1px solid #D4DCE6}
#exam-grid #grid-header{background-color:#3B5998;color:#ffffff;cell-spacing:5px;height:30px;vertical-align:middle}
#exam-grid,#exam-grid tr th,#exam-grid tr td{border-collapse:collapse;font-size:100% !important}
#exam-grid tr th{vertical-align:middle;text-align:center;text-transform:uppercase}
#exam-grid td{vertical-align:top;padding:5px}
#sims-grid tr:hover{background-color:rgb(201,227,137);color:#333333;cursor:pointer}
#exam-grid tr td label{cursor:pointer}
#exam-grid .coltitle{font-size:120%;color:#4F4F4F;font-weight:600}
#exam-grid .coldata,.coldata{font-size:100% !important;font-weight:normal;color:#4F4F4F}
#exam-grid .coldataName{font-size:120% !important;font-weight:normal;color:#4F4F4F;text-align:left}
#exam-grid #message{font-size:100% !important;font-weight:normal;color:#4F4F4F;padding:1px;vertical-align:top}
#exam-grid .sub{border:1px solid #e1e1e1;padding:2px;width:80px;margin:2px;color:green;font-weight:bold}
#exam-grid .room{border:1px solid #e1e1e1;padding:2px;width:80px;margin:2px;color:purple;font-weight:bold}
#exam-grid .teacher{border:1px solid #e1e1e1;padding:2px;width:80px;margin:2px;color:navy;font-weight:bold}
#exam-grid .time{border:1px solid #e1e1e1;padding:2px;width:80px;margin:2px;color:#000000;font-weight:bold}
.odd-row{background-color:#EBF3FF;border-bottom:dashed 1px #c8c8c8}
.even-row{background-color:#ffffff;border-bottom:dashed 1px #c8c8c8}
.left-align{text-align:left !important}
.right-align{text-align:right !important}
.evaluatorThumbImage{border:0px;width:50px;height:50px}
