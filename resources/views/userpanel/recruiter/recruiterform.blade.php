<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="" />
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta name="og:image" content="" />
    <meta name="twitter:card" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ asset('public/userpanel/css/seaworld.css') }}" rel="stylesheet">
    <link href="{{ asset('public/userpanel/css/mediaquery.css') }}" rel="stylesheet">
    <!-- Custom CSS -->

    <title>Interocean Ship Management</title>

    <!--favicon-->
    <link rel="shortcut icon" href="{{ asset('public/userpanel/images/favicon.png') }}" />
    <!--favicon-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add icon library -->

    <!--loading effect-->
    <link rel="stylesheet" href="{{ asset('public/userpanel/css/loading_styles.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('public/userpanel/css/aos.css') }}" type="text/css" media="screen" />
    <!--loading effect-->

    <!-- animate -->
    <link rel='stylesheet' href='{{ asset('public/userpanel/css/animate.min.css') }}'>
    <!-- animate -->

    <!-- date picker -->
    {{-- <link rel='stylesheet' href='{{ asset('public/userpanel/date_picker/bootstrap-datepicker.min.css') }}'> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    {{-- <script  src="{{ asset('public/userpanel/date_picker/date_picker.css') }}"></script>
    <script src="{{ asset('public/userpanel/date_picker/time_picker.css') }}"></script> --}}
    <!-- date picker -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>

    <!--scroll bar style-->
    <style>
        ::-webkit-scrollbar {
            background: #000000;
            height: 5px;
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 2px #012AA7;
        }

        ::-webkit-scrollbar-thumb {
            background: #012AA7;
            border-radius: 2px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #012AA7;
        }

        .required {
            /* border: 1px solid #ff0000 !important; */
            border: 1px solid #ff0000 !important;
        }

        .required:focus {
            border-color: #fe8686 !important;
            box-shadow: 0 0 0 0.25rem rgb(253 13 13 / 25%) !important;
        }

        .parsley-errors-list {
            padding-left: 0px;
        }

        .parsley-errors-list li {
            list-style: none;
            color: red;
            font-size: 12px;
        }

    </style>
    <!--scroll bar style-->


</head>
<body>

    <!-- Submit Success Modal Start  -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-3">
                <div class="modal-body">
                    <div class="text-center">
                        <img src="images/done.gif" alt="">
                        <h1 class="heading">THANK YOU!</h1>
                        <P class="">Your application has been submitted successfully!</P>
                        <button type="button" class="btn main_btn">Back to Home</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Success Modal End  -->


    <div class="container-fluid">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo_col text-center">
                <img src="images/logo.png" alt="" class="img-fluid main_logo">
            </div>
        </div>
    </div>

    <div class="container-fluid py-2 bg_blue">
        <div class="container text-center">
            <p class="fw-bold mb-1 text-white">CREW MANAGEMENT</p>
            <h1 class="large_text mb-0 text-white">APPLICATION FORM</h1>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <h1 class="heading">Guidelines</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <br>

        <div class="row application_form">
            <div class="col-xl-12 col-lg-12">

                <div class="row">
                    <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
                        <div class="progress px-1" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="step-container d-flex justify-content-between">
                            <div class="step-circle completed" onclick="displayStep(1)">1</div>
                            <div class="step-circle" onclick="displayStep(2)">2</div>
                            <div class="step-circle" onclick="displayStep(3)">3</div>
                            <div class="step-circle" onclick="displayStep(4)">4</div>
                            <div class="step-circle" onclick="displayStep(5)">5</div>
                            <div class="step-circle" onclick="displayStep(6)">6</div>
                            <div class="step-circle" onclick="displayStep(7)">7</div>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @if ($message = Session::get('info'))
                <div class="alert alert-info">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <form id="multi-step-form" action="{{ route('new-candidate') }}" enctype="multipart/form-data" method="post" class="smart-form" autocomplete="off">
                    @csrf
                    <!---------------------------------Tab 1---------------------------------------------------->
                    @include('userpanel.recruiter.partials._personal_details')
                    <!---------------------------------Tab 2---------------------------------------------------->
                    @include('userpanel.recruiter.partials._personal_document')
                    <!---------------------------------Tab 3---------------------------------------------------->
                    @include('userpanel.recruiter.partials._nominee')
                    <!---------------------------------Tab 4---------------------------------------------------->
                    @include('userpanel.recruiter.partials._qualifications')
                    <!---------------------------------Tab 5---------------------------------------------------->
                    @include('userpanel.recruiter.partials._sea_experience')
                    <!---------------------------------Tab 6---------------------------------------------------->
                    @include('userpanel.recruiter.partials._medical_history')
                    <!---------------------------------Tab 7---------------------------------------------------->
                    @include('userpanel.recruiter.partials._general')
                </form>
            </div>
        </div>

    </div>
    <br>

    <!-- FOOTER SECTION START  -->
    <br>
    <div class="container-fluid pt-2 bg-dark text-center footer_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-start text-center">
                    <p class="text-white mb-2">55/74 Vauxhall Lane, Colombo 02, Sri Lanka.</p>
                </div>
                <div class="col-lg-6 text-lg-end text-center footer_right">
                    <p class="text-white mb-0">Copyright © Department of Sea World Lanka (Pvt) Ltd. All Rights Reserved.</p>
                    <p style="color: #b6b6b6 !important;" class="fst-italic mb-2"><small>Solution by - <a href="#" class="text-decoration-none text-white">TekGeeks</a></small></p>
                </div>
            </div>
        </div>
        <!-- <p class="fst-italic mb-0" style="color: #858585;"><small>Copyright © 2024 Sea World Manning. All rights reserved.</small></p> -->
    </div>

    <!-- FOOTER SECTION END  -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('public/userpanel/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('public/userpanel/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/userpanel/js/bootstrap.min.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(function() {

            $("#error-msg").hide();
            $('#multi-step-form').parsley().on('form:error', function(formInstance) {
                $("#error-msg").show();
                error = true;
            });
        });

    </script>

    <!-- Multistep Js -->
    <script src="{{ asset('public/userpanel/js/step_form.js') }}"></script>

    <!-- Image Upload  -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });

    </script>
    <!-- Image Upload  -->

    <!-- Tooltip  -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    </script>
    <!-- Tooltip  -->

    <script src="{{ asset('public/userpanel/js/aos.js') }}"></script>

    <script>
        AOS.init({
            easing: 'ease-out-back'
            , duration: 1000
        });

    </script>
    <!--loading effects-->

    <!-- date picker -->
    {{-- <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    {{-- <script  src="{{ asset('public/userpanel/date_picker/date_picker.js') }}"></script> --}}
    <!-- date picker -->

    <!-- scroll top -->
    <script type="module">
        import ScrollTop from 'https://cdn.skypack.dev/smooth-scroll-top';
      const scrollTop = new ScrollTop();
      scrollTop.init();

      $(document).ready(function () {

        var currentDate = new Date();
        // Personal date


        let fieldCount = 2; // Initialize counter for groups

        $("#addChildren").click(function() {
            //var addChildren = $(".cloneChildren").html();
            //$(".incrementChildren").after(addChildren);

            var html = $("#template").html();
            var newGroup = $(html);

            newGroup.find('.gender-radio').each(function() {
                $(this).attr('name', fieldCount + 'nChildGender[]');
            });

            $(".incrementChildren:last").after(newGroup);

            fieldCount++; // Increment the counter for the next group
        });

        $("body").on("click", ".deleteChildren", function() {
            $(this).parents(".removeChildren").remove();
        });

        //STCW

        $("#addCertificates").click(function() {
            var addCertificates = $(".cloneCertificates").html();
            $(".incrementCertificates").after(addCertificates);
        });

        $("body").on("click", ".deleteCertificates", function() {
            $(this).parents(".removeCertificates").remove();
        });

        //4.2 - License

        $("#addLicense").click(function() {
            var addLicense = $(".cloneLicense").html();
            $(".incrementLicense").after(addLicense);
        });

        $("body").on("click", ".deleteLicense", function() {
            $(this).parents(".removeLicense").remove();
        });

        //4.2 - License - Reg V/1

        $("#addRegV1").click(function() {
            var addLicense = $(".cloneRegV1").html();
            $(".incrementRegV1").after(addLicense);
        });

        $("body").on("click", ".deleteRegV1", function() {
            $(this).parents(".removeRegV1").remove();
        });

        //4.3 - Reg VI/1

        $("#addRegVI1").click(function() {
            var addLicense = $(".cloneRegVI1").html();
            $(".incrementRegVI1").after(addLicense);
        });

        $("body").on("click", ".deleteRegVI1", function() {
            $(this).parents(".removeRegVI1").remove();
        });

        $("#addOther").click(function() {
            var addOther = $(".cloneOther").html();
            $(".incrementOther").after(addOther);
        });

        //4.3 - Reg VI/2

        $("#addRegVI2").click(function() {
            var addLicense = $(".cloneRegVI2").html();
            $(".incrementRegVI2").after(addLicense);
        });

        $("body").on("click", ".deleteRegVI2", function() {
            $(this).parents(".removeRegVI2").remove();
        });

        //4.4 - Other

        $("#addOther44").click(function() {
            var addLicense = $(".cloneOther44").html();
            $(".incrementOther44").after(addLicense);
        });

        $("body").on("click", ".deleteOther44", function() {
            $(this).parents(".removeOther44").remove();
        });

        $("#addOther").click(function() {
            var addOther = $(".cloneOther").html();
            $(".incrementOther").after(addOther);
        });

        $("body").on("click", ".deleteOther", function() {
            $(this).parents(".removeOther").remove();
        });

        // $("#addExperience").click(function() {
        //     var addOther = $(".cloneExperience").html();
        //     $(".incrementExperience").after(addOther);
        // });

        // $("body").on("click", ".deleteExperience", function() {
        //     $(this).parents(".removeExperience").remove();
        // });

        $("#addMedicalHistoryQuetionB").click(function() {
            var addOther = $(".cloneMedicalHistoryQuetionB").html();
            $(".incrementMedicalHistoryQuetionB").after(addOther);
        });

        $("body").on("click", ".deleteMedicalHistoryQuetionB", function() {
            $(this).parents(".removeMedicalHistoryQuetionB").remove();
        });

        $("#addMedicalHistoryQuetionC").click(function() {
            var addOther = $(".cloneMedicalHistoryQuetionC").html();
            $(".incrementMedicalHistoryQuetionC").after(addOther);
        });

        $("body").on("click", ".deleteMedicalHistoryQuetionC", function() {
            $(this).parents(".removeMedicalHistoryQuetionC").remove();
        });

                        //BMI Calculation

        function calculateBMICalculation(height, weight) {

          const heightm = (height/100);

          const squaredheight = heightm * heightm;

          const bmiValue = weight/squaredheight;

          const bmiformated = bmiValue.toFixed(2);

          $('#bmi').val(bmiformated);
        }

        $('body').on('keyup', '#height, #weight', function() {
          const height = $('#height').val();
          const weight = $('#weight').val();

          calculateBMICalculation(height, weight);
        });

        // function calculateDateDifference(startDate, endDate, parentDiv) {
        //     const start = moment(startDate, 'YYYY-MM-DD');
        //     const end = moment(endDate, 'YYYY-MM-DD');

        //     if (start.isValid() && end.isValid() && start <= end) {
        //         const years = end.diff(start, 'years');
        //         start.add(years, 'years');

        //         const months = end.diff(start, 'months');
        //         start.add(months, 'months');

        //         const days = end.diff(start, 'days');

        //         // alert(years);

        //         parentDiv.find('.sYear').val(years);
        //         parentDiv.find('.sMonth').val(months);
        //         parentDiv.find('.sDate').val(days);
        //     } else {
        //         parentDiv.find('.sYear').val('');
        //         parentDiv.find('.sMonth').val('');
        //         parentDiv.find('.sDate').val('');
        //     }
        // }

        // // Event listener for date inputs change
        // $('body').on('change', '.sDatefrom, .sDateTo', function() {
        //     const parentDiv = $(this).closest('.hdtuto2-sea-experience');
        //     const startDate = parentDiv.find('.sDatefrom').val();
        //     const endDate = parentDiv.find('.sDateTo').val();

        //     calculateDateDifference(startDate, endDate, parentDiv);
        // });

            // Function to calculate date difference
        function calculateDateDifference(startDate, endDate, parentDiv) {
            const start = moment(startDate, 'YYYY-MM-DD');
            const end = moment(endDate, 'YYYY-MM-DD');

            if (start.isValid() && end.isValid() && start <= end) {
                const years = end.diff(start, 'years');
                start.add(years, 'years');

                const months = end.diff(start, 'months');
                start.add(months, 'months');

                const days = end.diff(start, 'days');

                parentDiv.find('.sYear').val(years);
                parentDiv.find('.sMonth').val(months);
                parentDiv.find('.sDate').val(days);
            } else {
                parentDiv.find('.sYear').val('');
                parentDiv.find('.sMonth').val('');
                parentDiv.find('.sDate').val('');
            }
        }

        // Event listener for adding new experience sections
        $("#addExperience").click(function() {
            var addOther = $(".cloneExperience").html();
            $(".incrementExperience").before(addOther); // Change after to before if you want to add above
        });

        // Event listener for removing experience sections
        $("body").on("click", ".deleteExperience", function() {
            $(this).closest(".removeExperience").remove();
        });

        // Event listener for date inputs change
        $('body').on('change', '.sDatefrom, .sDateTo', function() {
            const parentDiv = $(this).closest('.padding_box');
            const startDate = parentDiv.find('.sDatefrom').val();
            const endDate = parentDiv.find('.sDateTo').val();

            calculateDateDifference(startDate, endDate, parentDiv);
        });

              // Check if the modal should be shown on page load
        if (sessionStorage.getItem('showModal')) {
          sessionStorage.removeItem('showModal');
          $('#exampleModal').modal('show');
        }

        // Handle form submission
        $('#yourForm').submit(function(e) {
          e.preventDefault();
          // Show the modal
          $('#exampleModal').modal('show');

          // Store a flag in session storage to show the modal on redirect
          sessionStorage.setItem('showModal', 'true');

          // Submit the form after a short delay
          setTimeout(() => {
            this.submit();
          }, 500); // Adjust delay as needed
        });

      });

      // $(function() {
      //     $( "#sYear" ).datepicker({dateFormat: 'yy'});
      //   });
        </script>
    <!-- scroll top -->

    <script>
        $(document).ready(function() {
            // Prepare the preview for profile picture
            $("#wizard-picture").change(function() {
                readURL(this);
            });

            $('#file').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#wizardPicturePreview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

        function yf_validity_period() {
            var yfvalue = $("input[name='is_valid_yf_lifetime']:checked").val();

            if (yfvalue == "0") {
                // alert('Showing valid date field');
                $("#yf_valid_date_field").show();
                $("#yellowFeverValidUntil").attr("required", true);
            } else {
                // alert('Hiding valid date field');
                $("#yf_valid_date_field").hide();
                $("#yellowFeverValidUntil").attr("required", false);
            }
        }

    </script>

</body>
</html>
