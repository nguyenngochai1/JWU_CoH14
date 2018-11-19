
<div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">Đăng ký nhận bản tin của chúng tôi để nhận các xu hướng và tin tức mới nhất</h2>
                    <p>Hãy tham gia vào cơ sở dữ liệu của chúng tôi ngay bây giờ!</p>
                </header>

                <div class="newsletter-form">
              <!--     @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                @endif -->
                <!-- Include this after the sweet alert js file -->

            
         
                 <script type="text/javascript">
                        function InvalidMsg(email) {
                                if (email.value == '') {
                                    email.setCustomValidity('Bạn phải nhập trường này');
                                }
                                else if(email.validity.typeMismatch){
                                         email.setCustomValidity('địa chỉ email không hợp lệ');
                                      }
                                     else {
                                        email.setCustomValidity('');
                                        }
                                        return true;
                                }
                        
                         function InvalidName(name) {
                                if (name.value == '') {
                                    name.setCustomValidity('Bạn phải nhập trường này');
                                }
                                else if(name.value.length <= 3){
                                         name.setCustomValidity('Tên không bé hơn 3 kí tự');
                                      }
                                     else {
                                         name.setCustomValidity('');
                                      }
                                     return true;
                                }
                    </script>  
                    <form class="flex flex-wrap justify-content-center align-items-center" method="post" action="{{route('dangkisukien')}}"  >
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />

                        <div class="col-md-12 col-lg-3" >
                            <input type="text" name="name"   oninvalid="InvalidName(this);" oninput="InvalidName(this);" required="required"  placeholder="Họ và Tên">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" name="email"  oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" required="required"  placeholder="Email của bạn">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" onClick="showMessage(this)" type="submit"  value="ĐĂNG KÍ">
                        </div>
                            @include('sweet::alert')

                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="/capstone1/public/event/images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#">TRANG CHỦ</a></li>
                        <li><a href="#">VỀ CHÚNG TÔI </a></li>
                        <li><a href="#">SỰ KIỆN</a></li>
                        <li><a href="#">TIN TỨC</a></li>
                        <li><a href="#">LIÊN HỆ</a></li>
                    </ul>
                </nav>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='/capstone1/public/event/js/jquery.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/swiper.min.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/circle-progress.min.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='/capstone1/public/event/js/custom.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>