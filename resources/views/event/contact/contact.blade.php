@extends('template.event.master')
@section('content')

   <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Liên Hệ.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->
<div class="contact-page"">
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Hà Nội</h2>

                <div class="entry-content">
                    <p> Agenda là kênh phân phối vsssé sự kiện mới, hiện đại với các tiện ích, dịch vụ hỗ trợ khách hàng, giúp thúc đẩy doanh số, cắt giảm chi phí tối đa nâng cao lợi nhuận cho doanh nghiệp.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">99 Lê Duẩn, Hoàn Kiếm, Hà Nội</li>
                        <li class="contact-number">0965 226 382</li>
                        <li class="contact-email"><a href="#">agendahanoi@gmail.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Đà Nẵng</h2>

                <div class="entry-content">
                    <p>Agenda tự tin rằng sẽ thực hiện tốt việc hỗ trợ các doanh nghiệp tổ chức sự kiện mang thông tin sự kiện tới khách hàng và phân phối bán vé đảm bảo và tiện lợi nhất.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">254 Lê Duẩn, Thanh Khê, Đà Nẵng</li>
                        <li class="contact-number">0984 114 047</li>
                        <li class="contact-email"><a href="#">agendadanang@gmail.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="contact-location-details">
                <h2 class="entry-title">Sài Gòn</h2>

                <div class="entry-content">
                    <p>Agenda tạo ra những giá trị mới,thúc đẩy hiện đại hóa xã hội. Góp phần phân bổ hợp lý các nguồn lực lao động, áp dụng công nghệ giúp tối ưu hóa phương tiện bán vé.</p>
                </div>

                <footer class="entry-footer">
                    <ul>
                        <li class="contact-address">799 Nguyễn Văn Linh, phường Tân Phú, quận 7, TP.Hồ Chí Minh</li>
                        <li class="contact-number">0511 316 245</li>
                        <li class="contact-email"><a href="#">agendasaigon@gmail.com</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="contact-page-map">
    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact-form">
                <form class="row" method="post" action="{{route('sendcontact')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="col-12 col-md-4"><input type="text" name="name" required="" oninvalid="this.setCustomValidity('Trường này không được để trống')" 
                    oninput="setCustomValidity('')" placeholder="Họ và tên"></div>
                    <div class="col-12 col-md-4"><input type="email" name="email" required=""  oninvalid="this.setCustomValidity('Trường này không được để trống')" 
                    oninput="setCustomValidity('')" placeholder="E-mail"></div>
                    <div class="col-12 col-md-4"><input type="text" name="subject" required=""  oninvalid="this.setCustomValidity('Trường này không được để trống')"
                    oninput="setCustomValidity('')" placeholder="Tiêu đề"></div>
                    <div class="col-12"><textarea placeholder="Yêu cầu" name="request" required="" oninvalid="this.setCustomValidity('Trường này không được để trống')" 
                    oninput="setCustomValidity('')"  rows="8"></textarea></div>
                    <div class="col-12 flex justify-content-center"><input class="btn gradient-bg" type="submit" value="Gửi câu hỏi"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@stop