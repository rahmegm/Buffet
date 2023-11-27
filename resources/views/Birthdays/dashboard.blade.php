@extends(layouts.main)

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus aniversarios</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-birthday-container">
    @if(count($birthdays) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Convidados</th>
                </tr>
            </thead>
        </table>

        <tbody>
            @foreach ($birthdays as $birthday)
            <tr>
                <td scropt="row">{{ $loop->index +1 }}</td>
                <td><a href="/birthdays/{{ birthday->id}}">{{$birthday->title}}</a></td>
                <td> {{count($birthday->users)}} </td>
                <td>
                    <a href="/birthdays/edit/{{$birthday->id}}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"></ion-icon>Editar</a> 
                    <form action="/birthdays/{{$birthday->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon> Deletar </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    @else
        <p>Voce ainda nao tem aniversarios, <a href="/birthdays/create"></a></p> 
    @endif

</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Aniversarios que estou participando</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-birthday-container">

    @if(count(birthdaysasparticipant) > 0):
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Convidados</th>
                </tr>
            </thead>
        </table>

        <tbody>
            @foreach ($birthdaysasparticipant as $birthday)
            <tr>
                <td scropt="row">{{ $loop->index +1 }}</td>
                <td><a href="/birthdays/{{ birthday->id}}">{{$birthday->title}}</a></td>
                <td> {{count($birthday->users)}} </td>
                <td>
                    <form action="/birthdays/leave/{{$birthday->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline">Deixar aniversario</ion-icon>
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    @else
    <p>Voce ainda nao esta cadastro em nenhuma festa, <a href="/">Veja todos os aniversarios</a> </p>

    @endif

</div>
@endsection