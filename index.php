<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!--  favicon Image -->   
    <link rel="shortcut icon" type="image/jpg" href="assets/img/favicon.png"/>

    <title>Matribhumi Youth Society Nepal</title>
    
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!--  ##################### gallary style ######################### -->
    <link href="assets/css1/magnific-popup.css" rel="stylesheet">


	<script type="text/javascript">  
		function validate(){  
			var name=document.f1.name.value; 
			var number=document.f1.number.value;
			var message=document.f1.message.value;
			var status=false;  
			
			 if(name==""){  
				document.getElementById("name").innerHTML=  
				"Please enter your name";  
				status=false;
			}else{  
				document.getElementById("name").innerHTML="";  
				status=true;
			} 
			 
			 if(number==""){  
					document.getElementById("number").innerHTML=  
					"Please enter your contact number";  
					status=false;
				}
			 else{  
					document.getElementById("number").innerHTML="";  
				}
			
			 if(message==""){  
				document.getElementById("message").innerHTML=  
				"Please enter your message";  
				status=false;
			}else{  
				document.getElementById("message").innerHTML="";  
			} 
		
			return status;  
		}  
	</script> 

<style>
    /* ######################### LOADER START ########################## */
    #pre-div {
        background-color: #fff;
        bottom: 0;
        height: 100%;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 10000;
    }
    #loader1 {
        background-image: url("assets/img/loader1.gif");
        background-position: center center;
        background-repeat: no-repeat;
        height: 200px;
        left: 50%;
        margin: -100px 0 0 -100px;
        position: absolute;
        top: 50%;
        width: 200px;
    }
    /* ######################### LOADER END ########################## */



    /* ######################### POPUP FORM START ########################## */
    .modal-dialog{
        width: 400px;
        margin: 70px auto 0;
    }
    .modal-body .title{
        color: #FF8C00;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 1px;
        margin: 0 0 10px;
        text-align:center;
    }
    @media only screen and (max-width: 480px){
        .modal-dialog{ width: 95% !important; }
        .modal-content .modal-body{
            padding: 60px 20px 40px !important;
        }
    }    
    /* ######################### POPUP FORM END ########################## */



    /* ######################### SCROLL TO TOP START ########################## */
    #scroll {
        position:fixed;
        right:10px;
        bottom:10px;
        cursor:pointer;
        width:50px;
        height:50px;
        background-color:#FF8C00;
        text-indent:-9999px;
        display:none;
        -webkit-border-radius:60px;
        -moz-border-radius:60px;
        border-radius:60px
    }
    #scroll span {
        position:absolute;
        top:50%;
        left:50%;
        margin-left:-8px;
        margin-top:-12px;
        height:0;
        width:0;
        border:8px solid transparent;
        border-bottom-color:#ffffff;
    }
    #scroll:hover {
        background-color:#e74c3c;
        opacity:1;filter:"alpha(opacity=100)";
        -ms-filter:"alpha(opacity=100)";
    }
    /* ######################### SCROLL TO TOP END ########################## */



    /* ######################### LOGO START ########################## */
    .navbar-toggle .icon-bar + .icon-bar {
        margin-top: 10px;
    }
    .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
        margin-right: -15px;
        margin-left: -15px;
        padding-bottom: 0px;
    }
    .navbar-brand-logo {
        max-height: 40px;
        padding-bottom: 0px;
    }
    /* ######################### LOGO END ########################## */



    /* ######################### NAVIGATION START ########################## */
    .header-sec-bar {
        background-color: #f4511e ;
        background:#FF8C00;
        color: #fff;
        font-size: 15px;
    }
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        top: -40px;
        transform: translateY(40px);
	    transition: transform .5s;
    }
    .navbar {
        background-color: #ffffff;
    }
    .navbar-nav > li > a {
        color: #000000!important;
        border-right: 1px solid #efeaf1;
        margin:0px 0px 0px 0px;
    }
    .navbar-nav > li > a:hover {
        color: #FF8C00!important;
        border-right: 1px solid #efeaf1;
        margin:0px 0px 0px 0px;
    }
    .nav li > a > i {
        color: rgb(0, 0, 0);
        padding-left: 5px;
    }
    .nav li > a > span {
        font-size: 12px;
        display: table;
        color: rgb(0, 0, 0);
    }
    /* ######################### NAVIGATION END  ########################## */



    /* ######################### HEADER START ########################## */
    #main-home {
        color: rgb(0, 0, 0);
        padding: 80px 15px 90px 50px;
        font-size: 14px;
        text-align: center;
    }
    #carousel-slider {
        border: 3px double #f0dc82;
    }
    .main-color {
        color: #e1ad21;
    }
    div.transbox {
        margin: 0px;
        background-color: #FF8C00;
    }
    h2:after {
        content: '';
        display: block;
        width: 120px;
        height: 2px;
        background: #FF8C00;
        margin: auto;
        text-align: center;
        margin-top: 15px;
    }
    /* ######################### HEADER END ########################## */



    /* ######################### card START ########################## */
    .card{
        padding:10px;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box {
        text-align: center;
        margin-bottom: 25px;
    }
    #cards_landscape_wrap-2 {
        text-align: center;
        background: #ebebeb;
    }
    #cards_landscape_wrap-2 a{
        text-decoration: none;
        outline: none;
    }
    #cards_landscape_wrap-2 .card-flyer {
        border-radius: 5px;
        margin-top: 10px;
    }
    #cards_landscape_wrap-2 .card-flyer .image-box{
        background: #FF8C00;
        overflow: hidden;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
        border-radius: 5px;
    }
    #cards_landscape_wrap-2 .card-flyer .image-box img{
        width: 100%;
        height: 200px;
    }
    #cards_landscape_wrap-2 .card-flyer:hover .image-box img{
        opacity: 0.7;
        -webkit-transform:scale(1.15);
        -moz-transform:scale(1.15);
        -ms-transform:scale(1.15);
        -o-transform:scale(1.15);
        transform:scale(1.15);
    }
    #cards_landscape_wrap-2 .card-flyer .text-box{
        text-align: center;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box .text-container{
        padding: 30px 18px;
    }
    #cards_landscape_wrap-2 .card-flyer{
        background: #ffffff;
        margin-top: 50px;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }
    #cards_landscape_wrap-2 .card-flyer:hover{
        background: #fff;
        box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        margin-top: 50px;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box p{
        margin-top: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px; 
        font-size: 14px;
        letter-spacing: 1px;
        color: #000000;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box h6{
        margin-top: 10px;
        margin-bottom: 13px; 
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'Roboto Black', sans-serif;
        letter-spacing: 1px;
        color: #000000;
    }
    #more {
        display: none;
    }

    input, button, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        background-color: #FF8C00;
    }
    /* ######################### card END ########################## */



    /* ######################### ABOUT US START ########################## */
    #about {
        padding-bottom: 0px;
        padding-top: 30px;
    }
    .text-success {
        color: #FF8C00;
    }
    .btn-success {
        color: #fff;
        background-color: #FF8C00;
        border-color: #000000;
    }
    p {
        margin: 0 0 10px;
        text-align: justify;
    }

    /*----  About Us Image  ----*/
    #cards_landscape_wrap-1 .container{
        padding-top: 0px; 
        /* padding-bottom: 50px; */
    }
    #cards_landscape_wrap-1 .card-flyer {
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
        border-radius: 5px;
    }
    #cards_landscape_wrap-1 .card-flyer img{
        width: 100%;
        height: 200px;
    }
    /* ######################### ABOUT US END ########################## */


     
    /* ######################### MISSION START ########################## */

    .reviews-section {
        background: #efeaf1;
        text-align: center;
    }
    .reviews-section h2 {
        padding-top: 30px;
        color: rgb(0, 0, 0);
    }
    .reviews-section h3{
        color:#ff1f1f;
    }
    #cards_landscape_wrap-3 .container{
        padding-top: 0px; 
        padding-bottom: 40px;
    }
    #cards_landscape_wrap-3 a{
        text-decoration: none;
        outline: none;
    }
    #cards_landscape_wrap-3 .card-flyer {
        border-radius: 5px;
    }
    #cards_landscape_wrap-3 .card-flyer .image-box{
        background: #FF8C00;
        overflow: hidden;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
        border-radius: 5px;
    }
    #cards_landscape_wrap-3 .card-flyer .image-box img{
        width: 100%;
        height: 200px;
    }
    #cards_landscape_wrap-3 .card-flyer:hover .image-box img{
        opacity: 0.7;
        -webkit-transform:scale(1.15);
        -moz-transform:scale(1.15);
        -ms-transform:scale(1.15);
        -o-transform:scale(1.15);
        transform:scale(1.15);
    }
    #cards_landscape_wrap-3 .card-flyer .text-box{
        text-align: center;
    }
    #cards_landscape_wrap-3 .card-flyer .text-box .text-container{
        padding: 30px 18px;
    }
    #cards_landscape_wrap-3 .card-flyer{
        background: #ffffff;
        margin-top: 50px;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }
    #cards_landscape_wrap-3 .card-flyer:hover{
        background: #fff;
        box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        margin-top: 50px;
    }
    #cards_landscape_wrap-3 .card-flyer .text-box p{
        margin-top: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px; 
        font-size: 14px;
        letter-spacing: 1px;
        color: #000000;
    }
    #cards_landscape_wrap-3 .card-flyer .text-box h6{
        margin-top: 10px;
        margin-bottom: 13px; 
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'Roboto Black', sans-serif;
        letter-spacing: 1px;
        color: #000000;
    }
    /* ######################### MISSION END ########################## */



    /* #################  EVENTS START  ##########################   */
    #recent-events {
        padding-bottom: 20px;
        padding-top: 30px;
        background-color: #ffffff;
    }
    .filter {
        padding-top: 6.5rem;
        padding-bottom: 7rem;
    }

    .filter .section-title {
        margin-bottom: 0.5rem;
    }
    .filter h2,
    .filter .section-title {
        text-align: center;
    }
    .filter h2 {
        margin-bottom: 3.25rem;
    }

    .filter .button-group {
        text-align: center;
    }
    .filter .button-group a {
        display: inline-block;
        margin-right: 0.1875rem;
        margin-bottom: 0.5rem;
        margin-left: 0.1875rem;
        padding: 0.3125rem 1.375rem 0.25rem 1.375rem;
        border-radius: 0.25rem;
        background-color: #f1f4f7;
        color: #7b7e85;
        font: 700 0.95rem/1.45rem "Montserrat", sans-serif;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .recent-events-wrap .overlay {
        background-color: #FF8C00;
        color: #fff;
    }
    .filter .element-item:hover img {
        -moz-transform: scale(1.15);
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
    } 
    .filter .element-item .element-item-overlay { 
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        opacity: 1;
        text-align: center;
        transition: all 0.3s;
    }
    .filter .element-item .element-item-overlay span { 
        position: absolute;
        z-index: 3;
        top: 42%;
        right: 0;
        left: 0;
        color: #fff;
        font: 700 2.125rem/1.625rem "Montserrat", sans-serif;
    }
    #recent-events .col-xs-12.col-sm-4.col-md-3 {
        padding: 20px;
    }

    /**********************************/
    /*     13. Project Lightboxes     */
    /**********************************/
    .lightbox-basic {
        position: relative;
        max-width: 62.5rem;
        margin: 2.5rem auto;
        padding: 1.5625rem;
        border-radius: 0.25rem;
        background: #fff;
        text-align: left;
    }

    .lightbox-basic img {
        margin-right: auto;
        margin-bottom: 2rem;
        margin-left: auto;
        border-radius: 0.25rem;
    }

    .lightbox-basic .line-heading {
        width: 3rem;
        height: 1px;
        margin-top: 0;
        margin-bottom: 0.625rem;
        margin-left: 0;
        border: none;
        background-color: #14bf98;
    }
    .lightbox-basic h6 {
        margin-bottom: 2rem;
    }
    .lightbox-basic .testimonial-container {
        margin-top: 1.75rem;
        margin-bottom: 2.125rem;
        padding: 1.125rem 1.5rem 1.125rem 1.5rem;
        border-radius: 0.25rem;
        background-color: #fbfbfb;
    }
    .lightbox-basic .testimonial-text {
        margin-bottom: 0.5rem;
    }
    .lightbox-basic .testimonial-author {
        margin-bottom: 0;
    }
    .lightbox-basic .btn-solid-reg,
    .lightbox-basic .btn-outline-reg {
        margin-right: 0.375rem;
        margin-bottom: 1rem;
    }
    .lightbox-basic a.mfp-close.as-button {
        position: relative;
        width: auto;
        height: auto;
        margin-right: 0.5rem;
        color: #484a46;
        opacity: 1;
    }
    .lightbox-basic a.mfp-close.as-button:hover {
        color: #f2f2f2;
    }
    .lightbox-basic button.mfp-close.x-button {
        position: absolute;
        top: -0.375rem;
        right: -0.375rem;
        width: 2.75rem;
        height: 2.75rem;
    }
    .filter .element-item { 
        width: 25%; 
    }
    .filter .element-item .element-item-overlay { 
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .filter .element-item:hover .element-item-overlay {
        opacity: 1;
    }
    .lightbox-basic img {
        margin-bottom: 0;
    }
    .lightbox-basic h3 {
        margin-top: 0.375rem;
    }
    .lightbox-basic .btn-solid-reg,
    .lightbox-basic .btn-outline-reg {
        margin-bottom: 0;
    }
    .filter .element-item {
        width: 17.3125rem; 
        height: 16.875rem;
    }
    .filter .element-item .element-item-overlay span { 
        top: 45%;
    }
    h3 {
        color: #FF8C00;
    }
    /* #################  EVENTS END  ##########################   */



    /* #################  GALLERY START  ##########################   */
    .filter-gallery {
        padding-top: 0rem;
        padding-bottom: 7rem;
    }

    .filter-gallery .section-title {
        margin-bottom: 0.5rem;
    }
    .filter-gallery h2,
    .filter-gallery .section-title {
        text-align: center;
    }
    .filter-gallery h2 {
        margin-bottom: 3.25rem;
    }
    .filter-gallery .button-group {
        text-align: center;
    }
    .filter-gallery .button-group a {
        display: inline-block;
        margin-right: 0.1875rem;
        margin-bottom: 0.5rem;
        margin-left: 0.1875rem;
        padding: 0.3125rem 1.375rem 0.25rem 1.375rem;
        border-radius: 0.25rem;
        background-color: #f1f4f7;
        color: #7b7e85;
        font: 700 0.95rem/1.45rem "Montserrat", sans-serif;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .recent-events-wrap .overlay {
        background-color: #FF8C00;
        color: #fff;
    }
    .filter-gallery .button-group a:hover {
        background-color: #FF8C00;
        color: #fff;
    }
    .filter-gallery .button-group a.button.is-checked {
        background-color: #FF8C00;
        color: #fff;
    }
    .filter-gallery .element-item img {
        max-width: 100%;
        margin: 0;
        transition: all 0.3s;
    }
    .filter-gallery .element-item:hover img {
        -moz-transform: scale(1.15);
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
    } 
    .filter-gallery .element-item .element-item-overlay { 
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100%;
        height: 50%;
        background-color:#FF8C00;
        opacity:1;
        text-align: center;
        transition: all 0.3s;
    }
    .filter-gallery .element-item .element-item-overlay span { 
        position: absolute;
        z-index: 3;
        top: 42%;
        right: 0;
        left: 0;
        color: #fff;
        font: 700 2.125rem/1.625rem "Montserrat", sans-serif;
    }
    .filter-gallery .element-item { 
        width: 25%; 
    }
    .filter-gallery .element-item .element-item-overlay { 
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .filter-gallery .element-item:hover .element-item-overlay {
        opacity: 1;
    }
    .filter-gallery .element-item {
        width: 15.3125rem; 
        height: 16.875rem;
    }
    .filter-gallery .element-item .element-item-overlay span { 
        top: 45%;
    }
    .pad-low {
        padding-top: 0px;
    }
    /*#################  GALLERY END  ##########################   */



    /*#################  REVIEW START  ##########################   */
    .carousel-indicators li {
        width: 20px;
        height: 20px;
        border: 5px solid #f0dc82;
    }
    .carousel-indicators .active {
        width: 20px;
        height: 20px;
        background-color: #000000;
    }
    /*#################  REVIEW END  ##########################   */



    /*#################  CONTACT START  ##########################   */
    .btn-style-2 {
        color: #fff;
        background-color: #FF8C00;
        border-color: #000000;
    }
    .reviews-section h4 {
        color: rgb(0, 0, 0);
    }
    /*#################  REVIEW END  ##########################   */



    /*#################  TEAM START  ##########################   */
    .row.heading h2 {
        color: #fff;
        font-size: 32.52px;
        font-weight: 400;
        text-align: center;
        padding-bottom: 20px;
        text-transform: uppercase;
    }
    ul{
        margin:0;
        padding:0;
        list-style:none;
    }
    .our-webcoderskull .cnt-block:hover {
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        border: 0;
    }
    .our-webcoderskull{
        background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;
    
    }
    .our-webcoderskull .cnt-block{ 
        float:left; 
        width:100%; 
        background:#fff; 
        padding:30px 20px; 
        text-align:center; 
        border:2px solid #d5d5d5;
        margin: 0 0 28px;
    }
    .our-webcoderskull .cnt-block figure{
        width:148px; 
        height:148px; 
        border-radius:100%; 
        display:inline-block;
        margin-bottom: 15px;
    }
    .our-webcoderskull .cnt-block img{ 
        width:148px; 
        height:148px; 
        border-radius:100%; 
    }
    .our-webcoderskull .cnt-block h3 a{
        text-decoration:none;
        color:#2a2a2a;
    }
    .our-webcoderskull .cnt-block h3 a:hover{
        color:#337ab7;
    }
    .our-webcoderskull .cnt-block .follow-us{
        margin:20px 0 0;
    }
    .our-webcoderskull .cnt-block .follow-us li{ 
        display:inline-block; 
        width:auto; 
        margin:0 5px;
    }
    .our-webcoderskull .cnt-block .follow-us li .fa{ 
        font-size:24px; 
        color:#767676;
    }
    .our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
        color:#025a8e;
    }
    .cnt-block h3{
        margin-top: -10px;
    }
    .cnt-block p{
        text-align: center;
    }
    /*#################  TEAM END  ##########################   */



    /*#################  FOOTER START  ##########################   */
    #footer-sec {
        background-color: #130636;
        color: #fff;
        padding: 20px;
    }
    #footser-end {
        text-align: right;
        background-color: #FF8C00;
        color: #fff;
        padding: 10px;
    }
    /*#################  FOOTER END  ##########################   */

</style>



</head>
<body>
    <!-- ######################### LOADER START ######################### -->
     <div id="pre-div">
        <div id="loader1">
        </div>
    </div>
    <!-- ######################### LOADER END ######################### -->
      

    <!-- ######################### NAVIGATION START ######################### -->
    <div class="header-sec-bar">
        <span>
            <i class="fa fa-envelope-o "></i>support@matribhuminepal.org
            <i class="fa fa-phone "></i>+977-9852834482
            <i class="fa fa-building"></i>24 / 7 Open  
        </span>
    </div>

    <div id="navbar" style="z-index:500">
        <div id="home" class="navbar navbar-default move-me">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                        <img src="assets/img/favicon.png" class="navbar-brand-logo" alt="">
                        <img src="assets/img/logo.jpeg" class="navbar-brand-logo " alt="">
                    </a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class=" nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#main-home">HOME <i class="fa fa-bars"></i>
                                <span>Introduction</span>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="#about">ABOUT <i class="fa fa-bars"></i>
                                <span>Who We Are ?</span>
                            </a>
                        </li>

                        
                        <li class="dropdown">
                            <a href="#mission">MISSION  <i class="fa fa-bars"></i>
                                <span>What We Do ?</span>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="#recent-events">EVENTS<i class="fa fa-bars"></i>
                                <span>Recent Events</span>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="#gallery">GALLERY<i class="fa fa-bars"></i>
                                <span>Our Photos</span>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="#contact">CONTACT <i class="fa fa-bars"></i>
                                <span>Reach us Here</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div> 
    </div>      
    <!-- ######################### NAVIGATION END ######################### -->

    
    
    <!-- ######################### SLIDER START ######################### -->
    <div class="bg-image" 
        style="background-image: url('assets/img/background/bg4.jpg');">

        <div id="main-home">

            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/sliders/video.gif" alt="" width="600">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3  col-md-3 col-sm-12">
                        <h2 style="color:black">RAISE FUNDS</h2>
                        <form>
                            <div class="form-group">
                                <button type="button" class="btn btn-style-2" data-toggle="modal" data-target="#myModal">DONATE NOW </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3  col-md-3 col-sm-12">
                        <div class="transbox">
                            <img src="assets/img/sliders/1.jpg" alt="" width="290px" height="320px">
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    <!-- ######################### SLIDER END ######################### -->



     <!-- #######################    CARDS START ####################### -->
     <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">

                <div class="row1 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <h6>Movement Against Rapist</h6>
                                <img src="assets/img/cards/1.jpeg" alt="" />
                            </div>

                            <div class="card">
                               	Each day 5-7 Women or Girls are raped according to 
                                <span class="dots">...</span><span class="more" style="display: none;">  
                                Nepali data. And In 2021, 2000+ were raped and we stand against rapist and that 
                                also published in front page of National Newspaper <b>Annapurna Post</b>. And even a First
                                time maithali slogan was written there <b>"GAURAVSALI MITHILA BASI HAM, SITA PUJAI CHEE,
                                BETI LUTAI CHEE".</b>
                                </span>
                                <button class="read btn btn-success">Read more</button>   
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row1 col-xs-12 col-sm-6 col-md-3 col-lg-3">     
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <h6>Blood Bank Established</h6>
                                <img src="assets/img/cards/2.jpg" alt="" />
                            </div>
                            <div class="card">                                  
                                We successfully Established Blood Bank in Siraha
                                <span class="dots">...</span> <span class="more" style="display: none;">
                                Province Hospital. And till date, we are organising Blood Donation 
                                Program. And this news was also telecast by News Channel.
                                </span>
								<button class="read btn btn-success">Read more</button>                            
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row1 col-xs-12 col-sm-6 col-md-3 col-lg-3">   
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">   
                                <h6>ghar ghar ma swasthya</h6>                     
                                <img src="assets/img/cards/3.jpg" alt="" />
                            </div>
                            <div class="card">         
                                First time in Nepal, We did Campaign: <b>"GHAR</b><span class="dots">...</span> <span class="more" style="display: none;">
                                <b>GHAR MA SWASTHYA"</b> collaborating with Nepal Government, 
                                focusing on Healthy Siraha, Healthy Nepal.
                                </span>
								<button class="read btn btn-success">Read more</button>                              
							</div>
                        </div>
                    </div>
                </div>


                <div class="row1 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <h6>Winter Donation</h6>
                                <img src="assets/img/cards/4.jpg" alt="" />
                            </div>
                            <div class="card"> 
                               	We and Our Team ended this winter 2021 by
                                <span class="dots">...</span> <span class="more" style="display: none;">
                                donating Jackets in Government schools as well as in some of the 
                                Villages of Siraha District belongs to poor family.
                                </span>
								<button class="read btn btn-success">Read more</button>                              
							</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> 
    <!-- #######################    CARDS END ####################### -->



    <!-- #######################    ABOUT US START ####################### -->
    <div id="about">
        <div class="container">

            <div class="row text-center" data-scroll-reveal="enter from the bottom after .3s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2>ABOUT US </h2>
                </div>
            </div>


            <div id="cards_landscape_wrap-1">
                <div class="container">

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <h1 class='text-success'>Welcome!</h1>
                            <hr>
                            <p><b style="color:#FF8C00">MATRIBHUMI YOUTH SOCIETY NEPAL™</b> is a registered NGO ( Non Governmental Organisation ) working together with Partners &
                                Local Communities in Nepal to improve Mental Health, Environment ​& Human Well-Being. </p>
                            
                            <p><b>Matribhumi Youth Society Nepal</b> was established in September 2021, with 
                            the purpose to help  people all over Nepal with the motto of <b>“Social reform is our campaign,
                            Motherland is our identity"</b>.</p>
                            <span id="dots"></span><span id="more">We commit ourself in helping families of poor community and changing their prospective.
                                Founded in to provide relief for the marginalized 
                               and those who seek for help. We see Heads foundation to quickly becoming a trusted 
                               vehicle for the compassion and generosity of million.</span></p>
                            <button onclick="myFun()" id="myBtn" class="btn btn-success">Let's Know More</button>

                        </div>


                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-top: 80px;">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <img src="assets/img/about/about1.jpg" alt=""/>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-top: 80px;">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <img src="assets/img/about/about4.jpg" alt=""/>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div> 

        </div>
    </div>
    <!-- #######################    ABOUT US END ####################### -->

    

    <!-- #######################    MISSION START ####################### -->
    <div id="mission">
        <div class="reviews-section">
            <h2>OUR MISSION </h2>
            <h3>WE'RE ON </h3>
            <h3 style="display:inline;">A MISSION TO SOLVE </h3><h1 style="display:inline;"> PROBLEMS</h1>

            <div id="cards_landscape_wrap-3">
                <div class="container">
                    <div class="row">
                        <div class="row2 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <h6>MEDICAL FACILITIES</h6>
                                        <img src="assets/img/mission/ms1.jpeg" alt="" />                                       
                                    </div>
        
                                    <div class="card">
                                        <span class="dots"></span><span class="more" style="display: none;">  
                                            We are providing free regular vital check up.
                                        </span>
										<button class="read btn btn-success">Read more</button>                                     
									</div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row2 col-xs-12 col-sm-6 col-md-3 col-lg-3">     
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <h6>EDUCATION FOR ALL</h6>
                                        <img src="assets/img/mission/ms2.png" alt="" />
                                    </div>
                                    <div class="card">                                  
                                        <span class="dots"></span><span class="more" style="display: none;">  
                                            We are providing awareness about blood donation and campaign.
                                        </span>
										<button class="read btn btn-success">Read more</button>                                      
									</div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row2 col-xs-12 col-sm-6 col-md-3 col-lg-3">   
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">  
                                        <h6>HOMELESS CHILDREN</h6>                    
                                        <img src="assets/img/mission/ms3.jpg" alt="" />
                                    </div>
                                    <div class="card">         
                                        <span class="dots"></span><span class="more" style="display: none;">  
                                            We are providing educational accessories to homeless child as well as adult one.
                                        </span>
										<button class="read btn btn-success">Read more</button>                                       
									</div>
                                </div>
                            </div>
                        </div>
        
        
                        <div class="row2 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <h6>DISASTER MANAGEMENT</h6>
                                        <img src="assets/img/mission/ms4.jpeg" alt="" />
                                    </div>
                                    <div class="card"> 
                                        <span class="dots"></span><span class="more" style="display: none;">  
                                            Every year we organising Campaign of cloth bank in various marginalized area.
                                        </span>
										<button class="read btn btn-success">Read more</button>                                       
									</div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- #######################    MISSION END ####################### -->



    <!-- #######################    EVENTS/WORKS START ####################### -->
    <div id="recent-events" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>EVENTS THAT WE'RE PROUD OF</h2>
                </div> 
            </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/1.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-1"><div class="element-item-overlay"><span>Established Clothing Bank</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/2.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-2"><div class="element-item-overlay"><span>Movement against Rapiest</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/3.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-3"><div class="element-item-overlay"><span>Tree Plantation</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/5.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-4"><div class="element-item-overlay"><span>Help Deprived Child</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/4.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-5"><div class="element-item-overlay"><span>Established Blood Bank</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/6.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-6"><div class="element-item-overlay"><span>Volunteering</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/7.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-7"><div class="element-item-overlay"><span>Winter Cloth Distribution</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  ">
                    <div class="recent-events-wrap">
                        <img class="img-responsive" src="assets/img/events/small/8.jpg" alt="">

                        <div class="overlay">
                            <div class="recent-events-inner">
                                <div class="element-item development">                                         
                                    <a class="popup-with-move-anim" href="#event-8"><div class="element-item-overlay"><span>CAMPAIGN: Ghar Ghar Ma Swasthya</span></div></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
    
        </div>
    </div>    

    <!-- ################# Event Lightboxes ###################-->
    <div id="event-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/1.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>Established Clothing Bank</h3>
                <hr class="line-heading">
                <h6>7th Nov 2020</h6>
                <p>Cloth bank came into existence with an aim to provide cloth to underprovileged.</p>
            </div> 
        </div> 
    </div>

    <div id="event-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/2.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>Movement against Rapiest</h3>
                <hr class="line-heading">
                <h6>27th Nov 2020</h6>
                <p>Our Slogan "Gauravsali Mithila Basi Hum Sita Pujai Chee, Beti Lutai Chee". <b>#no_rape</b></p>
            </div> 
        </div> 
    </div>


    <div id="event-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/3.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>Tree Plantation</h3>
                <hr class="line-heading">
                <h6>29th june 2021</h6>
                <p>Supporting the goal <b>"Hariyo Ban Nepal Ko Dhan"</b>.</p>
            </div> 
        </div> 
    </div>


    <div id="event-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/5.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>Help Deprived Child</h3>
                <hr class="line-heading">
                <h6>29th Aug 2021</h6>
                <p>A boy 6 years hailing from narha diagnosed with congenital hernia and his suffering was miserable 
                    but cann't afford of medical treatement any how we approached their parents and help 
                    to get rid over it.
                </p>
            </div> 
        </div> 
    </div>


    <div id="event-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/4.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>Established Blood Bank</h3>
                <hr class="line-heading">
                <h6>09th Oct 2021</h6>
                <p>From a decade people of siraha travelled 45km to bring blood so with the collaboration with
                     provincial hospital we established a permanent blood bank.
                </p>
            </div> 
        </div> 
    </div> 


    <div id="event-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/6.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>Volunteering</h3>
                <hr class="line-heading">
                <h6>14th Oct 2021</h6>
                <p>Matribhumi has wide range of youth volunteering in all social works as per need of society.</p>
            </div> 
        </div>
    </div> 


    <div id="event-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/7.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>Winter Cloth Distribution</h3>
                <hr class="line-heading">
                <h6>1st Feb 2022</h6>
                <p>Many locality where matribhumi belongs have problem in hand to mouth so we provide basic needs accessories every year.</p>
            </div>
        </div> 
    </div> 


    <div id="event-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/events/big/8.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>CAMPAIGN: Ghar Ghar Ma Swasthya</h3>
                <hr class="line-heading">
                <h6>17th July 2022</h6>
                <p>This is the first time ever in Nepal, we went to every door step with all possible health 
                    checkup with proper prescription and provide home service health facilities.
                </p>
            </div>
        </div> 
    </div>
    <!-- ######################### EVENTS/WORKS END  ################################ -->



    <!-- ######################### GALLERY START  ################################ -->
    <div id="gallery" class="filter-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Gallery</h2>
                </div> 
            </div>

            <div class="button-group filters-button-group">
                <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                <a class="button" data-filter=".est"><span>ESTABLISHED</span></a>
                <a class="button" data-filter=".bd"><span>BLOOD DONATION</span></a>
                <a class="button" data-filter=".vol"><span>VOLUNTEERING</span></a>
                <a class="button" data-filter=".help"><span>HELP</span></a>
            </div>
        

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item vol">                                         
                                <a class="popup-with-move-anim" href="#gallery-1"><div class="element-item-overlay"><span>VOLUNTEERING</span></div><img src="assets/img/gallery/small/vol1.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item vol">                                         
                                <a class="popup-with-move-anim" href="#gallery-2"><div class="element-item-overlay"><span>VOLUNTEERING</span></div><img src="assets/img/gallery/small/vol2.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item vol">                                         
                                <a class="popup-with-move-anim" href="#gallery-3"><div class="element-item-overlay"><span>VOLUNTEERING</span></div><img src="assets/img/gallery/small/vol3.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item vol">                                         
                                <a class="popup-with-move-anim" href="#gallery-4"><div class="element-item-overlay"><span>VOLUNTEERING</span></div><img src="assets/img/gallery/small/vol4.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item help">                                         
                                <a class="popup-with-move-anim" href="#gallery-5"><div class="element-item-overlay"><span>Help</span></div><img src="assets/img/gallery/small/help1.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item help">                                         
                                <a class="popup-with-move-anim" href="#gallery-6"><div class="element-item-overlay"><span>Help</span></div><img src="assets/img/gallery/small/help2.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item est">                                         
                                <a class="popup-with-move-anim" href="#gallery-7"><div class="element-item-overlay"><span>ESTABLISHED</span></div><img src="assets/img/gallery/small/est1.jpeg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item est">                                         
                                <a class="popup-with-move-anim" href="#gallery-8"><div class="element-item-overlay"><span>ESTABLISHED</span></div><img src="assets/img/gallery/small/est2.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item est">                                         
                                <a class="popup-with-move-anim" href="#gallery-9"><div class="element-item-overlay"><span>ESTABLISHED</span></div><img src="assets/img/gallery/small/est3.jpeg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 


            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item bd">                                         
                                <a class="popup-with-move-anim" href="#gallery-10"><div class="element-item-overlay"><span>BLOOD DONATION</span></div><img src="assets/img/gallery/small/bd1.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item bd">                                         
                                <a class="popup-with-move-anim" href="#gallery-11"><div class="element-item-overlay"><span>BLOOD DONATION</span></div><img src="assets/img/gallery/small/bd2.jpg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12  ">
                <div class="overlay">
                    <div class="recent-events-inner">
                        <div class="grid">
                            <div class="element-item bd">                                         
                                <a class="popup-with-move-anim" href="#gallery-12"><div class="element-item-overlay"><span>BLOOD DONATION</span></div><img src="assets/img/gallery/small/bd3.jpeg" alt="alternative"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
        </div> 
    </div> 



    <!-- ################# Gallery Lightboxes ###################-->
    <div id="gallery-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/vol1.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>VOLUNTEERING</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
            <p></p>
            </div>  
        </div> 
    </div>


    <div id="gallery-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/vol2.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>VOLUNTEERING</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>
            </div>
        </div> 
    </div> 


    <div id="gallery-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/vol3.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>VOLUNTEERING</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>           
            </div> 
        </div> 
    </div>


    <div id="gallery-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/vol4.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>VOLUNTEERING</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div> 
        </div> 
    </div>


    <div id="gallery-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/help1.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>HELP</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div> 
        </div> 
    </div> 


    <div id="gallery-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/help2.jpg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>HELP</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div> 
        </div>
    </div> 


    <div id="gallery-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/est1.jpeg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>ESTABLISHED</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div>
        </div> 
    </div> 


    <div id="gallery-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/est2.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>ESTABLISHED</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div>
        </div> 
    </div> 


    <div id="gallery-9" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/est3.jpeg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>ESTABLISHED</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div>
        </div> 
    </div> 


    <div id="gallery-10" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/bd1.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>BLOOD DONATION</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div>
        </div> 
    </div> 



    <div id="gallery-11" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/bd2.jpg" alt="alternative">
            </div>
            <div class="col-lg-4">
                <h3>BLOOD DONATION</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div>
        </div> 
    </div> 


    <div id="gallery-12" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">x</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="assets/img/gallery/big/bd3.jpeg" alt="alternative">
            </div> 
            <div class="col-lg-4">
                <h3>BLOOD DONATION</h3>
                <hr class="line-heading">
                <h6>Matribhumi Youth Society Nepal</h6>
                <p></p>            
            </div>
        </div> 
    </div>
    <!-- ######################### GALLERY END  ################################ -->



    <!-- #######################    REVIEW START  ####################### -->
    <div class="reviews-section">

        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 ">
                    <h2>DONATOR REVIEWS</h2>
                    <div id="reviews" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#reviews" data-slide-to="0" class=""></li>
                            <li data-target="#reviews" data-slide-to="1" class=""></li>
                            <li data-target="#reviews" data-slide-to="2" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                        <h4><i class="fa fa-quote-left"></i>
                                            Matribhumi Nepal has done a great job by providing facility in health sector and helping poor people.        
                                            <i class="fa fa-quote-right"></i></h4>
                                        <h5 class="pull-right"><strong class="c-black">Suman Sharma</strong></h5>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                        <h4><i class="fa fa-quote-left"></i>Well managed and well trained medical staff with a great hospitality.<i class="fa fa-quote-right"></i></h4>

                                        <h5 class="pull-right"><strong class="c-black">Tej Narayan Shah</strong></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="item active">
                                <div class="container center">
                                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                        <h4><i class="fa fa-quote-left"></i>Hospitality and behaviour was appreciable of the staffs and team Matribhumi Nepal.<i class="fa fa-quote-right"></i></h4>

                                        <h5 class="pull-right"><strong class="c-black">Sunil Yadav</strong></h5>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- #######################    REVIEW END  ####################### -->



    <!-- #######################    VIDEO START ####################### -->
     <div id="vedio-sec">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <!-- <h3>Listen To Our CO-FOUNDERS</h3> -->
                    <h3>Our Short Video</h3>
                    <ul>
                        What they says about Matribhumi Youth Society Nepal.
                        <br>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
               		<iframe src="assets/img/matribhumi-teaser.mp4" class="vedio-style"></iframe>
                </div>

            </div>
        </div>
    </div>
    <!-- #######################    VIDEO END ####################### --> 


    <!-- #######################    TEAM START ####################### -->
    <section class="our-webcoderskull padding-lg">
        <div class="container">

            <div class="row heading heading-icon">
                <h2>Our Team</h2>
            </div>

            <ul class="row">

                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/dilip.png" class="img-responsive" alt=""></figure>
                        <h3>Dilip Sahani</h3>
                        <h4 style="color:blue">( News24 Journalist )</h4>
                            <p>Advisor</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/dilip.sahni.33"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9817775546"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/dilip.sahni.33/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/nabin.jpeg" class="img-responsive" alt=""></figure>
                        <h3>Nabin Kumar Shah</h3>
                        <h4 style="color:blue">( Engineer )</h4>
                            <p>Advisor</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/nabin.shah.58958"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9803615370"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/nabinshah_sonar1/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/rahul.png" class="img-responsive" alt=""></figure>
                        <h3>Rahul Gupta</h3>
                        <h4 style="color:blue">( Bank Manager )</h4>
                            <p>Advisor</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/profile.php?id=100004075749083"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9816768188"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/rahulraaz_gupta/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/subhash.png" class="img-responsive" alt=""></figure>
                        <h3>Subhash Mandal</h3>
                        <h4 style="color:blue">( CSD Incharge )</h4>
                            <p>Advisor</p>
                        <ul class="follow-us clearfix">
                            <li><a href="facebook.com/subhash.mandal.1690"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9807724366"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/subhash.mandal.1690/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>


                <li class="col-12 col-md-6 col-lg-12">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/manish.jpeg" class="img-responsive" alt=""></figure>
                        <h3>Manish Kumar Yadav</h3>
                        <p>President</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/manishkyadavv"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9852834482"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/manishk_yadavv/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/abhinash.png" class="img-responsive" alt=""></figure>
                        <h3>Abhinash Kumar Purbey</h3>
                        <p>Vice President</p>
                    <ul class="follow-us clearfix">
                        <li><a href="https://www.facebook.com/abhinash.purbey"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="tel:+977-9817745387"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/abhinashpurbey/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/bikas.png" class="img-responsive" alt=""></figure>
                        <h3>Bikash Kumar Shah</h3>
                            <p>Treasurer</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/hc.drizzle"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9860348177"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/rupesh.png" class="img-responsive" alt=""></figure>
                        <h3>Dr. Rupesh Chandra Yadav</h3>
                            <p>General Secretary</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/rupeshchandra.yadav.5"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/rupeshyadav5152/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>


                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/kajol.png" class="img-responsive" alt=""></figure>
                        <h3>Kajol Singh</h3>
                            <p>Joint Secretary</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/kajol.singh.50115"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9860114028"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/chauhankajol/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/sumit.png" class="img-responsive" alt=""></figure>
                        <h3>Sumit Yadav</h3>
                            <p>Active Member</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/profile.php?id=100011030313501"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9816770033"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/suryansh5005/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/saurav.png" class="img-responsive" alt=""></figure>
                        <h3>Saurav Yadav</h3>
                            <p>Active Member</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/saruav.yadav.10"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9807701963"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/akash.jpeg" class="img-responsive" alt=""></figure>
                        <h3>Siddharth Shah</h3>
                            <p>Active Member</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/profile.php?id=100006365290106"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9825732483"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/_siddharthsah_/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="assets/img/team/raj.png" class="img-responsive" alt=""></figure>
                        <h3>Raj Mukhiya</h3>
                            <p>Active Member</p>
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/raju.mukhiya.9860"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="tel:+977-9819764125"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/__mithila_rider/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <!-- #######################    TEAM END ####################### -->



    <!-- #######################    CONTACT START ####################### -->   
    <section id="contact">
        <div class="container">

            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2>CONTACT US</h2>
                    <br />
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-6  col-md-6  col-sm-6 cont-div">
                     <!--<form name="f1" action="/contact" method="post" onsubmit="return validate()"> -->   
               
                    <form name="f1" action="https://formsubmit.co/bikasshah77@gmail.com" method="post" onsubmit="return validate()">  
                   
                       <input type="hidden" name="_subject" value="Matribhumi Youth Society Nepal : FormSubmit">
                       <!-- <input type="hidden" name="_cc" value="manishkyadav734@gmail.com">
                       <input type="hidden" name="_cc" value="abhinash0710@gmail.com"> -->
                       <input type="hidden" name="_captcha" value="true">
                       
                       <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                            <span id="name" style="color:red"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="number" class="form-control" name="number" placeholder="Your Contact Number">
                            <span id="number" style="color:red"></span>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" name="message" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                        	<span id="message" style="color:red"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-style-2">Submit Request</button>
                        </div>

                    </form>
                    <!-- </form>  -->               

                </div>

                <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1">
                    <h3><strong>OUR LOCATION </strong></h3>
                    <p><strong>ADDRESS :</strong> Siraha Ward- 02 , Nepal</p>
                    <p><b>Call:</b> +977-9852834482</p>
                    <br />
                </div>
            </div>

        </div>
    </section>
    <!-- #######################    CONTACT END ####################### -->



    <!-- #######################    FOOTER START ####################### -->  
    <div id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4" id="about-ftr">
                    <h3><span>How Do NGOs Work?</span></h3>
                    <p>
                        A non-governmental organization, or NGO, is an organization established by a
                        group of individuals that wishes to pursue goals and aspirations that relate 
                        to the public, social, or political good of a nation or the world.        

                    </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><span>Quick Donation</span></h3>
                    <div>
                        Ward 02, Siraha , Nepal
                    <br />
                        Call : +977-9852834482
                        <br />
                        E-mail : support@matribhuminepal.org
                    </div><br>

                    <div class="form-group">
                        <button type="button" class="btn btn-style-2" data-toggle="modal" data-target="#myModal">DONATE NOW </button>
                    </div>
                </div>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                            <div class="modal-body">
                                <h3 class="title">Scan Now</h3>
                                <img src="assets/img/donate/qr.jpg" alt="Italian Trulli" width="350" height="400">
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="col-lg-4 col-md-4">
                    <h3><span>Connect Us</span></h3>

                    <div class="form-group">
                        <a href="https://www.facebook.com/matribhumiyouthsocietynepal"><img src="assets/img/footer/fb.png" alt="Girl in a jacket" width="350" height="70"></a>
                    </div>
                    <div class="form-group">
                        <a href="https://www.instagram.com/matribhumi_youth_society_nepal/"><img src="assets/img/footer/insta.jpg" alt="Girl in a jacket" width="350" height="70"></a>
                    </div>
                </div>
                

            </div>
        </div>
    </div>

    <div id="footser-end">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12">               
                <?php echo date("Y");?> All Rights Reserved |<a href="#" target="_blank" style="color: #fff"> Matribhumi Youth Society Nepal</a>
                | Developed & Maintained by <a href="#" target="_blank" style="color: #fff"> Bikash Kumar Shah</a> 
                </div>
            </div>

        </div>
    </div>
    <!-- #######################    FOOTER END ####################### -->


    <!-- #######################   SCROLL UP START ####################### -->
    <a href="#" id="scroll" style="display: none;"><span></span></a>
    

    
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  knob Scripts -->
    <script src="assets/js/jquery.knob.js"></script>
     <!--  SCROLL REVEAL Scripts -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>

    <!--  ############### Gallary JS  ###################### -->
    <script src="assets/js1/swiper.min.js"></script> 
    <script src="assets/js1/jquery.magnific-popup.js"></script> 
    <script src="assets/js1/morphext.min.js"></script> 
    <script src="assets/js1/isotope.pkgd.min.js"></script> 
    <script src="assets/js1/scripts.js"></script>


    <!--  ############### Scroll to Top JS Start ###################### -->
    <script> 
        $(document).ready(function(){ 
            $(window).scroll(function(){ 
                if ($(this).scrollTop() > 100) { 
                    $('#scroll').fadeIn(); 
                } else { 
                    $('#scroll').fadeOut(); 
                } 
            }); 
            $('#scroll').click(function(){ 
                $("html, body").animate({ scrollTop: 0 }, 600); 
                return false; 
            }); 
        });
    </script>
    <!--  ############### Scroll to Top JS End ###################### -->

    <!--  ############### Sticky Navbar JS Start ###################### -->
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <!--  ############### Sticky Navbar JS End  ###################### -->


    <!--  ##################### Card Read More ######################### -->
    <script>    
    $(document).ready(function(){
        $(".read").click(function(){
            $(this).prev().toggle();
            $(this).siblings('.dots').toggle();
            if($(this).text()=='Read more'){
        $(this).text('Read less');
            }
            else{
        $(this).text('Read more');
            }
        });
    });
    </script>


    <!--  ##################### About Read More ######################### -->
    <script>
        function myFun() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");
            
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Let's Know More"; 
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less"; 
                moreText.style.display = "inline";
            }
        }
    </script>

</body>
</html>
