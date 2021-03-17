@extends("layouts.layout-main")

@section("content")
  <div class="container">
    <div class="car">
      <h2>Dettagli Auto : </h2>
      <p>Modello: {{ $cars[$id]->model }}</p>
      <p>Tipologia: {{ $cars[$id]->typology }}</p>
      <p>Motore: {{ $cars[$id]->engine }}</p>
      <p>Energia: {{ $cars[$id]->power }} kWh</p>
      <p>Colore: {{ $cars[$id]->color }}</p>
    </div>
  </div>
@endsection
