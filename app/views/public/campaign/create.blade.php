<h2 class="page-header">@lang('campaign.new.title')</h2>

@if( Session::has( 'message' ) )
<div class="alert alert-{{ $errors->has() ? 'danger' : 'success' }} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('app.close')</span></button>
    {{ Session::get('message') }}
</div>
@endif

<form action="{{ URL::route('public.campaign.create') }}" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('title') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.title')</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ Input::old('title') }}" placeholder="@lang('campaign.form.placeholders.title')">
                @if( $errors->has('title' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('description') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.description')</label>
                <textarea class="form-control" rows="3" name="description" id="description" value="{{ Input::old('description') }}"></textarea>
                @if( $errors->has('description' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('description') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('date_start') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.date_start')</label>
                <input type="text" class="form-control" name="date_start" id="date_start" value="{{ Input::old('date_start') }}" placeholder="@lang('campaign.form.placeholders.date_start')">
                @if( $errors->has('date_start' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('date_start') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('date_end') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.date_end')</label>
                <input type="text" class="form-control" name="date_end" id="date_end" value="{{ Input::old('date_end') }}" placeholder="@lang('campaign.form.placeholders.date_end')">
                @if( $errors->has('date_end' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('date_end') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('item_title') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.item_title')</label>
                <input type="text" class="form-control" name="item_title" id="item_title" value="{{ Input::old('item_title') }}" placeholder="@lang('campaign.form.placeholders.item_title')">
                @if( $errors->has('item_title' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('item_title') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('item_description') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.description')</label>
                <textarea class="form-control" rows="3" name="description" id="description" value="{{ Input::old('description') }}"></textarea>
                @if( $errors->has('description' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('description') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('item_price') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.item_price')</label>
                <input type="text" class="form-control" name="item_price" id="item_price" value="{{ Input::old('item_price') }}" placeholder="@lang('campaign.form.placeholders.item_price')">
                @if( $errors->has('item_price' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('item_price') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('target_title') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_title')</label>
                <input type="text" class="form-control" name="target_title" id="target_title" value="{{ Input::old('target_title') }}" placeholder="@lang('campaign.form.placeholders.target_title')">
                @if( $errors->has('target_title' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_title') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('target_adress_street') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_adress_street')</label>
                <input type="text" class="form-control" name="target_adress_street" id="target_adress_street" value="{{ Input::old('target_adress_street') }}" placeholder="@lang('campaign.form.placeholders.target_adress_street')">
                @if( $errors->has('target_adress_street' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_adress_street') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('target_adress_street2') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_adress_street2')</label>
                <input type="text" class="form-control" name="target_adress_street2" id="target_adress_street2" value="{{ Input::old('target_adress_street2') }}" placeholder="@lang('campaign.form.placeholders.target_adress_street2')">
                @if( $errors->has('target_adress_street2' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_adress_street2') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('target_adress_zip') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_adress_zip')</label>
                <input type="text" class="form-control" name="target_adress_zip" id="target_adress_zip" value="{{ Input::old('target_adress_zip') }}" placeholder="@lang('campaign.form.placeholders.target_adress_zip')">
                @if( $errors->has('target_adress_zip' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_adress_zip') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('target_adress_city') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_adress_city')</label>
                <input type="text" class="form-control" name="target_adress_city" id="target_adress_city" value="{{ Input::old('target_adress_city') }}" placeholder="@lang('campaign.form.placeholders.target_adress_city')">
                @if( $errors->has('target_adress_city' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_adress_city') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('target_adress_country') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_adress_country')</label>
                <input type="text" class="form-control" name="target_adress_country" id="target_adress_country" value="{{ Input::old('target_adress_country') }}" placeholder="@lang('campaign.form.placeholders.target_adress_country')">
                @if( $errors->has('target_adress_country' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_adress_country') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('item_target_description') ? 'has-error has-feedback' : '' }}">
                <label for="name">@lang('campaign.form.labels.target_description')</label>
                <textarea class="form-control" rows="3" name="target_description" id="target_description" value="{{ Input::old('target_description') }}"></textarea>
                @if( $errors->has('target_description' ) )
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">{{ $errors->first('target_description') }}</span>
                @endif
            </div>
        </div>
    </div>
    {{ Form::token() }}
    <button class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> @lang('campaign.form.new.submit')</button>
    <button type="reset" class="btn">@lang('app.reset')</button>
</form>