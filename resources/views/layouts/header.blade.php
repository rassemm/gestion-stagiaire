<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="col-xs-5">
                                <div class="text-center">
                                  <div class="numbers">
                                      <a href="{{ route('stagiaire.index') }}">Stagiaires</a>
                                  </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="col-xs-5">
                                <div class="text-center">
                                  <div class="numbers">
                                      <a href="{{ route('stage.index') }}">Stages</a>
                                  </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="col-xs-5">
                                <div class="text-center">
                                  <div class="numbers">
                                      <a href="{{ route('encadrant.index') }}">Encadrant</a>
                                  </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

			<div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="col-xs-5">
                                <div class="text-center">
                                  <div class="numbers">
								  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
												<i class="ni ni-user-run"></i>
												<span>{{ __('Logout') }}</span>
											</a>
									</div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
              </div>
        </div>
    </div>
</div>
