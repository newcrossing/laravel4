@extends('site.layouts.app')

@section('content')
	<div class="rw-column rw-content">
		<div class="rw-row page-breadcrumb">
			<a href="#">Home</a> &raquo; <span>хлебные крошки</span>
		</div>
		<div class="rw-row page-title">
			<h1> {{ $post->name }}</h1>
		</div>
		<div class="rw-row">


			<div class="blog-single clearfix">
				<div class="entry post">

					<div class="entry-details">
						<i class="the-icon fa fa-user"></i>
						<span class="">
							<a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
						</span>


						<i class="the-icon fa fa-calendar"></i>
						<span class="date">
							{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d') }}
							{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('F ') }}
							{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('Y') }}
						</span>
						<br>
						<br>


						<div class="">
							{{ $post->text }}
						</div>
					</div>
					<div class="clear"></div>

				</div> <!-- .entry -->
			</div>
			<div class="clear"></div>


		</div> <!-- .rw-row -->


		@if (($post->tags()->count()) )
			<div class="rw-row light border-tb">
				<div class="recipe-tags">
					<span class="tags-title">Теги:</span>
					@foreach ($post->tags as $tag)
						<span class="tag"><a href="/tag/{{ $tag->id }}"> {{ $tag->name }}</a></span>
					@endforeach
				</div>
			</div> <!-- .rw-row -->
		@endif

		@if(2>5)
			<div class="rw-row light-gray border-tb">

				<h2>Comments - 7:</h2>
				<ul class="post-comments">

					<!-- Comments level 0 -->
					<li class="comment">
						<div class="comment-avatar">
							<img src="/assets/placeholder/5.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/5.jpg"
								 class="avatar" alt=""/>
						</div>
						<div class="content">
							<div class="comment-header">
								<a href="#">Steven Hall</a><span class="comment-time">28 January 2013</span>
								<div class="comment-vote">
									<div class="control upvote"><i class="fa fa-chevron-up"></i></div>
									<div class="counter">309</div>
									<div class="control downvote"><i class="fa fa-chevron-down"></i></div>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore a ut magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do est
								tempor.</p>
						</div>

						<!-- Comments level 1 -->
						<ul>
							<li class="comment">
								<div class="comment-avatar">
									<img src="/assets/placeholder/6.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/6.jpg"
										 class="avatar" alt=""/>
								</div>
								<div class="content">
									<div class="comment-header">
										<a href="#">Donna Martin</a><span class="comment-time">28 January 2013</span>
										<div class="comment-vote">
											<div class="control upvote active"><i class="fa fa-chevron-up"></i></div>
											<div class="counter">117</div>
											<div class="control downvote"><i class="fa fa-chevron-down"></i></div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore a ut magna aliqua.</p>
								</div>

								<!-- Comments level 2 -->
								<ul>
									<li class="comment">
										<div class="comment-avatar">
											<img src="/assets/placeholder/13.jpg"
												 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/13.jpg"
												 class="avatar" alt=""/>
										</div>
										<div class="content">
											<div class="comment-header">
												<a href="#">Kenneth Clark</a><span
														class="comment-time">28 January 2013</span>
												<div class="comment-vote">
													<div class="control upvote"><i class="fa fa-chevron-up"></i></div>
													<div class="counter negative">-214</div>
													<div class="control downvote"><i class="fa fa-chevron-down"></i>
													</div>
												</div>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore a ut magna aliqua. Ut enim ad
												minim
												veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do est
												tempor.</p>
										</div>
									</li><!-- comment end -->
								</ul>
								<!-- Comments level 2 end -->

							</li><!-- comment end -->
						</ul>
						<!-- Comments level 1 end -->

						<a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>

					</li><!-- comment end -->

					<li class="comment">
						<div class="comment-avatar">
							<img src="/assets/placeholder/18.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/18.jpg"
								 class="avatar" alt=""/>
						</div>
						<div class="content">
							<div class="comment-header">
								<a href="#">Mark Wilson</a><span class="comment-time">28 January 2013</span>
								<div class="comment-vote">
									<div class="control upvote"><i class="fa fa-chevron-up"></i></div>
									<div class="counter">158</div>
									<div class="control downvote active"><i class="fa fa-chevron-down"></i></div>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore a ut magna aliqua tempor.</p>
						</div>

						<ul>
							<li class="comment">
								<div class="comment-avatar">
									<img src="/assets/placeholder/21.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/21.jpg"
										 class="avatar" alt=""/>
								</div>
								<div class="content">
									<div class="comment-header">
										<a href="#">Ruth Lopez</a><span class="comment-time">28 January 2013</span>
										<div class="comment-vote">
											<div class="control upvote"><i class="fa fa-chevron-up"></i></div>
											<div class="counter">182</div>
											<div class="control downvote"><i class="fa fa-chevron-down"></i></div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore a ut magna aliqua tempor.</p>
								</div>
							</li><!-- comment end -->
						</ul>

						<a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>

					</li><!-- comment end -->

					<li class="comment">
						<div class="comment-avatar">
							<img src="/assets/placeholder/6.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/6.jpg"
								 class="avatar" alt=""/>
						</div>
						<div class="content">
							<div class="comment-header">
								<a href="#">Susan Hill</a><span class="comment-time">28 January 2013</span>
								<div class="comment-vote">
									<div class="control upvote"><i class="fa fa-chevron-up"></i></div>
									<div class="counter">442</div>
									<div class="control downvote"><i class="fa fa-chevron-down"></i></div>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore a ut magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do est
								tempor.</p>
						</div>

						<a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>

					</li><!-- comment end -->

					<li class="comment">
						<div class="comment-avatar">
							<img src="/assets/placeholder/15.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/15.jpg"
								 class="avatar" alt=""/>
						</div>
						<div class="content">
							<div class="comment-header">
								<a href="#">David Walker</a><span class="comment-time">28 January 2013</span>
								<div class="comment-vote">
									<div class="control upvote"><i class="fa fa-chevron-up"></i></div>
									<div class="counter negative">-52</div>
									<div class="control downvote"><i class="fa fa-chevron-down"></i></div>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore a ut magna aliqua tempor.</p>
						</div>

						<a href="#" class="comment-reply"><i class="fa fa-reply"></i> Reply</a>

					</li><!-- comment end -->

				</ul>

			</div> <!-- .rw-row -->
		@endif
		<div class="rw-row">

			<!-- <h2>Leave a Reply</h2> -->
			<div id="respond" class="comment-respond clearfix">
				<div class="grid-container">
					<form action="" method="post" class="comment-form">
						<!--
						<div class="grid desk-4 alpha">
							<div class="label">Name(required)</div>
							<input name="author" type="text" class="fullwidth" />
						</div>

						<div class="grid desk-4">
							<div class="label">Email(required)</div>
							<input name="email" type="text" class="fullwidth" />
						</div>

						<div class="grid desk-4 omega">
							<div class="label">Website</div>
							<input name="url" type="text" class="fullwidth" />
						</div>
						 -->
						<div class="grid desk-12 alpha omega">
							<div class="label">Comment</div>
							<textarea name="comment"></textarea>
						</div>

						<p class="form-submit clearfix">
							<input name="submit" class="button primary" type="submit" value="Post Comment"/>
							<span class="comment-form-question"><i class="fa fa-question-circle fa-2x"></i>
							</span>
						<div class="form-allowed-tags" style="display: none;">
                            <span class="ftg-title" style="display: none">You may use these <abbr
										title="HyperText Markup Language">HTML</abbr> tags and attributes:</span>
							<code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt;</code><br/>
							<code>&lt;abbr title=&quot;&quot;&gt;</code><br/>
							<code>&lt;acronym title=&quot;&quot;&gt;</code><br/>
							<code>&lt;b&gt;</code><br/>
							<code>&lt;blockquote cite=&quot;&quot;&gt;</code><br/>
							<code>&lt;cite&gt;</code><br/>
							<code>&lt;code&gt;</code><br/>
							<code>&lt;del datetime=&quot;&quot;&gt;</code><br/>
							<code>&lt;em&gt;</code><br/>
							<code>&lt;i&gt;</code><br/>
							<code>&lt;q cite=&quot;&quot;&gt;</code><br/>
							<code>&lt;strike&gt;</code><br/>
							<code>&lt;strong&gt;</code><br/>
						</div>
						</p>
					</form>
				</div>
			</div><!-- #respond -->

		</div> <!-- .rw-row -->

	</div>
@endsection


@section('sidebar')
	@parent

	<div class="rw-column rw-sidebar">
		<div class="the-sidebar">
			<!-- Widget -->
			<aside class="widget widget-search">

				<div class="widget-title"><h3>Поиск</h3></div>

				<form method="get" class="search-form" action="">
					<input type="text" class="search-field fullwidth" name="s"
						   placeholder="Type keyword and press enter" value="">
				</form>

			</aside> <!-- .widget -->
			<!-- / Widget -->

			<!-- Widget -->
			<aside class="widget widget-posts">

				<div class="widget-title"><h3>Популярные материалы</h3></div>
				<div class="widget-posts-list">
					<!-- Entry -->
					<div class="post">
						<div class="entry-photo">
							<img src="/assets/placeholder/food/50x50/4.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/food/50x50/4.jpg"
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
							<img src="/assets/placeholder/food/50x50/7.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/food/50x50/7.jpg"
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
							<img src="/assets/placeholder/food/50x50/14.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/food/50x50/14.jpg"
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
							<img src="/assets/placeholder/food/50x50/5.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/food/50x50/5.jpg"
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
							<img src="/assets/placeholder/food/50x50/9.jpg"
								 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/food/50x50/9.jpg"
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
			<aside class="widget widget-categories">

				<div class="widget-title"><h3>Категории</h3></div>

				<ul>
					<li><a href="#">Breakfast <span class="mark light-gray">157</span></a></li>
					<li><a href="#">Lunch <span class="mark light-gray">24</span></a></li>
					<li><a href="#">Beverages <span class="mark light-gray">54</span></a></li>
					<li><a href="#">Appetizers <span class="mark light-gray">359</span></a></li>
					<li><a href="#">Soups <span class="mark light-gray">98</span></a></li>
					<li><a href="#">Salads <span class="mark light-gray">195</span></a></li>
					<li><a href="#">Main dishes: Beef <span class="mark light-gray">280</span></a></li>
					<li><a href="#">Main dishes: Poultry <span class="mark light-gray">450</span></a></li>
					<li><a href="#">Main dishes: Pork <span class="mark light-gray">84</span></a></li>
					<li><a href="#">Main dishes: Seafood <span class="mark light-gray">370</span></a></li>
					<li><a href="#">Main dishes: Vegetarian <span class="mark light-gray">328</span></a></li>
					<li><a href="#">Side dishes: Vegetables <span class="mark light-gray">352</span></a></li>
					<li><a href="#">Side dishes: Other <span class="mark light-gray">99</span></a></li>
					<li><a href="#">Desserts <span class="mark light-gray">348</span></a></li>
					<li><a href="#">Canning / Freezing <span class="mark light-gray">61</span></a></li>
					<li><a href="#">Breads <span class="mark light-gray">234</span></a></li>
					<li><a href="#">Holidays <span class="mark light-gray">374</span></a></li>
					<li><a href="#">Entertaining <span class="mark light-gray">176</span></a></li>
				</ul>

			</aside> <!-- .widget -->
			<!-- / Widget -->

			<!-- Widget -->
			<aside class="widget widget-authors">

				<div class="widget-title"><h3>Top authors</h3></div>

				<ul>
					<li>
						<img src="/assets/placeholder/people/50x50/15.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/15.jpg"
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
						<img src="/assets/placeholder/people/50x50/13.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/13.jpg"
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
						<img src="/assets/placeholder/people/50x50/10.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/10.jpg"
							 alt=""/>
						<div class="author-name"><a href="#">Daniel Thompson</a></div>
						<div class="author-meta">
							<span class="meta" title="297 total recipes submited"><i class="fa fa-newspaper-o"></i> 297</span>
							<span class="meta" title="22803 reputation points"><i class="fa fa-bullseye"></i>22k</span>
							<span class="meta" title="337 comments"><i class="fa fa-comments"></i>337</span>
						</div>
					</li>
					<li>
						<img src="/assets/placeholder/people/50x50/20.jpg"
							 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/20.jpg"
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
									<img src="/assets/placeholder/blog/50x50/4.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/blog/50x50/4.jpg"
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
									<img src="/assets/placeholder/blog/50x50/5.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/blog/50x50/5.jpg"
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
									<img src="/assets/placeholder/blog/50x50/6.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/blog/50x50/6.jpg"
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
									<img src="/assets/placeholder/blog/50x50/7.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/blog/50x50/7.jpg"
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
									<img src="/assets/placeholder/blog/50x50/8.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/blog/50x50/8.jpg"
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
									<img src="/assets/placeholder/blog/50x50/1.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/blog/50x50/1.jpg"
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
									<img src="/assets/placeholder/people/50x50/2.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/2.jpg"
										 alt=""/>
								</div>
								<div>
									<a href="#">Michelle Nelson</a><br>
									Et certamen honestum et disputatio splendida! omnis est enim de dignitate...
								</div>
							</div> <!-- .entry -->

							<div class="comment">
								<div class="entry-photo">
									<img src="/assets/placeholder/people/50x50/5.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/5.jpg"
										 alt=""/>
								</div>
								<div>
									<a href="#">Steven King</a><br>
									Great. Thank you for help. :) I'll let you know if there's more.
								</div>
							</div> <!-- .entry -->

							<div class="comment">
								<div class="entry-photo">
									<img src="/assets/placeholder/people/50x50/8.jpg"
										 tppabs="http://smartik.ws/demo/themeforest/html/gustos//assets/placeholder/people/50x50/8.jpg"
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


