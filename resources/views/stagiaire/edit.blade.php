    @extends('layouts.app')
    @section('content')
        <div class="container-fluid pb-8 pt-5 pt-md-6">
            <div class="row">
                <div class="col">
                    <div class="card bg-default shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Modifier stagiaire') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('stagiaire.index') }}" class="btn btn-sm btn-default">{{ __('Annuler') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                          <form method="post" action="{{ route('stagiaire.update', $stagiaire->id) }}" autocomplete="off">
                              @csrf
                              @method('put')

                                <h6 class="heading-small text-muted mb-4">{{ __('stagiaire information') }}</h6>
                                <div class="pl-lg-4">
                                  <div class="row">
                                        <div class="col-md-6 form-group{{ $errors->has('nom') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-name">{{ __('nom') }}</label>
                                           <input type="text" name="nom" id="input-name" class="form-control border-input{{ $errors->has('nom') ? ' is-invalid' : '' }}" placeholder="{{ __('nom') }}" value="{{ old('nom',$stagiaire->nom) }}" required autofocus>
                                             @if ($errors->has('nom'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('nom') }}</strong>
                                               </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group{{ $errors->has('prenom') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-prenom">{{ __('prenom') }}</label>
                                           <input type="text" name="prenom" id="input-prenom" class="form-control border-input{{ $errors->has('prenom') ? ' is-invalid' : '' }}" placeholder="{{ __('prenom') }}" value="{{ old('prenom',$stagiaire->prenom) }}" required autofocus>
                                             @if ($errors->has('prenom'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('prenom') }}</strong>
                                               </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group{{ $errors->has('mail') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-mail">{{ __('mail') }}</label>
                                           <input type="email" name="mail" id="input-type" class="form-control border-input{{ $errors->has('mail') ? ' is-invalid' : '' }}" placeholder="{{ __('mail') }}" value="{{ old('mail',$stagiaire->mail) }}" required autofocus>
                                             @if ($errors->has('mail'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('mail') }}</strong>
                                               </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group{{ $errors->has('universite') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-universite">{{ __('universite') }}</label>
                                           <select name="universite" id="input-universite" class="form-control border-input{{ $errors->has('universite') ? ' is-invalid' : '' }}" placeholder="{{ __('universite') }}" value="{{ old('universite',$stagiaire->universite) }}" required autofocus>
                                             <option value="Universite de tunis"> Universite de tunis </option>
                                             <option value="Universite de manouba"> Universite de manouba </option>
                                             <option value="Universite de tunis el manar"> Universite de tunis el manar </option>
                                             <option value="Université de carthage"> Université de carthage </option>
                                             <option value="Universite ez-zitouna"> Universite ez-zitouna </option>
                                             <option value="Universite de sousse"> Universite de sousse </option>
                                             <option value="Université de sfax"> Université de sfax </option>
                                             <option value="Universite de jendouba"> Universite de jendouba </option>
                                             <option value="Universite de gabes"> Universite de gabes </option>
                                             <option value="Direction générale des études technologiques"> Direction générale des études technologiques </option>
                                             <option value="Université de monastir"> Université de monastir </option>
                                             <option value="Université de kairouan"> Université de kairouan </option>
                                             <option value="Université de gafsa"> Université de gafsa </option>
                                           </select>
                                             @if ($errors->has('universite'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('universite') }}</strong>
                                               </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group{{ $errors->has('adresse') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-adresse">{{ __('adresse') }}</label>
                                           <input type="text" name="adresse" id="input-adresse" class="form-control border-input{{ $errors->has('adresse') ? ' is-invalid' : '' }}" placeholder="{{ __('adresse') }}" value="{{ old('adresse',$stagiaire->adresse) }}" required autofocus>
                                             @if ($errors->has('adresse'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('adresse') }}</strong>
                                               </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group{{ $errors->has('age') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-age">{{ __('age') }}</label>
                                           <input type="number" name="age" id="input-age" class="form-control border-input{{ $errors->has('age') ? ' is-invalid' : '' }}" placeholder="{{ __('age') }}" value="{{ old('age',$stagiaire->age) }}" required autofocus>
                                             @if ($errors->has('age'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('age') }}</strong>
                                               </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                           <label class="form-control-label" for="input-tel">{{ __('tel') }}</label>
                                           <input type="number" name="tel" id="input-tel" class="form-control border-input{{ $errors->has('tel') ? ' is-invalid' : '' }}" placeholder="{{ __('tel') }}" value="{{ old('tel',$stagiaire->tel) }}" required autofocus>
                                             @if ($errors->has('tel'))
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('tel') }}</strong>
                                               </span>
                                            @endif
                                        </div>
                                      </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Modifier') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
