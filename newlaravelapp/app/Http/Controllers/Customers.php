<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class Customers extends Controller
{
   

    public function loadHomePage(){
        $customers = Customer::all();
        return view("home",['customers'=>$customers]);
    }

    public function loadCustomerById(Request $req){
        $data = Customer::find($req->id);
       return view("updatecustomer",['data'=>$data]);
    }

    public function saveCustomer(Request $req){
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->mob = $req->mob;
        $customer->addr = $req->addr;
        $customer->save();
        return redirect('/');
    }

    public function updateCustomer(Request $req){
        $customer = Customer::find($req->id);
        $customer->name = $req->name;
        $customer->mob = $req->mob;
        $customer->addr = $req->addr;
        $customer->save();
        return redirect('/');

    }

    public function deleteCustomer(Request $req){
        $data = Customer::find($req->id);
        $data->delete();
        return redirect('/');
    }
}
