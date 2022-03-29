@extends('layout.main')

@section('content')
 <div class="mb-4">
 	<span class="fs-3 border-1 border-bottom pb-2 pe-3">Create customer</span>
 </div>

 <a href="/customer" class="btn btn-secondary btn-lg mb-3" title="back"></a>

  <div class="row">
      <div class="col-5">
          <div class="card">
              <div class="card-body">
                  <form action="/customer/store" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">Name :</label>
                          <input type="text" name="nameCustomer" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Email :</label>
                          <input type="text" name="emailCustomer" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Phone :</label>
                          <input type="text" name="phoneCustomer" class="form-control">
                      </div>
                      <div class="mb-3">
                          <label class="form-check">Member</label>
                          <input type="text" name="member" value="1" class="form-check-input">
                      </div>
                      <div class="d-grid">
                          <button class="btn btn-primary">Create</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection