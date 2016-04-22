<h2 style="margin:10px;"><big>Varna</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/varna_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Park museum “Vladislav Varnenchik”</h3>
Park museum "Vladislav Varnenchik" in Varna was established in 1924 as a place of death of the fallen soldiers at the Battle of Varna, held in 1444.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Park museum “Vladislav Varnenchik”
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
                var distanceKM = computeDistance(position.coords, park_muzey_vladislavvarnenchik);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
</tr>
<tr>
<td>
<img src="../img/varna_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Fortress Ovech</h3>
Fortress Ovech is situated east of the present-day town of Provadia. It is situated on a mountain plateau above the town bearing the name " Citadel".</td>
</tr>
<table>