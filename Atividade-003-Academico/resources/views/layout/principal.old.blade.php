<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistema Academico</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			body {
			  font: 20px Montserrat, sans-serif;
			  line-height: 1.8;
			  color: #f5f6f7;
			}
			p {font-size: 16px;}
			.margin {margin-bottom: 45px;}
			.bg-1 { 
			  background-color: #1abc9c; /* Green */
			  color: #ffffff;
			}
			.bg-2 { 
			  background-color: #474e5d; /* Dark Blue */
			  color: #ffffff;
			}
			.bg-3 { 
			  background-color: #ffffff; /* White */
			  color: #555555;
			}
			.bg-4 { 
			  background-color: #2f2f2f; /* Black Gray */
			  color: #fff;
			}
			.container-fluid {
			  padding-top: 70px;
			  padding-bottom: 70px;
			}
			.navbar {
			  padding-top: 15px;
			  padding-bottom: 15px;
			  border: 0;
			  border-radius: 0;
			  margin-bottom: 0;
			  font-size: 12px;
			  letter-spacing: 5px;
			}
			.navbar-nav  li a:hover {
			  color: #1abc9c !important;
			}
			a:link{
				color: blue;
			}
			input[type=text]{
				color: black;
			}
			input[type=submit]{
				color: black;
			}
		</style>
	</head>
    <body>
        @include('layout.topo')
		<div class="container-fluid bg-1 text-center">
			@yield('conteudo')
		</div>
		@include('layout.footer')
    </body>
</html>
