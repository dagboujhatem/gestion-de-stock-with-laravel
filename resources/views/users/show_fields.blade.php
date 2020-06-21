<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/users.fields.full_name').':') !!}
    <p>{!! $user->full_name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    <p>{!! $user->email !!}</p>
</div>
