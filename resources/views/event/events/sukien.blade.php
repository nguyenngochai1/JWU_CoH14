@extends('template.event.master')
@section('content')
<div class="page-header events-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Sự kiện.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->


<form method="get" class="events-search" action="{{route('search')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}";>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <input type="date"  placeholder="Date" name="date">
            </div>

            <div class="col-12 col-md-3">
                <input type="text" name="key" placeholder="Event">
            </div>

            <div class="col-12 col-md-3">
                <input type="text" name="location" placeholder="Location">
            </div>

            <div class="col-12 col-md-3">
                <input class="btn gradient-bg" type="submit" value="Search Events">
            </div>
        </div>
    </div>
</form>
<div class="events-list-page">
<div class="container">
    <div class="row events-list">
        @foreach($sukien as $sk)
        <div class="col-12 col-lg-6 single-event">
            <figure class="events-thumbnail">
                <a href="{!! url('singleevent',[$sk->Event_id,$sk->name]) !!}"><img src="event/images/{{$sk->cover_image}} " alt=""></a>
            </figure>

            <div class="event-content-wrap">
                <header class="entry-header flex justify-content-between">
                    <div>
                        <h2 class="entry-title"><a href="#">{{$sk->name}} </a></h2>

                        <div class="event-location"><a href="#">{{$sk->location}} </a></div>

                        <div class="event-date">{{$sk->start_time}} - {{$sk->start_time}}</div>
                    </div>

                    <div class="event-cost flex justify-content-center align-items-center">
                        from<span>{{$sk->price_basic}}</span>
                    </div>
                </header>

                <footer class="entry-footer">
                    <a href="#">Buy Tikets</a>
                </footer>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="load-more-btn">
                <a class="btn gradient-bg" href="#">Load More</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="upcoming-events-outer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="upcoming-events">
                    <div class="upcoming-events-header">
                        <h4>Upcoming Events</h4>
                    </div>

                    <div class="upcoming-events-list">
                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="/capstone1/public/event/images/upcoming-1.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    25<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Blockchain Conference</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
                        </div>

                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="/capstone1/public/event/images/upcoming-2.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    27<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Financial Conference</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
                        </div>

                        <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                            <figure class="events-thumbnail">
                                <a href="#"><img src="/capstone1/public/event/images/upcoming-3.jpg" alt=""></a>
                            </figure>

                            <div class="entry-meta">
                                <div class="event-date">
                                    27<span>February</span>
                                </div>
                            </div>

                            <header class="entry-header">
                                <h3 class="entry-title"><a href="#">Winter Festival</a></h3>

                                <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                                <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                            </header>

                            <footer class="entry-footer">
                                <a href="#">Buy Tikets</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop