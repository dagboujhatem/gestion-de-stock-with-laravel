<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/users.fields.full_name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control',
     'placeholder' => __('models/users.placeholders.full_name')]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control',
     'placeholder' => __('models/users.placeholders.email')]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    {!! Form::password('password', ['class' => 'form-control',
     'placeholder' => __('models/users.placeholders.password')]) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
      {!! Form::label('password', __('models/users.fields.password_confirmation').':')!!}
    {!! Form::password('password_confirmation', ['class' => 'form-control',
     'placeholder' => __('models/users.placeholders.password_confirmation')])  !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
