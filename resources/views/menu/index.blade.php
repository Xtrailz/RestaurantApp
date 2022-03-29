@extends('layout.main')

@section('content')
 @if (session()->has('success'))
 <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
 	{{ session('success') }}
 	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 @endif

 <div class="mt-3">
 	<h1>Menu Page</h1>
 </div>

 <a href="/menu/create" class="btn my-3 btn-success btn-sm">
 	<span data-feather="plus"></span>
 </a>

 <div class="row">
 	<div class="col-10">
 		<table class="table table-responsive table-hover table-striped text-center">
 			<thead>
 				<tr>
 					<th>No</th>
 					<th>Nama Menu</th>
 					<th>Description</th>
 					<th>Foto</th>
 					<th>Harga</th>
 					<th>Action</th>
 				</tr>
 			</thead>
 			<tbody>
 				@foreach ($menus as $menu)

 				<tr>
 					<td>{{ $loop->iteration }}</td>
 					<td>{{ $menu->namemenu }}</td>
 					<td>{{ $menu->descmenu }}</td>
 					{{-- <td><img width="200px" height="150px" src="{{ ( $menu->photoMenu ) ? asset('storage/". $menu->photoMenu ) : "" }}"alt="photo menu" class="img-fluid></td> --}}
 					<td>
 						@if(!$menu->photoMenu)
 						 <img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset( 'storage/image/defaultmenu.jpg") }}">
 						@else
 						 <img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset( 'storage/". $menu->photoMenu ) }}">
 						@endif
 					</td>
 					<td>{{ $menu->price }}</td>
 					<td>
 						<a href="/menu/{{ $menu->id }}/edit" class="btn me-1 text-white btn-sm btn-warning">
 							<span data-feather="edit"></span>
 						</a>
 						<form action="/menu/{{ $menu->id }}" method="POST" class="d-inline">
 							@method('delete')
 							@csrf
 							<button type="submit" onclick="return confirm('Sure?')" class="btn btn-danger btn-sm">
 								<span data-feather="trash-2"></span>
 							</button>
 						</form>
 					</td>
 				</tr>

 				@endforeach
 			</tbody>
 		</table>
 	</div>
 </div>