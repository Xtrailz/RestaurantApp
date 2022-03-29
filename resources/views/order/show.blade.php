extends('layout.main')

@section('content')
	<div class="mb-4">
		<span class="fs-3 border-1 border-bottom pb-2 pe-3">Detail order</span>
	</div>

	<a href="/order/index" class="btn btn-secondary btn-lg mb-3" title="back"></a>

	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<p class="m-0">Customer</p>
						<small class="fst-italic">
							{{ $order->customer->nameCustomer }}
							{{ $order->customer->member ? '(Member)' : '' }}
						</small>
					</div>
					<div class="mb-3">
						<p class="m-0">Code</p>
						<small class="fst-italic">
							{{ $order->code }}
						</small>
					</div>
					<div class="mb-3">
						<p class="m-0">Detail order :</p>
						@foreach ($order->orderItem as $orderItem)
						<div class="d-flex justify-content-between fst-italic">
						<small>{{ $orderItem->menu->nameMenu }}</small>	
						<small>{{ $orderItem->quantity }}</small>
						<small>{{ $orderItem->subtotal }}</small>
						</div>
						@endforeach

						@if ($order->customer->member)
						<div class="text-end fst-italic">
							<small class="me-3">Discount Member</small>
							<small class="border-top border-dark">10 %</small>
						</div>
						@endif

						<div class="text-end fst-italic">
							<small class="me-3">Total :</small>
							<small class="border-top border-dark">{{ $order->total }}></small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection