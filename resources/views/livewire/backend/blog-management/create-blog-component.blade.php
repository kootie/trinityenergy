<div>
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blogs /</span> Create blog</h4>

        <div class="row">


            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Create new blog</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Enter blog title</label>
                            <input type="text" wire:model='title' class="form-control" id="title"
                                placeholder="Enter blog title" />
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Blog cover image</label>
                            <input type="file" wire:model='cover_image' class="form-control" />

                           @if ($cover_image)
                           <label for="">Cover image preview</label>
                           <img src="{{ $cover_image->temporaryURL() }}" class="img-thumbnail" alt="..." height="100" width="100">
                           @endif
                        </div>

                        

                

                        <div wire:ignore>
                            <label for="summernote" class="form-label">Enter description</label>
                            <textarea class="form-control" id="summernote" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" wire:click.prevent='createBlog'>Create blog</button>
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
                placeholder: 'Enter your blog description',
                tabsize: 1,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('body', contents)
                    }
                }
            });
        });
    </script>
@endpush
