@extends('frontend.layouts.app')

@section('content')

	<div class="rw-column rw-content">
		<div class="rw-row page-breadcrumb">
			<a href="#">Главная</a> &raquo; <span>Статьи</span>
		</div>
		<div class="rw-row page-title">
			<h1>Статьи</h1>
		</div>
		<div class="rw-row">
			<div class="blog-list">

				@foreach ($posts as $post)
					<div class="post clearfix">
						<div class="entry-details">

							<div class="">
								<h2>
									<a href="/post/{{ $post->id }}"> {{ $post->name }}</a>
								</h2>
							</div>
							<div class="entry-content">
								<div class="grid-container " style="margin-bottom: 5px">
									<div class="left">
										<i class="the-icon fa fa-user"></i>
										<a href="/user/{{ $post->user->id }}">{{ $post->user->login }}</a>
									</div>
									<div class="right">
										<i class="the-icon fa fa-calendar"></i>
										{{ $Carbone->createFromFormat('Y-m-d', $post->date_public)->isoFormat('D MMMM YYYY', 'Do MMMM').' г.' }}
									</div>
								</div>

								{!!   strip_tags(Illuminate\Support\Str::before( $post->text,'<hr />'))   !!}
							</div>
						</div>
					</div>

				@endforeach

				<div class="clear"></div>

			</div> <!-- .blog-list -->

			<!-- пейджинация -->
			{{ $posts->links('vendor.pagination.default') }}


		</div> <!-- .rw-row -->

	</div>
@endsection


@section('sidebar')
	@parent

	<div class="rw-column rw-sidebar">
		<div class="the-sidebar">
		{{--<!-- Widget -->
		<aside class="widget widget-search">

			<div class="widget-title"><h3>Поиск</h3></div>

			<form method="get" class="search-form" action="">
				<input type="text" class="search-field fullwidth" name="s"
					   placeholder="Type keyword and press enter" value="">
			</form>

		</aside> <!-- .widget -->
		<!-- / Widget -->
--}}
		<!-- Widget -->
			<aside class="widget widget-posts">

				<div class="widget-title"><h3>Популярные материалы</h3></div>
				<div class="widget-posts-list">
					<!-- Entry -->
					<div class="post">
						<div class="entry-photo">
							<img src="assets/placeholder/food/50x50/4.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/food/50x50/4.jpg"
								 alt=""/>
						</div>
						<div class="entry-title">
							<a href="#">Consectetur adipisicing elit do eiusmod</a>
						</div>
						<div class="entry-controls minimal">
							<a href="#" class="control entry-to-favorites" title="Add to favorites"> <i
										class="fa fa-heart-o"></i> </a><span class="control-tip">127</span>
							<a href="#" class="control entry-like" title="I like this!"> <i
										class="fa fa-thumbs-o-up"></i> </a> <span class="control-tip">322</span>
							<a href="#" class="control entry-comments" title="Comments"> <i class="fa fa-comments"></i>
							</a> <span class="control-tip">102</span>
						</div>
					</div> <!-- .entry -->

					<!-- Entry -->
					<div class="post">
						<div class="entry-photo">
							<img src="assets/placeholder/food/50x50/7.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/food/50x50/7.jpg"
								 alt=""/>
						</div>
						<div class="entry-title">
							<a href="#">Deliciae superbam praecustodio gualitatibus</a>
						</div>
						<div class="entry-controls minimal">
							<a href="#" class="control entry-to-favorites" title="Add to favorites"> <i
										class="fa fa-heart-o"></i> </a><span class="control-tip">169</span>
							<a href="#" class="control entry-like active" title="I like this!"> <i
										class="fa fa-thumbs-o-up"></i> </a> <span class="control-tip">452</span>
							<a href="#" class="control entry-comments" title="Comments"> <i class="fa fa-comments"></i>
							</a> <span class="control-tip">87</span>
						</div>
					</div> <!-- .entry -->

					<!-- Entry -->
					<div class="post">
						<div class="entry-photo">
							<img src="assets/placeholder/food/50x50/14.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/food/50x50/14.jpg"
								 alt=""/>
						</div>
						<div class="entry-title">
							<a href="#">Glaebam eminentiam destitutus firmare</a>
						</div>
						<div class="entry-controls minimal">
							<a href="#" class="control entry-to-favorites" title="Add to favorites"> <i
										class="fa fa-heart-o"></i> </a><span class="control-tip">127</span>
							<a href="#" class="control entry-like" title="I like this!"> <i
										class="fa fa-thumbs-o-up"></i> </a> <span class="control-tip">322</span>
							<a href="#" class="control entry-comments" title="Comments"> <i class="fa fa-comments"></i>
							</a> <span class="control-tip">102</span>
						</div>
					</div> <!-- .entry -->

					<!-- Entry -->
					<div class="post">
						<div class="entry-photo">
							<img src="assets/placeholder/food/50x50/5.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/food/50x50/5.jpg"
								 alt=""/>
						</div>
						<div class="entry-title">
							<a href="#">Suspicio inncem tantum septima ossibus</a>
						</div>
						<div class="entry-controls minimal">
							<a href="#" class="control entry-to-favorites active" title="Add to favorites"> <i
										class="fa fa-heart-o"></i> </a><span class="control-tip">255</span>
							<a href="#" class="control entry-like" title="I like this!"> <i
										class="fa fa-thumbs-o-up"></i> </a> <span class="control-tip">471</span>
							<a href="#" class="control entry-comments" title="Comments"> <i class="fa fa-comments"></i>
							</a> <span class="control-tip">120</span>
						</div>
					</div> <!-- .entry -->

					<!-- Entry -->
					<div class="post">
						<div class="entry-photo">
							<img src="assets/placeholder/food/50x50/9.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/food/50x50/9.jpg"
								 alt=""/>
						</div>
						<div class="entry-title">
							<a href="#">Incididunt ut labore et dolore magna aliqua</a>
						</div>
						<div class="entry-controls minimal">
							<a href="#" class="control entry-to-favorites" title="Add to favorites"> <i
										class="fa fa-heart-o"></i> </a><span class="control-tip">127</span>
							<a href="#" class="control entry-like" title="I like this!"> <i
										class="fa fa-thumbs-o-up"></i> </a> <span class="control-tip">322</span>
							<a href="#" class="control entry-comments" title="Comments"> <i class="fa fa-comments"></i>
							</a> <span class="control-tip">102</span>
						</div>
					</div> <!-- .entry -->
				</div>

			</aside> <!-- .widget -->
			<!-- / Widget -->

			<!-- Widget -->
		@if ($tags->count())
			<!-- Widget -->
				<aside class="widget widget-categories">
					<div class="widget-title"><h3>Теги</h3></div>
					<ul>
						@foreach ($tags as $tag)
							<li><a href="/tag/{{ $tag->id }}">{{ $tag->name }}
									<span class="mark light-gray">{{ $tag->hits }}</span>
								</a></li>
						@endforeach
					</ul>
				</aside> <!-- .widget -->
				<!-- / Widget -->
		@endif
		<!-- / Widget -->

			<!-- Widget -->
			<aside class="widget widget-authors">

				<div class="widget-title"><h3>Top authors</h3></div>

				<ul>
					<li>
						<img src="assets/placeholder/people/50x50/15.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/15.jpg"
							 alt=""/>
						<div class="author-name"><a href="#">Michelle Nelson</a> <span class="mark green"
																					   title="Pro member!">Pro</span>
						</div>
						<div class="author-meta">
							<span class="meta" title="421 total recipes submited"><i class="fa fa-newspaper-o"></i> 421</span>
							<span class="meta" title="26252 reputation points"><i class="fa fa-bullseye"></i>26k</span>
							<span class="meta" title="350 comments"><i class="fa fa-comments"></i>350</span>
						</div>
					</li>
					<li>
						<img src="assets/placeholder/people/50x50/13.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/13.jpg"
							 alt=""/>
						<div class="author-name"><a href="#">Steven Martinez</a> <span class="mark orange"
																					   title="VIP member!">Vip</span>
						</div>
						<div class="author-meta">
							<span class="meta" title="399 total recipes submited"><i class="fa fa-newspaper-o"></i> 399</span>
							<span class="meta" title="19722 reputation points"><i class="fa fa-bullseye"></i>19k</span>
							<span class="meta" title="330 comments"><i class="fa fa-comments"></i>330</span>
						</div>
					</li>
					<li>
						<img src="assets/placeholder/people/50x50/10.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/10.jpg"
							 alt=""/>
						<div class="author-name"><a href="#">Daniel Thompson</a></div>
						<div class="author-meta">
							<span class="meta" title="297 total recipes submited"><i class="fa fa-newspaper-o"></i> 297</span>
							<span class="meta" title="22803 reputation points"><i class="fa fa-bullseye"></i>22k</span>
							<span class="meta" title="337 comments"><i class="fa fa-comments"></i>337</span>
						</div>
					</li>
					<li>
						<img src="assets/placeholder/people/50x50/20.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/20.jpg"
							 alt=""/>
						<div class="author-name"><a href="#">Sandra Williams</a></div>
						<div class="author-meta">
							<span class="meta" title="249 total recipes submited"><i class="fa fa-newspaper-o"></i> 249</span>
							<span class="meta" title="20024 reputation points"><i class="fa fa-bullseye"></i>20k</span>
							<span class="meta" title="816 comments"><i class="fa fa-comments"></i>816</span>
						</div>
					</li>
				</ul>

			</aside> <!-- .widget -->
			<!-- / Widget -->

			<!-- Widget -->
			<aside class="widget widget-accordion-posts">

				<div class="widget-title"><h3>From the blog</h3></div>

				<!-- Accordion begin -->
				<ul class="jquery_accordion" data-show-icon="false" data-active-index="2">

					<li>
						<div><i class="fa fa-bell"></i> Recent posts</div>

						<div class="widget-posts-list">
							<!-- Entry -->
							<div class="post">
								<div class="entry-photo">
									<img src="assets/placeholder/blog/50x50/4.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/blog/50x50/4.jpg"
										 alt=""/>
								</div>
								<div class="entry-title">
									<a href="#">Consectetur adipisicing elit do eiusmod</a>
								</div>
								<div class="entry-date">13 September 2014</div>
							</div> <!-- .entry -->

							<!-- Entry -->
							<div class="post">
								<div class="entry-photo">
									<img src="assets/placeholder/blog/50x50/5.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/blog/50x50/5.jpg"
										 alt=""/>
								</div>
								<div class="entry-title">
									<a href="#">Consectetur adipisicing elit do eiusmod</a>
								</div>
								<div class="entry-date">27 August 2014</div>
							</div> <!-- .entry -->

							<!-- Entry -->
							<div class="post">
								<div class="entry-photo">
									<img src="assets/placeholder/blog/50x50/6.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/blog/50x50/6.jpg"
										 alt=""/>
								</div>
								<div class="entry-title">
									<a href="#">Consectetur adipisicing elit do eiusmod</a>
								</div>
								<div class="entry-date">05 May 2014</div>
							</div> <!-- .entry -->
						</div>

					</li>

					<li>
						<div><i class="fa fa-heart"></i> Popular posts</div>

						<div class="widget-posts-list">
							<!-- Entry -->
							<div class="post">
								<div class="entry-photo">
									<img src="assets/placeholder/blog/50x50/7.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/blog/50x50/7.jpg"
										 alt=""/>
								</div>
								<div class="entry-title">
									<a href="#">Consectetur adipisicing elit do eiusmod</a>
								</div>
								<div class="entry-date">14 June 2014</div>
							</div> <!-- .entry -->

							<!-- Entry -->
							<div class="post">
								<div class="entry-photo">
									<img src="assets/placeholder/blog/50x50/8.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/blog/50x50/8.jpg"
										 alt=""/>
								</div>
								<div class="entry-title">
									<a href="#">Consectetur adipisicing elit do eiusmod</a>
								</div>
								<div class="entry-date">27 January 2014</div>
							</div> <!-- .entry -->

							<!-- Entry -->
							<div class="post">
								<div class="entry-photo">
									<img src="assets/placeholder/blog/50x50/1.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/blog/50x50/1.jpg"
										 alt=""/>
								</div>
								<div class="entry-title">
									<a href="#">Consectetur adipisicing elit do eiusmod</a>
								</div>
								<div class="entry-date">23 February 2014</div>
							</div> <!-- .entry -->
						</div>

					</li>

					<li>
						<div><i class="fa fa-comment"></i> Latest comments</div>
						<div class="widget-comments-list">
							<div class="comment">
								<div class="entry-photo">
									<img src="assets/placeholder/people/50x50/2.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/2.jpg"
										 alt=""/>
								</div>
								<div>
									<a href="#">Michelle Nelson</a><br>
									Et certamen honestum et disputatio splendida! omnis est enim de dignitate...
								</div>
							</div> <!-- .entry -->

							<div class="comment">
								<div class="entry-photo">
									<img src="assets/placeholder/people/50x50/5.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/5.jpg"
										 alt=""/>
								</div>
								<div>
									<a href="#">Steven King</a><br>
									Great. Thank you for help. :) I'll let you know if there's more.
								</div>
							</div> <!-- .entry -->

							<div class="comment">
								<div class="entry-photo">
									<img src="assets/placeholder/people/50x50/8.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos/assets/placeholder/people/50x50/8.jpg"
										 alt=""/>
								</div>
								<div>
									<a href="#">Richard Thomas</a><br>
									Et certamen honestum et disputatio splendida! omnis est enim de virtutis...
								</div>
							</div> <!-- .entry -->
						</div>

					</li>

				</ul>
				<!-- Accordion end -->

			</aside> <!-- .widget -->
			<!-- / Widget -->

			<!-- Widget -->
			<aside class="widget widget-text">

				<div class="widget-title"><h3>Text widget</h3></div>

				<div class="widget-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
				</div> <!-- .entry -->

			</aside> <!-- .widget -->
			<!-- / Widget -->

		</div> <!-- .the-sidebar -->
	</div> <!-- .rw-sidebar -->
@endsection


