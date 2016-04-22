<h2 style="margin:10px;"><big>Sliven</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/sliven_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Regional historical museum</h3>
Regional Historical Museum in Sliven is housed in a beautiful building on the main street. It is one of the oldest institutions in Sliven. Founded in 1913 as a community center museum "Zora".
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Regional historical museum
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
                var distanceKM = computeDistance(position.coords, regionalen_istoricheski_muzey_sliven);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script> 
<tr>
<td>
<img src="../img/sliven_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>House museum "Hadji Dimitar”</h3>
One of the most famous tourist sites in Sliven is the house of the legendary voivode Hadji Dimitar. It was built by the grandfather of the famous leader at the end of XVIII century. And is located in Sliven district "Klutsohor."</td>
</tr>
<table>