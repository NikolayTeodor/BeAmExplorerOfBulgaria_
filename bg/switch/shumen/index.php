<h2 style="margin:10px;"><big>Шумен</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/shumen_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Музей на Шуменския гарнизон</h3>
Музеят на Шуменския гарнизон е открит през 2003 г. от експозицията на полковите музеи в гарнизона и на базата на музея на военното артилерийско училище. За неговото създаване дългогодишни усилия полага Съюзът на офицерите и сержантите от запаса и резерва от гарнизона.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Музея на Шуменския гарнизон
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
                var distanceKM = computeDistance(position.coords, muzey_shumen_garnizon);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script> 
<tr>
<td>
<img src="../img/shumen_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Къща-музей Панайот Волов</h3>
Това е домът, в който е израснал един от най-обаятелните герои на Българската национална революция − апостолът на Априлското въстание Панайот Волов.
</td>
</tr>
<table>