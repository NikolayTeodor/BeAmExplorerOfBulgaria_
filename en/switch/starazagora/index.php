<h2 style="margin:10px;"><big>Stara Zagora</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/starazagora_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Kazanlak Tomb</h3>
Thracian Tomb of Kazanlak is a round brick tomb, which is located in the town and is part of a larger necropolis, located near the ancient capital of the kingdom Odrysian Sevtopolis.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Kazanlak Tomb
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
                var distanceKM = computeDistance(position.coords, kazanlyshka_grobnica);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/starazagora_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Museum "Neolithic dwellings"</h3>
The museum "Neolithic dwellings" is located in the town of Stara Zagora and contains findings that are of great importance for the history of mankind. The museum exhibited two houses from the Neolithic era, which dates from VI millennium. BC. and the best preserved in Europe of this period. Both homes were suddenly burned thousands of years ago, which is the main reason to be so well preserved.</td>
</tr>
<table>