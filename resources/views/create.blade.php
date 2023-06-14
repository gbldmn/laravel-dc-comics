<div class="container">
<h2>Crea un nuovo comics</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comic.store') }}" method="POST">
                 
                @csrf

                    <div>
                        <label for="title">Titolo</label>
                        <input class="form-control" type="text" id="title" name="title">
                    </div>
                    <div>
                        <label for="thumb">Immagine</label>
                        <input class="form-control" type="text" id="thumb" name="thumb">
                    </div>
                    <div>
                        <label for="price">Prezzo</label>
                        <input class="form-control" type="text" id="price" name="price">
                    </div>
                    <div>
                        <label for="series">Serie</label>
                        <input class="form-control" type="text" id="series" name="series">
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
                        <input class="form-control" type="text" id="sale_date" name="sale_date">
                    </div>
                    <div>
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
</div>