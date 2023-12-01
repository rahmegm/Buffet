@extends(layouts.main)

@section('title','Fun House')

@section('content')

<div id="search-container" class="col-md-12">
     <h1>Busque um aniversario</h1>
     <form action="" method="GET">
          <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
     </form>
</div>

<div id="events-container" class="col-md-12">
     @if($search)
          <h2>Buscando por: {{ $search }} </h2>
     @else
          <h2>Proximos aniversarios</h2>
          <p>Proximos aniversariantes</p>
     @endif

     <div id="cards-container" class= "row">
          @foreach($birthdays as $birthday)
          <div class="card col-md-3">
               <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y',strtotime($birthday->date)) }}</p>
                    <h5 class="card-title">{{ $birthday->title }}</h5>
                    <p class="card-guests"> X convidados </p>
                    <a href="/birthdays/{{ $birthday->id }}" class="btn btn-primary">Saber mais</a>
               </div>
          </div>
          @endforeach
          @if(count($birthdays) == 0 && $search)
               <p>Não foi possivel encontrar nenhum aniversario com : {{ $search }}! <a href="/">Ver todos</a> </p>
          @elseif(count($birthdays) == 0)
               <p>Não há aniversarios</p>
          @endif
     </div>
</div>

@endsection
