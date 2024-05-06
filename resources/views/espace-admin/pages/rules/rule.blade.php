@extends('espace-admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Critères de notations</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">critères</li>
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
                        <table  id="zero_config" class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th scope="col">LIBELLE</th>
                                    <th scope="col">CATEGORIE</th>
                                    <th scope="col">NOTE MIN</th>
                                    <th scope="col">NOTE MAX</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rules as $key=> $item)
                                    <tr>
                                        <td>
                                            {{ ++$key }}
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $item->libelle }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="bg-success p-1 rounded-circle"></span>
                                                <p class="mb-0 ms-2">{{ $item->category->name }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 fs-4">{{ $item->min_note }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 fs-4">{{ $item->max_note }}</h6>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary" >
                                                EDIT
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-end py-1">
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
