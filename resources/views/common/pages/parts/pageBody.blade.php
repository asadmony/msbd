<section class="content-fluid p-0 w3-white">
    @php
    $pageItem = $page->items->where('active',true);
    @endphp
    @foreach($pageItem as $item)
    <div>
        @if(($page->route_name == 'help_and_customer_support') and ($item->title == 'form_address'))
 
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="w3-card w3-round p-0 p-lg-2" style="margin-bottom:20px; min-height: 593px;">
                        <div class="card-body">
                            <div style="display:grid; grid-template-columns:auto auto; grid-gap:5px;word-break:keep-all;">
                                {!! $item->content !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="w3-card w3-round" style="margin-bottom:20px; min-height: 593px;">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class=" featured-box featured-box-primary text-left mt-0" style="min-height: 495px;">
                                <div class="box-content text-center">
                                    <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Marriage Solution
                                        BD</h4>
                                    <form action="{{ route('welcome.contactAdmin') }}" id="frmSignUp" method="post" class="pb-3 needs-validation">
                                        @csrf                           
                                        <div class="form-row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" value="" 
                                                    maxlength="100" class="form-control" name="name" placeholder="Name"
                                                    required>
                                            </div>                  
                                        </div>
                                        {{-- <div class="form-row">
                                            <div class="form-group col">
                                                
                                                <select class="form-control" name="seeking_for">
                                                    <option value="" selected disabled>Seeking Alliance for</option>
                                                    <option value="self">Self</option>
                                                    <option value="daughter">Daughter</option>
                                                    <option value="son">Son</option>
                                                    <option value="brother">Brother</option>
                                                    <option value="sister">Sister</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="form-row">
                                            <div class="form-group col-lg-12">
                                                
                                                <input type="text" value="" name="email" placeholder="Email"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-12">
                                                <input type="text" name="mobile" 
                                                    class="form-control" placeholder="Mobile" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg">
                                                
                                                <textarea value="" name="desc" rows="4"
                                                placeholder="Write your query description"
                                                    class="form-control form-control-lg" required></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center pt-2">
                                            
                                            <button class="btn btn-default btn-lg" type="reset">Reset</button>
                                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        {!! $item->content !!}
        @endif
    </div>

    @endforeach

</section>
