@extends('template.event.master')
@section('content')
<div class="page-header events-news-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Tin Tức Sự Kiện.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->
<div class="events-news-page" >
<div class="container">
    <div class="row">
        <div class="col-12">
            @foreach($tintuc as $tt)
            <article class="events-news-post">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="#">{{$tt->name}}</a></h2>

                    <div class="entry-meta flex align-items-center">
                        <div class="posted-author"><a href="#">{{$tt->author}}</a></div>

                        <div class="post-comments"><a href="#">Comments</a></div>
                    </div>
                </header>

                <figure>
                    <a href="#"><img src="event/images/{{$tt->avatar}}" alt=""></a>

                    <div class="posted-date"><span>Feb</span><span>11</span><span>‘18</span></div>
                </figure>

                <div class="entry-content">
                    <p>{{$tt->short_description}}</p>
                </div>
            </article>
            @endforeach()

           

            
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="blog-pagination">
                <ul class="flex align-items-center">
                    <li><a href="#">01</a></li>
                    <li class="active"><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>


@stop