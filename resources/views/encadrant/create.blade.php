@extends('layouts.app')
@section('content')
    <div class="container-fluid pb-8 pt-5 pt-md-6">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Ajouter encadrant') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('encadrant.index') }}" class="btn btn-sm btn-default">{{ __('Annuler') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('encadrant.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('encadrant information') }}</h6>
                            <div class="pl-lg-4">
                              <div class="col-xl-12 row">
                                    <div class="col-md-6 form-group{{ $errors->has('nom') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-name">{{ __('nom') }}</label>
                                       <input type="text" name="nom" id="input-name" class="form-control border-input{{ $errors->has('nom') ? ' is-invalid' : '' }}" placeholder="{{ __('nom') }}" value="{{ old('nom') }}" required autofocus>
                                         @if ($errors->has('nom'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('nom') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('prenom') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-prenom">{{ __('prenom') }}</label>
                                       <input type="text" name="prenom" id="input-prenom" class="form-control border-input{{ $errors->has('prenom') ? ' is-invalid' : '' }}" placeholder="{{ __('prenom') }}" value="{{ old('prenom') }}" required autofocus>
                                         @if ($errors->has('prenom'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('prenom') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('mail') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-mail">{{ __('mail') }}</label>
                                       <input type="email" name="mail" id="input-type" class="form-control border-input{{ $errors->has('mail') ? ' is-invalid' : '' }}" placeholder="{{ __('mail') }}" value="{{ old('mail') }}" required autofocus>
                                         @if ($errors->has('mail'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('mail') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('adresse') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-adresse">{{ __('adresse') }}</label>
                                       <input type="text" name="adresse" id="input-adresse" class="form-control border-input{{ $errors->has('adresse') ? ' is-invalid' : '' }}" placeholder="{{ __('adresse') }}" value="{{ old('adresse') }}" required autofocus>
                                         @if ($errors->has('adresse'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('adresse') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="input-tel">{{ __('tel') }}</label>
                                       <input type="number" name="tel" id="input-tel" class="form-control border-input{{ $errors->has('tel') ? ' is-invalid' : '' }}" placeholder="{{ __('tel') }}" value="{{ old('tel') }}" required autofocus>
                                         @if ($errors->has('tel'))
                                           <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('tel') }}</strong>
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
