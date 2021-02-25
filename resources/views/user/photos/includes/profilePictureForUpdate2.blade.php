 




    <div class="w3-border w3-border-purple w3-round">
    <div class="w3-container w3-padding">




  <form class="" action="{{ route('user.profilepicChangePost', 'public') }}" method="post" enctype="multipart/form-data">
 
 

    <input type="file" class="border p-1 float-left" id="photos" name="profile_picture" required>
  {{ csrf_field() }}

  <br>

  <br>
    
    <br>

     <button type="submit" class="w3-btn w3-white w3-round w3-border w3-border-purple w3-right w3-hover-purple btn-sm float-left"><i class="fa fa-upload"></i> Upload</button>
     <br> <br>
     <span class="help-block">please upload Square Image</span>
 
</form>
      
    </div>
  </div>

    
 