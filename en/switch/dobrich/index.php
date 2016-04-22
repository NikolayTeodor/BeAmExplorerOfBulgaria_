<h2 style="margin:10px;"><big>Dobrich</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/dobrich_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Balchik Palace</h3>
Architectural park complex "The Palace" is a complex villas and other buildings located on the Black Sea.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Balchik Palace
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
                var distanceKM = computeDistance(position.coords, balchik_dvorec);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
</tr>
<tr>
<td>
<img src="../img/dobrich_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Kaliakra</h3>
Kaliakra is a long and narrow cape on the northern Bulgarian Black Sea coast. The nose is recessed to 2 km into the sea and resembles Peninsula is a natural and archeological reserve.</td>
</tr>
<table>