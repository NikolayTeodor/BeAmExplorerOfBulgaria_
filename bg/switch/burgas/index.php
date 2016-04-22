<h2 style="margin:10px;"><big>Бургас</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/burgas_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Археологически музей, Несебър</h3>
Несебър(Месемврия) е един от най-старите български градове.Археологическите изследвания и разкопки в несебърския полуостров и района на града през последните четирсет години разкриват изключителни находки от значими паметници на културата, свидетелстващи за богатата история на антична Месемврия и средновековния Несебър.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Археологическия музей
</div>        
<div id="myDistance" style="text-align: right;">
</div>
<div>
</div></font><script>   function displayMyLocation(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var positionDiv = document.getElementById("myLocation");
				
                
                
                console.log(position.coords);
                var distanceKM = computeDistance(position.coords, nesebar_muzey);
                var distanceDiv = document.getElementById("myDistance");
                
				var n = distanceKM.toFixed()
				distanceDiv.innerHTML =n + "км";
            }</script>
</tr>
<tr>
<td>
<img src="../img/burgas_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Църква Христос Пантократор</h3>
Христос Пантократор е православна църква в Несебър, България. Тя е част от Архитектурно-историческия резерват в града.
</td>
</tr>
<table>