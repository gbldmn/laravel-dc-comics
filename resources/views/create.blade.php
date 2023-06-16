<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    
</body>
</html>
<div class="container">
<h2>Crea un nuovo comics</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif    
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comic.store') }}" method="POST">
                 
                @csrf

                    <div>
                        <label for="title">Titolo</label>
                        <input class="form-control" @error('title') is-invalid  @enderror type="text" id="title" name="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="thumb">Immagine</label>
                        <input class="form-control"  @error('thumb') is-invalid  @enderror type="text" id="thumb" name="thumb">
                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="price">Prezzo</label>
                        <input class="form-control" @error('price') is-invalid  @enderror type="text" id="price" name="price">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="series">Serie</label>
                        <input class="form-control"  @error('series') is-invalid  @enderror type="text" id="series" name="series">
                        @error('series')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="type">Tipologia</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Seleziona un valore</option>
                            <option value="comic book">Comic Book</option>
                            <option value="graphic novel">Graphic Novel</option>
                        </select>
                    </div>
                    <div>
                        <label for="sale_date">Data di uscita</label>
                        <input class="form-control"  @error('sale_date') is-invalid  @enderror type="text" id="sale_date" name="sale_date">
                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" @error('description') is-invalid  @enderror name="description" id="description" rows="10"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
</div>