<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>COSCUP 2016 Laravel 部署工作坊 - todo 範例程式</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<style>
		body {
			font-family: 'Raleway';
			margin-top: 25px;
		}

		button .fa {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}

		.form-inline {
			display: inline;
		}

		.check {
			color: #ccc;
			text-decoration: line-through;
		}
	</style>

	<script>
		$(function () {
			$('#task-name').focus();
		});
	</script>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="#">Task 清單</a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>
				</div>
			</div>
		</nav>
	</div>
	
	@yield('content')

</body>
</html>
