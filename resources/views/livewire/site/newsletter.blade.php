<div>
<section class="ftco-intro ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(images/bg_4.jpg);">
                    <div class="overlay"></div>
                    <h2>Join Us Newsletter</h2>
                    <p>Sign Up to our Newsletter and get our latest news update</p>
                    <div class="row justify-content-center">
                        <div class="col-md-6">                          
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" wire:model="newsletter" placeholder="Enter email address">
                                <input type="submit" value="Save" wire:click.prevent="saveNewsletter" class="btn btn-primary">
                            </div>
                            @error('newsletter') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
