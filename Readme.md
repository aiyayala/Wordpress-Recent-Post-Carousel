### create a file called recent-post-carousel.php  in the same folder of header.php 


/**----------------------------------------Add------   Some-----CSS ----------------------------------/


#hightlight-content {
  z-index:200;
  position: fixed;
  top: 50px;
  width: 100%;
  display: block;
  transition: top 0.3s;
  height: auto;
  white-space: nowrap;
  overflow: hidden;
}

.scrollmenu {
  background-color: #232727;
  overflow: auto;
	height:100%;
  white-space: nowrap;
}
.carousel-content-wrapper a:hover {
	color:#d12662;
}

.carousel-post-wrapper{
	display: inline-block;
	margin:0 20px 0 0 ;
	width:310px;
}
.carousel-content-wrapper img{
	width: 110px;
	height:90px;
	margin:0 5px;
	border-radius:3px;
	float: left;
  clear: none; 
}
.carousel-content-wrapper{
	white-space: pre-wrap;       
	white-space: -moz-pre-wrap;  
	white-space: -o-pre-wrap;    
	word-wrap: break-word;       
	display:inline-block;
	margin:5px 0;
	vertical-align:middle;
	 
}

.carousel-content-wrapper a {
	color:#fff;
	font-weight:600;
	word-break:break-all;
	transition:all 0.3s ease-in-out 0s;

}

.wrapper-a {
	width:200px;} 


/-----------include this line in header.php----------/
/*--- For amp page only: accelerated-mobile-pages\templates\design-manager\swift\header.php-- */
<?php include 'recent-post-carousel.php'?>
