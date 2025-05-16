<div class="step step-3">
    <!-- Step 3 form fields here -->
    <!-- =============== Section 3 - First Point Start ============= -->
    <div>
    <h3 class="mb-3 heading">Nominee/Next of Kin and Family Details</h3>
    <div class="row">
      <h1 class="sub_heading">3.1 Nominee/Next of Kin Details</h1>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Full Name of  Next of kin</label>
          <input type="text" class="form-control" placeholder="" id="nFullName" name="nFullName">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Relationship</label>
          <input type="text" class="form-control" placeholder="" id="nRelationShip" name="nRelationShip">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <div class="row mt-2">
            <div class="col-lg-6 col-6">
              <div class="form-check">
                <input class="form-check-input" type="radio"name="nGender" id="nGender" value="0" checked>
                <label class="form-check-label" for="flexRadioDefault3">
                  Male
                </label>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="nGender" id="nGender" value="1">
                <label class="form-check-label" for="flexRadioDefault4">
                  Female
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" placeholder="" id="nAddress" name="nAddress">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">City</label>
          <input type="text" class="form-control" placeholder="" id="ncity" name="ncity">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Country</label>
          <select class="form-select rounded-0" name="nCountry" id="nCountry" aria-label="Floating label select example">
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
          <label class="form-label">Nationality</label>
          <input type="text" class="form-control" placeholder="" id="nNationality" name="nNationality">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">E-mail</label>
          <input type="text" class="form-control" placeholder="" id="nEmail" name="nEmail">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Tel</label>
          <input type="text" class="form-control" placeholder="" id="nTel" name="nTel">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="mb-3">
          <label class="form-label">Mobile</label>
          <input type="text" class="form-control" placeholder="" id="nMobile" name="nMobile">
        </div>
      </div>
      <p class="mb-0"><span class="fw-bold">* Select from: </span>Spouse / Child / Grand Parent / Other Relative (Please Specify)</p>
    </div>
    </div>
    <!-- =============== Section 3 - First Point End ============= -->
    <hr style="color: #c9c5c5;">

    <div class="row">
      <!-- =============== Section 3 - Second Point Start ============= -->
      <div>
      <!-- Sub Accordion Section Start  -->
      <h1 class="sub_heading">3.2 Family Details</h1>
      <div class="accordion sub_accordion" id="accordionExample2">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
              Father
            </button>
          </h2>
          <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="" id="nFatherName" name="nFatherName">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="" id="nLastName" name="nLastName">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Date of Birth (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nFatherDob" name="nFatherDob" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Passport No.</label>
                    <input type="text" class="form-control" placeholder="" id="nFatherPassportNo" name="nFatherPassportNo">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Issued Date (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nFastherIssueDate" name="nFastherIssueDate" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Place of Issue</label>
                    <input type="text" class="form-control" placeholder="" id="nFatherPlaceIssue" name="nFatherPlaceIssue">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nFatherValidUntill" name="nFatherValidUntill" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
              Mother
            </button>
          </h2>
          <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="" id="nMotherName" name="nMotherName">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="" id="nMotherLastName" name="nMotherLastName">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Date of Birth (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0"  placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="nMotherDob" name="nMotherDob">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Passport No.</label>
                    <input type="text" class="form-control" placeholder="" id="nMotherPassportNo" name="nMotherPassportNo">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Issued Date (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nMotherIssueDate" name="nMotherIssueDate" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Place of Issue</label>
                    <input type="text" class="form-control" placeholder="" id="nMotherPlaceIssue" name="nMotherPlaceIssue">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nMotherValidUntill" name="nMotherValidUntill" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
              Spouse
            </button>
          </h2>
          <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="" id="nSposeFirstName" name="nSposeFirstName">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="" id="nSposeLastName" name="nSposeLastName">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Date of Birth (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="nSposeDob" name="nSposeDob">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Passport No.</label>
                    <input type="text" class="form-control" placeholder="" id="nSposePassportNo" name="nSposePassportNo">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Issued Date (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0"  id="nSposeIssuedDate" name="nSposeIssuedDate" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Place of Issue</label>
                    <input type="text" class="form-control" placeholder="" id="nSposePlaceIssue" name="nSposePlaceIssue">
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                  <div class="mb-3">
                    <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nSposeValidUntill" name="nSposeValidUntill" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
              Children
            </button>
          </h2>
          <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample2">
            <div class="accordion-body">
              <div class="incrementChildren removeChildren">
                <div class="padding_box ">
                  <h1 class="sub_heading">First Child</h1>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenFirstName" name="nChildrenFirstName[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenLastName" name="nChildrenLastName[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div class="row mt-2">
                          <div class="col-lg-6 col-6">
                            <div class="form-check">
                              <input class="form-check-input gender-radio" type="radio" name="1nChildGender[]" value="0" checked>
                              <label class="form-check-label" for="flexRadioDefault3">
                                Male
                              </label>
                            </div>
                          </div>
                          <div class="col-lg-6 col-6">
                            <div class="form-check">
                              <input class="form-check-input gender-radio" type="radio" name="1nChildGender[]" value="1">
                              <label class="form-check-label" for="flexRadioDefault4">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Date of Birth (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="nChildrenDob" name="nChildrenDob[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Passport No.</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenPassportNo" name="nChildrenPassportNo[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Issued Date (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nChildrenIssuedDate" name="nChildrenIssuedDate[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Place of Issue</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenPlaceIssue" name="nChildrenPlaceIssue[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nChildrenValidUntill" name="nChildrenValidUntill[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                      </div>
                    </div>
                  </div>
                  <!-- <hr> -->
                </div>
                <div class="text-end mb-3">
                  <button type="button" class="main_btn border-0 add_new_btn" id="addChildren"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
                </div>
              </div>

              <!-- ============================================== -->
              <div id="template" class="cloneChildren hide" hidden>
                <div class="padding_box removeChildren">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenFirstName" name="nChildrenFirstName[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenLastName" name="nChildrenLastName[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div class="row mt-2">
                          <div class="col-lg-6 col-6">
                            <div class="form-check">
                              <input class="form-check-input gender-radio" type="radio" name="nChildGender[]" value="0">
                              <label class="form-check-label" for="flexRadioDefault3">
                                Male
                              </label>
                            </div>
                          </div>
                          <div class="col-lg-6 col-6">
                            <div class="form-check">
                              <input class="form-check-input gender-radio" type="radio" name="nChildGender[]" value="1">
                              <label class="form-check-label" for="flexRadioDefault4">
                                Female
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Date of Birth (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nChildrenDob" name="nChildrenDob[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Passport No.</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenPassportNo" name="nChildrenPassportNo[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Issued Date (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nChildrenIssuedDate" name="nChildrenIssuedDate[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Place of Issue</label>
                        <input type="text" class="form-control" placeholder="" id="nChildrenPlaceIssue" name="nChildrenPlaceIssue[]">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                      <div class="mb-3">
                        <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nChildrenValidUntill" name="nChildrenValidUntill[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                      </div>
                    </div>
                  </div>
                  <!-- <hr> -->
                  <!-- ==========Delete Button============  -->
                  <a>
                    <div class="position-absolute delete_btn deleteChildren">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                  </a>
                  <!-- ==========Delete Button============  -->
                </div>

              </div>
              <!-- ===============================================  -->

            </div>
          </div>
        </div>
      </div>
      <!-- Sub Accordion Section End  -->
      </div>
    <!-- =============== Section 3 - Second Point End ============= -->
    </div>

    <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
      <button type="button" class="btn main_btn prev-step"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Previous</button>
      <button type="button" class="btn main_btn next-step">Next&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
  </div>
