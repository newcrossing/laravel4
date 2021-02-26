<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>titile</title>

	<link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/assets/fonts/awards/awards.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}"/>

</head>
<body>

<style type="text/css">
    div.square22 {
        width: 100px;
        height: 100px;

        border: #c80d15 solid 5px;
        float: left;
        margin: 5px;
        cursor: pointer;
    }

    div.blue {
        background: blue;
    }

    div.red {
        background: red;
    }

    div.green {
        background: green;
    }

    div.yellow {
        background: yellow;
    }

</style>


<section id="rw-layout" class="rw-layout">

	<!--
	// ===================================^__^=================================== //
	   Header
	// ===================================^__^=================================== //
	-->
	<div class="rw-section rw-header">
		<div class="rw-inner clearfix">
			<div class="grid-container">

				<div class="grid desk-8 mob-6 alpha clearfix">
					<div class="logo-holder">
						<img src="assets/placeholder/logo.png"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/logo.png"
							 class="logo" alt=""/>
					</div>
					<nav id="the-main-menu" class="main-menu-nav menu-inline" data-breakpoint="1160">
						<ul class="menu horizontal">
							<li><a href="/">Главная</a></li>
							<li><a href="/post">Статьи</a></li>


						</ul>
					</nav>
				</div>


			</div> <!-- .grid-container -->
		</div> <!-- .rw-inner -->
	</div> <!-- .rw-header -->

	<!--
	// ===================================^__^=================================== //
	   Content
	// ===================================^__^=================================== //
	-->
	<div class="rw-section rw-container right-sidebar">
		<div class="rw-inner clearfix ">


			<!-- Main content -->

			<div style="width: 500px; align-content: center" class="eeee">


				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
				<div class="square22 "></div>
			</div>
		</div> <!-- .rw-inner -->
	</div> <!-- .rw-container -->

	<!--
	// ===================================^__^=================================== //
	   Footer
	// ===================================^__^=================================== //
	-->
	<div class="rw-section rw-footer">
		<div class="rw-inner clearfix">
			<div class="grid-container">

				<div class="grid desk-6">

				</div>

				<div class="grid desk-6">
					<div class="footer-menu">

						Минаева Анна

					</div>
				</div>

			</div>
			<a href="#rw-layout" class="footer-to-top" title="Go to top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>
	</div> <!-- .layout-footer -->

</section><!-- .rw-layout -->

<!-- Javascript -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="{{ asset('/assets/js/min/smk-menu.min.js') }}"></script>
<script src="{{ asset('/assets/js/rw-sidebar.js') }}"></script>
<script src="{{ asset('/assets/js/rw-sidebar.js') }}"></script>
<script src="{{ asset('/assets/js/min/jquery.qtip.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/smk-accordion.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/smk-visual-select.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.js') }}"></script>

<script language="JavaScript">
    $(document).ready(function () {
        var arrColor = [
            "blue",
            "red",
            "yellow",
            "green",
            "blue",
            "red",
            "yellow",
            "green",
            "blue",
            "red",
            "yellow",
            "green",
            "blue",
            "red",
            "yellow",
            "green"
        ];
        var rand;

        $('.square22').on('click', function () {
            rand = Math.floor(Math.random() * arrColor.length);
            $(this).addClass(arrColor[rand]);
             arrColor.splice([rand], 1);
            //alert(rand+'   '+arrColor.length);
        });
    });

</script>
</body>
</html>
