@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form action="{{URL::to('save-checkout-customer')}}" method="POST">
								{{csrf_field()}}
								<input type="text" name="shipping_email" placeholder="Email">
								<input type="text" name="shipping_name" placeholder="Họ tên">
								<input type="text" name="shipping_address" placeholder="Địa chỉ">
								<input type="text" name="shipping_phone" placeholder="Số điện thoại">
								<textarea name="shipping_note" placeholder="Ghi chú đơn hàng" rows="16"></textarea>
								<input type="submit" value="Xác nhận thông tin" name="send_order" class="btn btn-primary btn-sm ">
							</form>
						</div>
					</div>										
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

		</div>
	</section> <!--/#cart_items-->

	

@endsection