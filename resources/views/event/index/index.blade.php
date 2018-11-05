@extends('template.event.master')
@section('content')
<div class="swiper-container hero-slider">
   
        <div class="swiper-wrapper">
             @foreach($slide as $sl)
             <div class="swiper-slide" data-date="{{$sl->start_time}}" style="background: url('/capstone1/public/event/images/{{$sl->cover_images}}') no-repeat;  -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-position: center;   ">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>Ngày</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>Giờ</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>Phút</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>Giây</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">1 Chúng tôi có những sự kiện tốt nhất. <br>Đặt vé ngay bây giờ!</h2>
                                </div><!--- .entry-header -->

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="{{ route('event.events.sukien') }}">Xem thêm</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->
     @endforeach
        </div>
   
 
  
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>

    </div><!-- .swiper-container -->

</header><!-- .site-header -->

<div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="/capstone1/public/event/images/logo-2.png" alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">Agenda là gì và tại sao chọn dịch vụ của chúng tôi?</h2>
                </header>

                <div class="entry-content">
                    <p>Agenda là công ty bán vé sự kiện trực tuyến đầu tiên tại Việt Nam. Chúng tôi mang đến cách thức mua - bán vé sự kiện dễ dàng và nhanh chóng hơn. Đồng thời, chúng tôi không ngừng khẳng định vị thế tiên phong trong việc thay đổi thị trường bán vé sự kiện tại Việt Nam.Với chúng tôi, tạo dựng một doanh nghiệp chính là góp phần làm xã hội trở nên tốt đẹp hơn, giúp mọi thứ dễ dàng và tiện lợi hơn cho cộng đồng. Do chúng tôi đều là những người trẻ thích tham dự sự kiện, đại nhạc hội,...nên chúng tôi nhận thấy việc mua vé thật gian nan: chạy đến phòng vé, xếp hàng chờ đợi, đôi khi phải mua vé với giá rất cao. Nhiệt huyết và quyết tâm đưa ra giải pháp cho vấn đề đang gặp trở thành động lực chính giúp chúng tôi thành lập nên Event Map. </p>
                </div>

                <footer class="entry-footer">
                    <a href="#" class="btn gradient-bg">Xem Thêm</a>
                    <a href="#" class="btn dark">Đăng Kí Ngay</a>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="homepage-featured-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    <?php
                        $data=DB::table('event')->where('important', 1)->take(11)->get();
                        $sukien1 = $data->shift();
                        $sukien2 = $data->shift();
                        $sukien3 = $data->shift();
                        $sukien4 = $data->shift();
                        $sukien5 = $data->shift();
                        $sukien6 = $data->shift();
                        $sukien7 = $data->shift();
                        $sukien8 = $data->shift();
                        $sukien9 = $data->shift();
                        $sukien10 = $data->shift();
                        $sukien11 = $data->shift();
                    ?>
                    <div class="event-content-wrap positioning-event-1">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien1->Event_id,$sukien1->name]) !!}"><img style="height: 364px; width: 330px;" src="event/images/{{$sukien1->images_important}}" alt="1"></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">{{$sukien1->name}}</h3>

                            <div class="posted-date">{{$sukien1->start_time}}</div>
                        </header>
                    </div>
                    <div class="event-content-wrap positioning-event-2">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien2->Event_id,$sukien2->name]) !!}"><img style="height: 280px; width: 250px;" src="event/images/{{$sukien2->images_important}}" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">{{$sukien2->name}}</h3>

                            <div class="posted-date">{{$sukien2->start_time}}</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-3">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien3->Event_id,$sukien3->name]) !!}"><img style="height: 300px; width: 250px;" src="event/images/{{$sukien3->images_important}}" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">{{$sukien3->name}}</h3>

                            <div class="posted-date">{{$sukien3->start_time}}</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien4->Event_id,$sukien4->name]) !!}"><img style="height: 160px; width: 180px;" src="event/images/{{$sukien4->images_important}}" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien5->Event_id,$sukien5->name]) !!}"><img style="height: 160px; width: 180px;" src="event/images/{{$sukien5->images_important}}" alt=""></a>
                     
                    </div>

                    <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien6->Event_id,$sukien6->name]) !!}"><img style="height: 120px; width: 180px;" src="event/images/{{$sukien6->images_important}}" alt=""></a>
                        </figure>

                    </div>

                    <div class="event-content-wrap positioning-event-7">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien7->Event_id,$sukien7->name]) !!}"><img <img style="height: 280px; width: 250px;"  src="event/images/{{$sukien7->images_important}}" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">{{$sukien7->name}}</h3>

                            <div class="posted-date">{{$sukien7->start_time}}</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-8">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien8->Event_id,$sukien8->name]) !!}"><img style="height: 364px; width: 330px;"  src="event/images/{{$sukien8->images_important}}" alt="1"></a>
                        </figure>
                             <header class="entry-header">
                            <h3 class="entry-title">{{$sukien8->name}}</h3>

                            <div class="posted-date">{{$sukien8->start_time}}</div>
                        </header>

                    </div>

                    <div class="event-content-wrap positioning-event-9">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien9->Event_id,$sukien9->name]) !!}"><img <img style="height: 280px; width: 260px;" src="event/images/{{$sukien9->images_important}}" alt=""></a>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">{{$sukien9->name}}</h3>

                            <div class="posted-date">{{$sukien9->start_time}}</div>
                        </header>
                    </div>

                    <div class="event-content-wrap positioning-event-10 half">
                          <figure>
                            <a href="{!! url('singleevent',[$sukien10->Event_id,$sukien10->name]) !!}"><img style="height: 160px; width: 180px;"  src="event/images/{{ $sukien10->images_important}}" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-11 half">
                        <figure>
                            <a href="{!! url('singleevent',[$sukien11->Event_id,$sukien11->name]) !!}"><img style="height: 160px; width: 180px;"  src="event/images/{{ $sukien11->images_important}}" alt=""></a>
                        </figure>
                    </div>
             


                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">SỰ KIỆN SẮP DIỄN RA</h2>
                <p>Mùa hè này bạn đã có dự định gì để giải tỏa cơn nóng chưa nào, hãy để Event map dẫn đường cho bạn nhé. Sẵn sàng chưa nào!</p>
            </div>
        </div>

        <div class="row">
            <?php
                $data1=DB::table('event')->select('Event_id','name','cover_image','short_description','start_time')
                                        ->whereRaw('datediff(start_time,now()) > 0')
                                        ->orderByRaw('datediff(now(),start_time) desc')
                                        ->take(3)
                                        ->get();
                                       // dd($data1);
            ?>
            @foreach($data1 as $sk)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href="{!! url('singleevent',[$sk->Event_id,$sk->name]) !!}"><img src="event/images/{{$sk->cover_image}}" alt="1"></a>

                        <div class="event-rating">8.9</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">{{$sk->name}}</h3>

                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                    </header>

                    <div class="entry-content">
                        <p>{{$sk->short_description}}</p>
                    </div>

                    <footer class="entry-footer">
                        <a href="{{ route('event.events.sukien') }}">Xem thêm</a>
                    </footer>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h2 class="entry-title">Sự kiện ở Hà Nội</h2>

                    <div class="select-location">
                        <select name="text" id="selectcity" onchange="myFunction(this)">
                                 <option value="hcm">Hồ Chí Minh</option>
                                 <option value="hn" selected="selected">Hà Nội</option>
                                 <option value="dn">Đà Nẵng</option>
                        </select>
                    </div>
                </header>
                 <div class="swiper-container homepage-regional-events-slider" id ="myCID">
                @include('event.event_city.event_City')
                <script>

                /*$('#selectcity').on('change',function(){
                            alert('ád');
                            $.ajax({
                            type: "GET",
                            url: "city/"+$(this).val(),//chính là route city/{$city}
                            success: function(msg) {
                                if (msg) {
                                $('.data_return').html(msg);//msg chính là view event_city.blade.php return về từ function sukienthanhpho trong Eventcontroller
                                } else {
                                alert('fail'); 
                                }
                            },
                            error:function(e){
                                alert("something wrong"+ e) 
                            }
                            });
                        })*/
                        function myFunction(t)
                        {

                            var settings = {
                                "async": true,
                                "crossDomain": true,
                                "url": "city/"+t.value,
                                "method": "GET",
                                "headers": {
                                  "cache-control": "no-cache",
                                  "postman-token": "ac6f37c6-ee47-dfe5-1092-5fa9c6b821ab"
                                }
                            }
                          $.ajax(settings).done(function (response) {
                            console.log(response);
                             if (response){
                                $('#myCID').html(response);
                                } else {
                                alert('fail'); 
                                }
                          });
                        }
                </script>         
                <div class="events-partners">
                    <header class="entry-header">
                        <h2 class="entry-title">ĐỐI TÁC</h2>
                    </header>

                    <div class="events-partners-logos flex flex-wrap justify-content-between align-items-center">
                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/the-pirate.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/himalayas.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/sa.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/south-porth.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/pixar.png" alt=""></a>
                        </div>

                        <div class="event-partner-logo">
                            <a href="#"><img src="/capstone1/public/event/images/the-pirate.png" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop

