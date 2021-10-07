<x-app-layout token="{{ $token }}">
    @include('components.nav', ['page' => __('project.pages_create_title')])
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('project.pages_create_title') }}</h6>
                    @if(session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    @php
                        $settings = DB::table('settings')->where(['project_token' => $token])->get('url');
                    @endphp
                    @if(!count($settings))
                        <div class="alert alert-danger" role="alert">{{ __('project.pages_create_error') }}<a href="{{ route('project.settings', ['token' => $token]) }}">See</a></div>
                    @endif
                    <form class="cmxform" id="signupForm"
                        action="{{ route('project.pages.store', ['token' => $token]) }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label>{{ __('project.pages_create_input_name') }}:</label>
                                <input type="text" class="form-control" name="page_name" maxlength="70" maxlength="70"
                                    id="defaultconfig" autocomplete="off" placeholder="Page Index..">
                            </div>
                            <div class="form-group">
                                <label>{{ __('project.pages_create_input_url') }}:</label>
                                <input type="text" class="form-control" pattern="[a-z]"
                                    onkeyup="return proverka_logina(this);" name="page_url" id="urlconfig"
                                    maxlength="70" maxlength="70" autocomplete="off" placeholder="/home"
                                    {{ (!count($settings)) ? 'disabled' : '' }}>
                                <p class="mb-3">{{ __('project.pages_create_link') }}: <code>/<span id="result"></span></code>
                                </p>
                            </div>
                            <div class="form-group">
                                <label>{{ __('project.pages_create_input_content') }}:</label>
                                <textarea class="form-control" name="page_content" id="tinymceExample"
                                    rows="10"></textarea>
                            </div>
                            <input type="hidden" name="project_token" value="{{$token}}" />
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <input class="btn btn-primary" type="submit" value="{{ __('project.pages_create_submit') }}">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    var input = document.getElementById('urlconfig');

    input.oninput = function() {
        document.getElementById('result').innerHTML = input.value;
    };

    function proverka_logina(input) {
        var value = input.value;
        var rep = /[^a-z0-9]/g;
        if (rep.test(value)) {
            value = value.replace(rep, '');
            input.value = value;
        }
    }
    </script>
</x-app-layout>