    @extends('base')

    @section('title', 'update')

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col s12">
                    <h1>MODIFIER UN ETUDIANT - LARAVEL 10</h1>
                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>

                    <form action="/update/traitement" method="POST" class="form-group">
                        @csrf

                        <input type="text" name="id" style="display:none;" value="{{ $etudiants->id }}">

                        <div class="form-group">
                            <label for="Nom" class="form-label">Nom:</label>
                            <input type="text" class="form-control" id="Nom" name="nom"
                                value="{{ $etudiants->nom }}">
                        </div>
                        <div class="form-group">
                            <label for="Prenom" class="form-label">Prenom:</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom"
                                value="{{ $etudiants->prenom }}">
                        </div>
                        <div class="form-group">
                            <label for="Classe" class="form-label">Classe:</label>
                            <input type="text" class="form-control" id="Nom" name="classe"
                                value="{{ $etudiants->classe }}">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button>
                        <br><br />
                        <a href="/" class="btn btn-danger">Revenir à liste des etudiants</a>
                    </form>

                </div>

            </div>

        </div>

    @endsection
