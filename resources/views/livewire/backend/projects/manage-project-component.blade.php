<div>
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home</span> Projects</h4>

        <a class="btn btn-primary" href="{{ route('create.project') }}">New project</a>

        <!-- Basic Bootstrap Table -->
        <div class="card mt-4">
            <h5 class="card-header">Services</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Project title</th>
                            <th>Location</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($projects as $project)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $project->title }}</strong></td>

                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $project->country }}</strong></td>

                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $project->created_at }}</strong></td>

                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $project->createdBy->name }}</strong></td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('edit.project', ['slug' => $project]) }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="#"
                                                wire:click.prevent='showConfirmationModal({{ $project }})'><i
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
        <!--/ Basic Bootstrap Table -->

        <!-- Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" wire:click.prevent='actualDelete'>Yes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->
</div>
