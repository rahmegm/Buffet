@extends(layouts.main)

@section('title','Criar aniversario')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu aniversario</h1>
    <form action="/birthdays" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Aniversario:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do anivesario">
        </div>
        <div class="form-group">
            <label for="date">Data do aniversario:</label>
            <input type="date" class="form-control" id="date" name="date">
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
        <input type="submit" class="btn btn-primary" value="Cria Aniversario">
    </form>
</div>

@endsection