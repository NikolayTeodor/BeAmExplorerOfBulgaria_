<h2 style="margin:10px;"><big>Razgrad</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/razgrad_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Clock tower</h3>
The Clock tower in Razgrad dating from 1864 was built by Tryavna master Todor Tonchev
On the foundations of an old clock tower, which was demolished because of problems in its construction.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Clock tower
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
                var distanceKM = computeDistance(position.coords, chasovnikova_kula);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/razgrad_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Historical and Archaeological Reserve "Sboryanovo"</h3>
Historical and Archaeological Reserve "Sboryanovo" is located in the municipality of Isperih, in the western part of Ludogorsko plateau. The reserve is located 10 km from Isperih west of Sveshtari and north of the village Small Porovets in the canyon Krapinetz and hills.</td>
</tr>
<table>