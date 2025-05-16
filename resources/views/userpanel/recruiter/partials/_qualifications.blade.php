<div class="step step-4">
    <h3 class="mb-3 heading">STCW – Compliant Certificates/Courses and Other Qualifications</h3>
    <!-- =============== Section 4 - First Point Start ============= -->
    <div>
        <h1 class="sub_heading">4.1 Pre-Sea Training (Deck Rating/ Engine Rating/ Marine Skilled Craftsman)</h1>
        <div class="incrementCertificates removeCertificates">
            <div class="padding_box">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Certificate No.</label>
                            <input type="text" class="form-control" placeholder="" id="qPreSeaCertificateNo" name="qPreSeaCertificateNo[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Qualification</label>
                            <input type="text" class="form-control" placeholder="" id="qPreSeaTrainingqualification" name="qPreSeaTrainingqualification[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Training Institute</label>
                            <input type="text" class="form-control" placeholder="" id="qPreSeaTrainingTrainitInstitue" name="qPreSeaTrainingTrainitInstitue[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">From (YYYY-DD-MM)</label>
                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qPreSeaTrainingFrom" name="qPreSeaTrainingFrom[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">To (YYYY-DD-MM)</label>
                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="datepicker1" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="qPreSeaTrainingTo" name="qPreSeaTrainingTo[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-3">
                <button type="button" class="main_btn border-0 add_new_btn" id="addCertificates"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
            </div>
        </div>
        <div class="cloneCertificates" hidden>
            <div class="padding_box removeCertificates">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Certificate No.</label>
                            <input type="text" class="form-control" placeholder="" id="qPreSeaCertificateNo" name="qPreSeaCertificateNo[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Qualification</label>
                            <input type="text" class="form-control" placeholder="" id="qPreSeaTrainingqualification" name="qPreSeaTrainingqualification[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Training Institute</label>
                            <input type="text" class="form-control" placeholder="" id="qPreSeaTrainingTrainitInstitue" name="qPreSeaTrainingTrainitInstitue[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">From (YYYY-DD-MM)</label>
                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qPreSeaTrainingFrom" name="qPreSeaTrainingFrom[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">To (YYYY-DD-MM)</label>
                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qPreSeaTrainingTo" name="qPreSeaTrainingTo[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                        </div>
                    </div>
                </div>
                <!-- <hr> -->
                <!-- ==========Delete Button============  -->
                <a>
                    <div class="position-absolute delete_btn deleteCertificates">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- ==========Add Button============  -->
            </div>
        </div>
    </div>
    <!-- =============== Section 4 - First Point End ============= -->
    <hr style="color: #c9c5c5;">

    <!-- =============== Section 4 - Second Point Start ============= -->
    <div>
        <h1 class="sub_heading">4.2 License</h1>
        <p>*Enter actual description given in the Certificate of Competency / Watch keeping Certificate held by you</p>
        <div class="padding_box">
            {{-- <p class="fw-bold">License</p> --}}

            <!-- Sub Accordion Section Start  -->
            <div class="accordion sub_accordion" id="accordionExample3">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne11">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne11" aria-expanded="false" aria-controls="collapseOne11">
                            * License
                        </button>
                    </h2>
                    <div id="collapseOne11" class="accordion-collapse collapse show" aria-labelledby="headingOne11" data-bs-parent="#accordionExample3">
                        <div class="accordion-body">
                            <div class="incrementLicense removeLicense">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Qualification</label>
                                            <select class="form-select rounded-0" id="license_type_id" name="license_type_id_1[]" aria-label="Floating label select example">
                                                <option value="">Select Qualification</option>
                                                @foreach ($licence_section_license as $license)
                                                <option value="{{ $license->id }}">{{ $license->licence_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Type/Grade/Class Of License</label>
                                            <input type="text" class="form-control" placeholder="" id="type_grade_class_certificate_course" name="type_grade_class_certificate_course_1[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Country Of Issue</label>
                                            <select class="form-select rounded-0" id="country_id_1" name="country_id_1[]" aria-label="Floating label select example">
                                                <option value="">Select Country</option>
                                                @if (isset($countries))
                                                @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Number</label>
                                            <input type="text" class="form-control" placeholder="" id="qcocNumber" name="number_1[]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qcocDateofIssue" name="issue_date_1[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qcocDateExpire" name="expiry_date_1[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Issuing Authority</label>
                                            <input type="text" class="form-control" placeholder="" id="qcocIssuingAuthority" name="issuing_authority_1[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mb-3">
                                    <button type="button" class="main_btn border-0 add_new_btn" id="addLicense"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
                                </div>
                            </div>
                            <div class="cloneLicense" hidden>
                                <div class="padding_box removeLicense">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Qualification</label>
                                                <select class="form-select rounded-0" id="license_type_id" name="license_type_id_1[]" aria-label="Floating label select example">
                                                    <option value="">Select Qualification</option>
                                                    @foreach ($licence_section_license as $license)
                                                    <option value="{{ $license->id }}">{{ $license->licence_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Type/Grade/Class Of License</label>
                                                <input type="text" class="form-control" placeholder="" id="type_grade_class_certificate_course" name="type_grade_class_certificate_course_1[]">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Country Of Issue</label>
                                                <select class="form-select rounded-0" id="country_id_1" name="country_id_1[]" aria-label="Floating label select example">
                                                    <option value="">Select Country</option>
                                                    @if (isset($countries))
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Number</label>
                                                <input type="text" class="form-control" placeholder="" id="qcocNumber" name="number_1[]">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qcocDateofIssue" name="issue_date_1[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="qcocDateExpire" name="expiry_date_1[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Issuing Authority</label>
                                                <input type="text" class="form-control" placeholder="" id="qcocIssuingAuthority" name="issuing_authority_1[]">
                                            </div>
                                        </div>
                                    </div>
                                    <a>
                                        <div class="position-absolute delete_btn deleteLicense">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo12">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo12" aria-expanded="false" aria-controls="collapseTwo12">
                            * Basic / Advance Endorsement
                        </button>
                    </h2>
                    <div id="collapseTwo12" class="accordion-collapse collapse" aria-labelledby="headingTwo12" data-bs-parent="#accordionExample3">
                        <div class="accordion-body">
                            <div class="incrementRegV1 removeRegv1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Qualifications</label>
                                            <select class="form-select rounded-0" id="license_type_id" name="license_type_id_2[]" aria-label="Floating label select example">
                                                <option value="">Select Qualification</option>
                                                @if (isset($licence_section_regv1))
                                                @foreach ($licence_section_regv1 as $license)
                                                <option value="{{ $license->id }}">
                                                    {{ $license->licence_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Type/Grade/Class of License</label>
                                            <input type="text" class="form-control" placeholder="" id="type_grade_class_certificate_course" name="type_grade_class_certificate_course_2[]" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Country of Issue</label>
                                            <select class="form-select rounded-0" id="country_id" name="country_id_2[]" aria-label="Floating label select example">
                                                <option value="">Select Country</option>
                                                @if (isset($countries))
                                                @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">
                                                    {{ $country->country_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Number</label>
                                            <input type="text" class="form-control" id="number_2" name="number_2[]" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="issue_date_2" name="issue_date_2[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                            <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="expiry_date_2" name="expiry_date_2[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Issuing Authority</label>
                                            <input type="text" class="form-control" placeholder="" id="issuing_authority_2" name="issuing_authority_2[]" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mb-3">
                                    <button type="button" class="main_btn border-0 add_new_btn" id="addRegV1"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
                                </div>
                            </div>
                            <div class="cloneRegV1" hidden>
                                <div class="padding_box removeRegV1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Qualifications</label>
                                                <select class="form-select rounded-0" id="license_type_id" name="license_type_id_2[]" aria-label="Floating label select example">
                                                    <option value="">Select Qualification</option>
                                                    @if (isset($licence_section_regv1))
                                                    @foreach ($licence_section_regv1 as $license)
                                                    <option value="{{ $license->id }}">
                                                        {{ $license->licence_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Type/Grade/Class of License</label>
                                                <input type="text" class="form-control" placeholder="" id="type_grade_class_certificate_course" name="type_grade_class_certificate_course_2[]" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Country of Issue</label>
                                                <select class="form-select rounded-0" id="country_id" name="country_id_2[]" aria-label="Floating label select example">
                                                    <option value="">Select Country</option>
                                                    @if (isset($countries))
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->country_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Number</label>
                                                <input type="text" class="form-control" id="number_2" name="number_2[]" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="issue_date_2" name="issue_date_2[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="expiry_date_2" name="expiry_date_2[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Issuing Authority</label>
                                                <input type="text" class="form-control" placeholder="" id="issuing_authority_2" name="issuing_authority_2[]" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <a>
                                        <div class="position-absolute delete_btn deleteRegV1">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sub Accordion Section End  -->
        </div>
        <!-- =============== Section 4 - Second Point End ============= -->
        <hr class="mt-4" style="color: #c9c5c5;">

        <!-- =============== Section 4 - Third Point Start ============= -->
        <div>
            <h1 class="sub_heading">4.3 STCW Certificates</h1>
            <div class="padding_box">
                {{-- <p class="fw-bold">Reg 1</p> --}}

                <!-- Sub Accordion Section Start  -->
                <div class="accordion sub_accordion" id="accordionExampleAcc05">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNew1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNew1" aria-expanded="false" aria-controls="collapseNew1">
                                Basic Courses
                            </button>
                        </h2>
                        <div id="collapseNew1" class="accordion-collapse collapse show" aria-labelledby="headingNew1" data-bs-parent="#accordionExampleAcc05">
                            <div class="accordion-body">
                                <div class="incrementRegVI1 removeRegVI1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description of Certificate/Course</label>
                                                <select class="form-select rounded-0" id="license_type_id" name="license_type_id_3[]" aria-label="Floating label select example">
                                                    <option value="">Select Certificate/Course</option>
                                                    @if (isset($licence_section_regvi1))
                                                    @foreach ($licence_section_regvi1 as $license)
                                                    <option value="{{ $license->id }}">
                                                        {{ $license->licence_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Country of Issue</label>
                                                <select class="form-select rounded-0" id="country_id_3" name="country_id_3[]" aria-label="Floating label select example">
                                                    <option value="">Select Country</option>
                                                    @if (isset($countries))
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->country_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Number</label>
                                                <input type="text" class="form-control" placeholder="" id="number_3" name="number_3[]">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="issue_date" name="issue_date_3[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="expiry_date" name="expiry_date_3[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Issuing Authority</label>
                                                <input type="text" class="form-control" placeholder="" id="issuing_authority_3" name="issuing_authority_3[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end mb-3">
                                        <button type="button" class="main_btn border-0 add_new_btn" id="addRegVI1"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
                                    </div>
                                </div>
                                <div class="cloneRegVI1" hidden>
                                    <div class="padding_box removeRegVI1">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description of Certificate/Course</label>
                                                    <select class="form-select rounded-0" id="license_type_id" name="license_type_id_3[]" aria-label="Floating label select example">
                                                        <option value="">Select Certificate/Course</option>
                                                        @if (isset($licence_section_regvi1))
                                                        @foreach ($licence_section_regvi1 as $license)
                                                        <option value="{{ $license->id }}">
                                                            {{ $license->licence_name }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Country of Issue</label>
                                                    <select class="form-select rounded-0" id="country_id_3" name="country_id_3[]" aria-label="Floating label select example">
                                                        <option value="">Select Country</option>
                                                        @if (isset($countries))
                                                        @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->country_name }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Number</label>
                                                    <input type="text" class="form-control" placeholder="" id="number_3" name="number_3[]">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="issue_date" name="issue_date_3[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="expiry_date" name="expiry_date_3[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Issuing Authority</label>
                                                    <input type="text" class="form-control" placeholder="" id="issuing_authority_3" name="issuing_authority_3[]">
                                                </div>
                                            </div>
                                        </div>
                                        <a>
                                            <div class="position-absolute delete_btn deleteRegVI1">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNew2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNew2" aria-expanded="false" aria-controls="collapseNew2">
                                Advance Courses
                            </button>
                        </h2>
                        <div id="collapseNew2" class="accordion-collapse collapse" aria-labelledby="headingNew2" data-bs-parent="#accordionExampleAcc05">
                            <div class="accordion-body">
                                <div class="incrementRegVI2 removeRegvI2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description of Certificate/Course</label>
                                                <select class="form-select rounded-0" id="license_type_id" name="license_type_id_4[]" aria-label="Floating label select example">
                                                    <option value="">Select Certificate/Course</option>
                                                    @if (isset($licence_section_regvi2))
                                                    @foreach ($licence_section_regvi2 as $license)
                                                    <option value="{{ $license->id }}">
                                                        {{ $license->licence_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Country of Issue</label>
                                                <select class="form-select rounded-0" id="country_id_4" name="country_id_4[]" aria-label="Floating label select example">
                                                    <option value="">Select Country</option>
                                                    @if (isset($countries))
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->country_name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Number</label>
                                                <input type="text" class="form-control" placeholder="" id="number_4" name="number_4[]">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="issue_date_4" name="issue_date_4[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="expiry_date_4" name="expiry_date_4[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Issuing Authority</label>
                                                <input type="text" class="form-control" placeholder="" id="issuing_authority_4" name="issuing_authority_4[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end mb-3">
                                        <button type="button" class="main_btn border-0 add_new_btn" id="addRegVI2"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
                                    </div>
                                </div>
                                <div class="cloneRegVI2" hidden>
                                    <div class="padding_box removeRegVI2">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description of Certificate/Course</label>
                                                    <select class="form-select rounded-0" id="license_type_id" name="license_type_id_4[]" aria-label="Floating label select example">
                                                        <option value="">Select Certificate/Course</option>
                                                        @if (isset($licence_section_regvi2))
                                                        @foreach ($licence_section_regvi2 as $license)
                                                        <option value="{{ $license->id }}">
                                                            {{ $license->licence_name }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Country of Issue</label>
                                                    <select class="form-select rounded-0" id="country_id_4" name="country_id_4[]" aria-label="Floating label select example">
                                                        <option value="">Select Country</option>
                                                        @if (isset($countries))
                                                        @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">
                                                            {{ $country->country_name }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Number</label>
                                                    <input type="text" class="form-control" placeholder="" id="number_4" name="number_4[]">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="issue_date_4" name="issue_date_4[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                                    <input type="text" class="datepicker_input form-control datepicker-input rounded-0" id="expiry_date_4" name="expiry_date_4[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Issuing Authority</label>
                                                    <input type="text" class="form-control" placeholder="" id="issuing_authority_4" name="issuing_authority_4[]">
                                                </div>
                                            </div>
                                        </div>
                                        <a>
                                            <div class="position-absolute delete_btn deleteRegVI2">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sub Accordion Section End  -->
            </div>

        </div>
        <!-- =============== Section 4 - Third Point End ============= -->
        <hr class="mt-4" style="color: #c9c5c5;">

        <!-- =============== Section 4 - Fourth Point Start ============= -->
        <div>
            <h1 class="sub_heading">4.4 Other Mandatory / Recommended Certificates / Courses – (as applicable)</h1>
            <div class="incrementOther44 removeOther44">
                <div class="padding_box">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Description of Cert/Course</label>
                                <select class="form-select rounded-0" id="license_type_id_5" name="license_type_id_5[]" aria-label="Floating label select example">
                                    <option value="">Select Certificate/Course</option>
                                    @if (isset($licence_section_otherm))
                                    @foreach ($licence_section_otherm as $license)
                                    <option value="{{ $license->id }}">{{ $license->licence_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Country of Issue</label>
                                <select class="form-select rounded-0" id="country_id_5" name="country_id_5[]" aria-label="Floating label select example">
                                    <option value="">Select Country</option>
                                    @if (isset($countries))
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Number</label>
                                <input type="text" class="form-control" placeholder="" id="number" name="number_5[]">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="issue_date_5" name="issue_date_5[]">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="expiry_date_5" name="expiry_date_5[]">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Issuing Authority</label>
                                <input type="text" class="form-control" placeholder="" id="issuing_authority_5" name="issuing_authority_5[]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3">
                    <button type="button" class="main_btn border-0 add_new_btn" id="addOther44"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
                </div>
            </div>
            <div class="cloneOther44" hidden>
                <div class="padding_box removeOther44">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Description of Cert/Course</label>
                                <select class="form-select rounded-0" id="license_type_id_5" name="license_type_id_5[]" aria-label="Floating label select example">
                                    <option value="">Select Certificate/Course</option>
                                    @if (isset($licence_section_otherm))
                                    @foreach ($licence_section_otherm as $license)
                                    <option value="{{ $license->id }}">{{ $license->licence_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Country of Issue</label>
                                <select class="form-select rounded-0" id="country_id_5" name="country_id_5[]" aria-label="Floating label select example">
                                    <option value="">Select Country</option>
                                    @if (isset($countries))
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Number</label>
                                <input type="text" class="form-control" placeholder="" id="number" name="number_5[]">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Date Of Issue (YYYY-DD-MM)</label>
                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="issue_date_5" name="issue_date_5[]">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Date Of Expiry (YYYY-DD-MM)</label>
                                <input type="text" class="datepicker_input form-control datepicker-input rounded-0" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="expiry_date_5" name="expiry_date_5[]">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Issuing Authority</label>
                                <input type="text" class="form-control" placeholder="" id="issuing_authority_5" name="issuing_authority_5[]">
                            </div>
                        </div>
                    </div>
                    <a>
                        <div class="position-absolute delete_btn deleteOther44">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- =============== Section 4 - Fourth Point End ============= -->

        <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
            <button type="button" class="btn main_btn prev-step"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Previous</button>
            <button type="button" class="btn main_btn next-step">Next&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
