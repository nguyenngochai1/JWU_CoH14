@extends('template.event.master')
@section('content')
<div class="page-header events-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Thanh toán.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="colorlib-shop">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Điền thông tin</h3>
                            </div>
                            <div class="process text-center active">
                                <p><span>02</span></p>
                                <h3>Thanh toán</h3>
                            </div>
                            <div class="process text-center">
                                <p><span>03</span></p>
                                <h3>Hoàn tất</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                  @if(count($errors) > 0)
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
                @endif
                 @include('sweet::alert')
                <form action="{{route('dathang')}}"  method="post" >
                <div class="row">
                    <div class="col-md-7">
                        <div class="colorlib-form">
                            <h2>Chi tiết đặt hàng</h2>
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="row">
                           <div class="form-group">
                                    <div class="col-md-6">
                                        <label for="fname">Họ và tên</label>
                                        <input type="text" name="name" class="form-control" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="email">
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="companyname">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
                                      <div class="form-group">
                                        <label for="fname">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" placeholder="Địa chỉ">
                                    </div>
                            </div>
                        </div>
                           <div class="col-md-12">
                                  
                                    <div class="col-12">
                                         <textarea style="width: 100%; " placeholder="Ghi chú" name="note" rows="8"></textarea>
                                     </div>
                           </div>
                        
                      </div>
                         <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" onClick="showMessage(this)" type="submit"  value="Đặt Vé">
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-md-5">
                        
                        <div class="cart-detail">
                            <h2>Thông tin đặt vé</h2>
                             @foreach($cart as $item)
                            <ul>
                                <li>
                                     <span style="color: red;">{{ $item->name }}</span>
                                    <ul>
                                        <li><span>số lượng </span> <span>{{ $item->quantity}}</span></li>
                                        <li><span>giá vé</span> <span>{{number_format($item->price,0,",",".") }}</span></li>
                                    </ul>
                                </li>
                                <li><span>Tổng tiền</span> <span>{{ number_format($item->price*$item->quantity,0,",",".") }}</span></li>
                            </ul>
                            @endforeach
                            <h2>TỔNG TIỀN THANH TOÁN: {{ Cart::getSubTotal()}}</h2>
                        </div>
                        <div class="cart-detail">
                            <h2>Phương thức thanh toán</h2>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                       <label><input type="radio" name="payment" value="chuyển khoản qua ngân hàng" checked="checked">Chuyển khoản qua ngân hàng</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                       <label><input type="radio" name="payment" value="trả tiền trực tiếp tại sự kiện" checked="checked">Trả tiền trực tiếp tại sự kiện</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                
            </div>
        </div>


@stop