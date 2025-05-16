<div class="step step-6">
    <!-- Step 6 form fields here -->
    <h3 class="mb-3 heading">Medical History</h3>
    <p class="mb-1">All previous illnesses other that minor afflictions should be stated below or updated.
        If not previously disclosed, the Company is entitled to decline payment of medical
        costs for treatment or for any other insured benefits.
    </p>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="mb-3">
                <p class="fw-bold">Blood Type</p>
                <select class="form-select rounded-0" id="bloodTypeId" name="bloodTypeId" aria-label="Floating label select example">
                    <option value="" >Select Blood Type</option>
                    <option value="0">O Negative (O-)</option>
                    <option value="1">O Positive (O+)</option>
                    <option value="2">A Negative (A-)</option>
                    <option value="3">A Positive (A+)</option>
                    <option value="4">B Negative (B-)</option>
                    <option value="5">B Positive (B+)</option>
                    <option value="6">AB Negative (AB-)</option>
                    <option value="7">AB Positive (AB+)</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div>
        <h2 class="sub_heading">(A) Have you ever signed off a ship due to medical reasons?</h2>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <div class="row mt-2">
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="midicalRadio" id="midicalRadio" value="0">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="midicalRadio" id="midicalRadio" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                                No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p>If yes, please provide following details (if space is insufficient, attach additional supporting documents)</p>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Name of the Vessel</label>
                    <input type="text" class="form-control" placeholder="" id="sNameofVessl" name="sNameofVessl">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Date of Occurrence (YYYY-DD-MM)</label>
                    <input type="text" class="form-control" id="sDateofOccurrence" name="sDateofOccurrence" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label class="form-label">Place of Occurrence</label>
                    <input type="text" class="form-control" placeholder="" id="sPlaceofOccurrence" name="sPlaceofOccurrence">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Supporting Documents (If any)</label>
                    <input class="form-control h-auto" type="file" id="sSupportingDocuments" name="sSupportingDocuments" multiple>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="mb-3">
                    <label class="form-label">Brief Description of illness/injury/accident</label>
                    <textarea class="form-control rounded-0" placeholder="" style="height: 100px" id="sBriefDescription" name="sBriefDescription"></textarea>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div>
        <h2 class="sub_heading">(B) Have you undergone any surgical operations in the past?</h2>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="mb-3">
                <div class="row mt-2">
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bmidicalRadio" id="bMidicalRadio" value="0">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bmidicalRadio" id="bMidicalRadio" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault4">
                                No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>If yes, please provide following details (if space is insufficient, attach additional supporting documents)</p>
        <div class="incrementMedicalHistoryQuetionB removeMedicalHistoryQuetionB">
            <div class="padding_box ">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Details of Operations</label>
                            <input type="text" class="form-control" placeholder="" id="sDetailsofOperationsQuestionB" name="sDetailsofOperationsQuestionB[]">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Date (YYYY-DD-MM)</label>
                            <input type="text" class="form-control" id="datepicker1" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="sDateofOccurrenceQuestionB" name="sDateofOccurrenceQuestionB[]">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Period of disability</label>
                            <input type="text" class="form-control" placeholder="" id="sPeriodofdisabilityQuestionB" name="sPeriodofdisabilityQuestionB[]">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Present Condition</label>
                            <input type="text" class="form-control" placeholder="" id="sPresentConditionQuestionB" name="sPresentConditionQuestionB[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-3">
                <button type="button" class="main_btn border-0 add_new_btn" id="addMedicalHistoryQuetionB"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
            </div>
        </div>
        <div class="cloneMedicalHistoryQuetionB " hidden>
            <div class="padding_box removeMedicalHistoryQuetionB">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Details of Operations</label>
                            <input type="text" class="form-control" placeholder="" id="sDetailsofOperationsQuestionB" name="sDetailsofOperationsQuestionB[]">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Date (YYYY-DD-MM)</label>
                            <input type="text" class="form-control" id="sDateofOccurrenceQuestionB" name="sDateofOccurrenceQuestionB[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Period of disability</label>
                            <input type="text" class="form-control" placeholder="" id="sPeriodofdisabilityQuestionB" name="sPeriodofdisabilityQuestionB[]">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="form-label" class="form-label">Present Condition</label>
                            <input type="text" class="form-control" placeholder="" id="sPresentConditionQuestionB" name="sPresentConditionQuestionB[]">
                        </div>
                    </div>
                </div>
                <!-- ==========Delete Button============  -->
                <a>
                    <div class="position-absolute delete_btn deleteMedicalHistoryQuetionB">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- ==========Delete Button============  -->
            </div>
        </div>
    </div>

    <br>

    <div>
        <h2 class="sub_heading">(C) For what illnesses or accidents have you consulted a doctor during the last 12 months?</h2>
        <div class="incrementMedicalHistoryQuetionC removeMedicalHistoryQuetionC">
            <div class="padding_box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Details of illness/accident</label>
                            <input type="text" class="form-control" placeholder="" id="sDetailsofillnessQuestionC" name="sDetailsofillnessQuestionC[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Date (YYYY-DD-MM)</label>
                            <input type="text" class="form-control" id="datepicker1" placeholder="YYYY-DD-MM" fdprocessedid="2w8te" id="sDateQuestionC" name="sDateQuestionC[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Therapy / Treatment</label>
                            <input type="text" class="form-control" placeholder="" id="sTherapyQuestionC" name="sTherapyQuestionC[]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-3">
                <button type="button" class="main_btn border-0 add_new_btn" id="addMedicalHistoryQuetionC"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</button>
            </div>
        </div>
        <div class="cloneMedicalHistoryQuetionC " hidden>
            <div class="padding_box removeMedicalHistoryQuetionC">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Details of illness/accident</label>
                            <input type="text" class="form-control" placeholder="" id="sDetailsofillnessQuestionC" name="sDetailsofillnessQuestionC[]">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label class="form-label">Date (YYYY-DD-MM)</label>
                            <input type="text" class="form-control" id="sDateQuestionC" name="sDateQuestionC[]" placeholder="YYYY-DD-MM" fdprocessedid="2w8te">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Therapy / Treatment</label>
                            <input type="text" class="form-control" placeholder="" id="sTherapyQuestionC" name="sTherapyQuestionC[]">
                        </div>
                    </div>
                </div>
                <!-- ==========Delete Button============  -->
                <a>
                    <div class="position-absolute delete_btn deleteMedicalHistoryQuetionC">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                </a>
                <!-- ==========Delete Button============  -->
            </div>

        </div>
    </div>

    <br>

    <div>
        <h2 class="sub_heading">(D) Please give details of any health or disability problem from which you presently suffer</h2>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="mb-3">
                <textarea class="form-control rounded-0" placeholder="" style="height: 100px" id="sHealthOrDisability" name="sHealthOrDisability"></textarea>
            </div>
        </div>
    </div>
    <br>

    <div class="step_buttons justify-content-end mt-4 d-flex gap-2">
        <button type="button" class="btn main_btn prev-step"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;Previous</button>
        <button type="button" class="btn main_btn next-step">Next&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    </div>

</div>
