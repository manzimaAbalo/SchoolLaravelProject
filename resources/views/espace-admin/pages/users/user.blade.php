@extends('espace-admin.layouts.main')

@section('content')
<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Utilisateurs</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted "
                                    href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Liste</li>
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
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                    <thead class="header-item">
                        <th>
                            ID
                        </th>
                        <th>NOM</th>
                        <th>PRENOMS</th>
                        <th>EMAIL</th>
                        <th>CONTACT</th>
                        <th>PROFESSION</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>
                        <!-- start row -->
                        @foreach ($profiles as $key=>  $user)
                        <tr class="search-items">
                            <td>
                                {{ ++$key }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="/admin/dist/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Emma Adams">
                                                {{ $user->nom }} 
                                            </h6>
                                            <span class="user-work fs-3" data-occupation="Web Developer">
                                                {{ $user->profession }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr" data-email="adams@mail.com">{{ $user->prenoms }}</span>
                            </td>
                            <td>
                                <span class="usr-location" data-location="Boston, USA">{{ $user->email }}</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+1 (070) 123-4567">{{ $user->phone }}</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="+1 (070) 123-4567">{{ $user->profession }}</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-eye fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-trash fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- end row -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
