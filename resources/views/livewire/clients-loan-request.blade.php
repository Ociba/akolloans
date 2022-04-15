<div>
    <div class="card">
        <div class="card-body">
        <form action="/clients/send-loan-request" method="post" enctype="multipart/form-data"> 
                    @csrf
                    <input type="text" name="user_id" class="form-control" value="{{auth()->user()->id}}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                             <label class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" maxlength="10" placeholder="eg 07*******" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label class="form-label">National ID Number</label>
                            <input type="text" name="nin_number" class="form-control" maxlength="14" placeholder="" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                        <label class="form-label">Tax Identification Number</label>
                            <input type="text" name="tin_number" class="form-control" maxlength="14" placeholder="" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label class="form-label">Computer Number</label>
                        <input type="text" name="computer_no" class="form-control" maxlength="12" placeholder="" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-label">Earning Type</label>
                            <select class="custom-select" name="employment_status" required>
                                <option>Select Type</option>
                                <option value="Salary">Salary</option>
                                <option value="Business">Business</option>
                                <option value="Wage">Wage</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label class="form-label">Employer</label>
                            <select class="custom-select" name="employer" required>
                                <option>Select Employer</option>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                                <option value="Self Employed">Self Employed</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="form-label">District</label>
                            <select class="custom-select" name="district_id" required>
                                <option>Select District</option>
                                @foreach($get_client_district as $disrtict)
                                <option value="{{$disrtict->id}}">{{$disrtict->district}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label class="form-label">Loan Amount</label>
                        <input type="number" name="loan_amount" class="form-control"  placeholder="" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group col-md-6">
                        <label class="form-label">Passport Photo</label>
                        <input type="file" name="profile_photo_path" class="form-control" required>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Send Request</button>
                    </div>
                    
                </form>
        </div>
    </div>
</div>


