<!-- LASTNAME -->
<div class="md-form form-group form-lg ">
    {{ Form::text('lastname',
        isset($user) ? $user->profile->lastname:null, [
        'id'=>'txt'.$module.'Lastname',
        'class' => 'form-control',
        'data-parsley-required' => true
    ]) }}
    <label for="txt{{$module}}LastName" class="d-none d-sm-block">
      Apellidos
    </label>
</div>
<!-- LASTNAME -->

<!-- FIRST NAME -->
<div class="md-form form-group form-lg">
    {{ Form::text('name',
        isset($user) ? $user->profile->name:null, [
        'id'=>'txt'.$module.'Name',
        'class' => 'form-control',
        'data-parsley-required' => true
    ]) }}
    <label for="txt{{$module}}Name" class="d-none d-sm-block">
        Nombre(s)
    </label>
</div>
<!-- FIRST NAME -->


<!-- PHONE -->
<label for="txt{{$module}}Whatsapp" class="d-none d-sm-block text-primary mt-3">
    Whatsapp
</label>
<div class="md-form form-group form-lg mt-1">
    <input id="txt{{$module}}Whatsapp"
           type="tel"
           name="whatsapp"
           class="form-control"
           value="{{ isset($user) ? $user->profile->whatsapp:null}}"
           data-parsley-errors-container="#error{{$module}}Whatsapp"
           data-parsley-required="true">
</div>

<div class="red-text font-small" role="alert" id="error{{$module}}Whatsapp"></div>


<!-- PHONE -->

<!-- EMAIL -->
<div class="md-form form-group form-lg">
    {{ Form::text('email',
         isset($user) ? $user->email:null, [
        'id'=>'txt'.$module.'Email',
        'class' => 'form-control',
        'data-parsley-required' => true,
        'data-parsley-type' => 'email',
        isset($user) ? 'readonly':''
    ]) }}
    <label for="txt{{$module}}Email" class="d-none d-sm-block">
        Correo electrónico
    </label>
</div>
<!-- EMAIL -->


