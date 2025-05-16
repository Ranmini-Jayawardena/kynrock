<div class="step step-1">
    <!-- Step 1 form fields here -->
    <h3 class="mb-3 heading">Personal Details</h3>
    <div class="img_upload mb-4">
        <h1 class="sub_heading fw-bold mb-3">Upload Your Photo<a data-bs-toggle="tooltip" style="cursor: pointer;" data-bs-title="Upload passport size photo"><i class="fa fa-info-circle text-dark ms-2" aria-hidden="true"></i></a></h1>
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="file" />
                <label for="imageUpload"></label>
            </div>
            <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url('{{ asset('public/userpanel/images/user_img.png') }}');">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h1 class="sub_heading">1.1 Personal Details</h1>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <select class="form-select rounded-0" id="title" name="title" data-parsley-required-message="Please select the title" aria-label="Floating label select example">
                    <option value="">Select the title</option>
                    <option value="0">Mr</option>
                    <option value="1">Miss</option>
                    <option value="2">Mrs</option>
                    <option value="3">Rev</option>
                    <option value="4">Dr</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input type="text" class="form-control" placeholder="" name="surname" id="surname">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Other Name</label>
                <input type="text" class="form-control" placeholder="" id="otherNames" name="otherNames">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="" id="fullName" name="fullName">
            </div>
        </div>
        <div class="col-lg-3  col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Nationality</label>
                <input type="text" class="form-control" placeholder="" id="nationality" name="nationality" pattern="[^\d]*" data-parsley-required-message="Please enter nationality">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Date of Birth (YYYY-DD-MM)</label>
                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="dob" name="dob" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" data-parsley-required-message="Please enter date of birth" data-date-format='yyyy-mm-dd' data-parsley-type="date">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Place/ City of Birth</label>
                <input type="text" class="form-control" placeholder="" id="placeOfBirth" name="placeOfBirth" value="">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Marital Status</label>
                <select class="form-select rounded-0" id="maritalStatus" name="maritalStatus" aria-label="Floating label select example">
                    <option value="">Select</option>
                    <option value="1">Married</option>
                    <option value="2">Single</option>
                    <option value="3">Divorced</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select class="form-select rounded-0" id="gender" name="gender" aria-label="Floating label select example">
                    <option value="">Select</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Religion</label>
                <input type="text" class="form-control" placeholder="" id="religion" name="religion">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Rank Applied<span style="color: #FF0000;">*</span></label>
                <select class="form-select rounded-0" id="rankApplied" name="rankApplied" aria-label="Floating label select example" required>
                    <option value="">Select Rank Applied</option>
                    @if(isset($postions))
                    @foreach($postions as $postion)
                    <option value="{{$postion->id}}">{{$postion->name}}</option>
                    @endforeach
                    @endif
                </select><i></i>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" value="1" id="is_wiiling_to_approve" name="is_wiiling_to_approve">
                    <label class="form-check-label" for="flexCheckDefault">
                        Willing to Accept Lower Rank
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Available Date (YYYY-DD-MM)</label>
                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="availableDate" name="availableDate" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" data-parsley-required-message="Please enter date of birth" data-date-format='yyyy-mm-dd' data-parsley-type="date">
            </div>
        </div>
    </div>
    <hr style="color: #bebcbc;">
    <div class="row">
        <h1 class="sub_heading">1.2 Contact Details</h1>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Primary/Permanent Address</label>
                <textarea class="form-control rounded-0" placeholder="" style="height: 40px" id="primaryAddress" name="primaryAddress"></textarea>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" class="form-control" placeholder="" id="city" name="city">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Country</label>
                <select class="form-select rounded-0" name="country" id="country" aria-label="Floating label select example">
                    <option value="">Select Country</option>
                    @if(isset($countries))
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Home Tel</label>
                <input type="tel" class="form-control" placeholder="" id="homeTel" name="homeTel">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Mobile No<span style="color: #FF0000;">*</span></label>
                <input type="tel" class="form-control" placeholder="" id="mobileNo" name="mobileNo" required>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Fax</label>
                <input type="text" class="form-control" placeholder="" id="fax" name="fax">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="" id="email" name="email">
            </div>
        </div>
    </div>
    <hr style="color: #c9c5c5;">
    <div class="row">
        <h1 class="sub_heading">1.3 Measurements</h1>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Collar Size (cm)</label>
                <input type="number" class="form-control" placeholder="" id="collarSize" name="collarSize" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Chest Size (cm)</label>
                <input type="number" class="form-control" placeholder="" id="chestSize" name="chestSize" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Waist Size (cm)</label>
                <input type="number" class="form-control" placeholder="" id="waistSize" name="waistSize" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Inside Leg Size (cm)</label>
                <input type="number" class="form-control" placeholder="" id="insideLegSize" name="insideLegSize" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Cap Size (cm)</label>
                <input type="number" class="form-control" placeholder="" id="capSize" name="capSize" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Overall Size</label>
                <select class="form-select rounded-0" name="overallSize" id="overallSize" aria-label="Floating label select example">
                    <option value="">Select the overall size</option>
                    <option value="0">S</option>
                    <option value="1">M</option>
                    <option value="2">L</option>
                    <option value="3">XL</option>
                    <option value="4">XXL</option>
                    <option value="5">XXXL</option>
                    <option value="6">XXXXL</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Safety Shoe Size</label>
                <input type="number" class="form-control" placeholder="" id="safetyShoeSize" name="safetyShoeSize" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Height (cm)</label>
                <input type="number" class="form-control" placeholder="" id="height" name="height" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">Weight (Kg)</label>
                <input type="number" class="form-control" placeholder="" id="weight" name="weight" step="0.01">
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <label class="form-label">BMI: weight (kg) / [height (m)]2</label>
                <input type="number" class="form-control" placeholder="" id="bmi" name="bmi" step="0.01">
            </div>
        </div>
    </div>

    <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
        <button type="button" class="btn main_btn next-step">Next&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>

</div>
