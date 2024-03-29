<div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title flex-grow-1"><i class="fa-regular fa-building fa-2x"></i> Département </h3>
                <div class="card-tools d-flex align-items-center">
                    <a class="btn btn-link text-white mr-4 d-block" wire:click='showDepar()'><i class="fa-regular fa-building"></i>Nouveau département</a>
                    <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Recherche">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0 table-striped">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                        <th style="width:30%;">Département</th>
                        <th style="width:30%;">Succursale</th>
                        <th style="width:20%;"class="text-center">Ajouté</th>
                        <th style="width:20%;"class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($departements as $departement)
                            <tr>
                                <td>{{ $departement->libelle }}</td>
                                <td>{{ $departement->succursale->libelle }}</td>
                                <td class="text-center">{{ optional($departement->created_at)->diffForHumans() }}</td>
                                <td class="text-center">
                                    <a href="{{route("assistant.gestsuccursales.departements.service",['id'=>$departement->id])}}" title= "Ajout services" class="btn btn-link"> <i class="fa-sharp fa-solid fa-money-check"></i> </a>
                                    <button class="btn btn-link" wire:click='editDepartement({{$departement->id}})'> <i class="far fa-edit"></i></button>
                                    @if(count($departement->services) == 0)
                                        <button class="btn btn-link" wire:click="showDeleteDep('{{$departement->libelle}}',{{$departement->id}})"><i class="far fa-trash-alt"></i></button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
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
                    {{ $departements->links() }}
                </div>
            </div>
        </div>
    </div>
</div>