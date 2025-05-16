<div class="step step-2">
    <!-- Step 2 form fields here -->
    <h3 class="mb-3 heading">Personal ID/Documents/Visa</h3>
    <div class="accordion sub_accordion" id="accordionExample4">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne20">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne20" aria-expanded="true" aria-controls="collapseOne20">
            Seaman’s Book (National)
          </button>
        </h2>
        <div id="collapseOne20" class="accordion-collapse collapse show" aria-labelledby="headingOne20" data-bs-parent="#accordionExample4">
          <div class="accordion-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Country of Issue</label>
                  <select class="form-select rounded-0" name="seamanCountryofIssue" id="seamanCountryofIssue" aria-label="Floating label select example">
                    <option value="">Select Country</option>
                    @if(isset($countries))
                      @foreach($countries as $country)
                          <option value="{{$country->id}}">{{$country->country_name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Number<span style="color: #FF0000;">*</span></label>
                  <input type="text" class="form-control" placeholder="" id="seamanNumber" name="seamanNumber" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Date of Issue (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="seamanDateofIssue" name="seamanDateofIssue"  placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Issued at (Place)</label>
                  <input type="text" class="form-control" placeholder="" id="seamanIssuedAt" name="seamanIssuedAt">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="seamanValidUntil" name="seamanValidUntil" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne21">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne21" aria-expanded="false" aria-controls="collapseOne21">
            Passport
          </button>
        </h2>
        <div id="collapseOne21" class="accordion-collapse collapse" aria-labelledby="headingOne21" data-bs-parent="#accordionExample4">
          <div class="accordion-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Country of Issue</label>
                  <select class="form-select rounded-0" name="passportCountryofIssue" id="passportCountryofIssue" aria-label="Floating label select example">
                    <option value="">Select Country</option>
                    @if(isset($countries))
                      @foreach($countries as $country)
                          <option value="{{$country->id}}">{{$country->country_name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Number<span style="color: #FF0000;">*</span></label>
                  <input type="text" class="form-control" placeholder="" id="passportNumber" name="passportNumber" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Date of Issue (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0"  placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="passportDateofIssue" name="passportDateofIssue">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Issued at (Place)</label>
                  <input type="text" class="form-control" placeholder="" id="passportIssuedAt" name="passportIssuedAt">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="passportValidUntil" name="passportValidUntil" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne22">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne22" aria-expanded="false" aria-controls="collapseOne22">
            US Visa C1/D
          </button>
        </h2>
        <div id="collapseOne22" class="accordion-collapse collapse" aria-labelledby="headingOne22" data-bs-parent="#accordionExample4">
          <div class="accordion-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Country of Issue</label>
                  <select class="form-select rounded-0" name="usvisaCountryofIssue" id="usvisaCountryofIssue" aria-label="Floating label select example">
                    <option value="">Select Country</option>
                    @if(isset($countries))
                      @foreach($countries as $country)
                          <option value="{{$country->id}}">{{$country->country_name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Number</label>
                  <input type="text" class="form-control" placeholder="" id="usvisaNumber" name="usvisaNumber">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Date of Issue (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="usvisaDateofIssue" name="usvisaDateofIssue" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Issued at (Place)</label>
                  <input type="text" class="form-control" placeholder="" id="usvisaIssuedAt" name="usvisaIssuedAt">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="usvisaValidUntil" name="usvisaValidUntil" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne23">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne23" aria-expanded="false" aria-controls="collapseOne23">
            Yellow Fever
          </button>
        </h2>
        <div id="collapseOne23" class="accordion-collapse collapse" aria-labelledby="headingOne23" data-bs-parent="#accordionExample4">
          <div class="accordion-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Country of Issue</label>
                  <select class="form-select rounded-0" name="yellowFeverCountryofIssue" id="yellowFeverCountryofIssue" aria-label="Floating label select example">
                    <option value="">Select Country</option>
                    @if(isset($countries))
                      @foreach($countries as $country)
                          <option value="{{$country->id}}">{{$country->country_name}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Number</label>
                  <input type="text" class="form-control" placeholder="" id="yellowFeverNumber" name="yellowFeverNumber" >
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Date of Issue (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="yellowFeverDateofIssue" name="yellowFeverDateofIssue" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Issued at (Place)</label>
                  <input type="text" class="form-control" placeholder="" id="yellowFeverIssuedAt" name="yellowFeverIssuedAt">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                  <div class="row mt-2">
                    <div class="col-lg-6 col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio"name="is_valid_yf_lifetime" id="nGender" value="1" onclick="yf_validity_period()" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                          Lifetime
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_valid_yf_lifetime" id="nGender" value="0" onclick="yf_validity_period()">
                        <label class="form-check-label" for="flexRadioDefault4">
                          Valid Date
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12" id="yf_valid_date_field" style="display: none">
                <div class="mb-3">
                  <label class="form-label"></label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="yellowFeverValidUntil" name="yellowFeverValidUntil" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne24">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne24" aria-expanded="false" aria-controls="collapseOne24">
            National ID
          </button>
        </h2>
        <div id="collapseOne24" class="accordion-collapse collapse" aria-labelledby="headingOne24" data-bs-parent="#accordionExample4">
          <div class="accordion-body">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <div class="mb-3">
                    <label class="form-label">Country of Issue</label>
                    <select class="form-select rounded-0" name="nationalIdNountryofIssue" id="nationalIdNountryofIssue" aria-label="Floating label select example">
                      <option value="">Select Country</option>
                      @if(isset($countries))
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Number</label>
                  <input type="text" class="form-control" placeholder="" id="nationalIdNumber" name="nationalIdNumber">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Date of Issue (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nationalIdDateofIssue" name="nationalIdDateofIssue" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Issued at (Place)</label>
                  <input type="text" class="form-control" placeholder="" id="nationalIdIssuedAt" name="nationalIdIssuedAt">
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-3">
                  <label class="form-label">Valid Until (YYYY-DD-MM)</label>
                  <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="nationalIdValidUntil" name="nationalIdValidUntil" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
      <button type="button" class="btn main_btn prev-step"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Previous</button>
      <button type="button" class="btn main_btn next-step">Next&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
  </div>
