<!-- NAME FIELD -->
<div class="md-form my-3">
    <input type="text"
           id="txtName"
           name="name"
           value="{{ old('name') }}"
           class="form-control">
    <label for="txtName">{!! __('web/forms.register.fields.name.placeholder') !!}</label>
    @error('name')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
</div>


<!-- END NAME FIELD-->

<!-- LASTNAME FIELD -->
<div class="md-form my-3">
    <input type="text"
           id="txtLastname"
           name="lastname"
           value="{{ old('lastname') }}"
           class="form-control ">
    <label for="txtLastname" class="">{!! __('web/forms.register.fields.lastname.placeholder') !!}</label>
    @error('lastname')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
</div>

<!-- END LASTNAME -->

<!-- EMAIL FIELD -->
<div class="md-form my-3">
    <input type="email"
           id="txtEmail"
           name="email"
           value="{{ old('email') }}"
           class="form-control ">
    <label for="txtEmail" class="">{!! __('web/forms.register.fields.email.placeholder') !!}</label>
    @error('email')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
</div>
<!-- END EMAIL FIELD -->


<!-- PHONE NUMBER -->
<div class="md-form my-3">
    <input id="phone"
           type="tel"
           name="whatsapp"
           value="{{ old('whatsapp') }}"
           class="form-control"
    >
</div>
@error('whatsapp')
<p class="text-danger">
    {{$message}}
</p>
@enderror
<!-- END PHONE NUMBER -->

<!-- PASSWORD -->
<div class="md-form my-3">
    <input type="password"
           id="txtPassword"
           name="password"
           class="form-control ">
    <label for="txtPassword">{!! __('web/forms.register.fields.password.placeholder') !!}</label>

    @error('password')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
</div>

<!-- PASSWORD -->

<!-- PASSWORD CONFIRMATION -->
<div class="md-form my-3">
    <input type="password"
           id="txtPasswordConfirmation"
           name="password_confirmation"
           class="form-control ">
    <label for="txtPasswordConfirmation">{!! __('web/forms.register.fields.password_confirmation.placeholder') !!}</label>

    @error('password_confirmation')
    <p class="text-danger">
        {{$message}}
    </p>
    @enderror
</div>

<!-- PASSWORD CONFIRMATION -->

<!-- TERMS -->
<div class="md-form my-3 pt-3">
    <div class="form-check pl-0">
        <input type="checkbox" name="terms" class="form-check-input" id="chkTerms">
        <label class="form-check-label" for="chkTerms">
            <a href="#" data-toggle="modal" data-target="#modalTerms">
                {!! __('web/forms.register.fields.terms.placeholder') !!}
            </a>
        </label>
    </div>
    @error('terms')
    <p class="text-danger mt-4">
        {{$message}}
    </p>
    @enderror
</div>
<!-- END TERMS -->
