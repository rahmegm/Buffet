@extends(layouts.main)

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus aniversarios</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-birthday-container">
    @if(count($birthdays) > 0)
    @else
        <p>Voce ainda nao tem aniversarios, <a href="/birthdays/create"></a></p> 
    @endif

</div>


@endsection