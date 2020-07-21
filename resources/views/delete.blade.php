
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form action="{{route('limpar',['id'=>$del->id])}}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir?</label><br>
        <input type="text" name = "nome" value="{{$del->title}}" readonly="true">
        <button class="btn btn-danger">Deletar</button>
    </form>
        <a href="{{url('books')}}">CANCELAR</a> 
</body>
</html>