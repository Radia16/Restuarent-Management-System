@extends('admin.main_master')

            @section('logout')
            <a href="javascript:void(0)">
                <div>
                    <a class="dropdown-item" href="{{ route('outlett.logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                    <form id="logout-form" action="{{ route('outlett.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </a>
            @endsection


@section('content')
<!-- Main content -->

<div class="row">
    <div class="col-lg-12">
        <section class="content">


                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/admin1.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">89</h2>
                                        <p class="text-fade mb-0">Total Admin</p>
                                        <p class="fs-12 mb-0 text-success"><span class="badge badge-pill badge-success-light me-5"><i class="fa fa-arrow-up"></i></span>3% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/admin.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">899</h2>
                                        <p class="text-fade mb-0">Total Manager</p>
                                        <p class="fs-12 mb-0 text-success"><span class="badge badge-pill badge-success-light me-5"><i class="fa fa-arrow-up"></i></span>8% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/suppliers1.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">59</h2>
                                        <p class="text-fade mb-0">Total Cashier</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>2% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/employee.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">$79k</h2>
                                        <p class="text-fade mb-0">Total Waiter</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/employee.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">$78k</h2>
                                        <p class="text-fade mb-0">Total Kicthen chef</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/employee.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">89</h2>
                                        <p class="text-fade mb-0">Total Delivery Boy</p>
                                        <p class="fs-12 mb-0 text-success"><span class="badge badge-pill badge-success-light me-5"><i class="fa fa-arrow-up"></i></span>3% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/customer.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">899</h2>
                                        <p class="text-fade mb-0">Total Customer</p>
                                        <p class="fs-12 mb-0 text-success"><span class="badge badge-pill badge-success-light me-5"><i class="fa fa-arrow-up"></i></span>8% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/suppliers1.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">59</h2>
                                        <p class="text-fade mb-0">Total Employee</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>2% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/online-order-1.png" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">79k</h2>
                                        <p class="text-fade mb-0">Total Order</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/delievary order.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">78k</h2>
                                        <p class="text-fade mb-0">Total Delivary Order</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/online-order-4.png" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">89k</h2>
                                        <p class="text-fade mb-0">Total Cancheled Order</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/online-order-1.png" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">89k</h2>
                                        <p class="text-fade mb-0">Total Panding Order</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/expense.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">10</h2>
                                        <p class="text-fade mb-0">Total Reservation</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/order.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">$89222.3k</h2>
                                        <p class="text-fade mb-0"> Today's Sale</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/online-order-2.png" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">89k</h2>
                                        <p class="text-fade mb-0">Today's Order</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/online-order-3.png" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">20</h2>
                                        <p class="text-fade mb-0">Total Online Order</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <img src="../images/food/outlet.webp" class="w-80 me-20" alt="" />
                                    </div>
                                    <div>
                                        <h2 class="my-0 fw-700">20</h2>
                                        <p class="text-fade mb-0">Total Outlet</p>
                                        <p class="fs-12 mb-0 text-primary"><span class="badge badge-pill badge-primary-light me-5"><i class="fa fa-arrow-down"></i></span>12% (15 Days)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{-- Top Customers start --}}

                <div class="row">
                     <div class="col-lg-5">

                            <div class="box">
                               <div class="box-header no-border">
                                  <h4 class="box-title"> Top Customers</h4>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">

                                    <div class="box">
                                        <div class="flexbox align-items-center px-20 pt-20">
                                          <label class="toggler toggler-danger fs-16">
                                            <input type="checkbox" checked="">
                                            <i class="fa fa-heart"></i>
                                          </label>
                                          <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                              <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                              <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="box-body text-center pt-1 pb-15">
                                          <a href="#">
                                            <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                          </a>
                                          <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                          <p class="text-fade">Designer</p>
                                        </div>
                                      </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="box">
                                        <div class="flexbox align-items-center px-20 pt-20">
                                          <label class="toggler toggler-danger fs-16">
                                            <input type="checkbox" checked="">
                                            <i class="fa fa-heart"></i>
                                          </label>
                                          <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                              <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                              <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="box-body text-center pt-1 pb-15">
                                          <a href="#">
                                            <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                          </a>
                                          <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                          <p class="text-fade">Designer</p>
                                        </div>
                                      </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="box">
                                        <div class="flexbox align-items-center px-20 pt-20">
                                          <label class="toggler toggler-danger fs-16">
                                            <input type="checkbox" checked="">
                                            <i class="fa fa-heart"></i>
                                          </label>
                                          <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                              <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                              <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="box-body text-center pt-1 pb-15">
                                          <a href="#">
                                            <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                          </a>
                                          <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                          <p class="text-fade">Designer</p>
                                        </div>
                                      </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="box">
                                        <div class="flexbox align-items-center px-20 pt-20">
                                          <label class="toggler toggler-danger fs-16">
                                            <input type="checkbox" checked="">
                                            <i class="fa fa-heart"></i>
                                          </label>
                                          <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                              <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                              <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="box-body text-center pt-1 pb-15">
                                          <a href="#">
                                            <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                          </a>
                                          <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                          <p class="text-fade">Designer</p>
                                        </div>
                                      </div>

                                </div>
                           </div>

                           <div class="row">
                            <div class="col-lg-3">

                                <div class="box">
                                    <div class="flexbox align-items-center px-20 pt-20">
                                      <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                      </label>
                                      <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                          <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="box-body text-center pt-1 pb-15">
                                      <a href="#">
                                        <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                      </a>
                                      <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                      <p class="text-fade">Designer</p>
                                    </div>
                                  </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="box">
                                    <div class="flexbox align-items-center px-20 pt-20">
                                      <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                      </label>
                                      <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                          <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="box-body text-center pt-1 pb-15">
                                      <a href="#">
                                        <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                      </a>
                                      <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                      <p class="text-fade">Designer</p>
                                    </div>
                                  </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="box">
                                    <div class="flexbox align-items-center px-20 pt-20">
                                      <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                      </label>
                                      <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                          <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="box-body text-center pt-1 pb-15">
                                      <a href="#">
                                        <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                      </a>
                                      <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                      <p class="text-fade">Designer</p>
                                    </div>
                                  </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="box">
                                    <div class="flexbox align-items-center px-20 pt-20">
                                      <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                      </label>
                                      <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                          <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="box-body text-center pt-1 pb-15">
                                      <a href="#">
                                        <img class="avatar avatar-xxl" src="../images/avatar/avatar-8.png" alt="">
                                      </a>
                                      <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">Rostar Joy</a></h5>
                                      <p class="text-fade">Designer</p>
                                    </div>
                                  </div>

                            </div>
                       </div>
                     </div>

                     <div class="col-lg-1"> </div>

                     {{-- Top delivery start --}}
                     <div class="col-lg-6">

                        <div class="box">
                           <div class="box-header no-border">
                              <h4 class="box-title"> Top delivery man by order count</h4>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">

                                <div class="box box-inverse bg-danger-light">
                                  <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-info fs-16">
                                      <input type="checkbox" checked="">
                                      <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                      <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                      <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                        <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                      <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                    <p class="text-danger">Designer</p>
                                  </div>
                                </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="box box-inverse bg-danger-light">
                                  <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-info fs-16">
                                      <input type="checkbox" checked="">
                                      <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                      <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                      <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                        <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                      <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                    <p class="text-danger">Designer</p>
                                  </div>
                                </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="box box-inverse bg-danger-light">
                                  <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-info fs-16">
                                      <input type="checkbox" checked="">
                                      <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                      <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                      <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                        <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                      <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                    <p class="text-danger">Designer</p>
                                  </div>
                                </div>

                            </div>
                            <div class="col-lg-3">

                                <div class="box box-inverse bg-danger-light">
                                  <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-info fs-16">
                                      <input type="checkbox" checked="">
                                      <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                      <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                      <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                        <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                      <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                    <p class="text-danger">Designer</p>
                                  </div>
                                </div>

                            </div>
                       </div>

                       <div class="row">
                        <div class="col-lg-3">

                            <div class="box box-inverse bg-danger-light">
                              <div class="flexbox align-items-center px-20 pt-20">
                                <label class="toggler toggler-info fs-16">
                                  <input type="checkbox" checked="">
                                  <i class="fa fa-heart"></i>
                                </label>
                                <div class="dropdown">
                                  <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                  <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                    <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                  </div>
                                </div>
                              </div>
                              <div class="box-body text-center pt-1 pb-15">
                                <a href="#">
                                  <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                <p class="text-danger">Designer</p>
                              </div>
                            </div>

                        </div>
                        <div class="col-lg-3">

                            <div class="box box-inverse bg-danger-light">
                              <div class="flexbox align-items-center px-20 pt-20">
                                <label class="toggler toggler-info fs-16">
                                  <input type="checkbox" checked="">
                                  <i class="fa fa-heart"></i>
                                </label>
                                <div class="dropdown">
                                  <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                  <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                    <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                  </div>
                                </div>
                              </div>
                              <div class="box-body text-center pt-1 pb-15">
                                <a href="#">
                                  <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                <p class="text-danger">Designer</p>
                              </div>
                            </div>

                        </div>
                        <div class="col-lg-3">

                            <div class="box box-inverse bg-danger-light">
                              <div class="flexbox align-items-center px-20 pt-20">
                                <label class="toggler toggler-info fs-16">
                                  <input type="checkbox" checked="">
                                  <i class="fa fa-heart"></i>
                                </label>
                                <div class="dropdown">
                                  <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                  <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                    <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                  </div>
                                </div>
                              </div>
                              <div class="box-body text-center pt-1 pb-15">
                                <a href="#">
                                  <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                <p class="text-danger">Designer</p>
                              </div>
                            </div>

                        </div>
                        <div class="col-lg-3">

                            <div class="box box-inverse bg-danger-light">
                              <div class="flexbox align-items-center px-20 pt-20">
                                <label class="toggler toggler-info fs-16">
                                  <input type="checkbox" checked="">
                                  <i class="fa fa-heart"></i>
                                </label>
                                <div class="dropdown">
                                  <a data-bs-toggle="dropdown" href="#" aria-expanded="false" class=""><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                  <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
                                    <a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
                                  </div>
                                </div>
                              </div>
                              <div class="box-body text-center pt-1 pb-15">
                                <a href="#">
                                  <img class="avatar avatar-xxl" src="../images/avatar/avatar-5.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">Rostar Joy</a></h5>
                                <p class="text-danger">Designer</p>
                              </div>
                            </div>

                        </div>
                   </div>
                 </div>


              </div>




























              {{-- coustomer start --}}

                <div class="row">
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Customer Overview</h4>
                                <div>
                                    <canvas id="doughnut-chart" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Business Overview</h4>
                                <div>
                                    <canvas id="doughnut-chart2" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Doughnut Chart</h4>
                                <div>
                                    <canvas id="doughnut-chart3" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

  {{-- coustomer start --}}


























                <div class="row">
                    <div class="col-xl-4  col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="box-title mb-0">Daily Revenue</h4>
                                        <p class="mb-0 text-mute">Lorem ipsum dolor</p>
                                    </div>
                                    <div class="text-end">
                                        <h3 class="box-title mb-0 fw-700">$ 154K</h3>
                                        <p class="mb-0"><span class="text-success">+ 1.5%</span> than last week</p>
                                    </div>
                                </div>
                                <div id="chart" class="mt-20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8  col-lg-6 col-12">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Customer Flow</h4>
                                <div class="d-md-flex d-block justify-content-between">
                                    <div>
                                        <h3 class="mb-0 fw-700">$2,780k</h3>
                                        <p class="mb-0 text-primary"><small>In Restaurant</small></p>
                                    </div>
                                    <div>
                                        <h3 class="mb-0 fw-700">$1,410k</h3>
                                        <p class="mb-0 text-danger"><small>Online Order</small></p>
                                    </div>
                                </div>
                                <div id="yearly-comparison"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="box"  >
                            <div class="box-body">
                                <h4 class="box-title">Top 10 foot this month</h4>

                                <div class="table-responsive">
                                    <table class="table b-1 border-primary">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nigam</td>
                                                {{-- <td>Eichmann</td>
                                                <td>@Sonu</td> --}}
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                {{-- <td>Prohaska</td>
                                                <td>@Genelia</td> --}}
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roshan</td>
                                                {{-- <td>Rogahn</td>
                                                <td>@Hritik</td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box" style="margin-left: 15px;">
                            <div class="box-body">
                                <h4 class="box-title">Top 10 employeer this month</h4>

                                <div class="table-responsive">
                                    <table class="table b-3 border-success">
                                        <thead class="bg-success">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                {{-- <th>Last Name</th>
                                                <th>Username</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nigam</td>
                                                {{-- <td>Eichmann</td>
                                                <td>@Sonu</td> --}}
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                {{-- <td>Prohaska</td>
                                                <td>@Genelia</td> --}}
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roshan</td>
                                                {{-- <td>Rogahn</td>
                                                <td>@Hritik</td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                            <div class="box">
                                <div class="box-body">
                                    <h4 class="box-title">$ Customer recievable</h4>
                                    <div class="table-responsive">
                                        <table class="table b-1 border-primary">
                                            <thead class="bg-primary">
                                                <tr>
                                                    <th>SN</th>
                                                    <th>First Name</th>
                                                    <th>Due Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nigam</td>
                                                    <td>63541</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Deshmukh</td>
                                                    <td>842514</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Roshan</td>
                                                    <td>8432</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box" style="margin-left: 15px;">
                            <div class="box-body">
                                <h4 class="box-title">$ Supplier Payable</h4>

                                <div class="table-responsive">
                                    <table class="table b-3 border-success">
                                        <thead class="bg-success">
                                            <tr>
                                                <th>SN</th>
                                                <th>First Name</th>

                                                <th>Due Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nigam</td>

                                                <td>52514</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>

                                                <td>789564</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roshan</td>

                                                <td>764114</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-header no-border pb-0">
                                <h4 class="box-title">Delivery Map</h4>
                            </div>
                            <div class="box-body">
                                <div id="chartdiv" class="h-400"></div>
                                <div class="pt-30">
                                    <h4 class="box-title mb-20">Upcoming Shipping Schedule</h4>
                                    <div class="bb-1 pb-10 mb-20 d-lg-flex d-block justify-content-between">
                                        <div class="d-flex">
                                            <img src="../images/avatar/4.jpg" class="w-40 h-40 me-10 rounded100" alt="">
                                            <div>
                                                <p class="mb-0">Stepni Doe <span class="text-primary ms-10">(3 items)</span></p>
                                                <p class="mb-0"><small class="text-mute">will be shipping on 10:12 am</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-10">8817 Sand Pine Dr, Navarre, FL, 32566</p>
                                            <div class="bg-info rounded-circle w-30 h-30 l-h-30 text-center">
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bb-1 pb-10 mb-20  d-lg-flex d-block justify-content-between">
                                        <div class="d-flex">
                                            <img src="../images/avatar/5.jpg" class="w-40 h-40 me-10 rounded100" alt="">
                                            <div>
                                                <p class="mb-0">Mical clark <span class="text-primary ms-10">(2 items)</span></p>
                                                <p class="mb-0"><small class="text-mute">will be shipping on 12:12 am</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-10">8817 Sand Pine Dr, Navarre, FL, 32566</p>
                                            <div class="bg-info rounded-circle w-30 h-30 l-h-30 text-center">
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bb-1 pb-10  d-lg-flex d-block justify-content-between">
                                        <div class="d-flex">
                                            <img src="../images/avatar/7.jpg" class="w-40 h-40 me-10 rounded100" alt="">
                                            <div>
                                                <p class="mb-0">Steponi mohan <span class="text-primary ms-10">(7 items)</span></p>
                                                <p class="mb-0"><small class="text-mute">will be shipping on 11:12 am</small></p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-10">8817 Sand Pine Dr, Navarre, FL, 32566</p>
                                            <div class="bg-info rounded-circle w-30 h-30 l-h-30 text-center">
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












        </section>
    </div>
</div>
<!-- /.content -->
@endsection

{{--
@section('content')
@include('admin.index')
@endsection --}}

@section('script')
<script src="{{ asset('backend/assets/vendor_components/chart.js-master/Chart.min.js')}}"></script>
<script src="{{ asset('backend/js/pages/widget-charts2.js')}}"></script>
@endsection
