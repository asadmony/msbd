<template>
    <div>
        <section class="padding-around">

            <form action="page-profile.html" name="profile_form" id="profile_form" class="block-register">

            <div class="icontext">
                <div class="icon">
                    <img src="mobile/images/avatars/1.jpg" class="rounded-circle shadow-sm img-md" >
                </div>
                <div class="text">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file_pasport" accept="" lang="en">
                    <label class="custom-file-label" for="file_pasport">Profile image</label>
                    </div>
                </div>
            </div>

            <hr>

            <div class="form-group">
                <label>Username</label>
                <input type="text" required class="form-control" value="vosidiy">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="telefon" class="form-control" value="+998" pattern="^[+][0-9]{12}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" autofocus autocomplete="on" class="form-control" value="myname@gmail.com">
            </div>

            <div class="form-group">
                <label>Shahar</label>
                <input type="text" list="city" name="city" class="form-control" placeholder="Yozing">
                <datalist id="city">
                <option value="Toshkent"></option>
                <option value="Buxoro"></option>
                <option value="Samarqand"></option>
                </datalist>
            </div>
            <button class="btn btn-light btn-block"> <i class="fa fa-lock"></i> Change password</button>
            </form>

            <button type="submit" class="btn btn-block btn-primary"    form="profile_form"> Save  </button>



            </section> <!-- section body .// -->

            <hr class="divider my-3">

            <bottom-back-bottom></bottom-back-bottom>
    </div>
</template>