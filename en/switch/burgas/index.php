<h2 style="margin:10px;"><big>Burgas</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/burgas_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Archeologist museum, Nesebar</h3>
Nesebar(Mesemvriq) is one of the oldest Bulgarian towns. Archeologists’ researches and dig in Nesebar’s peninsula in the area of the town in the last forty years they discover phenomenal troves from significant monuments of the culture.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Archeologist museum
</div>        
<div id="myDistance" style="text-align: right;">
</div>
<div>
</div></font><script>   function displayMyLocation(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var positionDiv = document.getElementById("myLocation");
				
                
                
                console.log(position.coords);
                var distanceKM = computeDistance(position.coords, nesebar_muzey);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
 </tr>
<tr>
<td>
<img src="../img/burgas_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Church Christ Pantocrator</h3>
Christ Pantocrator is Orthodox church in Nessebar, Bulgaria . It is part of the architectural reserve in the city.
</td>
</tr>
<table>