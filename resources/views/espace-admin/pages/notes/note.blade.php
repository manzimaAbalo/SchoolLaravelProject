@extends('espace-admin.layouts.main')

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
                        <table id="zero_config" class="table align-middle text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">PROFILE</th>
                                    <th scope="col">ECOLE</th>
                                    <th scope="col">CRITERE</th>
                                    <th scope="col">NOTE</th>
                                    <th scope="col">DATE NOTE</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notes as $note)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <h6 class="fw-semibold mb-0 fs-4">{{ $note->profile->nom }}</h6>
                                                    <p class="mb-0">{{ $note->profile->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $note->school->name }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="bg-success p-1 rounded-circle"></span>
                                                <p class="mb-0 ms-2">{{ $note->rule->libelle }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 fs-4">{{ $note->note }}</h6>
                                        </td>
                                        <td>
                                            {{ $note->created_at }}
                                        </td>
                                        <td>
                                            <button>
                                                <i  class="ti ti-edit"></i>
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
