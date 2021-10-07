<x-dashboard-layout title="{{ __('dashboard.products_create_title') }}">
    @include('dashboard.components.breadcrumb', ['page' => __('dashboard.products_create_title')])
    <form action="{{ route('dashboard.products.story') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('dashboard.products_create_title') }}</h4>
                        <fieldset>
                            <div class="form-group">
                                <label for="name">{{ __('dashboard.products_create_input_name') }}</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" id="Addon_uz">UZ</div>
                                        </div>
                                        <input type="text" class="form-control" name="name[uz]"
                                            value="{{ old('name[uz]') }}" placeholder="Name" aria-label="Name"
                                            aria-describedby="Addon_uz" autocomplete>
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

                            </div>
                            <div class="form-group">
                                <label
                                    for="regular_price">{{ __('dashboard.products_create_input_regular_price') }}</label>
                                <input class="form-control" id="regular_price" name="regular_price"
                                    data-inputmask="'alias': 'currency'" />
                            </div>
                            <!-- <div class="form-group">
                                <label for="sale_price">{{ __('dashboard.products_create_input_sale_price') }}</label>
                                <input class="form-control" id="sale_price" name="regular_price"
                                    data-inputmask="'alias': 'currency'" />
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="sale_price">{{ __('dashboard.products_create_input_attribute') }}</label>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item active"><button type="button"
                                            class="btn btn-light">Add</button>
                                    </li>
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div> -->
                            <div class="form-group">
                                <label>{{ __('dashboard.products_create_input_brand') }}</label>
                                <select name="brand" class="js-example-basic-single w-100">
                                    <option value="" selected>...</option>
                                    @foreach($brand as $brand_data)
                                    <option value="{{ $brand_data->id }}">{{ $brand_data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('dashboard.products_create_input_categories') }}</label>
                                <select name="categories" id="ddlViewBy" class="js-example-basic-single w-100">
                                    @foreach($category as $data)
                                    @php
                                    $language = app()->getLocale();
                                    $name = json_decode($data->name, true);
                                    @endphp
                                    <option value="{{ $data->id }}">{{ $name[$language] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('dashboard.products_create_input_short_desc') }}</label>
                                <textarea class="form-control" name="short_desc" id="tinymceExample"
                                    rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>{{ __('dashboard.products_create_input_tags') }}</label>
                                <input name="tags[]" id="tags" value="" />
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>{{ __('dashboard.products_create_input_visibility') }}</label>
                            <select name="visibility" class="js-example-basic-single w-100">
                                <option value="TX">Public</option>
                                <option value="NY">Private</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ __('dashboard.products_create_input_status') }}</label>
                            <select name="status" class="js-example-basic-single w-100">
                                <option value="true">Action</option>
                                <option value="false">NoAction</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6 class="card-title">{{ __('dashboard.products_create_input_product_images') }}</h6>
                            <!-- <input type="file" name="image" class="border" placeholder="image"> -->
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                            <!-- <input type="file" name="product_images" id="myDropify" class="border" /> -->
                        </div>
                        <div class="form-group">
                            <h6 class="card-title">{{ __('dashboard.products_create_input_product_gallery') }}</h6>
                            <!-- <form action="/file-upload" name="product_gallery" class="dropzone" id="exampleDropzone">
                            </form> -->
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
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- <input class="btn btn-primary" type="submit" value="{{ __('dashboard.pages_create_submit') }}"> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </form>

</x-dashboard-layout>