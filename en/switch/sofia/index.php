<h2 style="margin:10px;"><big>Sofia</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/sofia_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Borovets</h3>
Borovets is the oldest mountain resort in Bulgaria. Dates back to 1896, when General Tantilov built the first villa holiday later Prince Ferdinand built a summer residence. Borovets is the closest to the capital ski resort and is favored by local residents.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Borovets
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
                var distanceKM = computeDistance(position.coords, borovec);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/sofia_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Mountain Musala</h3>
Musala is the highest peak in Bulgaria and the Balkans with a height of 2925,4 m, measured from the level of the port of Varna. Height is seventh place among European peaks. Higher is 8 m away from the peak Mytikas in Mount Olympus, Greece and 11 m away from Vihren in the Pirin Mountains, Bulgaria.</td>
</tr>
<table>