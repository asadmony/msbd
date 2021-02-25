<div class="container">
                <div class="w3-border w3-border-purple w3-round w3-white">
                    <div class="col-sm-12">
            <div class="card- card-default">
                <div class="card-body-">
                    <div class="w3-card w3-round-large">
                            <h4 class="pl-3"> Upload Profile Picture</h4>
                        <div class="col-md-12">
                            @include('user.photos.includes.profilePictureForUpdate2')

                        </div>
                        <div class="col-md-12">
                            <h5>Tips:</h5>
                            <div>
                                <ul class="unstyled">
                                    <li>Upload Clear Photo.</li>
                                    <li>Upload Best Looking Face photo.</li>
                                    <li>Upload Complete Photo, Avoid partial photos.</li>
                                    <li>Upload your real Photo, Don't use photos from other website.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="w3-card w3-round-large">
                        <div class="col-md-12">
                            @include('user.photos.includes.uploadMyPublicPhotos')

                        </div>
                        <div class="col-md-12">
                            <h5>Tips:</h5>
                            <div>
                                <ul class="unstyled">
                                    <li>Upload atleast 3 photos.</li>
                                    <li>Photo size must be 4R.</li>
                                    <li>You can select multiple photos at a time.</li>
                                    <li>Upload Complete Photo, Avoid partial photos.</li>
                                    <li>Upload your real Photo, Don't use photos from other website.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                        {{-- <div class="input-group card mb-2">
                            <div class="col-md-6">
                                <label for="images">Profile picture</label>
                            </div>
                            <div class="col-md-6">
                                <input class="" type="file" name="images[]">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">
                                <label for="images">4R size photo 1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="images[]">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">
                                <label for="images">4R size photo 2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="images[]">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="col-md-6">
                                <label for="images">4R size photo 3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="images[]">
                            </div>
                        </div> --}}
                    </div>
            </div>
                </div>
            </div>
    
    
    
    
        <br>
</div>