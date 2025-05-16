<div class="step step-7">
    <!-- Step 7 form fields here -->
    <h3 class="mb-3 heading">General</h3>
    <br>
    <div class="row">
        <div class="col-lg-6 col-12">
            <p class="fw-bold mb-2">(A) Have you ever been denied a foreign visa?</p>
            <div class="mb-3">
                <div class="row mt-2">
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GgeneralQuestionA" id="GgeneralQuestionA" value="0">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GgeneralQuestionA" id="GgeneralQuestionA" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                                No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <br class="d-block">
        </div>

        <div class="col-lg-6 col-12">
            <div class="row">
                <p class="mb-2">If yes, state which country and reason (if known)</p>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <select class="form-select rounded-0" id="gCountry" name="gCountry" aria-label="Floating label select example">
                            <option value="">Select Country</option>
                            @if(isset($countries))
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="mb-3">
                        <label class="form-label">Reason</label>
                        <input type="text" class="form-control" placeholder="" id="gReason" name="gReason">
                    </div>
                </div>
            </div>
            <br class="d-block">
        </div>

        <div class="clearfix"></div>

        <div class="col-lg-6 col-12">
            <p class="fw-bold mb-2">(B) Have you been the subject of a court enquiry or involved in a maritime accident?</p>
            <div class="mb-3">
                <div class="row mt-2">
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GgeneralQuestionB" id="GgeneralQuestionB" value="0">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GgeneralQuestionB" id="GgeneralQuestionB" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                                No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-12">
            <div class="row">
                <p class="mb-2">If yes, please attach details</p>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                    <div class="mb-3">
                        <input class="form-control h-auto" type="file" id="gfile" name="gfile">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-lg-12 col-12">
            <br>
            <p class="fw-bold mb-2">(C) Curriculum Vitae</p>
        </div>
        <div class="row">
            <p class="mb-2">Please attach your CV </p>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
                <div class="mb-3">
                    <input class="form-control h-auto" type="file" id="seafarer_cv" name="seafarer_cv" required>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div>
        <h2 class="sub_heading">Declaration to be signed by the applicant</h2>
        <p>I hereby certify that the information contained in this form is correct and I understand that the Company may terminate my services at any time if any of the above information is found to be false.
            I understand that a medical examination at my own cost is a condition precedent to selection for employment and I express my willingness to be so examined (if required) and to furnish the company Doctor with full details of my previous medical history.
        </p>
        <br>
        {{-- <div class="row justify-content-between flex-sm-row flex-column-reverse">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <input type="text" class="datepicker_input form-control datepicker-input rounded-0 border-0 mb-2 text-center" id="datepicker1" placeholder="DD/MM/YYYY" fdprocessedid="2w8te">
            <p class="fw-bold mb-0">Date</p>
          </div>
        </div>
        <br>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-end">
          <div class="text-center">
            <input type="text" class="form-control border-0 mb-2 text-center" placeholder="Your Signature">
            <p class="fw-bold mb-0">Signature of Applicant</p>
          </div>
        </div>
      </div> --}}
        <div>
            <p id="error-msg" style="color: red; display:none;"><b>Please complete all fileds marked with *</b></p>
        </div>
    </div>

<br>

    <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
        <button type="button" class="btn main_btn prev-step"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Previous</button>
        <button id="candidate-form-btn" type="submit" class="btn main_btn submit_btn">Submit</button>
    </div>
</div>
