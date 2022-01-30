@extends('frontend.layouts.app')

@section('title','Правовая поддержка военнослужащих')

@section('content')

	<div class="rw-column rw-content">
		<div class="rw-row page-breadcrumb">
			@isset($breadcrumbs)
				@foreach ($breadcrumbs as $breadcrumb)
					@if(isset($breadcrumb['link']))
						<a href="{{asset($breadcrumb['link'])}}">{{$breadcrumb['name']}}</a>&raquo;
					@else
						{{$breadcrumb['name']}}
					@endif
				@endforeach
			@endisset
		</div>
		<div class="rw-row page-title">
			<h1>Статьи</h1>
		</div>
		<div class="rw-row">
			<div class="blog-list">

				@foreach ($docs as $doc)
					<div class="post clearfix">
						<div class="entry-details" style="min-height: 70px">
							<div class="entry-title" style="padding-left: 0px; ">
								<h2 style="font-size: 20px;text-align: justify;">
									<a href="/doc/{{ $doc->id }}"> {!!   $doc->getNameDoc() !!}</a>
								</h2>
							</div>
						</div>
						@if (($doc->tags()->count()) )
							<div class="keywords-index-list" style="margin-bottom: 0px">
								<ul class="keywords">
									@foreach ($doc->tags as $tag)
										<li><a href="/tag/{{ $tag->id }}">{{ $tag->name }} </a></li>
									@endforeach
								</ul>
							</div>
						@endif
					</div>
				@endforeach
				<div class="clear"></div>

			</div> <!-- .blog-list -->

			<!-- пейджинация -->
			{{ $docs->links('vendor.pagination.default') }}


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


		</div> <!-- .the-sidebar -->
	</div> <!-- .rw-sidebar -->
@endsection


