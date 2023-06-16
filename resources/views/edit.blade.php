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
<h2>Modifica un nuovo comics</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comic.update', $card->id ) }}" method="POST">
                 
                @csrf
                @method('PUT')

                    <div>
                        <label for="title">Titolo</label>
                        <input class="form-control"  @error('title') is-invalid  @enderror type="text" id="title" name="title" value="{{ old('title') ?? $card->title }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="thumb">Immagine</label>
                        <input class="form-control" @error('thumb') is-invalid  @enderror type="text" id="thumb" name="thumb" value="{{ old('thumb') ?? $card->thumb }}">
                        @error('thumb')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="price">Prezzo</label>
                        <input class="form-control" @error('price') is-invalid  @enderror type="text" id="price" name="price" value="{{ old('price') ?? $card->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="series">Serie</label>
                        <input class="form-control" @error('series') is-invalid  @enderror type="text" id="series" name="series" value="{{ old('series') ?? $card->series }}">
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
                        <input class="form-control"  @error('sale_date') is-invalid  @enderror type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') ?? $card->sale_date }}">
                        @error('sale_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="description">Descrizione</label>
                        <textarea class="form-control"  @error('description') is-invalid  @enderror name="description" id="description" rows="10">{{ old('description') ?? $card->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-success" type="submit">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</div>