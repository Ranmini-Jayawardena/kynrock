@section('title', 'Users')
<x-app-layout>
  <x-slot name="header">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </x-slot>


  <div id="main" role="main">
    <!-- RIBBON -->
    <div id="ribbon">
    </div>
    <!-- END RIBBON -->
    <div id="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                    <a href="{{ route('users.index') }}">
                        <button class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('user.add_new') }}</button>
                    </a>

                    <a href="{{ route('users-list') }}">
                        <button class="btn cms_top_btn top_btn_height ">{{ __('user.view_all') }}</button>
                    </a>
                </div>
            </div>
        </div>

      @if ($errors->any())
      <div class="alert alert-danger">
        <!-- <strong>Whoops!</strong> There were some problems with your input.<br><br> -->
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <!-- Widget ID (each widget will need unique ID)-->
      <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
        <header>
          <h2>{{ __('user.title') }}</h2>
        </header>
        <!-- widget div-->
        <div>
          <!-- widget edit box -->
          <div class="jarviswidget-editbox">
            <!-- This area used as dropdown edit box -->
          </div>
          <!-- end widget edit box -->
          <!-- widget content -->
          <div class="widget-body no-padding">
            <form action="{{ route('users.store') }}" enctype="multipart/form-data" method="post" id="user-form" class="smart-form">
              @csrf
              <fieldset>
                <div class="row">
                  <section class="col col-4">
                    <label class="label">{{ __('user.name') }} <span style=" color: red;">*</span> </label>
                    <label class="input">
                      <input type="text" id="name" name="name" required value="">
                    </label>
                  </section>
                  <section class="col col-4">
                    <label class="label">{{ __('user.email') }} <span style=" color: red;">*</span> </label>
                    <label class="input">
                      <input type="text" id="email" name="email" required value="">
                    </label>
                    <p id="duplicatecheck-msg" style="color: red; display:none;">This email address already has a user account. </p>
                  </section>
                </div>

                <div class="row">


                  <section class="col col-4">
                    <label class="label">{{ __('user.password') }} <span style=" color: red;">*</span> </label>
                    <label class="input">
                      <input type="password" id="password" name="password" required value="" minlength="6">
                    </label>
                  </section>
                  <section class="col col-4">
                    <label class="label">{{ __('user.confirmpassword') }} <span style=" color: red;">*</span> </label>
                    <label class="input">
                      <input type="password" id="confirmpassword" name="confirmpassword" required value="" data-parsley-equalto="#password">
                    </label>
                  </section>
                </div>
                <div class="row">
                  <section class="col col-4">
                    <label class="label">{{ __('user.role') }} <span style=" color: red;">*</span></label>
                    {{-- <label class="select"> --}}
                      <select id="roles" name="roles" class="select2" required>
                        <option value=""></option>
                        @foreach ($roles as $x => $val)
                        <option value="{{ $val }}">{{ $val }}</option>
                        @endforeach
                      </select>
                      <i></i>
                    {{-- </label> --}}
                  </section>
                </div>

              </fieldset>
              <footer>
                <button id="button1id" name="button1id" type="submit" class="btn btn-primary">
                  {{ __('user.submit') }}
                </button>
                <button type="button" class="btn btn-default" onclick="window.history.back();">
                  {{ __('user.back') }}
                </button>
              </footer>
            </form>
          </div>
          <!-- end widget content -->
        </div>
        <!-- end widget div -->
      </div>
      <!-- end widget -->
    </div>
  </div>
  <x-slot name="script">
    <script>
      $(function() {
        //window.ParsleyValidator.setLocale('ta');
        $('#user-form').parsley();
      });
    </script>

    <script>
        $(".select2").select2();
    </script>

    <script>

        $(document).ready(function () {

            $("#user-form").submit(function (e) {

                $("#button1id").attr("disabled", true);

                return true;

            });

            $('#email').blur(function () {
                var email = $(this).val();
                $("#duplicatecheck-msg").hide();

                if(email) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('checkEmailAvailability') }}",
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        data: {email:email},
                        success: function(data) {
                            if (data != "") {

                                console.log(data);

                                    $("#duplicatecheck-msg").show();

                            } else {

                                $("#duplicatecheck-msg").hide();


                            }
                        }
                    });
                } else {

                    $("#district_id").empty();
                }
            });
        });
    </script>
  </x-slot>
</x-app-layout>
