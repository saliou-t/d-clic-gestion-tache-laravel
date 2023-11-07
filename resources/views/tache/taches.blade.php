@include('default')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5">
                Liste des taches
            </h1>
            @foreach($donnees as $donnee)
                {{$donnee}} <br>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="row">
            @for ($i = 1; $i < 8; $i++)
                <div class="col-12 col-md-4 my-1">
                    <div class="card mx-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nom de la tache {{ $i}} </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Priorité : haute</h6>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab,
                                cupiditate. Soluta hic odit. Odio quisquam ea doloribus ?</p>
                            <a href="#" class="card-link">supprimer</a>
                            <a href="#" class="card-link">details</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
