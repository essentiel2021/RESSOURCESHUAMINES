<div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i>Liste des employés</h3>
                <div class="card-tools d-flex align-items-center">
                    <a class="btn btn-link text-white mr-4 d-block" wire:click='goToAddEmployee()'><i class="fas fa-user-plus"></i>Nouveau employé</a>
                    <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" wire:model.debounce.250ms="search" class="form-control float-right" placeholder="Recherche">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0 table-striped" >
                <div class="d-flex justify-content-end p-4 bg-indigo">
                    <div class="form-group mr-3">
                        <label for="filtreType">Filtrer par commune</label>
                        <select  id="filtreCommune" wire:model="filtreCommune" class="form-control">
                                <option value=""></option>
                                @foreach ($communeemployes as $communeemploye)
                                    <option value="{{ $communeemploye->id}}">{{ $communeemploye->libelle }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group mr-3">
                        <label for="filtreSituaion">Filtrer par Situation matrimoniale</label>
                        <select  id="filtreSituaion" wire:model="filtreSituaion" class="form-control">
                                <option value=""></option>
                                @foreach ($situationemployes as $situationemploye)
                                    <option value="{{$situationemploye->id}}">{{ $situationemploye->libelle }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group mr-3">
                        <label for="filtreFonction">Filtrer par Fonction</label>
                        <select  id="filtreFonction" wire:model="filtreFonction" class="form-control">
                                <option value=""></option>
                                @foreach ($fonctions as $fonction)
                                    <option value="{{$fonction->id}}">{{ $fonction->libelle }}</option>
                                @endforeach
                        </select>
                    </div>

                    {{-- <div class="form-group mr-3">
                        <label for="filtreblack">Filtrer par BlackList</label>
                        <select  id="filtreblack" wire:model="filtreblack" class="form-control">
                            <option value=""></option>
                            <option value="1">Black list</option>
                            <option value="0">Pas Black list</option>
                        </select>
                    </div> --}}

                </div>
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th style="width:5%;"></th>
                            <th style="width:10%;" class="text-center">Matricule</th>
                            <th style="width:10%;" class="text-center">Nom</th>
                            <th style="width:20%;" class="text-center">Prenom</th>
                            <th style="width:10%;"class="text-center">Situation matrimoniale</th>
                            <th style="width:10%;"class="text-center">Fonction</th>
                            <th style="width:10%;"class="text-center">Age</th>
                            <th style="width:15%;"class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($employes as $employe)
                            <tr>
                                <td><img src="{{asset($employe->photo)}}" style="width:100px;height:100px;"></td>
                                <td class="text-center">{{$employe->matricule}}</td>
                                <td class="text-center">{{$employe->nom}}</td>
                                <td class="text-center">{{$employe->prenom}}</td>
                                <td class="text-center">{{$employe->situation->libelle }}</td>
                                <td class="text-center">{{optional($employe->fonction)->libelle }}</td>
                                <td class="text-center">{{$employe->age() }} Ans </td>
                                <td class="text-center">
                                    <button class="btn btn-link" title="Modifier un employé" wire:click='goToEditEmployee({{$employe->id}})'> <i class="far fa-edit"></i></button>
                                    <button class="btn btn-link" title="supprimer un employé" wire:click='showDeleteEmploye({{$employe->id}})'><i class="far fa-trash-alt"></i></button>
                                    <button class="btn btn-link" title="Affecter un employé" wire:click='showAddAffectation({{$employe->id}})'><i class="fa-sharp fa-solid fa-money-check"></i></button>
                                    {{-- <a href="{{route('assistant.gestemployes.employe.affectations',['id'=>$employe->id])}}" title= "Affecter un employé" class="btn btn-link"> <i class="fa-sharp fa-solid fa-money-check"></i> </a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">
                                    <div class="alert alert-danger">
                                        <h5><i class="icon fas fa-ban"></i> Information!</h5>
                                        Aucune donnée en Base.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="float-right">
                    {{ $employes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
