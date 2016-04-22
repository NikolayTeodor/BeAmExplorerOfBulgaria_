<h2 style="margin:10px;"><big>Кюстендил</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/kyustendil_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Рилски манастир</h3>
Рилският манастир е манастир, намиращ се в Югозападна България, област Кюстендил, община Рила. Основан е през Х век от св. Иван Рилски, в горното течение на Рилска река.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Рилския манастир
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
                var distanceKM = computeDistance(position.coords, rilski_manastir);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/kyustendil_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Седемте рилски езера</h3>
Седемте рилски езера е група езера с ледников произход, разположена в планината Рила. Това е най-посещаваната от туристи езерна група в България и е един от стоте национални туристически обекта. Езерата се намират в Дамгския дял на Северозападна Рила и са разположени стъпаловидно между 2095 и 2535м н.в.
</td>
</tr>
<table>