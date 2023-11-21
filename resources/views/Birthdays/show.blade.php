@extends(layouts.main)

@section('title', $birthday->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6"></div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $birthday->title }}</h1>
                <p class="birthdays-guests"><ion-icon name="people-outline"></ion-icon>X participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>{{$eventOwner['name']}}</p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O aniversario conta com:</h3>
                <ul id="items-list">
                    @foreach($birthday->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre a festa:</h3>
                <p class="birthday-description">{{$birthday->description}}</p>
            </div>
        </div>
    </div>

@endsection