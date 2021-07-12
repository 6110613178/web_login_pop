<!-- <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Register') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="registerForm">
                    @csrf

                    <div class="form-group row">
                        <label for="nameInput" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="nameInput" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                            <span class="invalid-feedback" role="alert" id="nameError">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="emailInput" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="emailInput" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

                            <span class="invalid-feedback" role="alert" id="emailError">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="passwordInput" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="passwordInput" type="password" class="form-control" name="password" required autocomplete="new-password">

                            <span class="invalid-feedback" role="alert" id="passwordError">
                                <strong></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('register') }}",
            data: formData,
            success: () => window.location.assign("{{ route('home') }}"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection -->


<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-contentt">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h5 align = 'center' class="modal-title" id="registerModal">{{ __('สมัครสมาชิก') }}</h5>
            <div class="modal-body">
                <form method="POST" id="registerForm">
            
                    @csrf

                        <div class="mb-2">
                        <label for="nameInput" class="col-md-4 col-form-label text-md-left">{{ __('ชื่อ') }}</label>
                            <input id="nameInput" type="text" class="form-control1" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus style="background-color:#D1FBD2">
                            <span class="invalid-feedback" role="alert" id="nameError">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="mb-2">
                        <label for="emailInput" class="col-md-4 col-form-label text-md-left">{{ __('อีเมล') }}</label>
                        <input id="emailInput" type="email" class="form-control1" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color:#D1FBD2">
                            <span class="invalid-feedback" role="alert" id="emailError">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="mb-2">
                        <label for="telephoneInput" class="col-md-4 col-form-label text-md-left">{{ __('เบอร์โทรศัพท์') }}</label>
                        <input id="telephoneInput" type="telephone" class="form-control1" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" style="background-color:#D1FBD2">
                        </div>

                        <div class="mb-2">
                            <label for="passwordInput" class="col-md-4 col-form-label text-md-left">{{ __('รหัสผ่าน') }}</label>
                            <input id="passwordInput" type="password" class="form-control1" name="password" required autocomplete="new-password" style="background-color:#D1FBD2">
                            <span class="invalid-feedback" role="alert" id="passwordError">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-left">{{ __('ยืนยันรหัสผ่าน') }}</label>
                            <input id="password-confirm" type="password" class="form-control1" name="password_confirmation" required autocomplete="new-password" style="background-color:#D1FBD2"> 
                        </div>

                        <div class="rowcheck justify-content">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="status" id="status" {{ old('status') ? 'buyer' : '' }}>

                                <label class="form-check-label" for="status">
                                    {{ __('ผู้ซื้อ') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="status" id="status" {{ old('status') ? 'owner' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('เจ้าของทรัพย์') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="status" id="status" {{ old('remember') ? 'agent' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('เอเจนท์') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content">
                        <div class="col-7">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('ยอมรับเงื่อนไขข้อตกลง') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-4.">
                           <label class="form-check-label1" data-toggle="collapse" data-target="#demo" aria-expanded="false">รายละเอียด</label>
                           <div id="demo" class="collapse"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>    
                        </div>
                    </div>
                  
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-block" style="background-color:#9AF099">
                                {{ __('สมัครสมาชิก') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('register') }}",
            data: formData,
            success: () => window.location.assign("{{ route('home') }}"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection

