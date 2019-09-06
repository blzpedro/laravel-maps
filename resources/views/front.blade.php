@extends('layouts.master')

@section('content')
<div class="container">
    <br>
    <h3 class="text-center">Laravel | Geolocalização</h3>
    <div id="map">
    </div>
    <div id="">
        <select id="locais" style="display: block; margin: 0 auto 20px auto">
            <option value="" disabled selected>Selecione um local
            <option value="restaurant">Restaurantes</option>
            <option value="bar">Bar</option>
            <option value="meal_delivery">Entrega de comida</option>
            <option value="cafe">Café</option>
            <option value="night_club">Baladas</option>
            <option value="shopping_mall">Shopping</option>
            <option value="liquor_store">Loja de Bebida</option>
        </select>
        <h5>Locais por perto</h5>
        <div id="places"></div>
        <br>
        <div class="box-btn">
            <button class="btn btn-primary" id="more">Mais locais</button>
        </div>
    </div>
</div>
@endsection
