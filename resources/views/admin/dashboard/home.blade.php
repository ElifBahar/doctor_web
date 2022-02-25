@extends('admin.layouts.admin_master')

@section('admin')
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">71,503</h2>
                    <p>Online Signups</p>
                    <div class="chartjs-wrapper">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1">9,503</h2>
                    <p>New Visitors Today</p>
                    <div class="chartjs-wrapper">
                        <canvas id="dual-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">71,503</h2>
                    <p>Monthly Total Order</p>
                    <div class="chartjs-wrapper">
                        <canvas id="area-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">9,503</h2>
                    <p>Total Revenue This Year</p>
                    <div class="chartjs-wrapper">
                        <canvas id="line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>

    <div class="row">

        <div class="col-xl-4 col-lg-6 col-12">
            <!-- Top Sell Table -->
            <div class="card card-table-border-none" data-scroll-height="550">
                <div class="card-header justify-content-between">
                    <h2>Sold by Units</h2>
                    <div>
                        <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                        <div class="dropdown show d-inline-block widget-dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
                                <li class="dropdown-item"><a  href="#">Action</a></li>
                                <li class="dropdown-item"><a  href="#">Another action</a></li>
                                <li class="dropdown-item"><a  href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body slim-scroll py-0">
                    <table class="table ">
                        <tbody>
                        <tr>
                            <td class="text-dark">Backpack</td>
                            <td class="text-center">9</td>
                            <td class="text-right">33% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                        </tr>
                        <tr>
                            <td class="text-dark">T-Shirt</td>
                            <td class="text-center">6</td>
                            <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                        </tr>
                        <tr>
                            <td class="text-dark">Coat</td>
                            <td class="text-center">3</td>
                            <td class="text-right">50% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                        </tr>
                        <tr>
                            <td class="text-dark">Necklace</td>
                            <td class="text-center">7</td>
                            <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                        </tr>
                        <tr>
                            <td class="text-dark">Jeans Pant</td>
                            <td class="text-center">10</td>
                            <td class="text-right">300% <i class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i> </td>
                        </tr>
                        <tr>
                            <td class="text-dark">Shoes</td>
                            <td class="text-center">5</td>
                            <td class="text-right">100% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                        </tr>
                        <tr>
                            <td class="text-dark">T-Shirt</td>
                            <td class="text-center">6</td>
                            <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer bg-white py-4">
                    <a href="#" class="btn-link py-3 text-uppercase">View Report</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <!-- Notification Table -->
            <div class="card card-default" data-scroll-height="550">
                <div class="card-header justify-content-between ">
                    <h2>Latest Notifications</h2>
                    <div>
                        <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                        <div class="dropdown show d-inline-block widget-dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
                                <li class="dropdown-item"><a  href="#">Action</a></li>
                                <li class="dropdown-item"><a  href="#">Another action</a></li>
                                <li class="dropdown-item"><a  href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card-body slim-scroll">
                    <div class="media pb-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-cart-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3 ">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Order</a>
                            <p >Selena has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </div>

                    <div class="media py-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                            <i class="mdi mdi-email-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                            <p >Phileine has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                    </div>


                    <div class="media py-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                            <i class="mdi mdi-stack-exchange font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                            <p >Emma has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </div>

                    <div class="media py-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-cart-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New order</a>
                            <p >Ryan has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </div>

                    <div class="media py-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                            <i class="mdi mdi-calendar-blank font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
                            <p >Phileine has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </div>

                    <div class="media py-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                            <i class="mdi mdi-stack-exchange font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                            <p >Emma has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </div>

                    <div class="media py-3 align-items-center justify-content-between">
                        <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                            <i class="mdi mdi-email-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                            <p >Phileine has placed an new order</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                    </div>

                </div>
                <div class="mt-3"></div>
            </div>
        </div>
    </div>


@endsection
