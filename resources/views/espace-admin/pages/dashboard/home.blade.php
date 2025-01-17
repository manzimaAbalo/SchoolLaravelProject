@extends('espace-admin.layouts.main')

@section('content')
    <!-- container-fluid over -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-6">
                                        <img src="/admin/dist/images/profile/user-1.jpg" alt="" width="40"
                                            height="40">
                                    </div>
                                    <h5 class="fw-semibold mb-0 fs-5">Bienvenue Admin !</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border-end pe-4 border-muted border-opacity-10">
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">$2,340<i
                                                class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                        <p class="mb-0 text-dark">Today’s Sales</p>
                                    </div>
                                    <div class="ps-4">
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">35%<i
                                                class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h3>
                                        <p class="mb-0 text-dark">Overall Performance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="welcome-bg-img mb-n7 text-end">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/welcome-bg.svg"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h4 class="fw-semibold">$10,230</h4>
                        <p class="mb-2 fs-3">Expense</p>
                        <div id="expense"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h4 class="fw-semibold">$65,432</h4>
                        <p class="mb-1 fs-3">Sales</p>
                        <div id="sales" class="sales-chart"></div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold">Recent Transactions</h5>
                            <p class="card-subtitle">How to Secure Recent Transactions</p>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span
                                        class="timeline-badge border-2-primary flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe
                                    of $385.90</div>
                            </li>


                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span
                                        class="timeline-badge border-2 border-success flex-shrink-0 my-8"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Product Performances</h5>
                                <p class="card-subtitle">What Impacts Product Performance?</p>
                            </div>
                            <div>
                                <select class="form-select fw-semibold">
                                    <option value="1">March 2023</option>
                                    <option value="2">April 2023</option>
                                    <option value="3">May 2023</option>
                                    <option value="4">June 2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-nowrap mb-0">
                                <thead>
                                    <tr class="text-muted fw-semibold">
                                        <th scope="col" class="ps-0">Assigned</th>
                                        <th scope="col">Progress</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Chart</th>
                                    </tr>
                                </thead>
                                <tbody class="border-top">
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="/admin/dist/images/products/product-1.jpg"
                                                        class="rounded-2" width="48" height="48" alt="" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">Minecraf App</h6>
                                                    <p class="fs-2 mb-0 text-muted">Jason Roy</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3 text-dark">73.2%</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge fw-semibold py-1 w-85 bg-light-success text-success">Low</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                                        </td>
                                        <td>
                                            <div id="table-chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="/admin/dist/images/products/product-2.jpg"
                                                        class="rounded-2" width="48" height="48" alt="" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">Web App Project</h6>
                                                    <p class="fs-2 mb-0 text-muted">Mathew Flintoff</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3 text-dark">56.8%</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge fw-semibold py-1 w-85 bg-light-warning text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                                        </td>
                                        <td>
                                            <div id="table-chart-1"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid over -->
@endsection
