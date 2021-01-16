<div class="row">
  <div class="col-sm-12">
    <div class="w3-card-2 w3-round">
      

 

    <div class="box box-widget" id="our-branches">
            <div class="box-header w3-panel w3-leftbar w3-border-purple">
              <h3 class="box-title">
                 Our Branches
              </h3>
            </div>
            <div class="box-body  w3-topbar">


              <div class="box box-widget">
  <div class="box-body" style="background: #eee;">

    @foreach($branches->chunk(2) as $branch2)
    <div class="row">
      @foreach($branch2 as $branch)

      <div class="col-sm-6">
        <div class="w3-hover-shadow">
          <div class="w3-card-2 ">
            <div class="box box-widget">
              <div class="box-header with-border w3-center">
                <h3 class="box-title"><b>{{ $branch->branch_name }}</b></h3>

                <div class="box-tools pull-right">
                  <a class="btn btn-sm btn-primary" href="tel:{{ $branch->mobile }}" 
                  title="{{ $branch->mobile }}, {{ $branch->email }}" 
                  
                  >Contact Now</a>
                </div>
              </div>
              <div class="box-body">

                {!! $branch->map !!}
                
              </div>
            </div>
          </div>
        </div>
      </div>

      @endforeach
    @if(Browser::isDesktop())
    @if($loop->last)
      @if($branches->count() % 2 != 0)
      <div class="col-sm-6">
        <img class="img-responsive" style="width: 100%;height: 365px !important;" src="{{ asset('img/biye1.png') }}" alt="{{ env('APP_NAME_BIG') }}">
      </div>
      @endif
      @endif
    @endif
    </div>
    @endforeach


    {{-- <div class="row">


      <div class="col-sm-6">
        <div class="w3-hover-shadow">
          <div class="w3-card-2 ">
            <div class="box box-widget">
              <div class="box-header with-border w3-center">
                <h3 class="box-title"><b>Marriage Solution - Head Office </b></h3>

                <div class="box-tools pull-right">
                  <a class="btn btn-sm btn-primary" href="tel:02-9131746" 
                  title="02-9131746" 
                  
                  >Contact Now</a>
                </div>
              </div>
              <div class="box-body">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.671187234738!2d90.37121771443627!3d23.759102184585025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf3ca2f0be9f%3A0x1b479106030d72f8!2sMarriage+Solution+Bd.!5e0!3m2!1sen!2sbd!4v1542185034971" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="w3-hover-shadow">
          <div class="w3-card-2 ">
            <div class="box box-widget">
              <div class="box-header with-border w3-center">
                <h3 class="box-title"><b>Marriage Solution - Gulshan </b></h3>

                <div class="box-tools pull-right">
                  <a class="btn btn-sm btn-primary" href="tel:02-9131746" 
                  title="02-9131746" 
                  
                  >Contact Now</a>
                </div>
              </div>
              <div class="box-body">

                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1825.4736415890425!2d90.4174215!3d23.7848915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7cfdf2daa59%3A0x10af8daf36be062!2sMarriage+Solution+BD+Gulshan+Branch!5e0!3m2!1sen!2sbd!4v1542183152951" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="col-sm-6">


        <div class="w3-hover-shadow">
          <div class="w3-card-2 ">
            <div class="box box-widget">
              <div class="box-header with-border w3-center">
                <h3 class="box-title"><b>Marriage Solution - Uttara </b></h3>

                <div class="box-tools pull-right">
                  <a class="btn btn-sm btn-primary" href="tel:02-9131746" 
                  title="02-9131746" 
                  
                  >Contact Now</a>
                </div>
              </div>
              <div class="box-body">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.5624869800404!2d90.38749341443881!3d23.86966498453084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5a4d716e251%3A0x4a08737011bcc979!2sMarriage+Solution+BD+Uttara+Branch!5e0!3m2!1sen!2sbd!4v1542187815083" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        
        <div class="w3-hover-shadow">
          <div class="w3-card-2 ">
            <div class="box box-widget">
              <div class="box-header with-border w3-center">
                <h3 class="box-title"><b>Marriage Solution - Kakrail </b></h3>

                <div class="box-tools pull-right">
                  <a class="btn btn-sm btn-primary" href="tel:02-9131746" 
                  title="02-9131746" 
                  
                  >Contact Now</a>
                </div>
              </div>
              <div class="box-body">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.079617340171!2d90.40807192915688!3d23.73602019903728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9da2c94fe47%3A0xa9e14153a170935e!2sMarriage+Solution+BD+Kakrail+Branch!5e0!3m2!1sen!2sbd!4v1549738030408" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    
  </div>
</div>

              
               
            </div>
          </div>
              
 
              </div>
            </div>
          </div>

          <br>
