<?php
	require('route.class.php');

	route::get('manga',function(){ echo "manga"; });
	route::get('',function(){ echo "manga"; });
	route::get('manga/manga6',function(){ echo "manga6"; });
	/*
	*parametre alan bölümler {} ile belirtilir.
	*Kullanımı Laravel route sistemine benzer.
	*Geliştirilecektir.
	*/
	Route::get('manga2/manga3/{id1}/{id2}',function($isim,$isim2){ echo "manga3:<br>".$isim."<br>".$isim2; });
	Route::get('manga2/{id1}/{id2}',function($isim,$isim2){ echo "<br>".$isim."<br>".$isim2; });

	Route::get('class','class1@method1');
	Route::get('123/456/7910',function(){ echo "sayilar"; });
	Route::get('form',function(){
		echo '<form action="form_submit" method="post"><input type="text" name="asd" value="manga">

		<input type="submit"></form>';
	});
	Route::post('form_submit',function(){ echo $_POST["asd"]; });
	Route::error();

?>