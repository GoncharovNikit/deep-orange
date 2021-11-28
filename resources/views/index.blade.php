@extends('layouts.app')
@section('content')

<div id="vue-app">
</div>

<script src="{{ mix('/js/slick.min.js') }}" defer></script>
<script src="{{ mix('/js/script.js') }}" defer></script>
<script src="{{ mix('/js/app.js') }}" defer></script>

@endsection