@section('title', 'Profile')
<x-app-layout>
    <x-slot name="header">
        <style>
            .select2-selection__rendered {
                padding-left: 5px !important;
            }
        </style>
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
                            <button class="btn cms_top_btn top_btn_height ">{{ __('user.add_new') }}</button>
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
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false"
                data-widget-custombutton="false" role="widget">
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
                        <form action="{{ route('save-user') }}" enctype="multipart/form-data" method="post"
                            id="user-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('user.name') }} <span style=" color: red;">*</span>
                                        </label>
                                        <label class="input">
                                            <input type="text" id="name" name="name" required
                                                value="{{ $user->name }}">
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __('user.email') }} <span
                                                style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <input type="text" id="email" name="email" required
                                                value="{{ $user->email }}">
                                        </label>
                                    </section>
                                </div>

                                <div class="row">

                                    <?php
                                    $uval = '';
                                    foreach ($userRole as $rol => $uval) {
                                        $uval = $uval;
                                    }
                                    ?>

                                    <section class="col col-4">
                                        <label class="label">{{ __('user.role') }} <span
                                                style=" color: red;">*</span></label>
                                        <label class="select">
                                        <select id="roles" name="roles" class="select" required>
                                            @foreach ($roles as $x => $val)
                                                <option value="{{ $val }}"
                                                    {{ $uval == $val ? 'selected' : '' }}>{{ $val }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <i></i>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col-lg-12" style="margin-top: 2%; margin-left:16px;">
                                        <label class="label">{{ __('user.change_password') }}
                                            <button id="changepwyes" type="button"
                                                style="margin-left: 2%; width: 90px; background-color: #963c2c; color: #e7e7e7;"
                                                class="btn btn-default"> {{ __('Yes') }} </button>
                                            <button id="changepwno" type="button"
                                                style="margin-left: 2%; width: 90px; background-color: #963c2c; color: #e7e7e7;"
                                                class="btn btn-default"> {{ __('No') }} </button></label>
                                    </section>
                                </div>
                                <div class="row" id="changepassword" style="display: none;">
                                    <section class="col col-4">
                                        <label class="label">{{ __('user.password') }} <span
                                                style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <input type="password" id="password" name="password" value=""
                                                minlength="6" class="password" disabled required>
                                        </label>
                                    </section>

                                    <section class="col col-4">
                                        <label class="label">{{ __('user.confirmpassword') }} <span
                                                style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <input type="password" id="confirm-password" name="confirm-password"
                                                value="" data-parsley-equalto="#password" class="confirmpassword"
                                                disabled required>
                                        </label>
                                    </section>
                                </div>
                            </fieldset>
                            <footer>
                                <input type="hidden" name="id" value="{{ $user->id }}">
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
            $(document).ready(function() {
                $('#changepwyes').click(function() { // click to
                    $('#changepassword').show(); // removing disabled in this class
                    $('.password').attr('disabled', false); // removing disabled in this class
                    $('.confirmpassword').attr('disabled', false); // removing disabled in this class
                });

                $('#changepwno').click(function() { // click to
                    $("#changepassword").hide(); // removing disabled in this class
                    $("#confirm-password").val('');
                    $("#password").val('');
                });


            });
        </script>
    </x-slot>
</x-app-layout>
