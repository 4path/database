<?php  
		$connect = mysqli_connect('127.0.0.1','root','','Database');
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<!--Head-->
	<div class="col-12">
		<div style="height: 60px; background-color: #404044; padding-top: 1px;">
			<div style="height: 30px; width: 300px; margin-left: 1600px; border-left: 2px solid white; margin-top: 15px;">
				<a href=""><img style="height: 30px; width: 42px; margin-left: 10px" src="photos/1.png"></a>
				<a href="https://discord.gg/amPFcaBr"><img style="height: 30px; width: 40px;margin-left: 10px" src="photos/2.png"></a>
				<a href=""><img style="height: 30px; width: 40px;margin-left: 10px" src="photos/3.png"></a>
				<a href=""><img style="height: 30px; width: 30px;margin-left: 10px" src="photos/4.png"></a>
				<a href=""><img style="height: 30px; width: 20px;margin-left: 10px" src="photos/5.png"></a>
			</div>
		</div>
		<div style=" height: 120px; display: flex">
			<div style="height: 90px;width: 90px; background-color: red"></div>
				<div style="height: 25px; width: ">
					<a style="font-size: 50px; text-decoration: none;text-align: center;font-family: Montserrat, sans-serif;color: #545454;font-weight: bold;" class="" href="index.php">главное</a>
					<a  style="font-size: 50px; text-decoration: none;text-align: center;font-family: Montserrat, sans-serif;color: #545454;font-weight: bold;" class="" href="aboutus.php">о нас</a>
					<a  style="font-size: 50px; text-decoration: none;text-align: center;font-family: Montserrat, sans-serif;color: #545454;font-weight: bold;" class="" href="test.php">тесты</a>
				</div>
			<img style="height: 30px; width: 30px; margin-left: 1000px;margin-top: 45px; " src="photos/23.png">
			<input style="height: 60px;width: 150px;margin: 10px 0;border: unset;border-bottom: 2px solid #e3e3e3;outline: none; border-radius: 8px; margin-top: 30px;" type="" name="" placeholder="Поиск по сайту">
		</div>
		<!--Main Content-->
		<div style="background-color: #c9c9c9 ;height: 1200px">
			<div>
				<div class="mx-auto" style="height: 50px;width: 700px; border-bottom: 2px solid black"><h1 style="text-align: center;font-family: Montserrat, sans-serif;color: black;font-weight: bold;">Что такое цифровая грамотность?</h1></div>
				<p style="color: #4a4949">это умение понимать и использовать информацию, предоставленную во множестве разнообразных форматов и широкого круга источников с помощью компьютеров</p>
			</div>
				<h1 style="text-align: center;font-family: Montserrat, sans-serif;color: black;font-weight: bold;">Полезные статьи:</h1>
			<div style="height: 300px; width: 1500px;margin-top: 200px;" class="row mx-auto">
				<div style="background-color: red; height: 350px; width: 400px;margin-left: 50px;"></div>
				<div style="background-color: red; height: 350px; width: 400px;margin-left: 50px;"></div>
				<div style="background-color: red; height: 350px; width: 400px;margin-left: 50px;"></div>
			</div>
			<div style="height: 300px; width: 1500px; margin-top: 100px;" class="row mx-auto">
				<div style="background-color: red; height: 350px; width: 400px;margin-left: 50px;"></div>
				<div style="background-color: red; height: 350px; width: 400px;margin-left: 50px;"></div>
				<div style="background-color: red; height: 350px; width: 400px;margin-left: 50px;"></div>
			</div>
		</div>
		<!--Info-->
		<div style="background-color: #404044; height: 500px;">
			<div class="row mx-auto">
				<div style="; margin-left: 390px; height: 270px; width: 260px; margin-top: 60px;">
					<p  style="text-align: center;font-family: Montserrat, sans-serif; color: #BCBEC2; font-weight: bold">DATABASE</p>
					<p style="font-family: Montserrat, sans-serif;text-align: center; text-decoration: none;color: #81858F;">это</p>
				</div>
				<div style=" margin-left: 60px; height: 270px; width: 260px; margin-top: 60px;">
					<p style="text-align: center;font-family:system-ui; color: #BCBEC2; font-weight: bold">CONTACT INFO</p>
					 <p style="font-family: Montserrat, sans-serif;;text-align: center; text-decoration: none;color: #81858F;">Russian Federation, Yakutsk</p>
					 <p style="font-family: Montserrat, sans-serif;;text-align: center; text-decoration: none;color: #81858F;">+1 800 123 45 67</p>
					 <p style="font-family: Montserrat, sans-serif;;text-align: center; text-decoration: none;color: #81858F;">+1 850 153 65 66</p>

					<p style="font-family: Montserrat, sans-serif;;text-align: center; text-decoration: none;color: #81858F;">itsahality@gmail.com</p>
				</div>
				<div style=" margin-left: 45px; height: 270px; width: 100px; margin-top: 60px;">
					<p class="Main-links">QUICKLINKS</p>
					<a class="links" href="">Главное</a>
					<a class="links" href="">О нас</a>
					<a class="links" href="">Сервисы</a>
					<a class="links" href="">Блог</a>
					<a class="links" href="">Контакты</a>
				</div>
				<div style="margin-left: 70px; height: 270px; width: 350px; margin-top: 60px;">
					<p class="Main-links">NEWSLETTER</p>
					<input style="margin: 10px 0; padding: 10px;border: unset;border-bottom: 2px solid #e3e3e3;outline: none; margin-left: 70px; border-radius: 8px;" type="" name="" placeholder="Ваша email почта">
					<p class="links">Будьте первыми, кто узнает о наших последних новостях, обновлениях и специальных предложениях</p>
				</div>
			</div>
			<div style="height: 100px; width: 1200px; margin-top: 70px;" class="border-top mx-auto">
				<p style="font-family: Montserrat, sans-serif;text-align: left; text-decoration: none;color: #81858F; font-size: 15px; margin-top: 10px;">© 2021. All Rights Reserved. Design by Designer</p>
			</div>
		</div>
	</div>
</body>
</html>
