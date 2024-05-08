<div class="widget-content searchable-container list">
    <!-- --------------------- start Contact ---------------- -->
    <div class="card card-body">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <form class="position-relative">
                    <input type="text" class="form-control product-search ps-5" id="input-search"
                        placeholder="Rechercher une école..." />
                    <i
                        class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                </form>
            </div>
            <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                <a href="{{ route('office.schools.create') }}" id="btn-add-contact"
                    class="btn btn-info d-flex align-items-center">
                    <i class="ti ti-school text-white me-1 fs-5"></i> AJOUTER
                </a>
            </div>
        </div>
    </div>
    <!-- ---------------------
            end Contact
        ---------------- -->
    <div class="card card-body">
        <div class="table-responsive">
            <table class="table search-table align-middle text-nowrap">
                <thead class="header-item">
                    <th>
                        ID
                    </th>
                    <th>NOM</th>
                    <th>EMAIL</th>
                    <th>ADRESSE</th>
                    <th>CONTACT</th>
                    <th>RESPONSABLE</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    <!-- start row -->
                    @foreach ($schools as $key=> $item)
                        <tr class="search-items">
                            <td>
                                <div class="n-chk align-self-center text-center">
                                    {{ ++$key }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="/admin/dist/images/profile/user-1.jpg" alt="avatar"
                                        class="rounded-circle" width="35" />
                                    <div class="ms-3">
                                        <div class="user-meta-info">
                                            <h6 class="user-name mb-0" data-name="Emma Adams">{{ $item->name }}
                                            </h6>
                                            <span class="user-work fs-3" data-occupation="Web Developer">{{ Str::limit($item->description, 20, '...') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="usr-email-addr"
                                    data-email="adams@mail.com">{{ $item->email }}</span>
                            </td>
                            <td>
                                <span class="usr-location" data-location="address">{{ $item->address }}</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="phone">{{ $item->contact }}</span>
                            </td>
                            <td>
                                <span class="usr-ph-no" data-phone="responsable">{{ $item->responsable['responsable_nom'] }}</span>
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="javascript:void(0)" class="text-info edit">
                                        <i class="ti ti-eye fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark delete ms-2">
                                        <i class="ti ti-edit fs-5"></i>
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
