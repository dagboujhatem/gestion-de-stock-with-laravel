<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/products.fields.image').':') !!}
    {!! Form::file('image') !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/categories.singular').':') !!}
    {!! Form::select('status', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', __('models/products.fields.product_name').':') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control',
     'placeholder' => __('models/products.placeholders.product_name')]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/products.fields.price').':') !!}
    {!! Form::text('price', null, ['class' => 'form-control',
     'placeholder' => __('models/products.placeholders.price')]) !!}
</div>

<!-- Qte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qte', __('models/products.fields.qte').':') !!}
    {!! Form::text('qte', null, ['class' => 'form-control',
     'placeholder' => __('models/products.placeholders.qte')]) !!}
</div>

<!-- Availability Field -->
<div class="form-group col-sm-6">
    {!! Form::label('availability', __('models/products.fields.availability').':') !!}
    {!! Form::select('availability', ['Disabled' => 'Disabled', 'Enabled' => 'Enabled'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
