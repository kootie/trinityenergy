<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Company info /</span> details</h4>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" wire:submit.prevent='updateInformation'>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="name" class="form-label">Company Name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="ABC company" autofocus wire:model='information.name' />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="email" class="form-label">Company email</label>
                                    <input class="form-control" type="text" name="email" id="email"
                                        placeholder="info@abc.co.ke" wire:model='information.email' />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="gmail" class="form-label">Company gmail</label>
                                    <input class="form-control" type="text" id="gmail" name="gmail"
                                        placeholder="john.doe@example.com" wire:model='information.gmail' />
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="phoneNumber">Landline</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="+254 123 456 789" wire:model='information.landline' />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="phoneNumber">Phone number 1</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="+254 123 456 789" wire:model='information.phone1' />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="phoneNumber">Phone number 2</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="+254 123 456 789" wire:model='information.phone2' />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label" for="phoneNumber">Whatsapp</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            placeholder="+254 123 456 789" wire:model='information.whatsapp' />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" wire:model='information.location' />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        placeholder="https://facebook.com/abc" wire:model='information.facebook' />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="twitter" class="form-label">twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter"
                                        placeholder="https://twitter.com/abc" wire:model='information.twitter' />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="instagram" class="form-label">instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                        placeholder="https://instagram.com/abc" wire:model='information.instagram' />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="linkedin" class="form-label">linkedin</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                                        placeholder="https://linkedin.com/abc" wire:model='information.linkedin' />
                                </div>
                                <div class="mb-3 col-md-6" wire:ignore>
                                    <label for="mission" class="form-label">Mission</label>
                                    <textarea type="text" class="form-control" id="mission" name="mission"
                                        placeholder="our mission" wire:model='information.mission'></textarea>
                                </div>
                                <div class="mb-3 col-md-6" wire:ignore>
                                    <label for="vission" class="form-label">Vission</label>
                                    <textarea type="text" class="form-control" id="vission" name="vission"
                                        placeholder="our vission" wire:model='information.vision'></textarea>
                                </div>
                                <div class="mb-3 col-md-12" wire:ignore>
                                    <label for="about" class="form-label">About</label>
                                    <textarea type="text" class="form-control" id="about" name="about"
                                        placeholder="about us" wire:model='information.about'></textarea>
                                </div>
                                <div class="mb-3 col-md-6" wire:ignore>
                                    <label for="our_presence" class="form-label">our Presence</label>
                                    <textarea type="text" class="form-control" id="our_presence" name="our_presence"
                                        placeholder="our our_presence" wire:model='information.our_presence'></textarea>
                                </div>
                                <div class="mb-3 col-md-6" wire:ignore>
                                    <label for="energy_solution" class="form-label">Energy Solution</label>
                                    <textarea type="text" class="form-control" id="energy_solution"
                                        name="energy_solution" placeholder="our energy_solution"
                                        wire:model='information.energy_solution'></textarea>
                                </div>



                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>

            </div>
        </div>
    </div>
    <!-- / Content -->
</div>


@push('scripts')
<script>
    $(document).ready(function() {
            $('#mission').summernote({
                placeholder: 'Enter your mission',
                tabsize: 1,
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('information.mission', contents)
                    }
                }


            });
            $('#vission').summernote({
                placeholder: 'Enter your vission',
                tabsize: 1,
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('information.vision', contents)
                    }
                }


            });
            $('#about').summernote({
                placeholder: 'Enter your about',
                tabsize: 1,
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('information.about', contents)
                    }
                }
            });
            $('#our_presence').summernote({
                placeholder: 'Enter your message',
                tabsize: 1,
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('information.our_presence', contents)
                    }
                }
            });
            $('#energy_solution').summernote({
                placeholder: 'Enter your message',
                tabsize: 1,
                height: 300,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('information.energy_solution', contents)
                    }
                }
            });
        });
</script>
@endpush