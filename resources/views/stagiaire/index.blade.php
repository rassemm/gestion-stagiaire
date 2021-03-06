@extends('layouts.app')
@section('content')
    <div class="container-fluid pb-8 pt-5 pt-md-6">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <h3 class="mb-0">{{ __('Liste Des Stagiaires') }}</h3>
                            </div>
                            <div class="col-8 text-right">
                                <a href="{{ route('stagiaire.create') }}" class="btn btn-sm btn-default">{{ __('Ajouter stagiaire') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nom') }}</th>
                                    <th scope="col">{{ __('Prenom') }}</th>
                                    <th scope="col">{{ __('Mail') }}</th>
                                    <th scope="col">{{ __('Adresse') }}</th>
                                    <th scope="col">{{ __('Universite') }}</th>
                                    <th scope="col">{{ __('Age') }}</th>
                                    <th scope="col">{{ __('Tel') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stagiaires as $stagiaire)
                                    <tr>
                                        <td>{{ $stagiaire->nom }}</td>
                                        <td>{{ $stagiaire->prenom }}</td>
                                        <td>{{ $stagiaire->mail }}</td>
                                        <td>{{ $stagiaire->adresse }}</td>
                                        <td>{{ $stagiaire->universite }}</td>
                                        <td>{{ $stagiaire->age }}</td>
                                        <td>{{ $stagiaire->tel }}</td>
                                        <td class="text-right">
                                          <div>
                                                    <form action="{{ route('stagiaire.destroy', $stagiaire->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <a class="btn btn-sm btn-default" href="{{ route('stagiaire.edit', $stagiaire) }}">{{ __('Mofifier') }}</a>
                                                        <button type="button" class="btn btn-sm btn-default" onclick="confirm('{{ __("Êtes-vous sûr de vouloir supprimer ce stagiaire?") }}') ? this.parentElement.submit() : ''">
                                                            Supprimer
                                                        </button>
                                                    </form>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $stagiaires->links() }}
                        </nav>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-info">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form action="" method="get" class="bg-default">
                  <div class="modal-body">
                    <div class="form-group">
                        <label class="form-control-label" for="input-key">{{ __('By key') }}</label>
                        <input type="text" name="key" class="form-control form-control-alternative" placeholder="{{ __('key') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="input-key">{{ __('By Description') }}</label>
                        <input type="text" name="description" class="form-control form-control-alternative" placeholder="{{ __('description') }}">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection
