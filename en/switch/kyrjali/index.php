<h2 style="margin:10px;"><big>Kyrdzhali</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/kyrjali_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Perperikon</h3>
Perperikon is an archeological complex in the Eastern Rhodopes, consisting of a large megalithic sanctuary from 8000 years ago during the Stone Age monuments from antiquity and the medieval fortress.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Perperikon
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
                var distanceKM = computeDistance(position.coords, perperikon);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/kyrjali_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Kardzhali pyramids</h3>
Kardzhali pyramids are rock formations located east of the town of Karzhali. The pyramids are located on hills Kaiadzhik and Chukata in Eastern Rhodopes. They are one of the most visited by tourists rock pyramids in Bulgaria. They are formed nearly 40 milion years ago, when the Eastern Rhodopes were bottom of a sea.</td>
</tr>
<table>