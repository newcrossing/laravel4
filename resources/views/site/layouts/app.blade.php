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

							 class="logo" alt=""/>
					</div>
					<nav id="the-main-menu" class="main-menu-nav menu-inline" data-breakpoint="1160">
						<ul class="menu horizontal">
							<li><a href="/">Главная</a></li>
							<li><a href="/post">Статьи</a></li>

							<li>
								<a href="blog.php.htm">Блог</a>
								<ul class="sub-menu">
									<li><a href="single-blog.php.htm"
										>Blog
											single</a></li>
								</ul>
							</li>
							<li>
								<a href="recipe-tag-index.php.htm"
								>Index</a>
								<ul class="sub-menu">
									<li><a href="recipe-tag-index.php.htm"
										>Tags</a>
									</li>
									<li><a href="recipe-ingredients.php.htm"
										>Ingredients</a>
									</li>
								</ul>
							</li>
							<li><a href="forums.php.htm"
								>Forums</a></li>
							<li><a href="requests.php.htm"
								>Requests</a>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="members.php.htm"
										>Members</a>
									</li>
									<li><a href="public-collections.php.htm"
										>Public
											collections</a></li>
									<li><a href="help-faq.php.htm"
										>Help:
											FAQ</a></li>
									<li><a href="help-ask-question.php.htm"
										>Help:
											Ask question</a></li>
									<li><a href="help-all-questions.php.htm"
										>Help:
											All questions</a></li>
									<li><a href="404.php.htm"
										>404 page</a>
									</li>
									<li>
										<a href="#">Next sub menu</a>
										<ul class="sub-menu">
											<li><a href="#">Test this</a></li>
											<li><a href="#">Test this</a></li>
											<li><a href="#">Test this</a></li>
											<li>
												<a href="#">Menu2</a>
												<ul class="sub-menu">
													<li><a href="#">Test this</a></li>
													<li><a href="#">Test this</a></li>
													<li><a href="#">Test this</a></li>
													<li>
														<a href="#">Next sub menu3</a>
														<ul class="sub-menu">
															<li><a href="#">Test this</a></li>
															<li><a href="#">Test this</a></li>
															<li><a href="#">Test this</a></li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="page-sidebar-right.php.htm"
										>Page
											sidebar right</a></li>
									<li><a href="page-sidebar-left.php.htm"
										>Page
											sidebar left</a></li>
								</ul>
							</li>
							<li>
								<a href="elem-colors.php.htm"
								>More</a>
								<ul class="sub-menu">
									<li><a href="elem-colors.php.htm">Colors</a>
									</li>
									<li><a href="elem-buttons.php.htm"
										>Buttons</a>
									</li>
									<li><a href="elem-typography.php.htm">Typography</a>
									</li>
									<li><a href="elem-form.php.htm"
										>Form</a>
									</li>
									<li><a href="elem-accordion.php.htm"
										>Accordion</a>
									</li>
									<li><a href="elem-grid.php.htm"
										>Grid
											system</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				@auth
					<div class="grid desk-4 mob-6 omega">
						<nav id="the-user-menu" class="main-menu-nav">
							<ul class="menu horizontal align-right">

								<!-- Notifications -->
								<li class="to-left-more">
									<a href="profile-notifications.php.htm"

									   class="menu-single-icon">
										<i class="fa fa-bell"></i>
									</a>
									<ul class="sub-menu user-notes">

										<li>
											<div class="note">
												<div class="user-message">
													<img src="assets/placeholder/people/50x50/3.jpg"

														 class="avatar" alt=""/>
													<div class="username"><a href="#">Jeff Mitchell</a> on <a href="#">Chicken
															Salad with...</a></div>
													<div class="message">"Elit, sed do eiusmod tempor incididunt..."
													</div>
													<div class="date">28 jan 2014</div>
													<i class="fa fa-comment-o type"></i>
												</div>
											</div>
											<div class="note">
												<div class="user-message">
													<img src="assets/placeholder/people/50x50/4.jpg"

														 class="avatar" alt=""/>
													<div class="username"><a href="#">Michelle Nelson</a> followed you
													</div>
													<div class="date">28 jan 2014</div>
													<i class="fa fa-check-square-o type"></i>
												</div>
											</div>
											<div class="note">
												<div class="user-message">
													<img src="assets/placeholder/people/50x50/5.jpg"

														 class="avatar" alt=""/>
													<div class="username"><a href="#">Steven Martinez</a> liked <a
																href="#">Spicy
															Rapid Roast Chicken</a></div>
													<div class="date">28 jan 2014</div>
													<i class="fa fa-thumbs-o-up type"></i>
												</div>
											</div>
											<div class="note">
												<div class="user-message">
													<img src="assets/placeholder/people/50x50/8.jpg"

														 class="avatar" alt=""/>
													<div class="username"><a href="#">Daniel Thompson</a> added to
														favorites
														<a href="#">Creamy Shrimp and Broccoli Fettuccine</a></div>
													<div class="date">28 jan 2014</div>
													<i class="fa fa-heart-o type"></i>
												</div>
											</div>
											<div class="note">
												<div class="user-message">
													<img src="assets/placeholder/people/50x50/19.jpg"

														 class="avatar" alt=""/>
													<div class="username"><a href="#">Maria Bello</a> added <a href="#">Chicken
															and Rice Casserole</a> to the collection <a href="#">Special
															recipes</a></div>
													<div class="date">28 jan 2014</div>
													<i class="fa fa-bookmark-o type"></i>
												</div>
											</div>
										</li>

										<li class="go-to-all"><a href="profile-notifications.php.htm"
											>View
												all notifications</a></li>
									</ul>
								</li>

								<!-- Messages -->
								<li class="to-left-more">
									<a href="profile-private-messages.php.htm"

									   class="menu-single-icon">
										<i class="fa fa-envelope"></i>
										<span class="new-info">2</span>
									</a>
									<ul class="sub-menu user-notes">
										<li>
											<div class="note">
												<a href="#">
													<div class="user-message">
														<img src="assets/placeholder/people/50x50/22.jpg"

															 class="avatar" alt=""/>
														<div class="username">Steven Martinez</div>
														<div class="message">"Hello, I need help regarding your
															recipe..."
														</div>
														<div class="date">5 minutes ago</div>
														<i class="fa fa-envelope-o type"></i>
													</div>
												</a>
											</div>
											<div class="note">
												<a href="#">
													<div class="user-message">
														<img src="assets/placeholder/people/50x50/21.jpg"

															 class="avatar" alt=""/>
														<div class="username">Michelle Nelson</div>
														<div class="message">"Elit, sed do eiusmod tempor incididunt..."
														</div>
														<div class="date">5 days ago</div>
														<i class="fa fa-envelope-o type"></i>
													</div>
												</a>
											</div>
											<div class="note">
												<a href="#">
													<div class="user-message">
														<img src="assets/placeholder/people/50x50/1.jpg"

															 class="avatar" alt=""/>
														<div class="username">Jeff Mitchell</div>
														<div class="message">"Elit, sed do eiusmod tempor incididunt..."
														</div>
														<div class="date">28 jan 2014</div>
														<i class="fa fa-envelope-o type"></i>
													</div>
												</a>
											</div>
											<div class="note">
												<a href="#">
													<div class="user-message">
														<img src="assets/placeholder/people/50x50/11.jpg"

															 class="avatar" alt=""/>
														<div class="username">Daniel Thompson</div>
														<div class="message">"Quis nostrud exercitation ullamco..."
														</div>
														<div class="date">28 jan 2014</div>
														<i class="fa fa-envelope-o type"></i>
													</div>
												</a>
											</div>
										</li>

										<li class="go-to-all"><a href="profile-private-messages.php.htm"
											>View
												all messages</a></li>
									</ul>
								</li>

								<!-- Submission -->
								<li class="to-left-more">
									<a href="#" class="menu-single-icon"><i class="fa fa-plus"></i></a>
									<ul class="sub-menu">
										<li><a href="submit-recipe.php.htm"
											>Submit
												recipe</a></li>
										<li><a href="submit-request.php.htm"
											>Request
												a recipe</a></li>
										<li><a href="submit-forum-topic.php.htm"
											>New
												forums topic</a></li>
									</ul>
								</li>


								<!-- User menu -->
								<li class="to-left-more">
									<div class="user-details-in-menu">
										<a href="profile.php.htm"

										   class="avatar"><img src="assets/placeholder/people/50x50/2.jpg"

															   alt=""/></a>
									</div>
									<ul class="sub-menu">
										<li><a href="profile.php.htm"
											>Public
												Profile</a></li>
										<li class="separator"><a href="profile-requests.php.htm"
											>Requests</a>
										</li>
										<li><a href="profile-collections.php.htm"
											>Collections</a>
										</li>
										<li><a href="profile-favorites.php.htm"
											>Favorites</a>
										</li>
										<li class="separator"><a href="profile-likes.php.htm"
											>Likes</a>
										</li>
										<li><a href="profile-reputation.php.htm"
											>Reputation</a>
										</li>
										<li class="separator"><a href="profile-followers.php.htm"
											>Followers</a>
										</li>
										<li><a href="profile-notifications.php.htm"
											>Notifications</a>
										</li>
										<li><a href="profile-private-messages.php.htm"
											>Private
												Messages</a></li>
										<li class="separator"><a href="#">Settings</a></li>
										<li><a href="#">Sign Out</a></li>
									</ul>
								</li>

							</ul>
						</nav>
					</div>
				@endauth


			</div> <!-- .grid-container -->
		</div> <!-- .rw-inner -->
	</div> <!-- .rw-header -->

	<!--
	// ===================================^__^=================================== //
	   Content
	// ===================================^__^=================================== //
	-->
	<div class="rw-section rw-container right-sidebar">
		<div class="rw-inner clearfix">


			<!-- Sidebar  -->
		@section('sidebar')

		@show

		<!-- Main content -->
			@yield('content')

		</div> <!-- .rw-inner -->
	</div> <!-- .rw-container -->


	@include('site.pages.footer')


</section><!-- .rw-layout -->

<!-- Javascript -->
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script src="{{ asset('/assets/js/library/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/smk-menu.min.js') }}"></script>
<script src="{{ asset('/assets/js/rw-sidebar.js') }}"></script>
<script src="{{ asset('/assets/js/rw-sidebar.js') }}"></script>
<script src="{{ asset('/assets/js/min/jquery.qtip.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/smk-accordion.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/smk-visual-select.min.js') }}"></script>
<script src="{{ asset('/assets/js/min/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.js') }}"></script>
</body>
</html>
