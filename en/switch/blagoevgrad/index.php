<h2 style="margin:10px;"><big>Blagoevgrad</big></h2>
<table class="info" >
<tr>
<td>
<img src="../../img/blagoevgrad_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Top Vihren</h3>
With its 2914m top Vihren is the highest in Pirin and second in Bulgaria. Average years rainings are 1150mm and snow coverage can be 3m. The lowest temperature is -25, and the highest - 23.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Distance to the Top Vihren
</div>        
<div id="myDistance" style="text-align: right;">
</div>
<div>
</div></font><script>   function displayMyLocation(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var positionDiv = document.getElementById("myLocation");
				
                
                
                console.log(position.coords);
                var distanceKM = computeDistance(position.coords, vihren);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "km";
            }</script>
            <tr>

<td>
<img src="../img/blagoevgrad_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Rojen monastery</h3>
Rojen monastery “Sveto Rojdenstvo Bogorodichno” is the biggest monastery in Pirin Macedonia and is from some medieval Bulgarian monasteries. They are fairly preserved.</td>
</tr>
<table>