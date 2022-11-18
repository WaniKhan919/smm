@extends('layout.layout')
@section('container')
<div class="container p-5">
    <div class="text-center jumbotron">
        @if ($success)
            <h2 style="color: #fb5c71;">Payment Successfull!</h2>
            <h3>Thank you for your payment!</h3>
        @endif
        @if ($error)
            <h2 style="color: #fb5c71;">Payment Failed!</h2>
        @endif
    </div>
</div>
@endsection
@if ($success)
    {{ $success }}
@endif
@if ($error)
    {{ $error }}
@endif
