<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
 public function index()
 {
    return view('customer.index', ['customers' => Customer::all()]);
 }


 public function create()
 {
    return view('customer.create');
 }

 public function store(Request $request)
 {
    $data_customer = $request->validate([
        'nameCustomer' => ['required'],
        'emailCustomer' => ['required'],
        'phoneCustomer' => ['required'],
    ]);

    if ($request->member) {
        $data_customer['member'] - 1;
    } else {
        $data_customer['member'] = 0;
    }

    Customer::create($data_customer);

    return redirect('/customer/index')->with('succes', 'Data customer has been created!');
 }

 public function edit($id)
 {
    return view('customer.edit', [
        'customer' => customer::where('id', $id)->first()
    ]);
 }

 public function update(Request $request, $id)
 {
    $data_customer = $request->validate([
        'nameCustomer' => ['required'],
        'emailCustomer' => ['required'],
        'phoneCustomer' => ['required'],
    ]);

    if ($request->member) {
        $data_customer['member'] - 1;
    } else {
        $data_customer['member'] = 0;
    }

    customer::where('id', $id)->update();

    return redirect('/customer/index')->with('succes', 'Data customer has been update!');
 }

 public function destroy($id)
 {
    customer::where('id', $id)->delete();

    return back()->with('succes', 'Data customer has been deleted');
 }
}