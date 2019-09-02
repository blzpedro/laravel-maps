@extends('layouts.master')

@section('content')
<div class="container">
    <br>
    <div id="right-panel">
        <input type="text" id="search">
      <h5>Locais por perto</h5>
      <ul id="places"></ul>
      <br>
      <div class="box-btn">
        <button class="btn btn-primary" id="more">Mais locais</button>
      </div>
    </div>
    <h3 class="text-center">Laravel | Geolocalização</h3>
    <div id="map">
    </div>
</div>
@endsection