<h2 style="margin:10px;"><big>Plovdiv</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/plovdiv_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Monument to the compound</h3>
Monument to the compound is an imposing 12-meter figure sculptor Velichko Minekov. It was erected in 1985 and represents the unification of Bulgaria. The two outstretched wings of a bird symbolize the unity of the two forcibly separated parts of the country in the years from 1878 to 1885.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to Monument to the compound
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
                var distanceKM = computeDistance(position.coords, pametnik_syedinenie);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/plovdiv_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>St. Marina</h3>
"St. Marina" is an Orthodox church in the town of Plovdiv, dedicated to the Saint martyr Marina Antioch. She's metropolitan temple of Plovdiv eparchy. Located on "Dr. Vylkovich" № 7.</td>
</tr>
<table>