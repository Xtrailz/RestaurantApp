@extends('layout.main')

@section('content')
 <div class="mb-4">
 	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Create Customer</span>
 </div>

 <a href="/customer" class="btn btn-secondary btn-lg mb-3" title="back"></a>

 <div class="row">
 	<div class="col-5">
 		<div class="card">
 			<div class="card-body">
 				<form action="/customer/update{{ $customer->id }}" method="POST">
 					@csrf
 					<div class="mb-3">
 						<label class="form-label">Name :</label>
 						<input type="text" name="nameCustomer" class="form-control" value="{{ $customer->nameCustomer }}">
 					</div>
 					<div class="mb-3">
 						<label class="form-label">Email :</label>
 						<input type="text" name="emailCustomer" class="form-control" value="{{ $customer->emailCustomer }}">
 					</div>
 					<div class="mb-3">
 						<label class="form-label">Phone :</label>
 						<input type="text" name="phoneCustomer" class="form-control" value="{{ $customer->phoneCustomer }}">
 					</div>
 					<div class="mb-3">
 					    <div class="form-check">
 					     <label class="form-label">Member :</label>
 						 <input type="text" name="member" class="form-control" value="{{ $customer->member ? 'checked' : '' }}">
 					    </div>
 					</div>


 					<div class="d-grid">
 						<button class="btn btn-primary">Update</button>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
@endsection