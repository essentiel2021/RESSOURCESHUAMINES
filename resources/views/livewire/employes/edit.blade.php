<form role="form" wire:submit.prevent="editEmployee()">
    <div class="row p-4 pt-5">
    <div class="col-md-7">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i></h3>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Nom</label>
                        <input type="text" id="editEmploye.nom" wire:model="editEmploye.nom" class="form-control @error('editEmploye.nom') is-invalid @enderror" placeholder="Nom de l'employé">
                        @error("editEmploye.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Prénom</label>
                        <input type="text" wire:model='editEmploye.prenom' class="form-control @error('editEmploye.prenom') is-invalid @enderror" placeholder="Prénom de l'employé">
                        @error("editEmploye.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="">Sexe</label>
                        <select class="form-control @error('editEmploye.sexe') is-invalid @enderror" wire:model='editEmploye.sexe'>
                            <option value="">--------------</option>
                            <option value="M">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                        @error("editEmploye.sexe")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Adresse mail</label>
                        <input type="email" wire:model='editEmploye.email' class="form-control @error('editEmploye.email') is-invalid @enderror" placeholder="Enter email">
                        @error("editEmploye.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1">
                        <label for="">Situation Matrimoniale</label>
                        <select wire:model='editEmploye.situation_matrimoniale_id' class="form-control @error('editEmploye.situation_matrimoniale_id') is-invalid @enderror">
                            <option value="">--------------</option>
                            @foreach ($situationemployes as $item)
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                            @endforeach
                        </select>
                        @error("editEmploye.situation_matrimoniale_id")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Nombre d'enfant</label>
                        <input type="number" wire:model='editEmploye.nombre_enfant' class="form-control @error('editEmploye.nombre_enfant') is-invalid @enderror">
                        @error("editEmploye.nombre_enfant")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2" wire:model='editEmploye.dateNaissance'>
                        <label>Date de naissance</label>
                        <input wire:model='editEmploye.dateNaissance' type="date" class="form-control @error('editEmploye.dateNaissance') is-invalid @enderror">
                        @error("editEmploye.dateNaissance")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Lieu de Naissance</label>
                        <input type="text" wire:model='editEmploye.lieu_naissance' class="form-control @error('editEmploye.lieu_naissance') is-invalid @enderror" placeholder="lieu de naissance de l'employé">
                        @error("editEmploye.lieu_naissance")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="">Type de pièce d'identité</label>
                        <select wire:model='editEmploye.piece_identite_id' class="form-control @error('editEmploye.piece_identite_id') is-invalid @enderror">
                            <option value="">--------------</option>
                            @foreach ($pieceIdentites as $item)
                                <option value="{{$item->id}}">{{$item->libelle}}</option> 
                            @endforeach
                        </select>
                        @error("editEmploye.piece_identite_id")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Numero de Pièce d'identité</label>
                        <input type="text" class="form-control @error('editEmploye.numeroIdentite') is-invalid @enderror" wire:model='editEmploye.numeroIdentite' placeholder="Saisissez le numero de la pièce selectionné">
                        @error("editEmploye.numeroIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Commune</label>
                        <select class="form-control @error('editEmploye.commune_id') is-invalid @enderror" wire:model='editEmploye.commune_id'>
                            <option value="">--------------</option>
                            @foreach ($communeemployes as $item)
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                            @endforeach
                        </select>
                        @error("editEmploye.commune_id")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label for="lastName">Quatier</label>
                        <input type="text" wire:model='editEmploye.quatier' class="form-control @error('editEmploye.quatier') is-invalid @enderror" placeholder="Quatier de l'employé">
                        @error("editEmploye.quatier")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="">Numero de téléphone </label>
                        <input wire:model='editEmploye.telephone1' type="text" class="form-control @error('editEmploye.telephone1') is-invalid @enderror" placeholder="Numero de télephone">
                        @error("editEmploye.telephone1")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label for="">Autre numero de télephone</label>
                        <input type="text" wire:model='editEmploye.telephone2' class="form-control @error('editEmploye.telephone2') is-invalid @enderror" placeholder="Autre numéro de téléphone">
                        @error("editEmploye.telephone2")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="">Fonction</label>
                        <select wire:model='editEmploye.fonction_id' class="form-control @error('editEmploye.fonction_id') is-invalid @enderror">
                            <option value="">--------------</option>
                            @foreach ($fonctions as $item)
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                            @endforeach
                        </select>
                        @error("editEmploye.fonction_id")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">       
                        <label for="">Numero de permis de conduire</label>
                        <input type="text" wire:model='editEmploye.numeroPermis' class="form-control @error('editEmploye.numeroPermis') is-invalid @enderror" placeholder="Saisissez le numero de permis de conduire">
                        @error("editEmploye.numeroPermis")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Nom & prenom Personne à contacter</label>
                        <input type="text" wire:model='editEmploye.personContact' class="form-control @error('editEmploye.personContact') is-invalid @enderror">
                        @error("editEmploye.personContact")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Numero de personne à contacter</label>
                        <input type="text" wire:model='editEmploye.personContactNum' class="form-control @error('editEmploye.personContactNum') is-invalid @enderror">
                        @error("editEmploye.personContactNum")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="name">Numéro de CNPS</label>
                        <input type="text" wire:model='editEmploye.numeroCNPS' class="form-control" placeholder="Numero CNPS">
                        @error("editEmploye.numeroCNPS")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Numero de dossier</label>
                        <input type="number" wire:model='editEmploye.numeroDos' class="form-control" placeholder="Numero de dossier">
                        @error("editEmploye.numeroDos")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="name">Photo identité</label>
                        <input type="file" wire:model='editPhoto' class="form-control">
                        @error("editPhoto")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1" style="border: 1px solid #d0d1d3; border-radius: 20px; height: 200px; width:200px; overflow:hidden">
                        @if (isset($editPhoto))
                            <img src="{{ $editPhoto->temporaryUrl() }}" style="height:200px; width:200px;">
                        @else
                            <img src="{{ asset($editEmploye["photo"]) }}" style="height:200px; width:200px;">
                        @endif 
                    </div>
                </div>
                @isset($editPhoto)
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2 mb-3">
                            <button type="button" wire:click="$set('editPhoto', null)" class="btn btn-default btn-sm mt-2">Réinitialiser</button>
                        </div>
                    </div>
                @endisset
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="name">Photo CNI</label>
                        <input type="file" wire:model='editPhotoPiece' class="form-control">

                        @error("editPhotoPiece")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1" style="border: 1px solid #d0d1d3; border-radius: 20px; height: 200px; width:200px; overflow:hidden">
                        @if (isset($editPhotoPiece))
                            <img src="{{ $editPhotoPiece->temporaryUrl() }}" style="height:200px; width:200px;">
                        @else
                            <img src="{{ asset($editEmploye["photoPiece"]) }}" style="height:200px; width:200px;">
                        @endif 
                    </div>
                </div>
                @isset($editPhotoPiece)
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2 mb-3">
                            <button type="button" wire:click="$set('editPhotoPiece', null)" class="btn btn-default btn-sm mt-2">Réinitialiser</button>
                        </div>
                    </div>
                @endisset 
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="name">Photo de l'acte de naissance</label>
                        <input type="file" wire:model='editPhotoActe' class="form-control">
                        @error("editPhotoActe")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1" style="border: 1px solid #d0d1d3; border-radius: 20px; height: 200px; width:200px; overflow:hidden">
                        @if (isset($editPhotoActe))
                            <img src="{{ $editPhotoActe->temporaryUrl() }}" style="height:200px; width:200px;">
                        @else
                            <img src="{{ asset($editEmploye["acteNaissance"]) }}" style="height:200px; width:200px;">
                        @endif 
                    </div>
                </div>
                @isset($editPhotoActe)
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2 mb-3">
                            <button type="button" wire:click="$set('editPhotoActe', null)" class="btn btn-default btn-sm mt-2">Réinitialiser</button>
                        </div>
                    </div>
                @endisset 
            </div>
            <div class="card-footer">
                <div class="d-inline">
                    @if($editHasChanged)
                        <button type="submit" class="btn btn-primary mr-2">Modifier</button>
                    @endif
                </div>
                <button type="button" wire:click='goToListEmployee()' class="btn btn-danger">Retour à la liste des Employés</button>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-primary">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-fingerprint fa-2x"></i>Black List</h3>
            </div>
            <div class="card-body">
                <div id="accordion">            
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title flex-grow-1">
                                <a  data-parent="#accordion" href="#"  aria-expanded="true">Liste Noir</a>
                            </h4>
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input wire:model='editEmploye.blackList' @if($editEmploye["blackList"])checked @endif type="checkbox" class="custom-control-input" id="customSwitch{{ $editEmploye["id"]}}">
                                <label class="custom-control-label" for="customSwitch{{ $editEmploye["id"]}}">{{ $editEmploye["blackList"] == 0 ? "Activé" : "Désactivé" }}</label>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
        {{-- <form role="form" wire:submit.prevent="affectation()">
            <div class="card card-primary">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title flex-grow-1"> <i class="fas fa-fingerprint fa-2x"></i> Rôles & Permissions</h3>
                    <button class="btn bg-gradient-success"><i class="fas fa-check"></i>Appliquer les modifications</button>
                </div>
                <div class="card-body">
                </div>
            </div>
        </form> --}}
        {{-- <div class="card card-primary">
            <div class="card-header d-flex align-items-center">
                <h3 class="card-title flex-grow-1"> <i class="fas fa-fingerprint fa-2x"></i>Affectation</h3>
                <button class="btn bg-gradient-success" wire:click='affectation()'><i class="fas fa-check"></i>Confirmer</button>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label for="">Séccursales</label>
                        <select class="form-control" wire:model='selectedSuccursale'>
                            <option value="">------Selectionne une seccursale-----</option>
                            @foreach ($succursales as $item)
                                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group flex-grow-1">
                        @if(!is_null($selectedSuccursale))
                            <label for="">Département</label>
                            <select wire:model='selectedDepartement' class="form-control">
                                <option value="">-----Selectionne un département----</option>
                                @foreach($departements as $departement)
                                    <option value="{{$departement->id}}">{{$departement->libelle}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>
                @if(!is_null($selectedDepartement))
                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label for="">Services</label>
                            <select class="form-control" wire:model='newAffectation.service_id'>
                                <option value="">------Selectionne un service-----</option>
                                @foreach ($services as $service)
                                        <option value="{{$service->id}}">{{$service->libelle}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Date prise de service</label>
                            <input type="date" class="form-control" wire:model='newAffectation.date_debut'>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Mettre fin au service</label>
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input wire:model='newAffectation.is_end' type="checkbox" class="custom-control-input" id="customSwitch">
                                <label class="custom-control-label" for="customSwitch">Activé</label>
                            </div>
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Date fin prise de service</label>
                            <input type="date" class="form-control" wire:model='newAffectation.date_fin'>
                        </div>
                    </div>
                @endif
            </div>
        </div> --}}
    </div>
</form>