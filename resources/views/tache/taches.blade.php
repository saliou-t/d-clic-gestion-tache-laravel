@include('default')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5">
                Liste des taches
            </h1>


        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($taches as $tache)
                <div class="col-12 col-md-4 my-1">
                    <div class="card mx-5" style="width: 18rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h5 class="card-title"> {{ $tache->nom_tache }} </h5>

                                </div>
                                <div class="col-12 col-md-6 text-end">
                                    
                                    <h5 class="card-title"> {{ $tache->is_termine ? 'Terminée' : 'En cours' }} </h5>
                                </div>
                            </div>

                            <h6 class="card-subtitle mb-2 text-muted">Priorité : {{$tache->priorite}}</h6>
                            {{-- <p class="card-text">{{$tache->description_tache}}</p> --}}
                            <a href="#" class="card-link">supprimer</a>
                            <a href="/tache/{{$tache->id}}/details" class="card-link">details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
