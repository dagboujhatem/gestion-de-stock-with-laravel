<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', __('models/products.fields.image').':') !!}
    <p>{{ $product->image }}</p>
</div>

<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', __('models/products.fields.product_name').':') !!}
    <p>{{ $product->product_name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/products.fields.price').':') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Qte Field -->
<div class="form-group">
    {!! Form::label('qte', __('models/products.fields.qte').':') !!}
    <p>{{ $product->qte }}</p>
</div>

<!-- Availability Field -->
<div class="form-group">
    {!! Form::label('availability', __('models/products.fields.availability').':') !!}
    <p>{{ $product->availability }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/products.fields.created_at').':') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/products.fields.updated_at').':') !!}
    <p>{{ $product->updated_at }}</p>
</div>

