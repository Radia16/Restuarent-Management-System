<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Outlett\OutlettController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;



// Pronoy
use App\Http\Controllers\Backend\FoodMenuCategoryController;
use App\Http\Controllers\Backend\FoodMenuController;
use App\Http\Controllers\Backend\IngredientCategoriesController;
use App\Http\Controllers\Backend\IngredientUnitsController;
use App\Http\Controllers\Backend\IngredientController;


// Faruk
use App\Http\Controllers\Backend\OutletController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Backend\TransferController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FoodController;
use App\Http\Controllers\Backend\FoodVarientController;
use App\Http\Controllers\Backend\FoodAvailablityController;
use App\Http\Controllers\Backend\MenuTypeController;



// Radia
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\Payment\PaymentMethodController;
use App\Http\Controllers\Employee\DepartmentController;
use App\Http\Controllers\Backend\AwardController;
use App\Http\Controllers\Backend\LeaveController;
use App\Http\Controllers\Backend\RecuitmentController;

 // reltionship acche department er sathy tai employee folder er vitor

// Bappa
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockAdjustmentController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\Backend\TabController;
use App\Http\Controllers\Backend\Third_party_customersController;
use App\Http\Controllers\Backend\Card_terminalController;
use App\Http\Controllers\Backend\KitchenListController;
use App\Http\Controllers\Backend\CustomerController;





use App\Http\Controllers\SupplierDuePaymentController;

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UnavailableDayController;
use App\Http\Controllers\ReservationSettingController;

use App\Http\Controllers\Backend\Payment\PaymentSetupController;
use App\Http\Controllers\Backend\payment\ShippingMethodSettingController;

use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\CustomerTypeListController;
use App\Http\Controllers\Backend\SmsConfigController;
use App\Http\Controllers\Backend\SmsTemplateController;
use App\Http\Controllers\NexmoSMSController;

use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Backend\KitchenAssignController;

Route::get('/', function () {
    return view('auth.admin.login');
});
 Auth::routes();
 //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//////////////////////////  User Login Start //////////////////////////////////////////////////
Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','auth.user.login')->name('login');
          Route::view('/register','auth.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });
    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','auth.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

//////////////////////////  User Login end //////////////////////////////////////////////////



///////////  Admin routes Start ////////////
Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','auth.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','admin.index')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });
});////////////  Admin Login End //////////
///////////  outlett routes Start ////////////
Route::prefix('outlett')->name('outlett.')->group(function(){
    Route::middleware(['guest:outlett','PreventBackHistory'])->group(function(){
        Route::view('/login','auth.outlett.login')->name('login');
        Route::post('/check',[OutlettController::class,'check'])->name('check');
    });
    Route::middleware(['auth:outlett','PreventBackHistory'])->group(function(){
        Route::view('/home','auth.outlett.home')->name('home');
        Route::post('/logout',[OutlettController::class,'logout'])->name('logout');
    });
});////////////  outlett Login End //////////
/////////// Employee Login Start ///////////////
Route::prefix('employee')->name('employee.')->group(function(){
       Route::middleware(['guest:employee','PreventBackHistory'])->group(function(){
            Route::view('/login','auth.employee.login')->name('login');
            Route::view('/register','dashboard.employee.register')->name('register');
            Route::post('/create',[EmployeeController::class,'create'])->name('create');
            Route::post('/check',[EmployeeController::class,'check'])->name('check');
       });
       Route::middleware(['auth:employee','PreventBackHistory'])->group(function(){
            Route::view('/home','auth.employee.home')->name('home');
            Route::post('logout',[EmployeeController::class,'logout'])->name('logout');
       });
});////////  Employee Login End //////////
////// Super Admin Login Start ////////////
Route::prefix('superadmin')->name('superadmin.')->group(function(){
    Route::middleware(['guest:superadmin','PreventBackHistory'])->group(function(){
         Route::view('/login','auth.superadmin.login')->name('login');
         Route::view('/register','auth.superadmin.register')->name('register');
         Route::post('/create',[SuperAdminController::class,'create'])->name('create');
         Route::post('/check',[SuperAdminController::class,'check'])->name('check');
    });
    Route::middleware(['auth:superadmin','PreventBackHistory'])->group(function(){
         Route::view('/home','auth.superadmin.home')->name('home');
         Route::post('logout',[SuperAdminController::class,'logout'])->name('logout');
    });
//////////////  Super Admin Login end //////////////////
Route::get('/deshboard', [SuperAdminController::class, 'SuperAdminDeshbordShow'])->name('deshboard');  //Add customer_type_list

});//////////////  Super Admin Login end //////////////////




//////////////////////////////////  Food Menu Category Start //////////////////////////////////////////////

//Food Menu Category Add
Route::prefix('foodmenu')->name('foodmenucategory.')->group(function(){
    Route::get('/add',[FoodMenuCategoryController::class, 'create'])->name('add');
    Route::post('/store',[FoodMenuCategoryController::class, 'store'])->name('store');  //Food Menu Store
    Route::get('/view',[FoodMenuCategoryController::class, 'view'])->name('view');//Food Menu View
    Route::get('/edit/{id}',[FoodMenuCategoryController::class, 'edit'])->name('edit');   //Food Menu Edit
    Route::post('/update',[FoodMenuCategoryController::class, 'update'])->name('update'); //Food Menu Update
    Route::get('/delete/{id}',[FoodMenuCategoryController::class, 'destroy'])->name('delete');  //Food Menu Category Delete
});

//////////////////////////////////  Food Menu Category End //////////////////////////////////////////////

//////////////////////////////////  Food Menu Start ////////////////////////////////////////////////////

//////////////////////////////////  Food Menu Start ////////////////////////////////////////////////////

//Food Menu Add
Route::prefix('menu')->name('menu.')->group(function(){
    Route::get('/add',[FoodMenuController::class, 'create'])->name('add');
    Route::post('/store',[FoodMenuController::class, 'store'])->name('store'); //Menu Store
    Route::get('/view',[FoodMenuController::class, 'index'])->name('view');  //Menu View
    Route::get('/edit/{id}',[FoodMenuController::class,'edit'])->name('edit'); //Menu Edit
    Route::post('/update',[FoodMenuController::class,'update'])->name('update');   //Menu Update
    Route::get('/delete/{id}',[FoodMenuController::class, 'delete'])->name('delete');  //Menu Delete

});


//////////////////////////////////  Food Menu End ////////////////////////////////////////////////////


//////////////////////////////////  Food Menu End ////////////////////////////////////////////////////



//////////////////////////////////  Ingredient Start //////////////////////////////////////////////

//Ingredient
Route::prefix('ingredient')->name('ingredient.')->group(function(){
    Route::get('/view',[IngredientController::class, 'index'])->name('view'); //View
    Route::get('/add',[IngredientController::class, 'create'])->name('add');//Ingredient Store
    Route::post('/store',[IngredientController::class, 'store'])->name('store');//Ingredient Store
    Route::get('/edit/{id}/',[IngredientController::class, 'edit'])->name('edit'); //Ingredient  Edit
    Route::post('/update',[IngredientController::class, 'update'])->name('update');  //Ingredient Update
    Route::get('/delete/{id}',[IngredientController::class, 'destroy'])->name('destroy');
});


//////////////////////////////  Ingredient End //////////////////////////////////



////////////////////////////  Ingredient Categories Start ///////////////////////////



Route::prefix('ingredient/category')->name('ingredient.category.')->group(function(){
    Route::get('/add',[IngredientCategoriesController::class, 'create'])->name('add');
    Route::post('/store',[IngredientCategoriesController::class, 'store'])->name('store'); //Ingredient Categories Store
    Route::get('/view',[IngredientCategoriesController::class, 'index'])->name('view');//Ingredient Categories View
    Route::get('/edit/{id}',[IngredientCategoriesController::class, 'edit'])->name('edit'); //Ingredient Categories Edit
    Route::post('/update',[IngredientCategoriesController::class, 'update'])->name('update'); //Ingredient Categories  Update
    Route::get('/delete/{id}',[IngredientCategoriesController::class, 'destroy'])->name('delete');  //Ingredient Categories Delete

});


//////////////////////  Ingredient Categories End //////////////////////////


//////////////////////  Ingredient Unit Start ////////////////////////////////

//Ingredient Unit Add
Route::prefix('ingredientunit')->name('ingredientunit.')->group(function(){
    Route::get('/add',[IngredientUnitsController::class, 'create'])->name('add');
    Route::post('/store',[IngredientUnitsController::class, 'store'])->name('store');//Ingredient Unit Store
    Route::get('/view',[IngredientUnitsController::class, 'index'])->name('view'); //Ingredient Unit View
    Route::get('/edit/{id}',[IngredientUnitsController::class, 'edit'])->name('edit');//Ingredient Unit Edit
    Route::post('/update',[IngredientUnitsController::class, 'update'])->name('update'); //Ingredient Unit Update
    Route::get('/delete/{id}',[IngredientUnitsController::class, 'destroy'])->name('delete');//Ingredient Unit Delete
});

//////////////////////  Ingredient Unit End ////////////////////////////////

//**********Product Purchasing*********** */
Route::prefix('purchase')->name('purchase.')->group(function(){
    Route::get('/add', [PurchaseController::class, 'create'])->name('add');
    Route::post('/store', [PurchaseController::class, 'store'])->name('store'); //Store purchase
    Route::get('view',[PurchaseController::class,'view'])->name('view');//Purchase view
    Route::get('/edit/{id}',[PurchaseController::class,'PurchaseEdit'])->name('edit'); //Purchase Edit
    Route::post('/update',[PurchaseController::class,'PurchaseUpdate'])->name('update');  //Purchase Update
    Route::post('/delete',[PurchaseController::class,'PurchaseDelete'])->name('delete'); //Purchase Delete
});//**********end Product Purchasing*********** */



//******************************************   Product Supplier   *************************************************** */
//Add Supplier
Route::prefix('supplier')->name('supplier.')->group(function(){
    Route::get('add', [SupplierController::class, 'SupplierAdd'])->name('add');
    Route::post('/store', [SupplierController::class, 'SupplierStore'])->name('store'); //Store Supplier
    Route::get('view',[SupplierController::class,'SupplierView'])->name('view'); //Supplier view
    Route::get('/edit/{id}',[SupplierController::class,'SupplierEdit'])->name('edit');  //Supplier Edit
    Route::post('/update',[SupplierController::class,'SupplierUpdate'])->name('update');//Supplier Update
    Route::post('/delete',[SupplierController::class,'SupplierDelete'])->name('delete'); //Supplier Delete
});

//*******************   Stock   ****************** */
Route::prefix('stock')->name('stock.')->group(function(){
    Route::get('add', [StockController::class, 'StockAdd'])->name('add');
    Route::post('/store', [StockController::class, 'StockStore'])->name('store'); //Store Stock
    Route::get('view',[StockController::class,'StockView'])->name('view');  //Stock view view
    Route::get('/edit/{id}',[StockController::class,'StockEdit'])->name('edit');//Stock Edit
    Route::post('/update',[StockController::class,'StockUpdate'])->name('update');  //Stock Update
    Route::post('/delete',[StockController::class,'StockDelete'])->name('delete'); //Stock Delete
});//************** end   Stock   ********/

//*************  Table    **************/
Route::prefix('table')->name('table.')->group(function(){
    Route::get('add', [TableController::class, 'TableAdd'])->name('add');// table add
    Route::post('store', [TableController::class, 'TableStore'])->name('store');//Store Table
});
//************* end Table    **************/






//****************** Stock Addjustment **************** */
Route::prefix('stock_adj')->name('stock_adj.')->group(function(){
    Route::get('/add', [StockAdjustmentController::class, 'StockAdjustmentAdd'])->name('.add');
    Route::post('/store', [StockAdjustmentController::class, 'StockAdjustmentStore'])->name('store'); //Store Stock Addjustment
    Route::get('view',[StockAdjustmentController::class,'StockAdjustmentView'])->name('view');   //Stock view Addjustment
    Route::get('/edit/{id}',[StockAdjustmentController::class,'StockAdjustmentEdit'])->name('edit'); //Stock Edit Addjustment
    Route::post('/update',[StockAdjustmentController::class,'StockAdjustmentUpdate'])->name('update');  //Stock Update Addjustment
    Route::post('/delete',[StockAdjustmentController::class,'StockAdjustmentDelete'])->name('delete');//Stock Delete Addjustment
});//Stock Addjustmen



// Radia
/// ........................................ Customer Crud Start ..............................//
//User Add
Route::prefix('user')->name('customer.')->group(function(){
    Route::get('/add',[UserController::class , 'CustomerAdd'])->name('add');
    Route::post('/store',[UserController::class, 'CustomerStore'])->name('store');// User store
    Route::get('/view', [UserController::class, 'CustomerView'])->name('view');// User View
    Route::get('/edit/{id}', [UserController::class, 'CustomerEdit'])->name('edit');// User Edit
    Route::post('/update', [UserController::class, 'CustomerUpdate'])->name('update');// User Update
    Route::get('/delete/{id}', [UserController::class, 'CustomerDelete'])->name('delete');// User Delete
});
/// ........................................ Customer Crud end ..............................//


/// ........................................ Expense & Expense ItemCrud Start ..............................//
Route::prefix('expense')->group(function(){
    //Expense Crud start
    Route::get('/add',[ExpenseController::class , 'ExpenseAdd'])->name('expense.add'); //Expense Add
    Route::post('/store',[ExpenseController::class, 'ExpenseStore']);
    Route::get('/view', [ExpenseController::class, 'ExpenseView']);
    Route::get('/edit/{id}', [ExpenseController::class, 'ExpenseEdit']);
    Route::post('/update/{id}', [ExpenseController::class, 'ExpenseUpdate']);
    Route::delete('/delete/{id}', [ExpenseController::class, 'ExpenseDelete']);
});

 //expanse item route
 Route::prefix('expenseitem')->name('expenseitem.')->group(function(){
    Route::get('/add',[ExpenseController::class , 'ExpenseItemAdd'])->name('add');
    Route::post('/store',[ExpenseController::class, 'ExpenseItemStore']);
    Route::get('/view',[ExpenseController::class, 'ExpenseItemView']);
    Route::get('/edit/{id}',[ExpenseController::class, 'ExpenseItemEdit']);
    Route::put('/update/{id}',[ExpenseController::class, 'ExpenseItemUpdate']);
    Route::delete('/delete/{id}',[ExpenseController::class, 'ExpenseItemUpdateDelete']);
}); //end expanse item route
/// ........................................ Expense & Expense ItemCrud end ..............................//


/// ........................................ Payment Method Crud start ..............................//
Route::prefix('payment')->name('payment.')->group(function(){
    Route::get('/add',[PaymentMethodController::class , 'PaymentAdd'])->name('add');//payment Add
    Route::post('/store',[PaymentMethodController::class, 'PaymentStore'])->name('store');// payment store
    Route::get('/view', [PaymentMethodController::class, 'PaymentView'])->name('view');// payment View
    Route::get('/edit/{id}', [PaymentMethodController::class, 'PaymentEdit'])->name('edit');// payment Edit
    Route::post('/update', [PaymentMethodController::class, 'PaymentUpdate'])->name('update');// payment Update
    Route::get('/delete/{id}', [PaymentMethodController::class, 'PaymentDelete'])->name('delete');// payment Delete
});/// ........................................ Payment Method Crud end ..............................//



// ........................................ Employee Crud Start ..............................//
Route::prefix('employee')->name('employee.')->group(function(){
    Route::get('/add',[EmployeeController::class , 'EmployeeAdd'])->name('add');  // employee store
    Route::post('/store',[EmployeeController::class, 'EmployeeStore'])->name('store');   // employee store
    Route::get('/view', [EmployeeController::class, 'EmployeeView'])->name('view');   // employee View
    Route::get('/edit/{id}', [EmployeeController::class, 'EmployeeEdit'])->name('edit'); // employee Edit
    Route::post('/update', [EmployeeController::class, 'EmployeeUpdate'])->name('update'); // employee Update
    Route::get('/delete/{id}', [EmployeeController::class, 'EmployeeDelete'])->name('delete');  // Employee Delete
});// ........................................ Employee Crud end ..............................//



// ........................................ Department Crud start ..............................//
Route::prefix('department')->name('department.')->group(function(){
    Route::get('/add',[DepartmentController::class , 'DepAdd'])->name('add');//dep create
    Route::post('/store',[DepartmentController::class, 'DepStore']);//dep store
    Route::get('/view', [DepartmentController::class, 'DepView']);
    Route::get('/edit/{id}', [DepartmentController::class, 'DepEdit']); // dep Edit
    Route::put('/update/{id}', [DepartmentController::class, 'DepUpdate']); // dep Update
    Route::delete('/delete/{id}', [DepartmentController::class, 'DepDelete']);    // dep Delete
});
// Department Crud end //

/// ........................................ designation Crud Start ..............................//
Route::prefix('designation')->name('designation.')->group(function(){

    Route::get('/add',[DepartmentController::class, 'AddDesignation'])->name('add');
    Route::post('/store',[DepartmentController::class, 'StoreDesignation']);
    Route::get('/view',[DepartmentController::class, 'ViewDesignation']);
    Route::get('/edit/{id}',[DepartmentController::class, 'EditDesignation']);
    Route::put('/update/{id}',[DepartmentController::class, 'UpdateDesignation']);
    Route::post('/delete/{id}',[DepartmentController::class, 'DeleteDesignation']);
});
/// ........................................ designation Crud end ..............................//

/// ........................................ Award Crud Start ..............................//
Route::prefix('award')->name('award.')->group(function(){

    Route::get('/add',[AwardController::class, 'AddAward'])->name('add');
    Route::post('/store',[AwardController::class, 'StoreAward']);
    Route::get('/view',[AwardController::class, 'ViewAward']);
    Route::get('/edit/{id}',[AwardController::class, 'EditAward']);
    Route::put('/update/{id}',[AwardController::class, 'UpdateAward']);
    Route::delete('/delete/{id}',[AwardController::class, 'DeleteAward']);
});
/// ........................................ Award Crud end ..............................//


/// ........................................ Leave Crud Start ..............................//
Route::prefix('leave')->name('leave.')->group(function(){

    //................................... leave type start..........................//
    Route::get('/add',[LeaveController::class, 'AddLeave'])->name('add');
    Route::post('/store',[LeaveController::class, 'StoreLeave']);
    Route::get('/view',[LeaveController::class, 'ViewLeave']);
    Route::get('/edit/{id}',[LeaveController::class, 'EditLeave']);
    Route::put('/update/{id}',[LeaveController::class, 'UpdateLeave']);
    Route::delete('/delete/{id}',[LeaveController::class, 'DeleteLeave']);


    //................................... leave application start..........................//
    Route::get('/appadd',[LeaveController::class, 'AddLeaveApplication'])->name('appadd');
    Route::post('/appstore',[LeaveController::class, 'StoreLeaveApplication']);
    Route::get('/appview',[LeaveController::class, 'ViewLeaveApplication']);
    Route::get('/appedit/{id}',[LeaveController::class, 'EditLeaveApplication']);
    Route::put('/appupdate/{id}',[LeaveController::class, 'UpdateLeaveApplication']);
    Route::delete('/appdelete/{id}',[LeaveController::class, 'DeleteLeaveApplication']);

});

/// ........................................ Holiday Crud Start ..............................//
Route::prefix('holiday')->name('holiday.')->group(function(){

    Route::get('/add',[LeaveController::class, 'AddHoliday'])->name('add');
    Route::post('/store',[LeaveController::class, 'StoreHoliday']);
    Route::get('/view',[LeaveController::class, 'ViewHoliday']);
    Route::get('/edit/{id}',[LeaveController::class, 'EditHoliday']);
    Route::put('/update/{id}',[LeaveController::class, 'UpdateHoliday']);
    Route::delete('/delete/{id}',[LeaveController::class, 'DeleteHoliday']);

});
/// ........................................ Holiday Crud end ..............................//

/// ........................................ Weekend Crud Start ..............................//
Route::prefix('weekend')->name('weekend.')->group(function(){

    Route::get('/add',[LeaveController::class, 'AddWeekend'])->name('add');
    Route::post('/store',[LeaveController::class, 'StoreWeekend'])->name('store');
    Route::get('/view',[LeaveController::class, 'ViewWeekend'])->name('view');
    Route::get('/edit/{id}',[LeaveController::class, 'EditWeekend']);
    Route::get('/update',[LeaveController::class, 'UpdateWeekend']);
    // Route::delete('/delete/{id}',[LeaveController::class, 'DeleteHoliday']);

});
/// ........................................ weekend Crud end ..............................//

/// ........................................ Recruitment Crud start ..............................//
Route::prefix('recruitment')->name('recruitment.')->group(function(){

    // Add Candidate Routes
    Route::get('/caninfo/add',[RecuitmentController::class, 'CandidateAdd'])->name('add_candidate');
    Route::post('/caninfo/store',[RecuitmentController::class, 'CandidateStore'])->name('store_candidate');
    Route::get('/caninfo/manage',[RecuitmentController::class, 'CandidateView'])->name('manage_candidate');
    Route::get('/caninfo/edit/{id}',[RecuitmentController::class, 'CandidateEdit'])->name('edit_candidate');
    Route::post('/caninfo/update/{id}', [RecuitmentController::class, 'CandidateUpdate'])->name('update_candidate');
    Route::get('/caninfo/delete/{id}', [RecuitmentController::class, 'CandidateDelete'])->name('del_candidate');
    //for showing particular page
    Route::get('/caninfo/view/{id}',[RecuitmentController::class, 'CandidateViewPage'])->name('view_candidate');

    // Candidate Shortlist Routes
    Route::get('/shortlist/add',[RecuitmentController::class, 'AddShortlist'])->name('add_shortlist');
    Route::post('/shortlist/store',[RecuitmentController::class, 'StoreShortlist']);
    Route::get('/shortlist/view',[RecuitmentController::class, 'ShortlistView']);
    Route::get('/shortlist/edit/{id}',[RecuitmentController::class, 'EditShortlist']);
    Route::put('/shortlist/update/{id}',[RecuitmentController::class, 'UpdateShortlist']);
    Route::delete('/shortlist/delete/{id}',[RecuitmentController::class, 'DeleteShortlist']);

    //for dynamic data route
    Route::get('/caninfo/{candidate_id}',[RecuitmentController::class,'DynamicData']);



    // Interview Routes
    Route::get('/interview/add',[RecuitmentController::class, 'AddInterview'])->name('interview');
    Route::get('/getCandiates',[RecuitmentController::class, 'getCandidates']);//for ajax
    Route::get('/getShortListViaCandidate/{candidate_id}',[RecuitmentController::class, 'getShortListViaCandidateId']);//for ajax
    Route::post('/interview/store',[RecuitmentController::class, 'StoreInterview']);
    Route::get('/interview/view',[RecuitmentController::class, 'ViewInterview']);
    Route::get('/interview/edit/{id}',[RecuitmentController::class, 'EditInterview']);
    Route::put('/interview/update/{id}',[RecuitmentController::class, 'UpdateInterview']);
    Route::delete('/interview/delete/{id}',[RecuitmentController::class, 'DeleteInterview']);


    // Candidate Selection Routes
    Route::get('/select/add',[RecuitmentController::class, 'AddSelection'])->name('candidate_selection');
    Route::get('/getCandfrominterview',[RecuitmentController::class, 'getCandfrominterview']);//for ajax
    Route::get('/getInterviewlist/{candidate_id}',[RecuitmentController::class, 'getInterviewlist']);//for ajax
    Route::post('/select/store',[RecuitmentController::class, 'StoreSelection']);
    Route::get('/select/view',[RecuitmentController::class, 'ViewSelection']);
    Route::get('/select/edit/{id}',[RecuitmentController::class, 'EditSelection']);
    Route::put('/select/update/{id}',[RecuitmentController::class, 'UpdateSelection']);
    Route::delete('/select/delete/{id}',[RecuitmentController::class, 'DeleteSelection']);


});
/// ........................................ Recruitment Crud end ..............................//



// ..................... Outlet..................................//
Route::prefix('outlet')->name('outlet.')->group(function(){
    Route::get('/addoutlet', [OutletController::class, 'TotalOutletAdd'])->name('addoutlet');
    Route::get('/add', [OutletController::class, 'OutletAdd'])->name('add');
    Route::post('/store', [OutletController::class, 'OutletStore'])->name('store');
    Route::get('/view',[OutletController::class,'OutletView'])->name('view');
    Route::post('/delete',[OutletController::class,'OutletDelete'])->name('delete');
    // Route::get('deshboard/', [OutletController::class, 'OutletDeshbord'])->name('deshbord');
    Route::get('/edit/{id}',[OutletController::class,'OutletEdit'])->name('edit');
    Route::post('/update',[OutletController::class,'OutletUpdate'])->name('update');
});//////////// setting/////////////////

///////////settings/////////////
Route::prefix('settings')->name('settings.')->group(function(){
    Route::get('/desh', [SettingController::class, 'SettingtDesh'])->name('desh');
    Route::get('/add', [SettingController::class, 'SettingtAdd'])->name('show');
    Route::post('/store', [SettingController::class, 'SettingStore'])->name('store');
    Route::get('/view', [SettingController::class, 'SettingView'])->name('view');
});
///////////settings/////////////

///////////employeer deshboard/////////////
Route::get('employee/desh', [EmployeeController::class, 'EmployeeDesh'])->name('employee.deshbord');

////////// category part//////////
Route::prefix('category')->name('category.')->group(function(){
    Route::get('/add', [CategoryController::class, 'CategoryAdd'])->name('add');
    Route::post('store', [CategoryController::class, 'CategoryStore'])->name('store');
    Route::get('view', [CategoryController::class, 'CategoryView'])->name('view');
    Route::post('delete',[CategoryController::class,'CategoryDelete'])->name('delete');
    Route::get('edit/{id}',[CategoryController::class,'CategoryEdit'])->name('edit');
    Route::post('update',[CategoryController::class,'CategoryUpdate'])->name('update');
});////////// category part///////

///////////////// manage food /////
Route::prefix('food')->name('food.')->group(function(){
    Route::get('add', [FoodController::class, 'FoodAdd'])->name('add');
    Route::post('store', [FoodController::class, 'FoodStore'])->name('store');
    Route::get('view', [FoodController::class, 'FoodView'])->name('view');
    Route::post('delete',[FoodController::class,'FoodDelete'])->name('delete');
    Route::get('edit/{id}',[FoodController::class,'FoodEdit'])->name('edit');
    Route::post('update',[FoodController::class,'FoodUpdate'])->name('update');
});////////////////end  manage food /////

///////////foodvarient///////
Route::prefix('food/varient')->name('foodvarient.')->group(function(){
    Route::get('/add', [FoodVarientController::class, 'FoodVarientAdd'])->name('add');
    Route::post('store', [FoodVarientController::class, 'FoodVarientStore'])->name('store');
    Route::get('view', [FoodVarientController::class, 'FoodVarientView'])->name('view');
    Route::post('delete',[FoodVarientController::class,'FoodVarientDelete'])->name('delete');
    Route::get('edit/{id}',[FoodVarientController::class,'FoodVarientEdit'])->name('edit');
    Route::put('update',[FoodVarientController::class,'FoodVarientUpdate'])->name('update');
});///////////end foodvarient///////

///////////foodvarient///////
Route::prefix('food/availablity')->name('foodavailablity.')->group(function(){
    Route::get('/add', [FoodAvailablityController::class, 'FoodAvailablityAdd'])->name('add');
    Route::post('store', [FoodAvailablityController::class, 'FoodAvailablityStore'])->name('store');
    Route::get('/view', [FoodAvailablityController::class, 'FoodAvailablityView'])->name('view');
    Route::post('/delete/{$id}',[FoodAvailablityController::class,'FoodAvailablityDelete'])->name('delete');
    Route::get('edit/{id}',[FoodAvailablityController::class,'FoodAvailablityEdit'])->name('edit');
    Route::post('update',[FoodAvailablityController::class,'FoodAvailablityUpdate'])->name('update');
});///////////end foodvarient///////

///////////foodmenutype///////
Route::prefix('food/menutype')->name('menutype.')->group(function(){
    Route::get('/add', [MenuTypeController::class, 'MenuTypeAdd'])->name('add');
    Route::post('store', [MenuTypeController::class, 'MenuTypeStore'])->name('store');
    Route::get('view', [MenuTypeController::class, 'MenuTypeView'])->name('view');
    Route::post('delete',[MenuTypeController::class,'MenuTypeDelete'])->name('delete');
    Route::get('edit/{id}',[FoodVarientController::class,'FoodVarientEdit'])->name('edit');
    Route::post('update',[FoodVarientController::class,'FoodVarientUpdate'])->name('update');
});///////////end foodvarient///////

///////////////////////////////////////////menutype/////////////////////////////////
//********Reservation*********/
Route::prefix('reservation')->name('reservation.')->group(function(){
    Route::get('add', [ReservationController::class, 'ReservationAdd'])->name('add'); //Add Reservation
    Route::post('store', [ReservationController::class, 'ReservationStore'])->name('store');  //Store Table
    Route::get('view',[ReservationController::class,'ReservationView'])->name('view');  //Reservation view
    Route::get('edit/{id}',[ReservationController::class,'ReservationEdit'])->name('edit');  //Reservation Edit
    Route::post('update',[ReservationController::class,'ReservationUpdate'])->name('update');  //Reservation Update
    Route::post('delete',[ReservationController::class,'ReservationDelete'])->name('delete');  //Reservation Delete
});//*********end Reservation ************/

//********unavailable_day*********/
Route::prefix('unavailable_day')->name('unavailable_day.')->group(function(){
    Route::get('/add', [UnavailableDayController::class, 'UnavailableDayAdd'])->name('add');   //Add Unavailable Day
    Route::post('store', [UnavailableDayController::class, 'UnavailableDayStore'])->name('store'); //Store Unavailable Day
    Route::get('view',[UnavailableDayController::class,'UnavailableDayView'])->name('view');  // view Unavailable Day
    Route::get('edit/{id}',[UnavailableDayController::class,'UnavailableDayEdit'])->name('edit');  //Edit Unavailable Day
    Route::post('update',[UnavailableDayController::class,'UnavailableDayUpdate'])->name('update'); //Update Unavailable Day
    Route::post('delete',[UnavailableDayController::class,'UnavailableDayDelete'])->name('delete');    // Delete Unavailable Day
});//********unavailable_day*********/

//******************Reservation Setting ***************************/
Route::prefix('reservation_setting')->name('reservation_setting.')->group(function(){
    Route::get('add', [ReservationSettingController::class, 'ReservationSettingAdd'])->name('add');  //Add Reservation Setting
    Route::post('store', [ReservationSettingController::class, 'ReservationSettingStore'])->name('store'); //Store Reservation Setting
    Route::get('view',[ReservationSettingController::class,'ReservationSettingView'])->name('view');  // view Reservation Setting
    Route::get('edit/{id}',[ReservationSettingController::class,'ReservationSettingEdit'])->name('edit'); //Edit Reservation Setting
    Route::post('update',[ReservationSettingController::class,'ReservationSettingUpdate'])->name('update');  //Update Reservation Setting
    Route::post('delete',[ReservationSettingController::class,'ReservationSettingDelete'])->name('delete');  // Delete Unavailable Day
});
//*********end Reservation Setting********/

Route::prefix('supplier_p_due')->name('supplier_p_due.')->group(function(){
    Route::get('add', [SupplierDuePaymentController::class, 'SupplierDuePaymentAdd'])->name('add');  //Add Supplier Payment Due
    Route::post('store', [SupplierDuePaymentController::class, 'SupplierDuePaymentStore'])->name('store');   //Store Supplier Payment Due
    Route::get('view',[SupplierDuePaymentController::class,'SupplierDuePaymentView'])->name('view');   // view Store Supplier Payment Due
    Route::get('edit/{id}',[SupplierDuePaymentController::class,'SupplierDuePaymentEdit'])->name('edit'); //Edit Store Supplier Payment Due
    Route::post('update',[SupplierDuePaymentController::class,'SupplierDuePaymentUpdate'])->name('update'); // Update Supplier Payment Due
    Route::post('delete',[SupplierDuePaymentController::class,'SupplierDuePaymentDelete'])->name('delete');//Delete Supplier Payment Due
});

//********Table****************/
Route::prefix('table')->name('table.')->group(function(){
    Route::get('/add', [TableController::class, 'TableAdd'])->name('add');// table create
    Route::post('/store', [TableController::class, 'TableStore'])->name('store');// table store
    Route::get('/view',[TableController::class,'TableView'])->name('view');// table view
    Route::get('/edit/{id}',[TableController::class,'TableEdit'])->name('edit');// table edit
    Route::post('/update',[TableController::class,'TableUpdate'])->name('update'); // table update
    Route::post('/delete',[TableController::class,'TableDelete'])->name('delete');  //Table Delete
});//******end Table************/

//******** Report ****************/
Route::prefix('report')->name('report.')->group(function(){
    Route::get('/stock-report-product-wise', [ReportController::class, 'stock_report_product_wise'])->name('stock_report_product_wise'); // stock_peport_product_wise
    Route::get('/stock-report-kitchen', [ReportController::class, 'stock_report_kitchen'])->name('stock_report_kitchen'); // stock_report_kitchen
    Route::get('/commission', [ReportController::class, 'commission'])->name('commission'); // sell_by_date
    Route::get('/sell-by-date', [ReportController::class, 'sell_by_date'])->name('sell_by_date'); // sell_by_date
    Route::get('/sell-report-items', [ReportController::class, 'sell_report_items'])->name('sell_report_items'); // sell_report_items
    Route::get('/service-charge-report', [ReportController::class, 'service_charge_report'])->name('service_charge_report'); // service_charge_report
    Route::get('/sell-report-waiters', [ReportController::class, 'sell_report_waiters'])->name('sell_report_waiters'); // sell_report_waiters
    Route::get('/kitchen-sell', [ReportController::class, 'kitchen_sell'])->name('kitchen_sell'); // kitchen_sell
    Route::get('/sell-report-delivery-type', [ReportController::class, 'sell_report_delivery_type'])->name('sell_report_delivery_type'); // sell_report_delivery_type
    Route::get('/sell-report-cashier', [ReportController::class, 'sell_report_cashier'])->name('sell_report_cashier'); // sell_report_cashier
    Route::get('/register-report', [ReportController::class, 'register_report'])->name('register_report'); // register report
    Route::get('/daily-summary-report', [ReportController::class, 'daily_summary_report'])->name('daily_summary_report'); // daily_summary_report
    Route::get('/stock-report', [ReportController::class, 'stock_report'])->name('stock_report'); // stock_report
    Route::get('/low-stock-report', [ReportController::class, 'low_stock_report'])->name('low_stock_report'); // food_sale_report
    Route::get('/profit-loss-report', [ReportController::class, 'profit_loss_report'])->name('profit_loss_report'); // profit_loss_report
    Route::get('/kitchen-performance-report', [ReportController::class, 'kitchen_performance_report'])->name('kitchen_performance_report'); // kitchen_performance_report
    Route::get('/supplier-due-report', [ReportController::class, 'supplier_due_report'])->name('supplier_due_report'); // supplier_due_report
    Route::get('/customer-due-report', [ReportController::class, 'customer_due_report'])->name('customer_due_report'); // customer_due_report
    Route::get('/purchase-report', [ReportController::class, 'purchase_report'])->name('purchase_report'); // purchase_report
    Route::get('/expense-report', [ReportController::class, 'expense_report'])->name('expense_report'); // expense_report
    Route::get('/waste-report', [ReportController::class, 'waste_report'])->name('waste_report'); // waste_report
    Route::get('/tax-report', [ReportController::class, 'tax_report'])->name('tax_report'); // tax_report

});
//******** Report End ****************/

//******** Search Report End ****************/
Route::prefix('report')->group(function(){

    Route::get('/purchase/report-search', [ReportSearchController::class, 'search'])->name('purchase.search'); // tax_report




Route::get('/crud', [ReportController::class, 'crud'])->name('crud'); // tax_report
Route::post('/crud', [ReportController::class, 'store'])->name('store'); // tax_report
});

//****************** Payment Method Setup ***************************/
      Route::prefix('payment_method_setup')->name('payment_method_setup.')->group(function(){
      Route::get('/add', [PaymentSetupController::class, 'PaymentMethodSetupAdd'])->name('add');  //Add Payment Method Setup
      Route::post('store', [PaymentSetupController::class, 'PaymentMethodSetupStore'])->name('store'); //Store Payment Method Setup
      Route::get('view',[PaymentSetupController::class,'PaymentMethodSetupView'])->name('view');  // view Payment Method Setup
      Route::get('edit/{id}',[PaymentSetupController::class,'PaymentMethodSetupEdit'])->name('edit'); //Edit Payment Method Setup
      Route::post('update',[ReservationSettingController::class,'ReservationSettingUpdate'])->name('update');  //Update Payment Method
      Route::get('/delete/{id}',[PaymentSetupController::class,'PaymentMethodSetupDelete'])->name('delete');  // Delete Payment Method Setup
    });//*********end Payment Method********/

//****************** Shipping Method Setting ***************************/
  Route::prefix('shipping_method_setting')->name('shipping_method_setting.')->group(function(){
  Route::get('/add', [ShippingMethodSettingController::class, 'ShippingMethodAdd'])->name('add');  //Add Shipping Method Setting
  Route::post('store', [ShippingMethodSettingController::class, 'ShippingMethodStore'])->name('store'); //Store Shipping Method Setting
  Route::get('view',[ShippingMethodSettingController::class,'ShippingMethodView'])->name('view');  // view Shipping Method Setting
  Route::get('edit/{id}',[ShippingMethodSettingController::class,'ShippingMethodEdit'])->name('edit'); //Edit Shipping Method Setting
    // Route::post('update',[ReservationSettingController::class,'ReservationSettingUpdate'])->name('update');  //Update Shipping Method Setting
 Route::get('/delete/{id}',[ShippingMethodSettingController::class,'ShippingMethodDelete'])->name('delete');  // Delete Shipping Method Setting
 });//*********end Payment Method********/

//****************** Tablee ***************************/
Route::prefix('tab')->name('tab.')->group(function(){
    Route::get('/add', [TabController::class, 'TabAdd'])->name('add');  //Add Table
    Route::post('/store', [TabController::class, 'TabStore'])->name('store'); //Store Table
    Route::get('view',[TabController::class,'TabView'])->name('view');  // view Table
    Route::get('/edit/{id}',[TabController::class,'TabEdit'])->name('edit'); //Edit Table
    Route::put('update',[TabController::class,'TabUpdate'])->name('update');  //Update Table
    Route::get('/delete/{id}',[TabController::class,'TabDelete'])->name('delete');  // Delete Table
});

//

//********sms route start****************/
Route::prefix('sms')->name('sms.')->group(function(){
    Route::get('/configaretion', [SmsConfigController::class, 'SmsConfig'])->name('configaretion');// table create
    Route::get('/template', [SmsTemplateController::class, 'SmsTemplate'])->name('template');// table create
    Route::post('/template/store', [SmsTemplateController::class, 'SmsTemplateStore'])->name('template.store');// table create
    Route::post('/delete', [SmsTemplateController::class, 'SmsTemplateDelete'])->name('delete');// table create
    Route::get('/edit/{id}', [SmsTemplateController::class, 'SmsEdit'])->name('edit');
    Route::post('/template/update/{id}', [SmsTemplateController::class, 'SmsTemplateUpdate'])->name('template.update');// table create
    Route::get('/sms', [NexmoSMSController::class, 'Sms'])->name('sms');
    Route::post('sendSMS', [NexmoSMSController::class, 'index'])->name('send.sms');// table create
});
//********sms route end****************/


//********attendace report route start****************/
Route::prefix('attendance')->name('attendance.')->group(function(){
    Route::get('/form', [AttendanceController::class, 'Attendanceform'])->name('form');// table create
    Route::post('/add', [AttendanceController::class, 'AttendanceAdd'])->name('add');// table create
    Route::get('/edit-attendance/{id}', [AttendanceController::class, 'AttendanceEditData']);// table create
    Route::post('/update-attendance/{id}', [AttendanceController::class, 'updateAttendance'])->name('update');// table create
    Route::get('/checkout/{id}', [AttendanceController::class, 'AttendanceCheckOut'])->name('checkout');// table create
    Route::post('/delete',[AttendanceController::class,'AttendanceDelete'])->name('delete');
    Route::get('/report', [AttendanceController::class, 'AttendanceReport'])->name('report');// table create
    Route::post('/report/id', [AttendanceController::class, 'ReportById'])->name('id');// table create
    Route::post('/report/day', [AttendanceController::class, 'ReportByDate'])->name('day');// table create
    Route::post('/report/month', [AttendanceController::class, 'ReportByMonth'])->name('month');// table create
    Route::post('/report/year', [AttendanceController::class, 'ReportByYear'])->name('year');// table create

});

//****************** Tablee ***************************/
Route::prefix('transfer')->name('transfer.')->group(function(){
    Route::get('/add', [TransferController::class, 'TransferAdd'])->name('add');  //Add Table
    Route::get('/transferType/{type}', [TransferController::class, 'getTransferTypeList']);  //for ajax request
    Route::get('/transferType/{type}/{transferItem_id}', [TransferController::class, 'getTransferItem']);  //for ajax request
    Route::post('/store', [TransferController::class, 'TransferOutletStore'])->name('store'); //Store Table
    Route::get('/view',[TransferController::class,'TransferOutletView'])->name('view');  // view Table

    Route::get('/show/{id}',[TransferController::class,'TransferOutletShow'])->name('show');  // view Table

    Route::post('/delete',[TransferController::class,'TransferOutletDelete'])->name('delete');  //Reservation Delete
    Route::get('/edit/{id}',[TransferController::class,'TransferOutletEdit'])->name('edit'); //Edit Table
    Route::post('update',[TransferController::class,'TransferOutletUpdate'])->name('update');  //Update Table

});




//****************** CustomerTypeList ***************************/
Route::prefix('customer_type_list')->name('customer_type_list.')->group(function(){
    // Route::get('/add', [CustomerTypeListController::class, 'Customer_type_listAdd'])->name('add');  //Add customer_type_list
     Route::post('/store', [CustomerTypeListController::class, 'Customer_type_listStore'])->name('store'); //Store customer_type_list
    Route::get('view',[CustomerTypeListController::class,'Customer_type_listView'])->name('view');  // view customer_type_list
    Route::get('/edit/{id}',[CustomerTypeListController::class,'Customer_type_listEdit'])->name('edit'); //Edit customer_type_list
    Route::put('update',[CustomerTypeListController::class,'Customer_type_listUpdate'])->name('update');  //Update Table
    Route::get('/delete/{id}',[CustomerTypeListController::class,'Customer_type_listDelete'])->name('delete');  // Delete Table
});




//****************** Third Party Customer ***************************/
Route::prefix('third_party_customer')->name('third_party_customer.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add customer_type_list
     Route::post('/store', [Third_party_customersController::class, 'Third_party_customerStore'])->name('store'); //Store customer_type_list
    Route::get('view',[Third_party_customersController::class,'Third_party_customerView'])->name('view');  // view customer_type_list
    Route::get('/edit/{id}',[Third_party_customersController::class,'Third_party_customerEdit'])->name('edit'); //Edit customer_type_list
    Route::put('update',[Third_party_customersController::class,'Third_party_customerUpdate'])->name('update');  //Update Table
    Route::get('/delete/{id}',[Third_party_customersController::class,'Third_party_customerDelete'])->name('delete');  // Delete Table
});


//****************** Card Terminal ***************************/
Route::prefix('third_party_customer')->name('third_party_customer.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add customer_type_list
     Route::post('/store', [Third_party_customersController::class, 'Third_party_customerStore'])->name('store'); //Store customer_type_list
    Route::get('view',[Third_party_customersController::class,'Third_party_customerView'])->name('view');  // view customer_type_list
    Route::get('/edit/{id}',[Third_party_customersController::class,'Third_party_customerEdit'])->name('edit'); //Edit customer_type_list
    Route::put('update',[Third_party_customersController::class,'Third_party_customerUpdate'])->name('update');  //Update Table
    Route::get('/delete/{id}',[Third_party_customersController::class,'Third_party_customerDelete'])->name('delete'); // Delete Table





});


//****************** Card Terminal ***************************/
Route::prefix('card_terminal')->name('card_terminal.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add Card Terminal
     Route::post('/store', [Card_terminalController::class, 'Card_terminalStore'])->name('store'); //Store Card Terminal
    Route::get('view',[Card_terminalController::class,'Card_terminalView'])->name('view');  // view Card Terminal
    Route::get('/edit/{id}',[Card_terminalController::class,'Card_terminalEdit'])->name('edit'); //Edit Card Terminal
    Route::put('update',[Card_terminalController::class,'Card_terminalUpdate'])->name('update');  //Update Card Terminal
    Route::get('/delete/{id}',[Card_terminalController::class,'Card_terminalDelete'])->name('delete'); // Delete Card Terminal





});





//****************** Kitchen List ***************************/
Route::prefix('kitchen_list')->name('kitchen_list.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add Kitchen List
     Route::post('/store', [KitchenListController::class, 'KitchenListStore'])->name('store'); //Store Kitchen List
    Route::get('view',[KitchenListController::class,'KitchenListView'])->name('view');  // view Kitchen List
    Route::get('/edit/{id}',[KitchenListController::class,'KitchenListEdit'])->name('edit'); //Edit Kitchen List
    Route::put('update',[KitchenListController::class,'KitchenListUpdate'])->name('update');  //Update Kitchen List
    Route::put('update',[KitchenListController::class,'KitchenListUpdate'])->name('update');  //Update Kitchen List
    Route::get('/delete/{id}',[KitchenListController::class,'KitchenListDelete'])->name('delete'); // Delete Kitchen List





});





//*************** Customer/User Crud Operation start ****//
//User Add
Route::prefix('user1')->name('customer2.')->group(function(){
    Route::get('/add',[CustomerController::class , 'Customer2Add'])->name('add');
    Route::post('/store',[CustomerController::class, 'Customer2Store'])->name('store');// User store
    Route::get('/view', [CustomerController::class, 'Customer2View'])->name('view');// User View
    // Route::get('/edit/{id}', [UserController::class, 'Customer2Edit'])->name('edit');// User Edit
    // Route::post('/update', [UserController::class, 'Customer2Update'])->name('update');// User Update
    // Route::get('/delete/{id}', [UserController::class, 'Customer2Delete'])->name('delete');// User Delete


});


//====================== Ingredient List Start ====================//

Route::prefix('ingredient-list')->name('ingredient-list.')->group(function(){

    Route::post('/store', [IngredientListController::class,'store'])->name('store'); //Ingredient List Store
    Route::get('/view',[IngredientListController::class,'view'])->name('view'); //Ingredient List View
    Route::get('/edit/{id}',[IngredientListController::class,'edit'])->name('edit');//Ingredient List Edit
    Route::post('/update',[IngredientListController::class,'update'])->name('update');//Ingredient List Update

});






//****************** Third Party Customer ***************************/
Route::prefix('third_party_customer')->name('third_party_customer.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add customer_type_list
     Route::post('/store', [Third_party_customersController::class, 'Third_party_customerStore'])->name('store'); //Store customer_type_list
    Route::get('view',[Third_party_customersController::class,'Third_party_customerView'])->name('view');  // view customer_type_list
    Route::get('/edit/{id}',[Third_party_customersController::class,'Third_party_customerEdit'])->name('edit'); //Edit customer_type_list
    Route::put('update',[Third_party_customersController::class,'Third_party_customerUpdate'])->name('update');  //Update Table
    Route::get('/delete/{id}',[Third_party_customersController::class,'Third_party_customerDelete'])->name('delete');  // Delete Table
});







//*************** Customer/User Crud Operation start ****//
//Customer Add
Route::prefix('user1')->name('customer2.')->group(function(){
    Route::get('/add',[CustomerController::class , 'Customer2Add'])->name('add');
    Route::post('/store',[CustomerController::class, 'Customer2Store'])->name('store');// User store
    Route::get('/view', [CustomerController::class, 'Customer2View'])->name('view');// User View
    Route::get('/edit/{id}', [CustomerController::class, 'Customer2Edit'])->name('edit');// User Edit
    Route::post('/update', [CustomerController::class, 'Customer2Update'])->name('update');// User Update
    Route::get('/delete/{id}', [CustomerController::class, 'Customer2Delete'])->name('delete');// User Delete


});



//****************** Kitchen List ***************************/
Route::prefix('kitchen_list')->name('kitchen_list.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add Kitchen List
     Route::post('/store', [KitchenListController::class, 'KitchenListStore'])->name('store'); //Store Kitchen List
    Route::get('view',[KitchenListController::class,'KitchenListView'])->name('view');  // view Kitchen List
    Route::get('/edit/{id}',[KitchenListController::class,'KitchenListEdit'])->name('edit'); //Edit Kitchen List
    Route::put('update',[KitchenListController::class,'KitchenListUpdate'])->name('update');  //Update Kitchen List
    Route::get('/delete/{id}',[KitchenListController::class,'KitchenListDelete'])->name('delete'); // Delete Kitchen List

});

//****************** Kitchen Assign setting***************************/
Route::prefix('kitchen_assigns')->name('kitchen_assign.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add Kitchen List
    Route::post('/store', [KitchenAssignController::class, 'KitchenAssignStore'])->name('store'); //Store Kitchen List
    Route::get('view',[KitchenAssignController::class,'KitchenAssignView'])->name('view');  // view Kitchen List
    Route::get('/edit/{id}',[KitchenAssignController::class,'KitchenAssignEdit'])->name('edit'); //Edit Kitchen List
    Route::put('update',[KitchenAssignController::class,'KitchenAssignUpdate'])->name('update');  //Update Kitchen List
    Route::get('/delete/{id}',[KitchenAssignController::class,'KitchenAssignDelete'])->name('delete'); // Delete Kitchen List
});

//******************  Language ***************************//
Route::prefix('language')->name('language.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add Language
    Route::post('/store', [LanguageController::class, 'LanguageStore'])->name('store'); //Store Language
    Route::get('view',[LanguageController::class,'LanguageView'])->name('view');  // view Language
    Route::get('/edit/{id}',[LanguageController::class,'LanguageEdit'])->name('edit'); //Edit Language
    Route::put('update',[LanguageController::class,'LanguageUpdate'])->name('update');  //Update Language
    Route::get('/delete/{id}',[LanguageController::class,'LanguageDelete'])->name('delete'); // Delete Language
});

//******************  Application ***************************//
Route::prefix('application')->name('application.')->group(function(){
    Route::get('/add', [ApplicationController::class, 'ApplicationAdd'])->name('add');  //Add Application
    Route::post('/store', [ApplicationController::class, 'ApplicationStore'])->name('store'); //Store Application
    Route::get('view',[ApplicationController::class,'ApplicationView'])->name('view');  // view Application
    //  Route::get('/edit/{id}',[LanguageController::class,'LanguageEdit'])->name('edit'); //Edit Application
    //  Route::put('update',[LanguageController::class,'LanguageUpdate'])->name('update');  //Update Application
    // Route::get('/delete/{id}',[LanguageController::class,'LanguageDelete'])->name('delete'); // Delete Application
});


//****************** Tablee ***************************//
Route::prefix('transfer')->name('transfer.')->group(function(){
    Route::get('/add', [TransferController::class, 'TransferAdd'])->name('add');  //Add Table
    Route::get('/transferType/{type}', [TransferController::class, 'getTransferTypeList']);  //for ajax request
    Route::get('/transferType/{type}/{transferItem_id}', [TransferController::class, 'getTransferItem']);  //for ajax request
    Route::post('/store', [TransferController::class, 'TransferOutletStore'])->name('store'); //Store Table
    Route::get('/view',[TransferController::class,'TransferOutletView'])->name('view');  // view Table
    Route::get('/show/{id}',[TransferController::class,'TransferOutletShow'])->name('show');  // view Table
    Route::post('/delete',[TransferController::class,'TransferOutletDelete'])->name('delete');  //Reservation Delete
    Route::get('/edit/{id}',[TransferController::class,'TransferOutletEdit'])->name('edit'); //Edit Table
    Route::post('update',[TransferController::class,'TransferOutletUpdate'])->name('update');  //Update Table

//********Table****************/.form
});




//****************** Card Terminal ***************************/
Route::prefix('card_terminal')->name('card_terminal.')->group(function(){
    // Route::get('/add', [Third_party_customersController::class, 'Third_party_customerAdd'])->name('add');  //Add Card Terminal
     Route::post('/store', [Card_terminalController::class, 'Card_terminalStore'])->name('store'); //Store Card Terminal
    Route::get('view',[Card_terminalController::class,'Card_terminalView'])->name('view');  // view Card Terminal
    Route::get('/edit/{id}',[Card_terminalController::class,'Card_terminalEdit'])->name('edit'); //Edit Card Terminal
    Route::put('update',[Card_terminalController::class,'Card_terminalUpdate'])->name('update');  //Update Card Terminal
    Route::get('/delete/{id}',[Card_terminalController::class,'Card_terminalDelete'])->name('delete'); // Delete Card Terminal
});




//********sms route start****************/
Route::prefix('sms')->name('sms.')->group(function(){
    Route::get('/configaretion', [SmsConfigController::class, 'SmsConfig'])->name('configaretion');// table create
    Route::get('/template', [SmsTemplateController::class, 'SmsTemplate'])->name('template');// table create
    Route::post('/template/store', [SmsTemplateController::class, 'SmsTemplateStore'])->name('template.store');// table create
    Route::post('/delete', [SmsTemplateController::class, 'SmsTemplateDelete'])->name('delete');// table create
    Route::get('/edit/{id}', [SmsTemplateController::class, 'SmsEdit'])->name('edit');
    Route::post('/template/update/{id}', [SmsTemplateController::class, 'SmsTemplateUpdate'])->name('template.update');// table create
    Route::get('/sms', [NexmoSMSController::class, 'Sms'])->name('sms');
    Route::post('sendSMS', [NexmoSMSController::class, 'index'])->name('send.sms');// table create
});
//********sms route end****************/
Route::prefix('sms')->name('sms.')->group(function(){
    Route::get('/configaretion', [SmsConfigController::class, 'SmsConfig'])->name('configaretion');// table create
    Route::get('/templete', [SmsConfigController::class, 'SmsTemplete'])->name('templete');// table create
});//******end Table************/

//****************** CustomerTypeList ***************************/
Route::prefix('outlet_deshbord')->name('outlet_deshbord.')->group(function(){
    Route::get('/show', [DeshbordController::class, 'OutletDeshbordShow'])->name('show');  //Add customer_type_list

});



// Route::resource('manage-pos',PosController::class);
