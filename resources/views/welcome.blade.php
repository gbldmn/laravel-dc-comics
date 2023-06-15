<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

<h1>{{ $title }}</h1>

<div class="container">
    <div class="row">
        @foreach ($cards as $elem)
          <div class="col-2">
            <div class="card">
                <img class="card-img-top w-100" width="100px" src="{{ $elem->thumb }}"  alt="">
                <div class="card-body">
                    <a href="{{ route('comic.show',  $elem->id) }}"> 
                        <h4 class="card-title">{{$elem->title}} </h4>
                    </a>
                    
                    <p class="card-text">{{ $elem->description }}</p>
                    <a class="btn btn-warning" href="{{ route('comic.edit', $elem) }}">Modifica</a>

                    <form action="{{ route('comic.destroy', $elem) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">elimina</button>
                    </form>
                </div>
            </div>
          </div>

        @endforeach
    </div>
</div> 





</body>

</html>