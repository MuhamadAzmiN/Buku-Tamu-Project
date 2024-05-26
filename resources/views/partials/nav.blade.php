<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
	<link rel="shortcut icon" href="./images/logo.png">
	<link rel="stylesheet" href="/css/detail.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    

  <body>
	<header>
		<div class="logo" title="University Management System">
			<img src="https://tmssl.akamaized.net/images/foto/galerie/lionel-messi-argentina-world-cup-2022-1669496833-97535.jpg?lm=1669496856" alt="">
			<h2>U<span class="danger">M</span>S</h2>
		</div>
		<div class="navbar">
			<a href="/home" class="{{ $title == "home" ? "active" : "" }}">
                <span class="material-icons-sharp">home</span>
                <h3 >Home</h3>
			@can('admin')
			<a href="/dataSiswa" class="{{ $title == "dataSiswa" ? "active" : "" }}" onclick="timeTableAll()">
				<span class="material-icons-sharp">today</span>
				<h3>Data Siswa</h3>
			</a> 
				
			@endcan
			<a href="/dashboard/absen">
				<span class="material-icons-sharp">grid_view</span>
				<h3>Examination</h3>
			</a>
			<a href="password.html">
				<span class="material-icons-sharp">password</span>
				<h3>Change Password</h3>
			</a>
			
			<form action="/logout" method="post">
				@csrf
				<button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
			</form>
            
		</div>
		<div id="profile-btn">
			<span class="material-icons-sharp">person</span>
		</div>
		<div class="theme-toggler">
			<span class="material-icons-sharp active">light_mode</span>
			<span class="material-icons-sharp">dark_mode</span>
		</div>
		</div>
		
	</header>

		@yield('container')

	


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="/js/timeTable.js"></script>
    <script src="/js/app2.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
</body>
</html>