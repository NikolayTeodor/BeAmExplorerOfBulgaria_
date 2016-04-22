<h2 style="margin:10px;"><big>Veliko Tyrnovo</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/velikotyrnovo_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Transfiguration Monastery</h3>
Transfiguration Monastery "St . Transfiguration " is a Bulgarian monastery in Veliko Tarnovo diocese.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Transfiguration Monastery
</div>        
<div id="myDistance" style="text-align: right;">
</div>
<div>
</div></font>
<script>   function displayMyLocation(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var positionDiv = document.getElementById("myLocation");
				
                
                
                console.log(position.coords);
                var distanceKM = computeDistance(position.coords, preobrajenski_manastir);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/velikotyrnovo_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Tsarevets</h3>
Tsarevets Fortress is located near the center of Veliko Tarnovo. It was the main Bulgarian fortress during the Second Bulgarian Kingdom (1185 - 1393), when Tarnovo was the capital of the kingdom. In medieval hill on which it is situated, is entirely built with residential and administrative buildings.</td>
</tr>
<table>