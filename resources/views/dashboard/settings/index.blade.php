<x-dashboard-layout title="{{ __('navigation.menu_settings') }}">
    <form action="{{ route('dashboard.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        @php
        $name = json_decode($settings_data->sitetitle, true);
        @endphp
        @php
        $metadesc = json_decode($settings_data->metadescription, true);
        @endphp
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Title and meta</h6>
                        <div class="form-group">
                            <label>Homepage title:</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="Addon_uz">UZ</div>
                                    </div>
                                    <input type="text" class="form-control" name="sitetitle[uz]"
                                        value="{{ $name['uz'] }}" placeholder="Site title" aria-label="Site title"
                                        aria-describedby="Addon_uz" autocomplete>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="Addon_en">EN</div>
                                    </div>
                                    <input type="text" class="form-control" name="sitetitle[en]"
                                        value="{{ $name['en'] }}" placeholder="Site title" aria-label="Site title"
                                        aria-describedby="Addon_en" autocomplete>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="Addon_ru">RU</div>
                                    </div>
                                    <input type="text" class="form-control" name="sitetitle[ru]"
                                        value="{{ $name['ru'] }}" placeholder="Site title" aria-label="Site title"
                                        aria-describedby="Addon_ru" autocomplete>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="Addon_jp">JP</div>
                                    </div>
                                    <input type="text" class="form-control" name="sitetitle[jp]"
                                        value="{{ $name['jp'] }}" placeholder="Site title" aria-label="Site title"
                                        aria-describedby="Addon_jp" autocomplete>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Homepage meta description</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">UZ</div>
                                    </div>
                                    <textarea class="form-control" id="maxlength-textarea" name="metadescription[uz]"
                                        maxlength="320" maxlength="320" rows="8"
                                        placeholder="Enter a description to get a better ranking on search engines like Google">{{ $metadesc['uz'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">EN</div>
                                    </div>
                                    <textarea class="form-control" id="maxlength-textarea" name="metadescription[en]"
                                        maxlength="320" maxlength="320" rows="8"
                                        placeholder="Enter a description to get a better ranking on search engines like Google">{{ $metadesc['en'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">RU</div>
                                    </div>
                                    <textarea class="form-control" id="maxlength-textarea" name="metadescription[ru]"
                                        maxlength="320" maxlength="320" rows="8"
                                        placeholder="Enter a description to get a better ranking on search engines like Google">{{ $metadesc['ru'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">JP</div>
                                    </div>
                                    <textarea class="form-control" id="maxlength-textarea" name="metadescription[jp]"
                                        maxlength="320" maxlength="320" rows="8"
                                        placeholder="Enter a description to get a better ranking on search engines like Google">{{ $metadesc['jp'] }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Favicon</label>
                            <input type="file" id="myDropify" name="favicon" accept="image/*" data-max-file-size="3M" class="border" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Analytics</h6>
                        <p class="card-description">Google Analytics enables you to track the visitors to your store,
                            and
                            generates reports that will help you with your marketing. Learn more about Google Analytics
                        </p>
                        <div class="form-group">
                            <label for="AnalyticsGoogle">Google Analytics account</label>
                            <textarea class="form-control" id="AnalyticsGoogle" name="analyticsgoogleaccount" rows="5"
                                placeholder="Paste your code from Google here">{{ $settings_data->analyticsgoogleaccount }}</textarea>
                        </div>
                        <h6 class="card-title">URL</h6>
                        <div class="form-group">
                            <label for="AnalyticsGoogle">Site URL</label>
                            <input id="urlconfig" class="form-control" name="siteurl" autocomplete="off" type="text"
                                placeholder="https://example.com" value="{{ $settings_data->url }}">
                        </div>
                        <h6 class="card-title">Google Login</h6>
                        <div class="form-group">
                            <label for="AnalyticsGoogle">Google Client ID</label>
                            <input id="name" class="form-control" name="googleclientid" autocomplete="off" type="text"
                                placeholder="xxxxxxx-xxxxxxx-xxxxxx" value="{{ $settings_data->google_client_id }}">
                        </div>
                        <div class="form-group">
                            <label for="AnalyticsGoogle">Google Client Secret</label>
                            <input id="name" class="form-control" name="googleclientsecret" autocomplete="off"
                                type="text" placeholder="xxxxxxx-xxxxxxx-xxxxxx"
                                value="{{ $settings_data->google_client_secret }}">
                        </div>
                        <div class="form-group">
                            <label for="AnalyticsGoogle">Google Redirect</label>
                            <input id="result" class="form-control" name="googleredirect" autocomplete="off" type="text"
                                placeholder="https://www.example.com/admin/config/system/google_analytics_counter/authentication"
                                value="{{ $settings_data->google_redirect }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Information</h6>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input class="form-control" maxlength="70" maxlength="70" name="companyname"
                                id="defaultconfig" autocomplete="off" value="{{ $settings_data->companyname }}" />
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input class="form-control mb-4 mb-md-0" name="phone" data-inputmask-alias="(+99) 9999-9999"
                                value="{{ $settings_data->phone }}" />
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control mb-4 mb-md-0" name="email" data-inputmask="'alias': 'email'"
                                value="{{ $settings_data->email }}" />
                        </div>
                        <div class="form-group">
                            <label>Countries:</label>
                            <select class="js-example-basic-single w-100" name="countries">
                                @foreach($countries_data as $countrie)
                                <option value="{{ $countrie->code }}" {{ ( $countrie->code == $settings_data->state) ? 'selected' : '' }}>{{ $countrie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City:</label>
                            <select class="js-example-basic-single w-100" name="city">
                                @foreach($states_data as $state)
                                <option value="{{ $state->id }}" {{ ( $state->id == $settings_data->city) ? 'selected' : '' }}>{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="maxlength-textarea" name="address" maxlength="320"
                                maxlength="320" rows="8" placeholder="address">{{ $settings_data->address }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Payment</h6>
                        <div class="form-group">
                            <label>Paypal Email</label>
                            <input class="form-control" maxlength="70" maxlength="70" name="paypalmail"
                                id="defaultconfig" autocomplete="off" value="{{ $settings_data->paypal }}" />
                        </div>
                        <div class="form-group">
                            <label>Stripe Public Key</label>
                            <input class="form-control" maxlength="70" maxlength="70" name="stripe_public_key"
                                id="defaultconfig" autocomplete="off" value="{{ $settings_data->stripe }}" />
                        </div>
                        <div class="form-group">
                            <label>Stripe Public Secret</label>
                            <input class="form-control" maxlength="70" maxlength="70" name="stripe_public_secret"
                                id="defaultconfig" autocomplete="off" value="" />
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav justify-content-end">
                            <!-- <input type="hidden" name="project_token" value=""> -->
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script>
    var input = document.getElementById('urlconfig');
    var result = document.getElementById('result');

    input.oninput = function() {
        result.value = input.value + '/admin/config/system/google_analytics_counter/authentication';
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
</x-dashboard-layout>