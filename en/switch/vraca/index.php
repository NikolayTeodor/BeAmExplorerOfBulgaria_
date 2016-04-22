<h2 style="margin:10px;"><big>Vratsa</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/pic9.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Ledenika</h3>
"Ledenika" is the name of a cave in the Balkan Mountains, Vratsa, Bulgaria. Ledenika Cave is situated 16 km from the town of Vratsa, within the natural park Vratsa Balkan, located at 830 meters above sea level in northwest - Stresherski of Vratsa Mountain.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Ledenika
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
                var distanceKM = computeDistance(position.coords, ledenika);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/vraca2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Ogosta</h3>
Ogosta River in Northwestern Bulgaria, Montana and Vratsa, a tributary of the Danube. Its length is 141.1 km, which puts it 17th place among the rivers of Bulgaria.
</td>
</tr>
<table>