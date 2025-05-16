<div class="step step-5">
    <!-- Step 5 form fields here -->
    <h3 class="mb-3 heading">Sea Experience</h3>
    <p class="mb-1 fw-bold">Please enter at least last 5 years experience to the listing below with the most recent experience in the top most row</p>
    <p class="mb-0">All Fields are Mandatory</p>
    <br>
    <div class="padding_box hdtuto2-sea-experience">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Company / Manning Agent</label>
                    <input type="text" class="form-control" placeholder="" id="sCompanyManningAgent" name="sCompanyManningAgent[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Flag</label>
                    <select class="form-select rounded-0" id="sFlag" name="sFlag[]" aria-label="Floating label select example">
                        <option value="">Select Country</option>
                        @if (isset($countries))
                        @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Vessel Name</label>
                    <input type="text" class="form-control" placeholder="" id="sVesselName" name="sVesselName[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">IMO No.</label>
                    <input type="number" class="form-control" placeholder="" id="sIMONo" name="sIMONo[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Vessel Type</label>
                    <select class="form-select rounded-0" id="vesselTypeId" name="vesselTypeId[]" aria-label="Floating label select example">
                        <option value="">Select Vessel Type</option>
                        @if (isset($vesselTypes))
                        @foreach ($vesselTypes as $vesselType)
                        <option value="{{ $vesselType->id }}">{{ $vesselType->type_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">TEU</label>
                    <input type="text" class="form-control" placeholder="" id="teu" name="teu[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">GRT</label>
                    <input type="number" class="form-control" placeholder="" id="sGrt" name="sGrt[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">DWT</label>
                    <input type="number" class="form-control" placeholder="" id="sdwt" name="sdwt[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Engine Make/ Model</label>
                    <input type="text" class="form-control" placeholder="" id="sEngineMake" name="sEngineMake[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">BHP</label>
                    <input type="text" class="form-control" placeholder="" id="sBhp" name="sBhp[]">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Rank</label>
                    <select class="form-select rounded-0" id="sRank" name="sRank[]" aria-label="Floating label select example">
                        <option value="">Select Rank</option>
                        @if(isset($postions))
                        @foreach($postions as $postion)
                        <option value="{{$postion->id}}">{{$postion->name}}</option>
                        @endforeach
                        @endif
                    </select><i></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Date from (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0 sDatefrom" id="sDatefrom" name="sDatefrom[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Date to (YYYY-DD-MM)</label>
                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0 sDateTo" id="sDateTo" name="sDateTo[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Total Service</label>
                    <div class="row">
                        <div class="col-4">
                            <input type="number" class="form-control text-center sYear" placeholder="Y" id="sYear" name="sYear[]">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control text-center sMonth" placeholder="M" id="sMonth" name="sMonth[]">
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control text-center sDate" placeholder="D" id="sDate" name="sDate[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Sign Off Reason</label>
                    <select class="form-select rounded-0" id="sSignOffReason" name="sSignOffReason[]" aria-label="Floating label select example">
                        <option value="">Select Sign Off Reason</option>
                        <option value="CC">Completed Contract</option>
                        <option value="VS">Vessel Sold</option>
                        <option value="MG">Medical Grounds</option>
                        <option value="OR">Other Reasons</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mb-3">
                    <label class="form-label">Sign Off Reason Specifically (If select sign off reason as Medical Ground or Other Reasons please specify)</label>
                    <textarea class="form-control rounded-0" placeholder="" style="height: 100px" id="sign_off_description" name="sign_off_description[]"></textarea>
                </div>
            </div>
        </div>
        <!-- <hr> -->
    </div>
    <div class="text-end mb-3 incrementExperience removeExperience">
        <button type="button" class="main_btn border-0 add_new_btn" id="addExperience"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
    </div>
    <div class="cloneExperience hdtuto2-sea-experience" hidden>
        <div class="padding_box removeExperience">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Company / Manning Agent</label>
                        <input type="text" class="form-control" placeholder="" id="sCompanyManningAgent" name="sCompanyManningAgent[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Flag</label>
                        <select class="form-select rounded-0" id="sFlag" name="sFlag[]" aria-label="Floating label select example">
                            <option value="">Select Country</option>
                            @if (isset($countries))
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Vessel Name</label>
                        <input type="text" class="form-control" placeholder="" id="sVesselName" name="sVesselName[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">IMO No.</label>
                        <input type="number" class="form-control" placeholder="" id="sIMONo" name="sIMONo[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Vessel Type</label>
                        <select class="form-select rounded-0" id="vesselTypeId" name="vesselTypeId[]" aria-label="Floating label select example">
                            <option value="">Select Vessel Type</option>
                            @if (isset($vesselTypes))
                            @foreach ($vesselTypes as $vesselType)
                            <option value="{{ $vesselType->id }}">{{ $vesselType->type_name }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">TEU</label>
                        <input type="text" class="form-control" placeholder="" id="teu" name="teu[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">GRT</label>
                        <input type="number" class="form-control" placeholder="" id="sGrt" name="sGrt[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">DWT</label>
                        <input type="number" class="form-control" placeholder="" id="sdwt" name="sdwt[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Engine Make/ Model</label>
                        <input type="text" class="form-control" placeholder="" id="sEngineMake" name="sEngineMake[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">BHP</label>
                        <input type="text" class="form-control" placeholder="" id="sBhp" name="sBhp[]">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Rank</label>
                        <select class="form-select rounded-0" id="sRank" name="sRank[]" aria-label="Floating label select example">
                            <option value="">Select Rank</option>
                            @if(isset($postions))
                            @foreach($postions as $postion)
                            <option value="{{$postion->id}}">{{$postion->name}}</option>
                            @endforeach
                            @endif
                        </select><i></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Date from (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0 sDatefrom" id="sDatefrom" name="sDatefrom[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Date to (YYYY-DD-MM)</label>
                        <input type="text" class="datepicker_input form-control datepicker-input rounded-0 sDateTo" id="sDateTo" name="sDateTo[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Total Service</label>
                        <div class="row">
                            <div class="col-4">
                                <input type="number" class="form-control text-center sYear" placeholder="Y" id="sYear" name="sYear[]">
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control text-center sMonth" placeholder="M" id="sMonth" name="sMonth[]">
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control text-center sDate" placeholder="D" id="sDate" name="sDate[]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="mb-3">
                        <label class="form-label">Sign Off Reason</label>
                        <select class="form-select rounded-0" id="sSignOffReason" name="sSignOffReason[]" aria-label="Floating label select example">
                            <option value="">Select Sign Off Reason</option>
                            <option value="CC">Completed Contract</option>
                            <option value="VS">Vessel Sold</option>
                            <option value="MG">Medical Grounds</option>
                            <option value="OR">Other Reasons</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="mb-3">
                        <label class="form-label">Sign Off Reason Specifically (If select sign off reason as Medical Ground or Other Reasons please specify)</label>
                        <textarea class="form-control rounded-0" placeholder="" style="height: 100px" id="sign_off_description" name="sign_off_description[]"></textarea>
                    </div>
                </div>
            </div>
            <!-- <hr> -->
            <!-- ==========Delete Button============  -->
            <a>
                <div class="position-absolute delete_btn deleteExperience">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </div>
            </a>
            <!-- ==========Delete Button============  -->
        </div>
    </div>

    <br>

    <!-- Step 5 form fields here -->
    <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
        <button type="button" class="btn main_btn prev-step"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Previous</button>
        <button type="button" class="btn main_btn next-step">Next&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>
</div>
