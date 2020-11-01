@extends('layouts.app')
@section('content')
    <div class="container-fluid pb-8 pt-5 pt-md-6">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Ajouter stage') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('stage.index') }}" class="btn btn-sm btn-default">{{ __('Annuler') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('stage.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('stage information') }}</h6>
                            <div class="pl-lg-4">
                              <div class="col-xl-12 row">
                                    <div class="col-md-12 form-group{{ $errors->has('projet') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-name">{{ __('Projet') }}</label>
                                       <input type="text" name="projet" id="input-name" class="form-control border-input{{ $errors->has('projet') ? ' is-invalid' : '' }}" placeholder="{{ __('projet') }}" value="{{ old('projet') }}" required autofocus>
                                         @if ($errors->has('projet'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('projet') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('stagiaire_id') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-stagiaire_id">{{ __('Stagiaire') }}</label>
                                       <select name="stagiaire_id" id="input-stagiaire_id" class="form-control border-input{{ $errors->has('stagiaire_id') ? ' is-invalid' : '' }}" placeholder="{{ __('stagiaire_id') }}" value="{{ old('stagiaire_id') }}" required autofocus>
                                         @foreach ($stagiaires as $stagiaire)
                                           <option value="{{$stagiaire->id}}">{{$stagiaire->nom}} {{$stagiaire->prenom}}</option>
                                         @endforeach
                                       </select>
                                         @if ($errors->has('stagiaire_id'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('stagiaire_id') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('encadrant_id') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-encadrant_id">{{ __('Encadrant') }}</label>
                                       <select name="encadrant_id" id="input-encadrant_id" class="form-control border-input{{ $errors->has('encadrant_id') ? ' is-invalid' : '' }}" placeholder="{{ __('encadrant_id') }}" value="{{ old('encadrant_id') }}" required autofocus>
                                         @foreach ($encadrants as $encadrant)
                                           <option value="{{$encadrant->id}}">{{$encadrant->nom}} {{$encadrant->prenom}}</option>
                                         @endforeach
                                       </select>
                                         @if ($errors->has('encadrant_id'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('encadrant_id') }}</strong>
                                           </span>
                                        @endif
                                    </div>


                                    <div class="col-md-6 form-group{{ $errors->has('debut') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-debut">{{ __('debut') }}</label>
                                       <input type="date" name="debut" id="input-debut" class="form-control border-input{{ $errors->has('debut') ? ' is-invalid' : '' }}" placeholder="{{ __('debut') }}" value="{{ old('debut') }}" required autofocus>
                                         @if ($errors->has('debut'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('debut') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('fin') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-fin">{{ __('fin') }}</label>
                                       <input type="date" name="fin" id="input-fin" class="form-control border-input{{ $errors->has('fin') ? ' is-invalid' : '' }}" placeholder="{{ __('fin') }}" value="{{ old('fin') }}" required autofocus>
                                         @if ($errors->has('fin'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('fin') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                  </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Ajouter') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
