<h2 style="margin:10px;"><big>Lovech</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/lovech_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Monument of Vasil Levski</h3>
The monument of Vasil Levski in Lovach was opened on May 27, 1964 and is the largest and most impressive monument of Vasil Levski. One of the symbols of the city and is part of the crest for 40 years. Located in the architectural reserve “Varosha”.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to Monument of Vasil Levski
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
                var distanceKM = computeDistance(position.coords, levski_pametnik);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/lovech_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Covered bridge</h3>
The Covered Bridge in Lovech is the bridge over River Osum in Lovech. Connects the new part of the town with the architectural reserve “Varosha”. The only one of its kind on the Balkan.</td>
</tr>
<table>