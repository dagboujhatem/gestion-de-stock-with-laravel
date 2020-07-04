@extends('layouts.app')

@section('content')
    @if($usersChart)
        {!! $usersChart->script() !!}
    @endif
<div class="container">
    <div class="row">
        <div class="offset-3 col-6">
            {!! $usersChart->container() !!}
        </div>
    </div>
</div>
@endsection
