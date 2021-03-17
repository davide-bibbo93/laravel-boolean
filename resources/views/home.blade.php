@extends("layouts.layout-main")

@section("content")

    <div class="container">

      @foreach ($cars as $car)
        <div class="car">
          <a href="{{ route("detail", ["id" => $car['id'] - 1]) }}">
            <img src="https://lh3.googleusercontent.com/proxy/gvqeSDih-pJneBSjVXVNCwtLWWoSWrx5KPDaMz1ecd5UAA_SnoURkUSbFU7K-P6ees_TdxxeTEQv-yNkcfg-85QU_6sLk-9MfsMpbPesM1qcAb4YFvQ" alt="">
          </a>
          <h2>{{ $car->model }}</h2>
        </div>
      @endforeach

    </div>
@endsection
