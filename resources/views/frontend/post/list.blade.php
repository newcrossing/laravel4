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


