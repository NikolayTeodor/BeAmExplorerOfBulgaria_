<h2 style="margin:10px;"><big>Варна</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/varna_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Парк-музей „Владислав Варненчик“</h3>
Парк-музеят „Владислав Варненчик“ във Варна е създаден през 1924 г. като лобно място на загиналите воини при битката при Варна, състояла се през 1444 г.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Парк-музея „Владислав Варненчик“
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
				distanceDiv.innerHTML =n + "км";
            }</script> 
</tr>
<tr>
<td>
<img src="../img/varna_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Крепост Овеч</h3>
Овеч е крепост, намираща се източно от днешния град Провадия. Разположена е на планинско плато над града, носещо името „Калето“.
</td>
</tr>
<table>