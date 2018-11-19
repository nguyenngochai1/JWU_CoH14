@extends('template.event.master')
@section('content')
<div class="page-header single-event-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title"></h1>
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
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Kiểm tra</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn thành</h3>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Chi Tiết Sự Kiện</span>
							</div>
							<div class="one-eight text-center">
								<span>Gía Vé</span>
							</div>
							<div class="one-eight text-center">
								<span>Số lượng</span>
							</div>
							<div class="one-eight text-center">
								<span>Tổng Tiền</span>
							</div>
							<div class="one-eight text-center">
								<span>Xóa</span>
							</div>
						</div>
						@foreach($content as $item)
							<!-- @php
								$rowId = $item->rowId;
							@endphp  -->
						<div class="product-cart">
							<div class="one-forth">
								<div class="product-img" style="background-image: url('/capstone1/public/event/images/{{ $item->attributes->img }}');">
								</div>
								<div class="display-tc">
									<h3>{{ $item->name }}</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{ number_format($item->price,0,",",".") }}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="{{ $item->quantity }}" min="1" max="100">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{ number_format($item->price*$item->quantity,0,",",".") }}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="{{!! url('removeCart',['id'=>$item['id']]) !!}}" 
										class="closed"></a>
								</div>
							</div>
						</div>
					 @endforeach()

					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Tổng Tiền:</span> <span>${{ Cart::getSubTotal()}}</span></p>
											<p><span>Phí Ship:</span> <span>$0.00</span></p>
											<p><span>Khuyến Mãi:</span> <span>$0.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Tổng:</strong></span> <span>${{ Cart::getSubTotal()}}</span></p>
										</div>
										<div class="buy-tickets">
					                        <a class="btn gradient-bg" style="height:10px; padding-bottom: 35px;" href="{{route('event.checkout.checkout')}}">Đặt vé</a>
					                    </div><!-- .buy-tickets -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>

@stop


