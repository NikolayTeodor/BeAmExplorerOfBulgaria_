<h2 style="margin:10px;"><big>Благоевград</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/blagoevgrad_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Връх Вихрен</h3>
Със своите 2914м връх Вихрен е най-високият в Пирин и втори в България. Средните годишни валежи са 1150 мм, а снежната покривка достига 3 м. Най-ниската температура е -25°, а максималната - 23°С.<br>
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до връх Вихрен
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
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/blagoevgrad_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Роженски Манастир</h3>	
Роженският манастир „Свето Рождество Богородично“ е най-големият манастир в Пиринска Македония и е един от няколкото средновековни български манастира, сравнително добре запазени и до днес.
</td>
</tr>
<table>