<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

////////////////////////// end namespace///////////////
use App\Models\Outlet;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\Expense;


class SuperAdminController extends Controller
{
    function create(Request $request)
    {
        //Validate inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:super_admins,email',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $superadmin = new SuperAdmin();
        $superadmin->name     = $request->name;
        $superadmin->email    = $request->email;
        $superadmin->password = Hash::make($request->password);
        $save                 = $superadmin->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered successfully as SuperAdmin');
        } else {
            return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
        }
    }

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:super_admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in superadmin table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('superadmin')->attempt($creds)) {
            return redirect()->route('superadmin.home');
        } else {
            return redirect()->route('superadmin.login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('superadmin')->logout();
        return redirect('/');
    }

    /////////////////////////////////////////////////////// end superadmin login logout system ////////////////////////////////////////

    // Frontend Index show
    // outlet deshbord
    public function SuperAdminDeshbordShow()
    {
        $admin = Admin::all();
        $count_admin_id =  count($admin);

        $outlet = Outlet::all();
        $count_outlet_id =  count($outlet);

        $employee = Employee::all();
        $count_employee_id =  count($employee);

        $supplier = Supplier::all();
        $count_supplier_id =  count($supplier);

        $customer = Customer::all();
        $count_customer_id =  count($customer);

        $expense = Expense::all();
        $count_expense_id =  count($expense);




        return view('auth.superadmin.superadmin_deshboard', compact('count_admin_id', 'count_outlet_id','count_employee_id','count_supplier_id','count_customer_id','count_expense_id'));
    } //end method
}
