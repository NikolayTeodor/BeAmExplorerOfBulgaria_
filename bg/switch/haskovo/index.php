<h2 style="margin:10px;"><big>Хасково</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/haskovo_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Мезешка гробница</h3>
Мезешката гробница е тракийска куполна гробница от микенски тип датирана от 4-3 в. пр. Хр. Намира се в покрайнините на село Мезек, община Свиленград, в могилата „Мелтепе“. Това е една от най-големите тракийски гробници в България.
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Мезешката гробница
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
				distanceDiv.innerHTML =n + "км";
            }</script>
<tr>
<td>
<img src="../img/haskovo_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Крепост "Свети Дух"</h3>
Крепостта „Свети дух“ се намира на хълма Св. Дух в Минерални бани.Това е крепост, преживяла 4 строителни периода: римски, късноримски, ранновизантийски и средновековен. Крепостта има неправилна многостранна форма.
</td>
</tr>
<table>