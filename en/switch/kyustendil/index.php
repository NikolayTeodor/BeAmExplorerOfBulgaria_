<h2 style="margin:10px;"><big>Kyustendil</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/kyustendil_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Rila monastery</h3>
The Rila Monastery is a monastery located in Southeastern Bulgaria, Kyustendil, Rila Municipality. It was founded in the tenth century by St. Ivan Rilski. In the upper flow of the Rila river.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Rila monastery
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
                var distanceKM = computeDistance(position.coords, rilski_manastir);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/kyustendil_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Seven lakes of Rila</h3>
Seven Lakes of Rila is a group of glacial lakes located in the Rila Mountain. This is the most visited by tourists lake group in Bulgaria ad one of the hundred national tourist sites. The lakes are located in Damgskiya share of Northwestern Rila and are stepwise between 2095 and 2535 m asl.</td>
</tr>
<table>