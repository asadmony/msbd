
<div class="col-lg-9">
    <div class="accordion accordion-modern" id="accordion">
        <div class="card card-default">
            <div class="card-header">
                <h4 class="card-title m-0">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        User Information
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="collapse show">
                <div class="card-body">
                    <form action="/" id="frmBillingAddress" method="post">
                        {{-- <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold text-dark text-2">Country</label>
                                <select class="form-control">
                                    <option value="">Select a country</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold text-dark text-2">First Name</label>
                                <input type="text" value="{{$user->name}}" class="form-control">
                            </div>
                            {{-- <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-dark text-2">Last Name</label>
                                <input type="text" value="" class="form-control">
                            </div> --}}
                        </div>
                        {{-- @if($user->activeCompanies())
                        @foreach($user->activeCompanies() as $comp) --}}
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold text-dark text-2">Company Name</label>
                                @if($company)
                                <input type="text" value="{{$company}}" class="form-control">
                                @else
                                <input type="text" name="{{$company}}" class="form-control">
                                @endif
                            </div>
                        </div>
                        {{-- @endforeach
                        @endif --}}
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold text-dark text-2">email </label>
                                <input type="text" value="{{$user->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold text-dark text-2">City </label>
                                <input type="text" value="" class="form-control">
                            </div>
                        </div>
                        <div >
                            <input type="submit" value="Place Order" name="proceed" class="btn btn-primary w3-right btn-modern text-uppercase mt-5 mb-5 mb-lg-0">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="col-lg-3">
    <h4 class="text-primary">Totals</h4>
    <table class="cart-totals">
        <tbody>
            <tr class="cart-subtotal">
                <th>
                    <strong class="text-dark">Total</strong>
                </th>
                <td>
                    <strong class="text-dark"><span class="amount">£{{$package->price}}</span></strong>
                </td>
            </tr>
            
            <tr class="total">
                <th>
                    <strong class="text-dark">Order Total</strong>
                </th>
                <td>
                    <strong class="text-dark" style="font-size: 11px !important;"><span class="amount">£ {{$package->price}}</span></strong>
                </td>
            </tr>
        </tbody>
    </table>
</div>
        