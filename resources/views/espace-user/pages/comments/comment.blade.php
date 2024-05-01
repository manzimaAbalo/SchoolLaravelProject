@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Commentaires</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Liste des commentaires</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="/admin/dist/images/breadcrumb/emailSv.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card overflow-hidden chat-application">

            <div class="d-flex w-100">

                <div class="d-flex w-100">

                    <div class="w-100">
                        <div class="chat-container h-100 w-100">
                            <div class="app-chat">
                                <ul class="chat-users" style="height: calc(100vh - 100px)" data-simplebar>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user bg-light"
                                            id="chat_user_1" data-user-id="1">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">James Smith</h6>
                                                    <span
                                                        class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">Kindly check this latest updated</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-dark"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-muted"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_2" data-user-id="2">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Katherine Flintoff</h6>
                                                    <span
                                                        class="badge text-bg-danger fs-2 rounded-4 py-1 px-2">Social</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">Newsletter from AdminMart Team</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-warning"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-muted"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_3" data-user-id="3">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Bianca Macdowells</h6>
                                                    <span
                                                        class="badge text-bg-success fs-2 rounded-4 py-1 px-2">Health</span>
                                                </div>
                                                <h6 class="text-dark">Kindly check this latest updated</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-muted"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-warning"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_4" data-user-id="4">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Michael Knight</h6>
                                                    <span
                                                        class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Social</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">Developer Community needs help</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-muted"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-muted"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_5" data-user-id="5">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Jonathan Higgings</h6>
                                                    <span
                                                        class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Promotional</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">Kindly check this latest updated</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-muted"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-muted"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_2" data-user-id="2">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Mike Torello</h6>
                                                    <span
                                                        class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Health</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">From your hosting provider - action</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-muted"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-muted"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_3" data-user-id="3">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Bianca Macdowells</h6>
                                                    <span
                                                        class="badge text-bg-success fs-2 rounded-4 py-1 px-2">Health</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">Kindly check this latest updated</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-muted"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-warning"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            class="px-4 py-3 bg-hover-light-black d-flex align-items-start justify-content-between chat-user"
                                            id="chat_user_3" data-user-id="3">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="position-relative w-100 ms-2">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h6 class="mb-0">Michael Knight</h6>
                                                    <span
                                                        class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">Social</span>
                                                </div>
                                                <h6 class="fw-semibold text-dark">Developer Community</h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <span><i class="ti ti-star fs-4 me-2 text-muted"></i></span>
                                                        <span class="d-block"><i
                                                                class="ti ti-alert-circle text-muted"></i></span>
                                                    </div>
                                                    <p class="mb-0 fs-2 text-muted">04:00pm</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
