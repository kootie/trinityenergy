<div>
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Community Empowerment /</span> Update</h4>

        <div class="row">


            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Update</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Enter title</label>
                            <input type="text" wire:model='title' class="form-control" id="title"
                                placeholder="Enter service title" />
                        </div>



                        <div wire:ignore>
                            <label for="summernote" class="form-label">Enter description</label>
                            <textarea class="form-control" id="summernote" rows="3">{{ $description }}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" wire:click.prevent='updateProject'>Update</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- / Content -->
</div>

@push('scripts')
<script>
    $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Enter your project description',
                tabsize: 1,
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('description', contents)
                    }
                }


            });
        });
</script>
@endpush