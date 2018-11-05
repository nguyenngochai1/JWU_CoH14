@extends('template.event.master')
@section('content')
<div class="page-header single-event-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">{!! $sukien->name !!}</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->
<div class="single-event-page">
<div class="container">
    <div class="row">
        <div class="col-12 single-event">
            <div class="event-content-wrap">
                <header class="entry-header flex flex-wrap justify-content-between align-items-end">
                    <div class="single-event-heading">
                        <h2 class="entry-title">{!! $sukien->name !!}</h2>

                        <div class="event-location"><a href="#">{!! $sukien->location !!}</a></div>

                        <div class="event-date">{!! $sukien->start_time !!} - {!! $sukien->end_time !!}</div>
                    </div>

                    <div class="buy-tickets flex justify-content-center align-items-center">
                        <a class="btn gradient-bg" href="#">Mua vé</a>
                    </div>
                </header>

                <figure class="events-thumbnail">
                    <img src="{!! asset('event/images/'.$sukien->cover_image) !!}" alt="">
                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Chi Tiết</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">
                        <div class="flex flex-wrap justify-content-between">
                            <div class="single-event-details">
                                <div class="single-event-details-row">
                                    <label>Bắt đầu:</label>
                                    <p>{!! $sukien->start_time !!}</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Kết thúc:</label>
                                    <p>{!! $sukien->end_time !!}</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Gía vé:</label>
                                    <p>$89 <span>Sold Out</span></p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Thể loại:</label>
                                    <p>Festivals</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Tags:</label>
                                    <p><a href="#">festivals</a>, <a href="#">music</a>, <a href="#">concert</a></p>
                                </div>
                            </div>

                            <div class="single-event-map">
                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="tab_venue" class="tab-content">
                        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="event-tickets">
                <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                    <div class="ticket-type flex justify-content-between align-items-center">
                        <h3 class="entry-title"><span>Vé Bạc</span>Vé thường</h3>

                        <div class="ticket-price">$89</div>
                    </div>

                    <div class="flex align-items-center">
                        <div class="number-of-ticket flex justify-content-between align-items-center">
                            <span class="decrease-ticket">-</span>
                            <input type="number" class="ticket-count" value="1" />
                            <span class="increase-ticket">+</span>
                        </div>

                        <div class="clear-ticket-count">Xóa</div>
                    </div>

                    <input type="submit" class="btn gradient-bg" value="Mua Vé">
                </div>

                <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                    <div class="ticket-type flex justify-content-between align-items-center">
                        <h3 class="entry-title"><span>Vé Vàng</span>Vé vip</h3>

                        <div class="ticket-price">$199</div>
                    </div>

                    <div class="flex align-items-center">
                        <div class="number-of-ticket flex justify-content-between align-items-center">
                            <span class="decrease-ticket">-</span>
                            <input type="number" class="ticket-count" value="1" />
                            <span class="increase-ticket">+</span>
                        </div>

                        <div class="clear-ticket-count">Xóa</div>
                    </div>

                    <input type="submit" class="btn gradient-bg" value="Mua Vé">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="upcoming-events">
                <div class="upcoming-events-header">
                    <h4>Sự Kiện Sắp Diễn Ra</h4>
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
                            <a href="#">Mua vé</a>
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
                            <a href="#">Mua vé</a>
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
                            <a href="#">Mua vé</a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop