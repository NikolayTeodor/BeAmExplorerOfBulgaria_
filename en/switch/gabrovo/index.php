<h2 style="margin:10px;"><big>Gabrovo</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/gabrovo_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Etar</h3>
Etar is open-air museum in the eponymous district of Gabrovo. It represents a reconstruction of the Bulgarian customs, culture and craftsmanship. It is the first museum of its kind in Bulgaria. Inaugurated on September 7, 1964 The museum is located 8 km south of the main part of Gabrovo.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Etar
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
                var distanceKM = computeDistance(position.coords, etar);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
<tr>
<td>
<img src="../img/gabrovo_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Sokolski Monastery</h3>
Gabrovo's Sokolski Monastery "Assumption" is acting mixed Monastery of the Bulgarian Orthodox Church, located in northern Bulgaria, near Gabrovo. The monastery was founded in early 1833 by Joseph Sokolski.</td>
</tr>
<table>