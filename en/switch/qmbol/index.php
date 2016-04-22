<h2 style="margin:10px;"><big>Qmbol</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/qmbol_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Historical Museum</h3>
The Historical Museum of Yambol is the successor of created over the years museum collections in the city. The first collection dates back to 1886 and it is revealed in three-class boys' school in the city. The museum was officially opened on 02.06.1953, as a "Museum of the revolutionary movement".
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Historical Museum
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
                var distanceKM = computeDistance(position.coords, istoricheski_muzey);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/qmbol_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Art Gallery "George Papazov"</h3>
Art Gallery "George Papazov" - Yambol originated in 1952 as an art department at the Historical Museum. The building of the former synagogue was declared a cultural monument of 11.18.1967 on and adapted to an art gallery in 1979.</td>
</tr>
<table>