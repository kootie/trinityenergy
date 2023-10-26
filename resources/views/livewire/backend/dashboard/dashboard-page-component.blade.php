<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-lg-12 col-md-12 order-1">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <a href="#" wire:click.prevent='changeInquiry("new")'>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between"
                                        style="margin-bottom: 0rem">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('back-assets/img/icons/unicons/chart-success.png') }}"
                                                alt="chart success" class="rounded" />

                                        </div>
                                        <div>
                                            <p>New inquiries</p>
                                            <h3 class="card-title mb-0">
                                                {{ App\Models\Inquiry::where('status', 'new')->count() }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <a href="#" wire:click.prevent='changeInquiry("in progress")'>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between"
                                        style="margin-bottom: 0rem">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('back-assets/img/icons/unicons/chart-success.png') }}"
                                                alt="chart success" class="rounded" />

                                        </div>
                                        <div>
                                            <p>In-progress</p>
                                            <h3 class="card-title mb-0">
                                                {{ App\Models\Inquiry::where('status', 'in progress')->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <a href="#" wire:click.prevent='changeInquiry("cancelled")'>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between"
                                        style="margin-bottom: 0rem">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('back-assets/img/icons/unicons/chart-success.png') }}"
                                                alt="chart success" class="rounded" />

                                        </div>
                                        <div>
                                            <p>Cancelled</p>
                                            <h3 class="card-title mb-0">
                                                {{ App\Models\Inquiry::where('status', 'cancelled')->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <a href="#" wire:click.prevent='changeInquiry("completed")'>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between"
                                        style="margin-bottom: 0rem">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('back-assets/img/icons/unicons/chart-success.png') }}"
                                                alt="chart success" class="rounded" />

                                        </div>
                                        <div>
                                            <p>Completed</p>
                                            <h3 class="card-title mb-0">
                                                {{ App\Models\Inquiry::where('status', 'completed')->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header">Inquiries</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($inquiries as $key => $inquiry)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $key }}</strong>
                                </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $inquiry->fullname }}</strong>
                                </td>
                                <td>{{ $inquiry->email }}</td>
                                <td>{{ $inquiry->subject }}</td>

                                <td><span class="badge bg-label-primary me-1">{{ $inquiry->status }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                wire:click.prevent='viewShowModal({{ $inquiry->id }})'><i
                                                    class="bx bx-bullseye me-1"></i> View</a>
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                wire:click.prevent='viewEditModal({{ $inquiry->id }})'><i
                                                    class="bx bx-edit-alt me-1"></i> Update status</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->

        <div class="modal fade" id="inquiryForm" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    @if ($inquiryDetails)
                    <div class="modal-body">
                        <ol class="list-group ">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $inquiryDetails->fullname }}</div>
                                    {{ $inquiryDetails->comment }}
                                </div>
                            </li>
                        </ol>
                    </div>
                    @endif
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editForm" tabindex="-1" aria-hidden="true" wire:ignore>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect01" wire:model='status'>
                              <option selected>Select status...</option>
                              <option value="in progress" >In progress</option>
                              <option value="cancelled">Cancelled</option>
                              <option value="completed">Completed</option>
                            </select>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" wire:click.prevent='updateStatus' class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->
</div>
