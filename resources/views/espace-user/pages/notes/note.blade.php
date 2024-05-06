@extends('espace-user.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Notations</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">liste des notes</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="/admin/dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-list">
            <div class="card">
                <div class="card-body p-3">
                    <div class="d-flex justify-content-between align-items-center mb-9">
                        <form class="position-relative">
                            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                placeholder="Search Product">
                            <i
                                class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                        <a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="Filter list"><i class="ti ti-filter"></i></a>
                    </div>
                    <div class="table-responsive border rounded">
                        <table class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Products</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-3">
                                                <h6 class="fw-semibold mb-0 fs-4">How Innovation Works</h6>
                                                <p class="mb-0">books</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Thu, Jan 12 2023</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="bg-success p-1 rounded-circle"></span>
                                            <p class="mb-0 ms-2">InStock</p>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 fs-4">$275</h6>
                                    </td>
                                    <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i
                                                class="ti ti-dots-vertical"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <h6 class="fw-semibold mb-0 fs-4">Psalms Book for Growth</h6>
                                                <p class="mb-0">books</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Thu, Jan 10 2023</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="bg-danger p-1 rounded-circle"></span>
                                            <p class="mb-0 ms-2">Out of Stock</p>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 fs-4">$89</h6>
                                    </td>
                                    <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i
                                                class="ti ti-dots-vertical"></i></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-3">
                                                <h6 class="fw-semibold mb-0 fs-4">The Psychology of Money</h6>
                                                <p class="mb-0">fashionbooks</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0">Thu, Jan 12 2023</p>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="bg-success p-1 rounded-circle"></span>
                                            <p class="mb-0 ms-2">InStock</p>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 fs-4">$125</h6>
                                    </td>
                                    <td><a class="fs-6 text-muted" href="javascript:void(0)" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Edit"><i
                                                class="ti ti-dots-vertical"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-end py-1">
                            <p class="mb-0 fs-2">Rows per page:</p>
                            <select class="form-select w-auto ms-0 ms-sm-2 me-8 me-sm-4 py-1 pe-7 ps-2 border-0"
                                aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">10</option>
                                <option value="2">25</option>
                            </select>
                            <p class="mb-0 fs-2">1–5 of 12</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
