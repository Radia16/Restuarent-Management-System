@extends('admin.main_master')

@section('css')
<link rel="stylesheet" href="{{ asset('backend/css/pos.css') }}">
<link rel="stylesheet" href="{{ asset('css/pos_css/pos_calculatoricon.css') }}">
<link rel="stylesheet" href="{{ asset('css/pos_css/pos_custom_select2.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/pos_css/pos_leftbutton.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/pos_css/pos_leftsearch&orderlist.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/pos_css/pos_middlecolumn.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/pos_css/pos_modaldesign.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/pos_css/pos_rightcolumn.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/pos_css/pos_topnavbar.css') }}"> --}}
@endsection

@section('content')
<!------------ Left side column. contains header name and icon start------------------>
  <header class="main-header">
	<div class="d-flex align-items-center header-box justify-content-end px-3">
		  <h3 class="text-primary">Running Orders</h3>
		  <a href="#"><i class="arrow-icon glyphicon glyphicon-retweet text-danger"></i></a>
	</div>
<!------------ Left side column. contains header name and icon end------------------>


<!----------- Middel side, contains header navbar Start ---------->
    <nav class="navbar navbar-static-top">
	  <div class="app-menu">
		<ul>
			<li>
		     	<a href="{{url()->previous()}}" id="toggle_bar"><i class="glyphicon glyphicon-align-right "></i></a>
			 	<a href="#"><i class="glyphicon glyphicon-fullscreen"></i></a>
			  	<a href="#"><i class="glyphicon glyphicon-folder-open"></i> </a>
			  	<a href="#"><i class="glyphicon glyphicon-print"></i> </a>
			  	<a href="#"><i class="glyphicon glyphicon-time"></i> </a>
			  	<a href="#"><i class="glyphicon glyphicon-repeat"></i> </a>
			  	<a href="#"><i class="glyphicon glyphicon-info-sign"></i> </a>
				<a href="#"><i class="fa fa-calculator"></i></a>
			  	<a href="#"><i class="glyphicon glyphicon-registration-mark"></i></a>
			 	<a href="#"><i class="glyphicon glyphicon-dashboard"></i></a>
				<a href="#"><i class="glyphicon glyphicon-bell"></i></a>
			</li>
		</ul>
	  </div>
	  <div class="rightside-menu">
		<ul>
			<li>
		     <a href="#"><i class="ti-search"></i></a>
			 <a href="#"><i class="ti-help-alt"></i></a>
			 <a href="#"><i class="ti-user"></i><span>Serita Ma</span></a>
			</li>
		</ul>
	  </div>
    </nav>
  </header>
   <!----------- Middel side, contains header navbar end ---------->



   {{-- sidebar-open .main-sidebar  --}}
  <!------------------ Left side column. contains searchbar and orderlist and buttons start--------------------->
  <div class="sidebar_wrapper">
    <aside class="main-sidebar d-flex  justify-content-end">
        <!-- sidebar-->
        <section class="sidebar">
            <div class="search-bx">
                <input type="search" name="search" id="search" autocomplete="off" class="search-bar" placeholder="input search text">
                <button class="btnn" type="submit" id="button-addon"><i class="ti-search"></i></button>
            </div>
            <div id="scroller">
                <div class="accordion mt-2 " id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Order No <br>Order Type
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Custom: <span>Walk in</span></p>
                                <p>Table: <span>B3</span></p>
                                <p>Waiter: <span>Jaff</span></p>
                                <p>Item: <span>04</span></p>
                                <p>Done: <span>03</span></p>
                                <p>Time: <span>01:16:40</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Order No
                        <br> Order Type
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Custom: <span>Walk in</span></p>
                            <p>Table: <span>B3</span></p>
                            <p>Waiter: <span>Jaff</span></p>
                            <p>Item: <span>04</span></p>
                            <p>Done: <span>03</span></p>
                            <p>Time: <span>01:16:40</span></p>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Order No  <br> Order Type
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Custom: <span>Walk in</span></p>
                                <p>Table: <span>B3</span></p>
                                <p>Waiter: <span>Jaff</span></p>
                                <p>Item: <span>04</span></p>
                                <p>Done: <span>03</span></p>
                                <p>Time: <span>01:16:40</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Order No
                                <br> Order Type
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Custom: <span>Walk in</span></p>
                                <p>Table: <span>B3</span></p>
                                <p>Waiter: <span>Jaff</span></p>
                                <p>Item: <span>04</span></p>
                                <p>Done: <span>03</span></p>
                                <p>Time: <span>01:16:40</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Order No
                            <br> Order Type
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Custom: <span>Walk in</span></p>
                                <p>Table: <span>B3</span></p>
                                <p>Waiter: <span>Jaff</span></p>
                                <p>Item: <span>04</span></p>
                                <p>Done: <span>03</span></p>
                                <p>Time: <span>01:16:40</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Order No
                                <br> Order Type
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Custom: <span>Walk in</span></p>
                                <p>Table: <span>B3</span></p>
                                <p>Waiter: <span>Jaff</span></p>
                                <p>Item: <span>04</span></p>
                                <p>Done: <span>03</span></p>
                                <p>Time: <span>01:16:40</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-side-button">
                <button type="button" class=" buttonalert order-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-info-sign"></i>Order Details</button>
                <div class="btnn-k-c">
                <button type="button" class="buttonalert kot-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-print"></i>KOT</button>
                <button type="button" class="buttonalert cot-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-print"></i>BOT</button>
                </div>
                <button type="button" class="buttonalert bill-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-info-sign"></i>Bills</button>
                <button type="button" class="buttonalert create-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-info-sign"></i>Create Invoice</button>
                <button type="button" class="buttonalert close-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-info-sign"></i>Close Order</button>
                <button type="button" class="buttonalert status-btn btn btn-sm mb-2"> <i class="icon glyphicon glyphicon-info-sign"></i>Kitchen Status</button>
            </div>
        </section>
      </aside>
  </div>

  <!------------------ Left side column. contains searchbar and orderlist and buttons end--------------------->
  <div class="content-wrapperr">
	<div class="container-full">
		<section class="contnt">
			<!--=========== Amount & Table Section Start ==============-->
			<div class="row">
				<div class="col-lg-6">
					<div class="box">
						<div class="box-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3">
                                            <button  type="button" class=" dine-btn top-btn btn btn-outline btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class=" ti-layout-grid4-alt"></i>Dine in</button>
                                        </div>
                                        <div class="col-3">
                                            <button  type="button" class=" take-btn top-btn btn btn-outline btn-sm mb-2"> <i class="ti-bag"></i> Take away</button>
                                        </div>
                                        <div class="col-3">
                                            <button  type="button" class=" delivery-btn top-btn btn btn-outline btn-sm mb-2"> <i class="ti-truck"></i> Delivery</button>
                                        </div>
                                         <div class="col-3"><button  type="button" class=" table-btn top-btn btn btn-outline btn-sm mb-2"> <i class=" ti-layout-grid4-alt"></i> Table</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="dropdown ">
                                                <button class="btn btn-outline btn-default dropdown-toggle btn_pos_user" type="button" data-bs-toggle="dropdown">Waiter</button>
                                                <div class="dropdown-menu btn_pos_user">
                                                    <a class="dropdown-item" href="#">Custom:walk in</a>
                                                    <a class="dropdown-item" href="#">Table:B3</a>
                                                    <a class="dropdown-item" href="#">Waiter:Jaff</a>
                                                    <a class="dropdown-item" href="#">Custom:walk in</a>
                                                    <a class="dropdown-item" href="#">Table:B3</a>
                                                    <a class="dropdown-item" href="#">Waiter:Jaff</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="dropdown ">
                                                <button class="btn  btn-outline btn-default dropdown-toggle btn_pos_user" type="button" data-bs-toggle="dropdown">Customer</button>
                                                <div class="dropdown-menu btn_pos_user">
                                                    <a class="dropdown-item" href="#">Custom:walk in</a>
                                                    <a class="dropdown-item" href="#">Table:B3</a>
                                                    <a class="dropdown-item" href="#">Waiter:Jaff</a>
                                                    <a class="dropdown-item" href="#">Custom:walk in</a>
                                                    <a class="dropdown-item" href="#">Table:B3</a>
                                                    <a class="dropdown-item" href="#">Waiter:Jaff</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <a href="#"><i class="icon glyphicon glyphicon-user ml-2"></i></a>
                                        </div>
                                        <div class="col-1">
                                            <a href="#"><i class="icon glyphicon glyphicon-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<!---- table start ---->
							<div class="table-responsive scrollbar coustome_table_price">
								<table class="table">
									<thead class=".bg-secondary tbl-header">
										<tr>
											<th>SN</th>
											<th>Menu</th>
											<th>price</th>
											<th>QTY</th>
											<th>Dis amt</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>2</td>
											<td>food</td>
											<td>100.00</td>
											<td>
												<div class="container">
													<!-- adding button and heading to show the digits -->
											    	<!-- increment & decrement start -->
													<div class="row">
														<div>
															<div class="dec button btn btn-danger btn-sm" style="border-radius: 15px;"  ><strong style="font-size: 20px; font-weight: bold;">-</strong>
                                                            </div>

															<input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
															border-radius: 12px;  "/>

															<div class="inc button btn btn-success btn-sm" style="border-radius: 15px;">
                                                                <strong style="font-size: 20px; font-weight: bold;">+</strong>
                                                            </div>

														</div>
													</div>
													<!-- increment & decrement start -->
												</div>
											</td>
											<td>10</td>
											<td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>food</td>
											<td>100.00</td>
											<td>
												<div class="container">
													<!-- adding button and heading to show the digits -->

													<!-- increment & decrement start -->
													<div class="row">
														<div>
															<div class="dec button btn btn-danger btn-sm"style="border-radius: 15px;"  ><strong style="font-size: 20px; font-weight: bold;">-</strong>
                                                            </div>

															<input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
															border-radius: 12px;  "/>

															<div class="inc button btn btn-success btn-sm" style="border-radius: 15px;" >
                                                                <strong style="font-size: 20px; font-weight: bold;">+</strong>
                                                            </div>
														</div>
													</div>
													<!-- increment & decrement start -->
                                                </div>
											</td>
											<td>10</td>
											<td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>food</td>
											<td>100.00</td>
											<td>
												<div class="container">
													<!-- adding button and heading to show the digits -->

													<!-- increment & decrement start -->
													<div class="row">
														<div>
															<div class="dec button btn btn-danger btn-sm"style="border-radius: 15px;"  ><strong style="font-size: 20px; font-weight: bold;">-</strong></div>

															<input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
															border-radius: 12px;  "></input>

															<div class="inc button btn btn-success btn-sm" style="border-radius: 15px;" > <strong style="font-size: 20px; font-weight: bold;">+</strong> </div>

														</div>
													</div>
													<!-- increment & decrement start -->
                                                </div>
											</td>
											<td>10</td>
											<td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
										</tr>
										<tr>
											<td>5</td>
											<td>food</td>
											<td>100.00</td>
											<td>
												<div class="container">
													<!-- adding button and heading to show the digits -->
													<!-- increment & decrement start -->
													<div class="row">
														<div>
															<div class="dec button btn btn-danger btn-sm"style="border-radius: 15px;"  ><strong style="font-size: 20px; font-weight: bold;">-</strong></div>

															<input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
															border-radius: 12px;  "/>

															<div class="inc button btn btn-success btn-sm" style="border-radius: 15px;" > <strong style="font-size: 20px; font-weight: bold;">+</strong> </div>

														</div>
													</div>
													<!-- increment & decrement start -->
                                                </div>
											</td>
											<td>10</td>
											<td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
										</tr>
                                        <tr>
                                            <td>6</td>
                                            <td>food</td>
                                            <td>100.00</td>
                                            <td>
                                                <div class="container">
                                                    <!-- adding button and heading to show the digits -->
                                                    <!-- increment & decrement start -->
                                                    <div class="row">
                                                        <div>
                                                            <div class="dec button btn btn-danger btn-sm"style="border-radius: 15px;">
                                                                <strong style="font-size: 20px; font-weight: bold;">-</strong>
                                                            </div>

                                                            <input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
                                                            border-radius: 12px;  "/>

                                                            <div class="inc button btn btn-success btn-sm" style="border-radius: 15px;" >
                                                                    <strong style="font-size: 20px; font-weight: bold;">+</strong>
                                                                </div>

                                                        </div>
                                                    </div>
                                                    <!-- increment & decrement start -->
                                                </div>
                                            </td>
                                            <td>10</td>
                                            <td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>food</td>
                                            <td>100.00</td>
                                            <td>
                                                <div class="container">
                                                    <!-- adding button and heading to show the digits -->
                                                    <!-- increment & decrement start -->
                                                    <div class="row">
                                                        <div>
                                                            <div class="dec button btn btn-danger btn-sm"style="border-radius: 15px;">
                                                                <strong style="font-size: 20px; font-weight: bold;">-</strong>
                                                            </div>

                                                            <input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
                                                            border-radius: 12px;  "/>

                                                            <div class="inc button btn btn-success btn-sm" style="border-radius: 15px;" >
                                                                    <strong style="font-size: 20px; font-weight: bold;">+</strong>
                                                                </div>

                                                        </div>
                                                    </div>
                                                    <!-- increment & decrement start -->
                                                </div>
                                            </td>
                                            <td>10</td>
                                            <td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>food</td>
                                            <td>100.00</td>
                                            <td>
                                                <div class="container">
                                                    <!-- adding button and heading to show the digits -->
                                                    <!-- increment & decrement start -->
                                                    <div class="row">
                                                        <div>
                                                            <div class="dec button btn btn-danger btn-sm"style="border-radius: 15px;">
                                                                <strong style="font-size: 20px; font-weight: bold;">-</strong>
                                                            </div>

                                                            <input type="text" name="qty" id="1" value="0" style="height: 30px; width: 50px; margin-left: 10px; margin-right: 10px; font-size: 17px; font-weight: bold;
                                                            border-radius: 12px;  "/>

                                                            <div class="inc button btn btn-success btn-sm" style="border-radius: 15px;" >
                                                                    <strong style="font-size: 20px; font-weight: bold;">+</strong>
                                                                </div>

                                                        </div>
                                                    </div>
                                                    <!-- increment & decrement start -->
                                                </div>
                                            </td>
                                            <td>10</td>
                                            <td class="pl-2">90 <a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                        </tr>
									</tbody>
								</table>
							</div>
							<!-- table end -->

							<!-- input item start -->
							<div class="footer-content">
								<div class="item-details">
									<div class="row">
										<div class="col-4">
											<p>Total Item: <span>13</span></p>
											<p>Discount: <span>0.00</span></p>
										</div>
										<div class="col-4">
											<p>Sub Total: <span>17.00</span></p>
											<p>Vat: <span data-bs-toggle="modal" data-bs-target="#vatModal"><i class="glyphicon glyphicon-pencil"></i>0.00</span></p>
										</div>
										<div class="col-4">
											<p>Discount: <span data-bs-toggle="modal" data-bs-target="#discountModal"><i class="glyphicon glyphicon-pencil"></i> 0.00</span></p>
											<p>Charge: <span data-bs-toggle="modal" data-bs-target="#chargeModal"><i class="glyphicon glyphicon-pencil"></i> 0.00</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- input item end -->
							<!-- footer button start -->
							<div class="col-12">
								<div class="row">
									<div class="col-3"><button  type="button" class=" cancel-btn top-btn btn btn-sm mb-2"> Cancel</button></div>
									<div class="col-3"><button data-bs-toggle="modal" data-bs-target="#draftsaleModal"  type="button" class=" draft-btn top-btn btn btn-sm mb-2"> Draft</button></div>
									<div class="col-3"><button  type="button" class=" invoice-btn top-btn btn btn-sm mb-2"> Invoice</button></div>
									<div class="col-3"><button  type="button" class=" place-btn top-btn btn btn-sm mb-2"> Place Order</button></div>
								</div>
							</div>
							<!-- footer button end -->
						</div>
					</div>
				</div>
               <!--============ Search & Food Item Section Start ====-->
                <div class="col-lg-6">
                    <div class="box">
                        <div class="box-body">
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-8">
                                            <div class="search-bx">
                                                <div class="input-group">
                                                    <input type="search" class="form-control rounded" placeholder="Search Name" aria-label="Search" aria-describedby="search-addon" />
                                                    <button type="button" class="btn srch-btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-2">
                                        <button  type="button" class=" reset-btn btn btn-outline-primary btn-sm">Reset</button>
                                    </div>
                                    <div class="col-2 mt-2">
                                        <a href="#">Filter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <!------ food items section start -------->
                                <section class="content gallery-content-button">
                                    <div class="row">
                                        <div class="col-md-4 col-xl-3 col-3">
                                            <div class="box gallery-btn bg-transparent no-shadow b-0">
                                                <div class="box-body button p-0">
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="all" id="filter-all">All</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="american" id="filter-american">American</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="bangali" id="filter-bangali">Bangali</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="italian" id="filter-italian">Italian</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="chinese" id="filter-chinese">Chinese</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary"  data-item="desert" id="filter-desert">Deserts</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="indian" id="filter-indian">Indian</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="thai" id="filter-thai">Thai</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="iranian" id="filter-iranian">Iranian</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="turkish" id="filter-turkish">Turkish</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="item-btn btn btn-primary" data-item="maxican" id="filter-maxican">Maxican</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- food items filter start-->
                                        <div class="col-md-8 col-xl-9 col-9">
                                                <div class="row">
                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img american_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"   title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" alt="gallery"
                                                                class="gallery-img all american" >
                                                            </a>
                                                            <div class="item-name">
                                                                <p>Food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img american_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"  title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all american italian" alt="gallery" >
                                                            </a>
                                                            <div class="item-name">
                                                                <p>Food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img bangali_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}" title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all " alt="gallery" >

                                                            </a>
                                                            <div class="item-name ">
                                                                <p>Food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img american_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}" title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all american" alt="gallery" >
                                                            </a>
                                                            <div class="item-name">
                                                                <p>Food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img bangali_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"  title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all" alt="gallery" >
                                                            </a>
                                                            <div class="item-name ">
                                                                <p>Bengali food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img bangali_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"  title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all bangali italian" alt="gallery" >
                                                            </a>
                                                            <div class="item-name ">
                                                                <p>Bengali food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img bangali_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"  title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all bangali" alt="gallery" >
                                                            </a>
                                                            <div class="item-name ">
                                                                <p>Bengali food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img italian_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"  title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all bangali" alt="gallery" >
                                                            </a>
                                                            <div class="item-name ">
                                                                <p>Bengali food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-6 col-lg-3">
                                                        <div class="item_img italian_content">
                                                            <a href="{{asset('images/food/biryanis.jpg')}}"  title="Image title will be apear here">
                                                                <img src="{{asset('images/food/biryanis.jpg')}}" class="gallery-img all bangali" alt="gallery" >
                                                            </a>
                                                            <div class="item-name ">
                                                                <p>Bengali food Name</p>
                                                                <p>Price: 100</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <!-- food items filter end -->
                                    </div>
                                </section>
                                <!---- food items section end ------>
                            </div>
                        </div>
                    </div>
                </div>
               <!--============= Search & Food Item Section End ===============-->
			</div>
		</section>
	  </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tables</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <h4 style="font-size: 15px; text-align: center">Order Number: New</h4>
                    <div class="col-4">
                        <h5>Table 1</h5>
                        <h5>Sit Capacity: 6</h5>
                        <h5>Available: 2</h5>
                        <div class="table-responsive">
                        <table class="table">
                            <thead class=".bg-secondary tbl-header">
                                <tr>
                                    <th>Order</th>
                                    <th>Time</th>
                                    <th>Person</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12:30</td>
                                    <td>4</td>
                                    <td><a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>12:40</td>
                                    <td>6</td>
                                    <td><a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="col-4">
                        <h5>Table 1</h5>
                        <h5>Sit Capacity: 6</h5>
                        <h5>Available: 2</h5>
                        <div class="table-responsive">
                        <table class="table">
                            <thead class=".bg-secondary tbl-header">
                                <tr>
                                    <th>Order</th>
                                    <th>Time</th>
                                    <th>Person</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12:30</td>
                                    <td>4</td>
                                    <td><a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>12:40</td>
                                    <td>6</td>
                                    <td><a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="col-4">
                        <h5>Table 1</h5>
                        <h5>Sit Capacity: 6</h5>
                        <h5>Available: 2</h5>
                        <div class="table-responsive">
                        <table class="table">
                            <thead class=".bg-secondary tbl-header">
                                <tr>
                                    <th>Order</th>
                                    <th>Time</th>
                                    <th>Person</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12:30</td>
                                    <td>4</td>
                                    <td><a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>12:40</td>
                                    <td>6</td>
                                    <td><a href="#"><i class="glyphicon glyphicon-trash "></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Submit</button>
            <button type="button" class="btn btn-primary btn-sm">Proceed without table</button>
            <button type="button" class="btn btn-primary btn-sm">Cancel</button>
            </div>
        </div>
        </div>
    </div>
  <!-- Modal end-->

  	<!--======================= All Modal Start Here  ========================-->
  	<!-- Modal of Draft Icon Start-->
      <div class="modal fade" id="draftsaleModal" tabindex="-1" aria-labelledby="draftsaleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-design">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="draftsaleModalLabel" style="font-size: 22px;" >Draft Sale</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" >
				<div class="row">
					<div class="col-6">
						<div class="search-bx">
							<input type="search" name="search" id="searchbox" autocomplete="off" class="search-bar" placeholder="search customer name or mobile number">
							<button class="btnn" type="submit"><i class="ti-search"></i></button>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<thead>
								  <tr>
									<th scope="col">Item</th>
									<th scope="col">Price</th>
									<th scope="col">QTY</th>
									<th scope="col">Discount</th>
									<th scope="col">Total</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
								  </tr>
								  <tr>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-6">
						<p style="font-size: 18px;">Order Details</p>
						<div class="row">
							<div class="col-4">
								<p style="font-size: 15px;"><strong> Order Type:</strong></p>
								<p style="font-size: 15px;"><strong>Waiter:</strong> </p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;"></p>
								<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong></p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;"></p>
								<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong></p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<thead>
								  <tr>
									<th scope="col">Item</th>
									<th scope="col">Price</th>
									<th scope="col">QTY</th>
									<th scope="col">Discount</th>
									<th scope="col">Total</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								  </tr>
								  <tr>
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								  </tr>
								</tbody>
							  </table>
						  </div>
						  <div class="row">
							<div class="col-4">
								<p style="font-size: 15px;">Total Item: 1</p>
								<p style="font-size: 15px;">Total Discount: 0.00</p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;">Sub Total: 300.00</p>
								<p style="font-size: 15px;">Vat: 0.00</p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;">Discount: 0.00</p>
								<p style="font-size: 15px;">Charge: 0.00</p>
							</div>
						</div>
						<div class="payable">
							<h1>Total Payable: <span id="total_pay">0.00</span></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-secondary btn-sm btn-block" style="width: 100%;" >Delete All the Draft Sale</button>
					</div>
					<div class="col-6">
						<div class="row">
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Edit in Cart</button></div>
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md">Delete</button></div>
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Draft Icon End-->
	<!-- Modal of Recent Sale Icon Start-->
	<div class="modal fade" id="recentsaleModal" tabindex="-1" aria-labelledby="recentsaleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-design">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="recentsaleModalLabel" style="font-size: 22px;" >Recent Sale</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<div class="search-bx">
							<input type="search" name="search" id="searchbox" autocomplete="off" class="search-bar" placeholder="search customer name or mobile number">
							<button class="btnn" type="submit"><i class="ti-search"></i></button>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<thead>
								  <tr>
									<th scope="col">Sale No</th>
									<th scope="col">Customer(Phone)</th>
									<th scope="col">Table</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									  <td>A003</td>
									  <td>Mohit[32989485490]</td>
									  <td>Table1</td>
								  </tr>
								  <tr>
									<td>A003</td>
									<td>Mohit[32989485490]</td>
									<td>Table1</td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-6">
						<p style="font-size: 18px;">Order Details</p>
						<div class="row">
							<div class="col-4">
								<p style="font-size: 15px;"><strong> Order Type:</strong></p>
								<p style="font-size: 15px;"><strong>Waiter:</strong> </p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;"></p>
								<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong></p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;"></p>
								<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong></p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<thead>
								  <tr>
									<th scope="col">Item</th>
									<th scope="col">Price</th>
									<th scope="col">QTY</th>
									<th scope="col">Discount</th>
									<th scope="col">Total</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								  </tr>
								  <tr>
									<th scope="row"></th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								  </tr>
								</tbody>
							  </table>
						  </div>
						  <div class="row" style="margin-top: 120px;">
							<div class="col-4">
								<p style="font-size: 15px;">Total Item: 1</p>
								<p style="font-size: 15px;">Total Discount: 0.00</p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;">Sub Total: 300.00</p>
								<p style="font-size: 15px;">Vat: 0.00</p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;">Discount: 0.00</p>
								<p style="font-size: 15px;">Charge: 0.00</p>
							</div>
						</div>
						<div class="payable">
							<h1>Total Payable: <span id="total_pay">0.00</span></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-secondary btn-sm btn-block" style="width: 100%;" >Delete All the Draft Sale</button>
					</div>
					<div class="col-6">
						<div class="row">
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Edit in Cart</button></div>
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md">Delete</button></div>
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Recent Sale Icon End-->
	<!-- Modal of Future Sale Icon Start-->
	<div class="modal fade" id="futuresaleModal" tabindex="-1" aria-labelledby="futuresaleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-design">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="futuresaleModalLabel" style="font-size: 22px;" >Future Sale</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<div class="search-bx">
							<input type="search" name="search" id="searchbox" autocomplete="off" class="search-bar" placeholder="search customer name or mobile number">
							<button class="btnn" type="submit"><i class="ti-search"></i></button>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<thead>
								  <tr>
									<th scope="col">Sale No</th>
									<th scope="col">Customer(Phone)</th>
									<th scope="col">Date</th>
								  </tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>
					<div class="col-6">
						<p style="font-size: 18px;">Order Details</p>
						<div class="row">
							<div class="col-4">
								<p style="font-size: 15px;"><strong> Order Type:</strong></p>
								<p style="font-size: 15px;"><strong>Waiter:</strong> </p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;"></p>
								<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong></p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;"></p>
								<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong></p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<thead>
								  <tr>
									<th scope="col">Item</th>
									<th scope="col">Price</th>
									<th scope="col">QTY</th>
									<th scope="col">Discount</th>
									<th scope="col">Total</th>
								  </tr>
								</thead>
								<tbody >

								</tbody>
							  </table>
						  </div>
						  <div class="row" style="margin-top: 120px;">
							<div class="col-4">
								<p style="font-size: 15px;">Total Item: 1</p>
								<p style="font-size: 15px;">Total Discount: 0.00</p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;">Sub Total: 300.00</p>
								<p style="font-size: 15px;">Vat: 0.00</p>
							</div>
							<div class="col-4">
								<p style="font-size: 15px;">Discount: 0.00</p>
								<p style="font-size: 15px;">Charge: 0.00</p>
							</div>
						</div>
						<div class="payable">
							<h1>Total Payable: <span id="total_pay">0.00</span></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-secondary btn-sm btn-block" style="width: 100%;" >Delete All the Draft Sale</button>
					</div>
					<div class="col-6">
						<div class="row">
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Edit in Cart</button></div>
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md">Delete</button></div>
						<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Future Sale Icon End-->
	<!-- Modal of Registration Icon Start-->
	<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="registrationModalLabel" style="font-size: 22px;" >Registration Details</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="margin-bottom: 160px;">
				<div class="row">
					<p>Opening Balance : 250.00</p>
					<p>Sale(Paid Amount) : 753.00</p>
					<p>Customer Due Receive : 0.00</p>
					<p>Balance : 250.00</p>
					<hr>
					<p>Sale in Cash: 735.00</p>
					<p> Sale in : 0.00</p>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6"><button type="button" class="btn btn-secondary btn-sm" >Close</button></div>
					<div class="col-6"><button type="button" class="btn btn-secondary btn-sm" style="float: right;" data-bs-dismiss="modal">Cancel</button></div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Registration Icon End-->
	<!-- Modal of Notification Icon Start-->
	<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="notificationModalLabel" style="font-size: 22px;" >Notification List</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" style="margin-bottom: 160px;">
				<div class="h-20 mx-20 flex-shrink-0">
					<input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-info">
					<label for="md_checkbox_29" class=" mb-0"> Select All</label>
				</div>
				<hr>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6"><button type="button" class="btn btn-secondary btn-sm" >Remove</button></div>
					<div class="col-6"><button type="button" class="btn btn-secondary btn-sm" style="float: right;"data-bs-dismiss="modal">Cancel</button></div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Notification Icon End-->
	<!-- Modal of ReadBefore Icon Start-->
	<div class="modal fade" id="readbeforeModal" tabindex="-1" aria-labelledby="readbeforeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="readbeforeModalLabel" style="font-size: 22px; color: red;" >Read Before Begin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <h4>What is Running Order</h4>
                        <p>Placed order goes to Running Orders, to modify/invoice that order just select that order and click on bellow button</p>
                        <h4>What is Modify Order</h4>
                        <p>Modify order is not limited to only add new item, means modification of anything of that order, remove item, change item qty, change type, change waiter etc</p>
                        <h4>Allow Popup</h4>
                        <p>Please allow popup of your browser to print Invoice and KOT</p>
                        <h4>Allow Popup</h4>
                        <p>Please allow popup of your browser to print Invoice and KOT</p>
                        <h4>Print Kot</h4>
                        <p>Use Print KOT button if you intend to not to use Kitchen Panel When customer asks for new item or he wants an item more, just modify an order then go to print KOT,
                        and just check that new item/quantity increased item, then reduce quantity and print the KOT, so that you can now only send the new item to kitchen
                        But for Kitchen Panel, no need to worry, kithcen panel will be notified when an order is modified</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Modal of ReadBefore Icon End-->
	<!-- Modal of Order Details Button Start-->
	<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-design">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="orderModalLabel" style="font-size: 22px;" >Order Details</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-4">
						<p style="font-size: 15px;"><strong> Order Type:</strong> Delivery</p>
						<p style="font-size: 15px;"><strong>Waiter:</strong> Jhon</p>
					</div>
					<div class="col-4">
						<p style="font-size: 15px;"><strong>Number:</strong>  B 002</p>
						<p style="font-size: 15px;"><strong>Customer:</strong> Nadim Reza</p>
					</div>
					<div class="col-4">
						<p style="font-size: 15px;"></p>
						<p style="font-size: 15px; margin-top: 34px;"><strong>Table:</strong> None</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="box">
							<div class="box-body">
								<div class="table-responsive">
								  <table class="table table-bordered mb-0">
									  <thead>
										<tr>
										  <th scope="col">Item</th>
										  <th scope="col">Price</th>
										  <th scope="col">QTY</th>
										  <th scope="col">Discount</th>
										  <th scope="col">Total</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
											<th scope="row">Beef(04)</th>
										  	<td>600.00</td>
										  	<td>1</td>
										  	<td>0</td>
										  	<td>600.00</td>
										</tr>
										<tr>
											<th scope="row">Chicken(09)</th>
											<td>600.00</td>
											<td>1</td>
											<td>0</td>
											<td>600.00</td>
										</tr>
									  </tbody>
									</table>
								</div>
							</div>
						  </div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<p style="font-size: 15px;">Total Item: 1</p>
						<p style="font-size: 15px;">Total Discount: 0.00</p>
					</div>
					<div class="col-4">
						<p style="font-size: 15px;">Sub Total: 300.00</p>
						<p style="font-size: 15px;">Vat: 0.00</p>
					</div>
					<div class="col-4">
						<p style="font-size: 15px;">Discount: 0.00</p>
						<p style="font-size: 15px;">Charge: 0.00</p>
					</div>
				</div>
				<div class="payable">
					<h1>Total Payable: <span id="total_pay">0.00</span></h1>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Create Invoice & Close</button></div>
					<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md">Print Kot</button></div>
					<div class="col-4"><button type="button" class="modal-f-btn btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button></div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Order Details Button End-->
	<!-- Modal of Kot Button Start-->
	<div class="modal fade" id="kotModal" tabindex="-1" aria-labelledby="kotModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-design">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="kotModalLabel" style="font-size: 22px;" >KOT</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12" style="text-align:center">
					<p>Order No: A 000039</p>

					<p>Date: 2021-12-08 07:42:24</p>

					<p>Customer: KEPHA MONYONCHO</p>

					<p>Table: None</p>

					<p>Waiter: zak, Order Type: Dine In</p>
					</div>
				</div>
				<div class="row" style="background-color: whitesmoke; margin-top: 4px;">
					<div class="col-10">
						<div class="h-20 mx-20 flex-shrink-0">
							<input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-warning">
							<label for="md_checkbox_30" class="mt-2">Item</label>
						</div>
					</div>
					<div class="col-2 mt-2">
						<p>QTY</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-secondary btn-md p-2" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-secondary btn-md p-2">Print Kot</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of kot Button End-->
	<!-- Modal of Bot Button Start-->
	<div class="modal fade" id="botModal" tabindex="-1" aria-labelledby="botModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-design">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="botModalLabel" style="font-size: 22px;" >BOT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12" style="text-align:center">
                        <p>Order No: A 000039</p>

                        <p>Date: 2021-12-08 07:42:24</p>

                        <p>Customer: KEPHA MONYONCHO</p>

                        <p>Table: None</p>

                        <p>Waiter: zak, Order Type: Dine In</p>
                        </div>
                    </div>
                        <div class="row" style="background-color: whitesmoke; margin-top: 4px;">
                            <div class="col-10">
                                <div class="h-20 mx-20 flex-shrink-0">
                                    <input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-primary">
                                    <label for="md_checkbox_27" class="mt-2">Item</label>
                                </div>
                            </div>
                            <div class="col-2 mt-2">
                                <p>QTY</p>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-md p-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-secondary btn-md p-2">Print Bot</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Modal of Bot Button End-->
	<!-- Modal of Invoice Button Start-->
	<div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="invoiceModalLabel" style="font-size: 22px;" >Finalize Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <p>Total payable</p>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <p>600.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Payment Method</p>
                        </div>
                        <div class="col-6">
                            <select id="paymentName"style="width: 200px;">
                                <option value='0'>Payment Method</option>
                                <option value='1'>Card</option>
                                <option value='2'>Paypal</option>
                                <option value='3'>Cash</option>
                                <option value='4'>Benefit Pay</option>
                                <option value='5'>Credit Payment</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Paid Amount</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Due Amount</label>
                                <input type="text" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Given Amount</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Change Amount</label>
                                <input type="text" class="form-control" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-md p-2">Submit</button>
                            <button type="button" class="btn btn-secondary btn-md p-2" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Modal of Invoice Button End-->
	<!-- Modal of Kitchen Status Button Start-->
	<div class="modal fade" id="kitchenstatusModal" tabindex="-1" aria-labelledby="kitchenstatusModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-design">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="kitchenstatusModalLabel" style="font-size: 22px;" >Kitchen Status</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="row" style="text-align: center;">
				<p>
					<strong><span>Order Number:</span> </strong>
					<span>C 000028</span>
					<strong><span>Order Type:</span></strong>
					<span>Delivery</span>
				<p>
					<strong><span>Waiter:</span> </strong>
					<span>Zak</span>
					<strong><span>Customer:</span></strong>
					<span>Nadim Reza</span>
					<strong><span>Order Table:</span></strong>
					<span>None</span>
				</p>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-body">
							<div class="table-responsive">
							  <table class="table mb-0">
								  <thead style="background-color: transparent;">
									<tr>
									  <th scope="col">Item</th>
									  <th scope="col">Quantity</th>
									  <th scope="col">Status</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
										<th scope="row">Beef(04)</th>
										  <td>1</td>
										  <td>in the queue</td>
									</tr>
								  </tbody>
								</table>
							</div>
						</div>
					  </div>
				</div>
			</div>
			<div class="row" style="text-align: center; font-size: 20px;">
				<p>Order Placed at: 0:0</p>
				<p id="DigitalCLOCK" style="position: absolute; top: 95%; left: 50%; transform: translateX(-50%) translateY(-50%); font-size: 20px;" onload="showTime()"></p>
			</div>
		</div>
		<div class="modal-footer">
			<div class="row">
				<button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!-- Modal of Kitchen Status Button End-->
	<!-- Modal of Dine Button Start-->
	<div class="modal fade" id="dineTable" tabindex="-1" aria-labelledby="dineTableLabel" aria-hidden="true">
		<div class="modal-dialog modal-design">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="dineTableLabel" style="font-size: 22px;">Tables</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p style="font-size: 18px; ">Order Number: New</p>
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id="table1" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p>Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f1text" id="f1text" class="form-control" value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text"  name="f1add" id="f1add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow1();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id ="table2" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p>Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f2text" id="f2text" class="form-control" value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text"  name="f2add" id="f2add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow2();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id="table3" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p style="margin-top: 0px;">Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f3text" id="f3text" class="form-control" Value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text" name="f3add" id="f3add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow3();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id="table3" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p style="margin-top: 0px;">Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f3text" id="f3text" class="form-control" Value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text" name="f3add" id="f3add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow3();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-sm read-btn"  data-bs-toggle="modal" data-bs-target="#readModal"><i class="fa fa-question-circle"></i>Please Read</button> <!-- Dine Read Button-->
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-primary btn-sm">Proceed without table</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!--Modal of Dine Button end-->
	<!--Modal of Dine Button's Please Read Modal start-->
	<div class="modal fade" id="readModal" tabindex="-1" aria-labelledby="readModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="readModalLabel" style="font-size: 22px; color: red;" >Please Read</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<h4>Modify order:</h4>
						<p>If you need to add some new item to an order, please select a running order from left and click on Modify Order. We have a perfect mechanism for modifying an order,
						please do that from there and please don't be confused to do that here, this is only table management section of an order.</p>
						<h4>What you can do here:</h4>
						<p>An order may contain many person sitting in multiple tables.<br>
							a) You can select multiple tables for an order.<br>
							b) You can not set person more than available sit for in a table.<br>
							c) You can proceed without selecting table because some people may can gather, take tea and go out.<br>
							d) As a table can have availability of several chairs and sometime those are sharable, so you can select multiple order in a table
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-6">
							<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Modal of Dine Button's Please Read Modal end-->
	<!-- Modal of Table Button Start-->
	<div class="modal fade" id="tableModal" tabindex="-1"  aria-labelledby="tableModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-design">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="tableModalLabel" style="font-size: 22px;">Tables</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p style="font-size: 18px; ">Order Number: New</p>
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id="table1" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p>Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f1text" id="f1text" class="form-control" value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text"  name="f1add" id="f1add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow1();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id ="table2" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p>Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f2text" id="f2text" class="form-control" value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text"  name="f2add" id="f2add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow2();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id="table3" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p style="margin-top: 0px;">Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f3text" id="f3text" class="form-control" Value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text" name="f3add" id="f3add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow3();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Table 1</p>
                            <p>Sit Capacity: 6</p>
                            <p>Available: 2</p>
                            <div class="table-responsive">
                            <table id="table3" class="table table-bordered">
                                <thead class=".bg-secondary tbl-header">
                                    <img src="../images/table.png" alt="table-img" style="width: 50%; height: 30%; margin-left: 75px;">
                                    <tr>
                                        <p style="margin-top: 0px;">Running Order in Tables</p>
                                        <th>Order</th>
                                        <th>Time</th>
                                        <th>Person</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="f3text" id="f3text" class="form-control" Value="Order">
                                </div>
                                <div class="col-4">
                                    <input type="text" name="f3add" id="f3add" class="form-control" placeholder="">
                                </div>
                                <div class="col-4">
                                    <button onclick ="addHTMLTableRow3();" type="button" class="btn btn-secondary btn-md" style="width: 100%;">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-sm read-btn" data-bs-toggle="modal" data-bs-target="#readbeforeModal"><i class="fa fa-question-circle"></i>Please Read</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-primary btn-sm">Proceed without table</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-sm" style="float: right;" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!--Modal of Table Button end-->
	<!-- Modal of Add user icon start -->
	<div class="modal fade" id="adduserModal" tabindex="-1" aria-labelledby="adduserModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="adduserModalLabel" style="font-size: 22px;" >Add Customer</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
							<label class="form-label  required">Name</label>
							<input type="text" class="form-control" placeholder="Name" required>
						</div>
						<div class="form-group">
							<label class="form-label  required">Phone</label>
							<input type="text" class="form-control" placeholder="Phone No" required>
						</div>
						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="text" class="form-control" placeholder="Email">
						</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="date1" class="form-label">Date of Birth</label>
						<input type="date" class="form-control" id="date1">
					</div>
					<div class="form-group">
						<label for="date1" class="form-label">Date of Anniversary</label>
						<input type="date" class="form-control" id="date1">
					</div>
					<div class="form-group">
						<label class="form-label">GST Number</label>
						<input type="text" class="form-control" placeholder="GST Number">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label class="form-label">Delivery Address</label>
					<textarea rows="3" cols="3" class="form-control" style="border-radius: 0px !important; border-color: #b5b5c3;;" placeholder="Address"></textarea>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<div class="row">
				<div class="col-6">
					<button type="button" class="btn btn-secondary btn-sm btn-block">Submit</button>
					<button type="button" class="btn btn-secondary btn-sm btn-block" data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!-- Modal of Add user icon end -->
	<!-- Modal of Edit user icon start -->
	<div class="modal fade" id="edituserModal" tabindex="-1" aria-labelledby="edituserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="edituserModalLabel" style="font-size: 22px;" >Edit Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                    <label class="form-label  required">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label required">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone No" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="date1" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="date1">
                            </div>
                            <div class="form-group">
                                <label for="date1" class="form-label">Date of Anniversary</label>
                                <input type="date" class="form-control" id="date1">
                            </div>
                            <div class="form-group">
                                <label class="form-label">GST Number</label>
                                <input type="text" class="form-control" placeholder="GST Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">Delivery Address</label>
                            <textarea rows="3" cols="3" class="form-control" style="border-radius: 0px !important; border-color: #b5b5c3;;" placeholder="Address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-sm btn-block">Submit</button>
                            <button type="button" class="btn btn-secondary btn-sm btn-block" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Modal of Edit user icon end -->
	<!-- Modal of Vat Icon Start-->
	<div class="modal fade" id="vatModal" tabindex="-1"  aria-labelledby="vatModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="vatModalLabel" style="font-size: 22px;" >Vat Details</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="table-responsive">
							<table class="table table-bordered mb-0">
								<tbody>
								<tr>
									<th scope="col">Tax Name</th>
									<th scope="col">Value</th>
								</tr>
								</tbody>
								<tbody>
								<tr>
									<td>VAT</td>
									<td>59.94</td>
								</tr>
								<tr>
									<td>CGST</td>
									<td>59.94</td>
								</tr>
								<tr>
									<td>SGST</td>
									<td>59.94</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-6">
							<button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal of VatIcon End-->
	<!-- Modal of Discount Icon Start-->
	<div class="modal fade" id="discountModal" tabindex="-1"  aria-labelledby="discountModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="discountModalLabel" style="font-size: 22px;" >Discount</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="form-label">Value</label>
							<input type="text" class="form-control" placeholder="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
					<label>Type</label>
					<select id="discounttypeName" class="form-control" style="width: 100% !important; ">
						<option value='0'>Fixed</option>
						<option value='1'>Percentage</option>
					</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-6">
						<button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Submit</button>
						<button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Modal of Discount Icon End-->
	<!-- Modal of Charge Icon Start-->
	<div class="modal fade" id="chargeModal"  tabindex="-1"  aria-labelledby="chargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="chargeModalLabel" style="font-size: 22px;" >Charge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label>Type</label>
                            <select id="chargetypeName" class="form-control" style="width: 100% !important;">
                                <option value='0'>Delivery</option>
                                <option value='1'>Service</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Amount</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Modal of Charge Icon End-->
	<!-- Modal of Draft Button Start-->
	<div class="modal fade" id="draftModal"  tabindex="-1" aria-labelledby="draftModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="draftModalLabel" style="font-size: 22px;" >Draft</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group">
							<label class="form-label required">Number</label>
							<input type="text" class="form-control" placeholder=""  >
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<div class="col-6">
							<button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Submit</button>
							<button type="button" class="btn btn-secondary btn-lg btn-block p-2" data-bs-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal of Draft Button End-->
	<!--======================= All Modal End Here ========================-->




<!-- 3030 -->

















@endsection


@section('script')
  <script src="https://cdn.jsdelivr.net/npm/jquery.calculator@2.0.1/jquery.plugin.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery.calculator@2.0.1/jquery.calculator.min.js"></script>
   <script src="{{asset('backend/js/pages/gallery.js')}}"></script>
   <script src="{{asset('backend/js/animated-masonry-gallery.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_alert_button.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_calculator.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_custom_select2.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_dinetable.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_fullscreen.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_increment_dec.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_livesearch.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_realclock.js')}}"></script>
   <script src="{{asset('js/pos_js/pos_searchbox.js')}}"></script>
   {{-- <script src="{{asset('backend/js/jquery.isotope.min.js')}}"></script> --}}
	<script>
		// Increment decrement JavaScript code
		incrementVar = 0;
		$('.inc.button').click(function(){
			var $this = $(this),
				$input = $this.prev('input'),
				$parent = $input.closest('div'),
				newValue = parseInt($input.val())+1;
			$parent.find('.inc').addClass('a'+newValue);
			$input.val(newValue);
			incrementVar += newValue;
		});
		$('.dec.button').click(function(){
            console.log('this is running')
			var $this = $(this),
				$input = $this.next('input'),
				$parent = $input.closest('div'),
				newValue = parseInt($input.val())-1;
            if(newValue <= 0){
                newValue = 0;
                $('.dec.button').attr('disabled');
               this.setAttribute('disabled')
            }else{
                // $('.dec.button').removeAttr('disabled');
                this.removeAttribute('disabled')
            }

			console.log($parent);
			$parent.find('.inc').addClass('a'+newValue);
			$input.val(newValue);
			incrementVar += newValue;
		});
		// Alert for order and another buttons
		$('.buttonalert').click(function(){
			swal("Alert !","Please select an open order to proceed !");
		});
</script>


<script>
    let toggle_bar = document.querySelector('#toggle_bar');
    let sidebar_wrapper = document.querySelector('.sidebar_wrapper');
    toggle_bar.addEventListener('click',function(event){
         if(sidebar_wrapper.classList.contains('sidebar-open')){
             sidebar_wrapper.classList.remove("sidebar-open");
         }
         else{
            sidebar_wrapper.classList.add("sidebar-open");
         }
    });
</script>

  @endsection

