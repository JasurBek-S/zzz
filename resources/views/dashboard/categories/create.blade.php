<x-dashboard-layout title="{{ __('navigation.menu_categories') }}">
    @include('dashboard.components.breadcrumb', ['page' => __('dashboard.categories_create_title')])
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    @if(session()->get('success'))
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('dashboard.categories.story') }}">
                        @csrf
                        <h6 class="card-title">{{ __('dashboard.categories_create_title') }}</h6>
                        <label
                            for="exampleFormControlSelect1">{{ __('dashboard.categories_create_input_name') }}</label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="Addon_uz">UZ</div>
                                </div>
                                <input type="text" class="form-control" name="name[uz]" value="{{ old('name[uz]') }}"
                                    placeholder="Name" aria-label="Name" aria-describedby="Addon_uz" autocomplete>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="Addon_en">EN</div>
                                </div>
                                <input type="text" class="form-control" name="name[en]" placeholder="Name"
                                    aria-label="Name" aria-describedby="Addon_en" autocomplete>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="Addon_ru">RU</div>
                                </div>
                                <input type="text" class="form-control" name="name[ru]" placeholder="Name"
                                    aria-label="Name" aria-describedby="Addon_ru" autocomplete>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="Addon_jp">JP</div>
                                </div>
                                <input type="text" class="form-control" name="name[jp]" placeholder="Name"
                                    aria-label="Name" aria-describedby="Addon_jp" autocomplete>
                            </div>
                        </div>
                        <label
                            for="exampleFormControlSelect1">{{ __('dashboard.categories_create_input_link') }}</label>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">https://zilla.uz/</div>
                                </div>
                                <input type="text" class="form-control" name="link" placeholder="link.."
                                    aria-label="Link" autocomplete>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('dashboard.categories_create_input_parent_category') }}</label>
                            <select class="js-example-basic-single w-100" name="parent">
                                <option selected {{ (!count($categories)) ? 'disabled' : '' }} value="">Select your age
                                </option>
                                @foreach($categories as $data)
                                @php
                                $language = app()->getLocale();
                                $name = json_decode($data->name, true);
                                @endphp
                                <option value="{{ $data->id }}">{{ $name[$language] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="user_id" value="{{ $hashids->encode(Auth::user()->id) }}" />
                        <input class="btn btn-primary" type="submit" value="{{ __('dashboard.pages_create_submit') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>