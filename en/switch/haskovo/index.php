<h2 style="margin:10px;"><big>Haskovo</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/haskovo_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Mezeshka tomb</h3>
Mezeshkata Tomb Thracian tomb from the Mycenaean type dated from 4-3 in. BC. BC. Located on the outskirts of the village of Mezek, Municipality Svilengrad, in the mound "Meltepe." This is one of the largest Thracian tombs in Bulgaria.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Mezeshka tomb
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
                var distanceKM = computeDistance(position.coords, mezeshka_grobnica);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/haskovo_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Fortress Holy Spirit</h3>
Fortress "Holy Spirit" is located on Mount St. Bani.Tova spirit in Mineral is a fortress, survived four construction periods: Roman, late Roman, early Byzantine and medieval. The castle has an irregular multilateral form.</td>
</tr>
<table>