@extends(layouts.main)

@section('title','Editando aniversario: ' . $birthday->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$birthday->title}} </h1>
    <form action="/birthdays/update/{{$birthday->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Aniversario:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do anivesario" value="{{birthday->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data do aniversario:</label>
            <input type="date" class="form-control" id="date" name="date" value = "{{$birthday->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="title">Adicione itens da festa:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food">Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Bar">Open Bar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes">Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Aniversario">
    </form>
</div>

@endsection