<h2 style="margin:10px;"><big>Pernik</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/pernik_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Lulin</h3>
Lulin is a mountain in western Bulgaria, at the border between Sofia City, Sofia and Pernik region is part of Zavala-Plana mountain range of middle forest.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Lulin
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
                var distanceKM = computeDistance(position.coords, lyulin);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/pernik_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Black Peak</h3>
Black Peak is 2 290 m and is the highest point of mountain Vitosha.</td>
</tr>
<table>