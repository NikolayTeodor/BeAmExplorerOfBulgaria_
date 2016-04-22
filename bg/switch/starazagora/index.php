<h2 style="margin:10px;"><big>Стара Загора</big></h2>
<table  class="info">
<tr>
<td>
<img src="../img/starazagora_landmark_1.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Казанлъшка гробница</h3>
Тракийската гробница в Казанлък е зидана кръглокуполна гробница, която се намира в Казанлък и е част от голям некропол, разположен в близост до древната столица на Одриското царство Севтополис. 
<font color=#2143bc><div id="myLocation" style="text-align: right; ">
            Разстояние до Казанлъшката гробница
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
				distanceDiv.innerHTML =n + "км";
            }</script> 
<tr>
<td>
<img src="../img/starazagora_landmark_2.jpg" width=300px height=200px >
</td>
<td width=600px>
<h3>Музей „Неолитни жилища”</h3>
Музеят „Неолитни жилища” се намира в град Стара Загора и съдържа находки, които са от огромно значение за историята на човечеството. В музея са експонирани две жилища от новокаменната епоха, които се датират от VІ хил. пр. Хр. и са най-добре запазените в Европа от този период. Двете жилища са били внезапно опожарени преди хилядолетия, което е и основната причина да са така добре съхранени
</td>
</tr>
<table>