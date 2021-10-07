<x-app-layout token="{{ $token }}">
    @include('components.nav', ['page' => __('project.customers_create_title')])
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('project.customers_create_title') }}</h6>
                    @if(session()->get('success'))
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <form class="cmxform" id="signupForm"
                        action="{{ route('project.customers.story', ['token' => $token]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_first_name') }}:</label>
                                    <input type="text" class="form-control" name="first_name" maxlength="70" maxlength="70"
                                        id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_last_name') }}:</label>
                                    <input type="text" class="form-control" name="last_name" maxlength="70" maxlength="70"
                                        id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_username') }}:</label>
                                    <input type="text" class="form-control" name="username" maxlength="70" maxlength="70"
                                        id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_password') }}:</label>
                                    <input type="text" class="form-control" name="password" maxlength="70"
                                        maxlength="70" id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_email') }}:</label>
                                    <input type="text" class="form-control" name="email" maxlength="70" maxlength="70"
                                        id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_city') }}:</label>
                                    <select class="js-example-basic-single w-100" name="city">
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_country') }}:</label>
                                    <select class="js-example-basic-single w-100" name="country">
                                        @foreach($countries as $countrie)
                                        <option value="{{ $countrie->code }}">{{ $countrie->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('project.customers_create_input_address') }}:</label>
                            <textarea class="form-control" id="maxlength-textarea" name="address" maxlength="320"
                                maxlength="320" rows="8"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_zip') }}:</label>
                                    <input type="text" class="form-control" name="zip" maxlength="70" maxlength="70"
                                        id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('project.customers_create_input_telephone') }}:</label>
                                    <input type="text" class="form-control" name="telephone" maxlength="70" maxlength="70"
                                        id="defaultconfig" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="project_token" value="{{$token}}" />
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                        <input class="btn btn-primary" type="submit" value="{{ __('project.pages_create_submit') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>