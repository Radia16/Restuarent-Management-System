<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExpenseResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\ExpenseItem;
use App\Models\Expense;
use App\Models\Employee;
use Exception;
use Image;
use DB;
//use Symfony\Component\Console\Input\Input;

class ExpenseController extends Controller
{
    // Expense Items Crud operation ////

    //Expense_Item Add
    public function ExpenseItemAdd(){

        return view('backend.expense.expenseitems_view');
    } //end add


    // Expense_Item Store
    public function ExpenseItemStore(Request $request){

        $validator = Validator::make($request->all(),[
            'expense_item_name'   => 'required',
            'quantity'            => 'required',
            'price'               => 'required',

        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $expense_item = new ExpenseItem;

            $expense_item->expense_item_name      = $request->input('expense_item_name');
            $expense_item->quantity               = $request->input('quantity');
            $expense_item->price                  = $request->input('price');

            $expense_item->save();
            return response()->json(['message' => 'Added Successfully']);
        }


    }// end store

    // Expense_Item View

    public function ExpenseItemView(){

        $expense_item = ExpenseItem::all();
        return response()->json([
            'expense_item' =>$expense_item,
        ]);
    } // end view



    // Expense_Item Edit method
    public function ExpenseItemEdit($id){
        $expense_item = ExpenseItem::find($id);
        if($expense_item){
            return response()->json(['expense_item' =>$expense_item]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
    } // end edit


    // Update Method
    public function ExpenseItemUpdate(Request $request,$id){
        //dd($request->all());
        $expense_item = ExpenseItem::find($id);
        if(!$expense_item){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'expense_item_name'   => 'required',
            'quantity'            => 'required',
            'price'               => 'required',

        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $expense_item->expense_item_name      = $request->input('expense_item_name');
            $expense_item->quantity               = $request->input('quantity');
            $expense_item->price                  = $request->input('price');

            $expense_item->update();
            return response()->json(['message' => 'updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }

    }// update end


   // Expense_Item Delete

    public function ExpenseItemUpdateDelete($id){

        $expense_item = ExpenseItem::find($id);
        $expense_item->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    } // end delete method



   // ****************************** Expense Crud start****************************//

    // Expense Add
    public function ExpenseAdd(){
        $employee = Employee::orderBy('name','ASC')->get();
        $expenseitems = ExpenseItem::orderBy('expense_item_name','ASC')->get();
        return view('backend.expense.expense_view',compact('employee','expenseitems'));
    }


    // Expense Store
    public function ExpenseStore(Request $request){

    //    dd($request->all());

        $validator = Validator::make($request->all(),[
            'outlet_id'                 => 'required',
            'employee_id'               => 'required',
            'expense_items.*'           => 'required',
            'expense_items_quantity.*'  => 'required',
            'expense_items_price.*'     => 'required',
            'amount'                    => 'required|numeric',
            'image'                     => 'required|image',
            'note'                      => 'required',
            'added_by'                  => 'required',

        ]);


        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        $save_url = null;
        if($request->hasFile('image') && $request->image->isValid())
        {
            // image upload & save
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400)->save('upload/expense/image/'.$name_gen);
            $save_url = 'upload/expense/image/'.$name_gen;
        }


        try{
            $total_amount = 0 ;
            foreach($request->input('expense_items_quantity') as $key => $quantity){
                $total_amount += $quantity * $request->input('expense_items_price')[$key];
            }
            DB::beginTransaction();
            $expenseData =array(
                'outlet_id'  => $request->input('outlet_id'),
                'employee_id' => $request->input('employee_id'),
                'total_amount' => $total_amount,
                'note'        => $request->input('note'),
                // 'added_by'    => $request->input('added_by'),
                'added_by'    => 1,
                'image'       => $save_url ,
            );

            $expense = Expense::create($expenseData);
            foreach($request->input('expense_items') as $key => $expense_item){
                $expenseItemData = array(
                    'expense_id'             => $expense->id,
                    'expense_item_name'      => $expense_item,
                    'quantity'               => $request->input('expense_items_quantity')[$key],
                    'price'                  => $request->input('expense_items_price')[$key],
                );
                ExpenseItem::create($expenseItemData);
            }

            DB::commit();
            return response()->json(['message' => 'Added Successfully']);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error'=> "Some Error Occured Please Try Again!"],500);
        }
    } // end store

    //View Method
    public function ExpenseView(){
        $expenses = ExpenseResource::collection(Expense::with(['expenseitem','employee'])->get());
        return response()->json([
            'expenses' => $expenses,
        ]);
    } // end view


    // Edit Method
    public function ExpenseEdit($id){
        $expense = Expense::with("expenseitem",'employee')->find($id);
        if($expense){
            return response()->json(['expense' =>$expense]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
    } // end edit

    //update Method
    public function ExpenseUpdate(Request $request,$id){
        // dd($request->all());


        $expense = Expense::with("expenseitem",'employee')->find($id);


        $save_url = $expense->image;
        if($request->hasFile('image') && $request->image->isValid())
        {

            $this->removePreviousImage($expense->image);

            // image upload & save
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400)->save('upload/expense/image/'.$name_gen);
            $save_url = 'upload/expense/image/'.$name_gen;
        }


        try{

            DB::beginTransaction();
            ///first remove previous expense item from database
            ExpenseItem::where('expense_id',$expense->id)->delete();


            $total_amount = 0 ;
            foreach($request->input('expense_items_quantity') as $key => $quantity){
                $total_amount += $quantity * $request->input('expense_items_price')[$key];
            }

            ///
            $expenseData =array(
                'outlet_id'  => $request->input('outlet_id'),
                'employee_id' => $request->input('employee_id'),
                'total_amount' => $total_amount,
                'note'        => $request->input('note'),
                // 'added_by'    => $request->input('added_by'),
                'added_by'    => 1,
                'image'       => $save_url ,
            );

            $expense->update($expenseData);
            foreach($request->input('expense_items') as $key => $expense_item){

                $expenseItemData = array(
                    'expense_id'             => $expense->id,
                    'expense_item_name'      => $expense_item,
                    'quantity'               => $request->input('expense_items_quantity')[$key],
                    'price'                  => $request->input('expense_items_price')[$key],
                );
                ExpenseItem::create($expenseItemData);
            }
            DB::commit();
            return response()->json(['message' => 'Updated Successfully']);

        }catch(Exception $e){
            DB::rollback();
            return response()->json(['error'=> "Some Error Occured Please Try Again!"],500);
        }
        // dd($expense);

    } //update end

    private function removePreviousImage($image){
           if(file_exists(public_path($image))){
               unlink(public_path($image));
               return true;
           }
          return false;
    }


     // Expense Delete

     public function ExpenseDelete($id){

        $expense = Expense::find($id);
        $expense->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    } // end delete method



} // main method end
