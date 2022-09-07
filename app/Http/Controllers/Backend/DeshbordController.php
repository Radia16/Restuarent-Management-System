<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Stock;
use App\Models\Outlet;
use App\Models\Supplier;
use App\Models\KitchenList;
use App\Models\Ingredient;


class DeshbordController extends Controller
{
    //
// Frontend Index show
    //outlet deshbord
    public function OutletDeshbordShow(){
        $customers = Customer::all();
        $count_outlet_id =  count($customers);

        $employee = Employee::all();
        $count_employee_id =  count($employee);

        $stock = Stock::all();
        $count_stock_id =  count($stock);

        $outlet = Outlet::all();
        $count_outlet_id =  count($outlet);

        $supplier = Supplier::all();
        $count_supplier_id =  count($supplier);

        $kitchen = KitchenList::all();
        $count_kitchen_id =  count($kitchen);

        $ingredient = Ingredient::all();
        $count_ingredient_id =  count($ingredient);

        return view('backend.outlet.outlet_deshboard', compact('count_outlet_id','count_employee_id','count_stock_id','count_outlet_id','count_supplier_id','count_kitchen_id','count_ingredient_id'));
    }//end method






}
