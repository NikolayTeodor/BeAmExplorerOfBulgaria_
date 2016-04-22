<h2 style="margin:10px;"><big>Smolqn</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/smolqn_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Pamporovo</h3>
Pamporovo mountain resort in Bulgaria. It is located inside the Rhodope Mountains at 1650 m altitude at the foot of Mount Snow. Located in the municipality of Smolyan and Chepelare Municipality, a distance of about 220 km from Sofia, 85 km south of Plovdiv, 15 km north of Smolyan and 10 km south of Chepelare.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Pamporovo
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
                var distanceKM = computeDistance(position.coords, pamporovo);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/smolqn_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Devil's Throat</h3>
Devil's Throat cave in the Rhodopes, Devin. The cave is situated 1,5 km north of the village Trigrad in the Trigrad Gorge in the Rhodope Mountains. The name of the cave comes from the shape of the former entrance (now - out), resembling a devil's head.</td>
</tr>
<table>