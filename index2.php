<!DOCTYPE html>
<html lang="en">
    <head>
       
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
       
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.69142.js"></script> 
    </head>
<style>
.text_display {
        transform-origin: top;               
        transition-duration: 0.5s;               
        -webkit-transform-origin: top;       
        -webkit-transition-duration: 0.5s;   
        -moz-transform-origin: top;           
        -moz-transition-duration: 0.5s;       
        -o-transform-origin: top;    
        -o-transition-duration: 0.5s;
        font-size: 16px;
        font-family: Arial;       
        font-weight: normal;
        text-align:center;
        color: #FFF;       
                     }

.main{
	width: 800px;
	height: 800px;
	overflow: hidden;
	margin: 0 auto;
	position: relative;
}
.view {
	width: 316px;
	height: 216px;
	margin: 20px;
	float: left;
	position: relative;
	border: 8px solid #fff;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.05);
	background: #333;
	-webkit-perspective: 500px;
	-moz-perspective: 500px;
	-o-perspective: 500px;
	-ms-perspective: 500px;
	perspective: 500px;
}

.view .slice{
	width: 60px;
	height: 100%;
	z-index: 100;
	
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
	
	-webkit-transform-origin: left center;
	-moz-transform-origin: left center;
	-o-transform-origin: left center;
	-ms-transform-origin: left center;
	transform-origin: left center;
	
	-webkit-transition: -webkit-transform 150ms ease-in-out;
	-moz-transition: -moz-transform 150ms ease-in-out;
	-o-transition: -o-transform 150ms ease-in-out;
	-ms-transition: -ms-transform 150ms ease-in-out;
	transition: transform 150ms ease-in-out;
		
}

.view div.view-back{
	width: 50%;
	height: 100%;
	position: absolute;
	right: 0;
	background: #666;
	z-index: 0;
}

.view-back span {
	display: block;
	float: right;
	padding: 5px 20px 5px;
	width: 100%;
	text-align: right;
	font-size: 16px;
	color: rgba(255,255,255,0.6);
}

.view-back span:first-child {
	padding-top: 20px;
}

.view-back a {
	display: block;
	font-size: 18px;
	color: rgba(255,255,255,0.4);
	position: absolute;
	right: 15px;
	bottom: 15px;
	border: 2px solid rgba(255,255,255,0.3);
	border-radius: 50%;
	width: 30px;
	height: 30px;
	line-height: 22px;
	text-align: center;
	font-weight: 700;
}

.view-back a:hover {
	color: #fff;
	border-color: #fff;
}

.view-back span[data-icon]:before {
    content: attr(data-icon);
    font-family: 'icons';
    color: #aaa;
	color: rgba(255,255,255,0.2);
	text-shadow: 0 0 1px rgba(255,255,255,0.2);
	padding-right: 5px;
}

.view .s2, 
.view .s3, 
.view .s4, 
.view .s5 {
	-webkit-transform: translate3d(60px,0,0);
	-moz-transform: translate3d(60px,0,0);
	-o-transform: translate3d(60px,0,0);
	-ms-transform: translate3d(60px,0,0);
	transform: translate3d(60px,0,0);
}
.view .s1 {
	background-position: 0px 0px;
}
.view .s2 {
	background-position: -60px 0px;
}
.view .s3 {
	background-position: -120px 0px;
}
.view .s4 {
	background-position: -180px 0px;
}
.view .s5 {
	background-position: -240px 0px;
}

.view .overlay {
	width: 60px;
	height: 100%;
	opacity: 0;
	position: absolute;
	-webkit-transition: opacity 150ms ease-in-out;
	-moz-transition: opacity 150ms ease-in-out;
	-o-transition: opacity 150ms ease-in-out;
	-ms-transition: opacity 150ms ease-in-out;
	transition: opacity 150ms ease-in-out;
}

.view:hover .overlay {
	opacity: 1;
}

.view img {
	position: absolute;
	z-index: 0;
	-webkit-transition: left 0.3s ease-in-out;
	-o-transition: left 0.3s ease-in-out;
	-moz-transition: left 0.3s ease-in-out;
	-ms-transition: left 0.3s ease-in-out;
	transition: left 0.3s ease-in-out;
}
</style>
    <body>
        <div class="container">
		
			 

            <div id="grid" class="main">
				<div class="view">
<div class="text_display">
            <h>Academic And Professionals</h>
        </div>		
					<div class="view-back">
						<span data-icon="A">566</span>
						<span data-icon="B">124</span>
						<a href="Academic_Professional.php" target="_blank" >&rarr;</a>
					</div>
					<img src="images/Acad_Prof.jpg"/>
				</div>
				<div class="view">
<div class="text_display">
            <h>Entrance Exams</h>
        </div>		
					<div class="view-back">
						<span data-icon="A">210</span>
						<span data-icon="B">102</span>
						<a href="Entrance_Exam.php" target="_blank" >&rarr;</a>
					</div>
					<img src="images/Ent_Exm.jpg"/>
				</div>
				<div class="view">
<div class="text_display">
            <h>Literature And Fiction</h>
        </div>		
					<div class="view-back">
						<span data-icon="A">690</span>
						<span data-icon="B">361</span>
						<a href="Literature_Fiction.php" target="_blank" >&rarr;</a>
					</div>
					<img src="images/Lit_Fic.jpg"/>
				</div>
				<div class="view">
<div class="text_display">
            <h>Children And Teens</h>
        </div>		
					<div class="view-back">
						<span data-icon="A">987</span>
						<span data-icon="B">130</span>
						<a href="Childrens_Teens.php" target="_blank" >&rarr;</a>
					</div>
					<img src="images/Children.jpg"/>
				</div>
<div class="view">
			<div class="text_display">
            <h>Indian Writing</h>
        </div>		<div class="view-back">
						<span data-icon="A">987</span>
						<span data-icon="B">130</span>
						<a href="Indian_Writing.php" target="_blank" >&rarr;</a>
					</div>
					<img src="images/Indian_Writing.jpg">
				</div>
<div class="view">
<div class="text_display">
            <h>School Books</h>
        </div>		
  	<div class="view-back">
						<span data-icon="A">987</span>
						<span data-icon="B">130</span>
						<a href="School_Books.php" target="_blank" >&rarr;</a>

  
					</div>
            
					<img src="images/School_Book.jpg"/>

				</div></div>
			</div>
        </div>
		<script type="text/javascript">	
			
			Modernizr.load({
				test: Modernizr.csstransforms3d && Modernizr.csstransitions,
				yep : ['http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','js/jquery.hoverfold.js'],
				nope: 'css/fallback.css',
				callback : function( url, result, key ) {
						
					if( url === 'js/jquery.hoverfold.js' ) {
						$( '#grid' ).hoverfold();
					}

				}
			});
				
		</script>
    </body>
</html>
