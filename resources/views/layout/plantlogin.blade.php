<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../storage/ecocel_images/FaviconLogo.png">

    <title>Login Ecocel</title>
  
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('css/master_style.css')}}">

	<!-- Qixa Admin skins -->
	<link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">	

</head>
<body class="hold-transition login-page">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-lg-4 col-md-8 col-12">
				<div class="login-box bg-img rounded" style="background-image:url(../storage/images/gallery/landscape6.jpg);" data-overlay="5">
				  <div class="login-box-body">
						@yield('login')
				  </div>
				  <!-- /.login-box-body -->
				</div>
				<!-- /.login-box -->
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js')}}"></script>
	
	<!-- popper -->
	<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>
</html>