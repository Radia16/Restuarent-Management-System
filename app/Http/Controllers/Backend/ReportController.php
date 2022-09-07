<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Crud;
use App\Models\Outlet;
use App\Models\Purchase;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function register_report()
    {
        return view('backend.reports.register_report');
    }
    public function stock_report_product_wise()
    {
        return view('backend.reports.stock_report_product_wise');
    }
    public function stock_report_kitchen()
    {
        return view('backend.reports.stock_report_kitchen');
    }
    public function commission()
    {

        return view('backend.reports.commission');
    }
    public function sell_report_items()
    {
        return view('backend.reports.sell_report_items');
    }
    public function service_charge_report()
    {
        return view('backend.reports.service_charge_report');
    }
    public function sell_report_waiters()
    {
        return view('backend.reports.sell_report_waiters');
    }
    public function kitchen_sell()
    {
        return view('backend.reports.kitchen_sell');
    }
    public function sell_report_delivery_type()
    {
        return view('backend.reports.sell_report_delivery_type');
    }
    public function sell_report_cashier()
    {
        return view('backend.reports.sell_report_cashier');
    }
    public function sell_by_date()
    {
        return view('backend.reports.sell_by_date');
    }

    
    public function daily_summary_report()
    {
        return view('backend.reports.daily_summary_report');
    }

    public function stock_report()
    {
        return view('backend.reports.stock_report');
    }

    public function low_stock_report()
    {
        return view('backend.reports.low_stock_report');
    }
    public function profit_loss_report()
    {
        return view('backend.reports.profit_loss_report');
    }
    public function kitchen_performance_report()
    {
        return view('backend.reports.kitchen_performance_report');
    }
    public function supplier_due_report()
    {
        return view('backend.reports.supplier_due_report');
    }
    public function customer_due_report()
    {
        return view('backend.reports.customer_due_report');
    }
    public function purchase_report()
    {
        $purchase = Purchase::all();
        $outlets = Outlet::all();
        return view('backend.reports.purchase_report', compact('purchase','outlets'));
    }
    public function expense_report()
    {
        return view('backend.reports.expense_report');
    }
    public function waste_report()
    {
        return view('backend.reports.waste_report');
    }
    public function tax_report()
    {
        return view('backend.reports.tax_report');
    }

    public function crud()
    {
        return view('backend.reports.crud');
    }
    public function store(Request $request)
    {
       $data = new Crud();

       $data->name = $request->name;
       $data->save();
       

      return back()->with('get_mgs','Data Created Successfully!');
    }


}
