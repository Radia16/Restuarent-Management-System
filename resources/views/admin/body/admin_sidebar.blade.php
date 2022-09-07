<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				{{-- <li class="treeview">
				  <a href="#">
					<i class="icon-Home"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard</a></li>
				  </ul>
				</li> --}}
                <li>
                    <a href="{{route('superadmin.deshboard')}}">
                        <i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
                        <span>Dashboard</span>
                    </a>
                </li>

				<li class="treeview">
					<a href="#">
					  <i class="icon-Clipboard">
						  <span class="path1"></span>
						</i>
					  <span>Manage Report</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">

					  {{--  <li><a href="{{ route('crud')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crud</a></li>  --}}
					  <li><a href="{{ route('report.purchase_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Purchase Report</a></li>
					  <li><a href="{{ route('report.stock_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stock Report</a></li>

					  <li><a href="{{ route('report.stock_report_product_wise')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stock Report (Product Wise)</a></li>
					  <li><a href="{{ route('report.stock_report_kitchen')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stock Report (Kitchen)</a></li>
					  <li><a href="{{ route('report.commission')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Commission</a></li>
					  <li><a href="{{ route('report.sell_by_date')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sell By Date</a></li>
					  <li><a href="{{ route('report.sell_report_items')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sell Report Items</a></li>
					  <li><a href="{{ route('report.service_charge_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Service Charge Report</a></li>
					  <li><a href="{{ route('report.sell_report_waiters')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sell Report Waiters</a></li>
					  <li><a href="{{ route('report.kitchen_sell')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kitchen Sell</a></li>
					  <li><a href="{{ route('report.sell_report_delivery_type')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sell Report Delivery Type</a></li>
					  <li><a href="{{ route('report.sell_report_cashier')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sell Report Cashier</a></li>

					  <li><a href="{{ route('report.low_stock_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Low Stock Report</a></li>
					  <li><a href="{{ route('report.profit_loss_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Profit Loss Report</a></li>
					  <li><a href="{{ route('report.kitchen_performance_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kitchen Performance Report</a></li>
					  <li><a href="{{ route('report.supplier_due_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Supplier Due Report</a></li>
					  <li><a href="{{ route('report.customer_due_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer Due Report</a></li>
					  <li><a href="{{ route('report.expense_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Expense Report</a></li>
					  <li><a href="{{ route('report.waste_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Waste Report</a></li>
					  <li><a href="{{ route('report.tax_report')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tax Report</a></li>





					</ul>
				  </li>

				<li class="treeview">
				  <a href="#">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Manage Outlet</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
                    <li><a href="{{ route('outlet.addoutlet') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Total Outlet</a></li>
					<li><a href="{{ route('outlet_deshbord.show') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Outlet Deashboard</a></li>
					<li><a href="{{ route('outlet.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Outlet</a></li>
					<li><a href="{{ route('outlet.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>view Outlet</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
					<span>Manage POS</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					{{-- <li><a href="{{route('manage-pos.index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>POS</a></li> --}}

					<li><a href="menu_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar</a></li>

					<li><a href="menu_categories.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kitchen</a></li>

					<li><a href="menu_categories.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Waiter</a></li>
				  </ul>
				</li>
				<li class="treeview">
					<a href="#">
					  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					  <span>Manage Ingredient</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
					  <li><a href="{{route('ingredient.category.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ingredient Category</a></li>
					  <li><a href="{{route('ingredientunit.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ingredient Units</a></li>
					  <li><a href="{{route('ingredient.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ingredients </a></li>
					  <li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modifiers</a></li>


					</ul>
				  </li>

				<li class="treeview">
					<a href="#">
					  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					  <span>Manage Food Menu</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
					  <li><a href="{{route('foodmenucategory.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Food Menu Category</a></li>
					  <li><a href="{{route('menu.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Food Menus</a></li>
					</ul>
				</li>
				<li class="treeview">
					<a href="#">
					  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					  <span> Food Management </span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Category</a></li>

					  <li><a href="{{route('category.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Category</a></li>
					  <li><a href="{{route('category.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Category</a></li>

					</ul>

				</li>
				<li class="treeview">
					<a href="#">
					  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					  <span> Manage Food </span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>

					<ul class="treeview-menu">
					  <li><a href="{{route('food.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Food</a></li>
					  <li><a href="{{route('food.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Food</a></li>
					  <li><a href="{{route('foodvarient.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Food Varient</a></li>

					  <li><a href="{{route('foodavailablity.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Food Availablity view</a></li>
                      <li><a href="{{route('menutype.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Food Menu type</a></li>
					</ul>

				</li>


                <li class="treeview">
					<a href="#">
					  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
					  <span> Manage Transfer </span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>

					<ul class="treeview-menu">
					  <li><a href="{{route('transfer.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Transfer</a></li>
                      <li><a href="{{route('transfer.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Transfer</a></li>
					</ul>

				</li>


				<li class="treeview">
				  <a href="{{route('purchase.view')}}">
					<i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Purchase</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{route('purchase.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Purchase</a></li>
					<li><a href="{{route('purchase.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Purchase</a></li>
				  </ul>
				</li>
				<li class="treeview">
					<a href="#">
					  <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
					  <span>Manage Employee</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">

					  <li><a href="{{ route('employee.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Employee</a></li>
					  <li><a href="{{ route('employee.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Employee</a></li>
				      <li><a href="{{route('employee.deshbord')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Employee Deshboard</a></li>


					</ul>
				</li>
				<li>
					<a href="{{route('supplier.view')}}">
					  <i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
					  <span>Manage Supplier</span>
					</a>

				</li>

               <li class="treeview">
                  <a href="#">
                    <i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
                    <span>Manage Customer->User</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('customer.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Customer</a></li>
                        <li><a href="{{ route('customer.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Customer</a></li>
                    </ul>
                </li>

				<li>
                    <a href="{{route('table.view')}}">
                      <i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
                      <span>Manage Table</span>
                    </a>
                </li>

				<li>
                    <a href="{{ route('payment.view') }}"><i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
					  <span>Manage Payment Method</span>
					</a>
                  <ul class="treeview-menu">
                    <li><a href="analysis.html">
                        <i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>
                        <span>Transfer</span>
                      </a>
                   </li>
                 </ul>
				</li>





				<li class="treeview">
                    <a href="#">
                      <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                      <span>Setting Setting</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">


						<li class="treeview">
							<a href="#">
							  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
							  <span>Payment Setting</span>
							  <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							  </span>
							</a>
							<ul class="treeview-menu">

								<li><a href="{{ route('payment.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Payment Method List</a></li>
								<li><a href="{{ route('payment_method_setup.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Payment Setup</a></li>
								<li><a href="{{ route('shipping_method_setting.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Shipping Method Setting</a></li>



							</ul>
						</li>


						<li class="treeview">
							<a href="#">
							  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
							  <span>Manage Table</span>
							  <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							  </span>
							</a>
							<ul class="treeview-menu">

								<li><a href="{{ route('tab.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table List</a></li>



							</ul>
						</li>



						<li class="treeview">
							<a href="#">
							  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
							  <span>Customer Type</span>
							  <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							  </span>
							</a>
							<ul class="treeview-menu">

								<li><a href="{{ route('customer2.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer List</a></li>
								<li><a href="{{ route('customer_type_list.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer Type List</a></li>
								<li><a href="{{ route('third_party_customer.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Third Party Customers</a></li>
								<li><a href="{{ route('card_terminal.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Terminal List</a></li>




							</ul>
						</li>



						<li class="treeview">
							<a href="#">
							  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
							  <span>Kitchen Setting</span>
							  <span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							  </span>
							</a>
							<ul class="treeview-menu">

								<li><a href="{{ route('kitchen_list.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kitchen List</a></li>
								<li><a href="{{ route('kitchen_assign.view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kitchen Assign</a></li>
								<li><a href=""><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Kitchen Dashboard Setting</a></li>

							</ul>
						</li>




						<li class="treeview">
							<li><a href="{{ route('language.view') }}"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>Language</a></li>

						</li>


						<li class="treeview">
							<li><a href="{{ route('application.view') }}"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>Application Setting</a></li>

						</li>

					</ul>
                </li>


				<li class="treeview">
                    <a href="#">
                      <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                      <span>Reservation</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('reservation.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View Reservation</a></li>
                      <li><a href="{{route('reservation.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Reservation</a></li>
                      <li><a href="{{route('unavailable_day.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Unavailable Day</a></li>
                      <li><a href="{{route('reservation_setting.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Reservation Setting</a></li>
                    </ul>
                </li>

				<li class="treeview">
					<a href="{{route('purchase.view')}}">
					  <i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
					  <span>Setting</span>
					  <span class="pull-right-container">
						<i class="fa fa-angle-right pull-right"></i>
					  </span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{{route('settings.desh')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> setting desh</a></li>
					    <li><a href="{{route('settings.show')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>add setting</a></li>
					    <li><a href="{{route('settings.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>view setting</a></li>
					</ul>
				</li>


				<li class="treeview">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Sale</span>
				  </a>
                  <ul class="treeview-menu">
					<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sale 1</a></li>
				  </ul>

				</li>
				<li class="treeview">
				  <a href="">
					<i class="icon-Chat-locked"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Stock</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{route('stock.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stock</a></li>
					<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Food Menu Stock</a></li>
					<li><a href="{{route('stock_adj.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Stock Adjustments</a></li>
				  </ul>
				</li>

				<li class="treeview">
					<a href="#">
					  <i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					  <span>Waste</span>
					</a>
				</li>

				{{--  <li class="treeview">
				  <a href="#">
					<i class="icon-Chat-check"><span class="path1"></span><span class="path2"></span></i>
					<span>Manage Expense</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					 <li><a href="{{ route('expenseitem.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Expense Items</a></li>

				  </ul>
				</li>  --}}

				<li class="treeview">
                  <a href="#">
                    <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                    <span>Manage Due Payment</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                        <a href="{{route('supplier_p_due.view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Supplier Due Payments</a>
                    </li>
                    <li>
                        <a href="extra_profile.html"><i class="icon-Commit">
                            <span class="path1"></span><span class="path2"></span>
                        </i>Coustomer Due Payments</a>
                    </li>
                  </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                      <span>Manage Attendance</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('attendance.form') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Attendance Form</a></li>
                      <li><a href="{{route('attendance.report') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Attendance Report</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                        <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                      <span>Send Sms</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('sms.sms')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Send Sms</a></li>
                    </ul>
                  </li>
              <li class="treeview">
                <a href="#">
                  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                  <span>Manage Accounts & User</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Users</a></li>
                  <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chnage Profile</a></li>
                  <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Change Password</a></li>
                  <li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>LogOut</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                  <span>Human Resource</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                          <span>Manage Dep & Design</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('department.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Department</a></li>
                            <li><a href="{{ route('designation.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Designation</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('award.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Award</a></li>

                    <li class="treeview">
                        <a href="#"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <span>Leave</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('leave.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add LeaveType</a></li>
                            <li><a href="{{ route('leave.appadd') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Leave Applications</a></li>
                            <li><a href="{{ route('holiday.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Holiday</a></li>
                            <li><a href="{{ url('weekend/view') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weekly Holiday</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <span> Manage Expense </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('expenseitem.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Expense Items</a></li>
                            <li><a href="{{ route('expense.add') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Expense Details</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <span> Recruitment </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('recruitment.add_candidate') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add_Candidate</a></li>
                            <li><a href="{{ route('recruitment.manage_candidate') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Manage Candidate</a></li>
                            <li><a href="{{ route('recruitment.add_shortlist') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Candidate Shortlist</a></li>
                            <li><a href="{{ route('recruitment.interview') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Interview </a></li>
                            <li><a href="{{ route('recruitment.candidate_selection') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> Candidate Selection </a></li>


                        </ul>
                    </li>

                </ul>
             </li>

            <li class="treeview">
                <a href="#">
                  <i class="icon-Clipboard"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                  <span>SMS Setting</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('sms.configaretion') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>SMS Configaretion</a></li>
                  <li><a href="{{route('sms.template') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>SMS Template</a></li>
                </ul>
            </li>
			  </ul>
			  <div class="sidebar-widgets">

				<div class="copyright text-start m-25">
					<p><strong class="d-block">Admin Dashboard</strong> © 2021 All Rights Reserved </p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
</aside>

