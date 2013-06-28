<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta charset="UTF-8">
		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-pcRY1ddJccibC3RgxzvgTRIRG7Vwjk0&sensor=false"></script>
		<style>
		
			
			
p {
    margin: 0;
    font-size: 12px;
}
h4 {
    margin: 0;
}
.span9, .span12 {
    margin-left: 0;
}
.span6 {
    padding: 0 0 0 10px;
    margin-left: 0;
    width: 606px;
    border:0px solid #000;
    border-top: none;
    border-bottom: none;
    background-color: #ee0;
    height: 40px;
}
.arrTitle {
    width: inherit;
}
.wrapper {
    width: 620px;
    background-color: #000;
    height: auto;
    overflow: hidden;
    margin: 20px auto;
    border: 2px solid #000;
    border-radius: 12px;
}
#title {
    width: 355px;
    float:left;
    padding: 0px 10px;
    vertical-align: middle;
    font-size: 54px;
    background-color: rgb(8, 76, 141);
    color: #fff;
    margin:0;
    height: 100px;
    padding-top: 50px;
}
.row-fluid .span6 {
    width: 100%;
    padding-left: 12px;
}
#container {
    height: inherit;
	clear: both;
}
.span12 h3 {
    background-color: #000;
    padding-left: 12px;
    color: #fff;
    margin: 0;
    width: 100%;
    height:36px;
    border-top: 4px solid rgb(209, 68, 20);
}
#map-canvas {
    height: 150px;
    width: 245px;
    overflow:hidden;
    margin: 0;
}
.tmGr {
    color: rgb(107, 180, 69)
}
.tmOr {
    color: rgb(209, 68, 20);
}
ul.arrivals {
    list-style-type: none;
    margin: 0 0;
    padding: 0;
    float: left;
    width: 100%;
}

#arrTitle {
    width: 104px;
    float: left;
}
#timeUpdated {
    width: 300px;
    float: left;
    font-size: 10px;
    height: 30px;
    border-top: 4px solid rgb(209, 68, 20);
    line-height: 30px;
    padding-left: 10px;
    font-weight: bold;
	clear: right;
}
			
			
			
			
		</style>


	</head>
	<body>
<div class="wrapper">
    <div class="row-fluid">
         <h1 id="title"><span class="tmGr" >get</span>Tri<img src="https://si0.twimg.com/profile_images/1752577471/trimet-logo-iphone_normal.png" />Met<span class="tmOr" >JS</span></h1>

        <div id="map-canvas" class="span2"></div>
    </div>
    <div class="span12">
        <h3 id="arrTitle">Arrivals</h3><p id="timeUpdated"></p>

        <div id="container" class="title"></div>
    </div>
</div>
		<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/getTrimetBus.js"></script> 
		<script type="text/javascript" src="scripts/makeMap.js"></script>
	</body>
</html>