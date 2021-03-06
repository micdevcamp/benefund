@if( Session::has('message') )
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="row">
    <div class="col-xs-12">
        @if( Input::get('s', '') != '' )
        <div class="pull-left">
            <h4>@lang('campaigns.search.title', [ 'search' => Input::get('s') ])</h4>
        </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="pull-left">
            <p><a href="{{ URL::route('public.campaigns.new') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> @lang('campaigns.form.buttons.new')</a></p>
        </div>
        <div class="pull-right">
            <p>
                <form action="{{ URL::route('public.campaigns') }}" type="get" class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control" name="s" id="s" placeholder="@lang('campaigns.form.search.placeholder')" value="{{ Input::get('s', '') }}">
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> @lang('campaigns.form.search.button')</button>
                        </span>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>

<table id="campaigns" class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>@lang('campaigns.title')</th>
            <th>@lang('app.actions')</th>
        </tr>
    </thead>
    <tbody>
    @if( count( $campaigns ) > 0 )
        @foreach( $campaigns as $index => $campaign )
        <tr id="campaign-{{ $campaign->id }}">
            <td>{{ $campaign->title }}</td>
            <td>
                <form action="{{ URL::route('public.campaigns.delete', [$campaign->id]) }}" method="post">
                    <div class="btn-group btn-group-block">
                        <a href="{{ URL::route('public.campaigns.edit', [$campaign->id]) }}" class="btn btn-primary btn-sm btn-col-4"><i class="glyphicon glyphicon-edit"></i> <span class="hidden-xs">@lang('campaigns.form.buttons.edit')</span></a>
                        <button class="btn btn-danger btn-sm btn-col-4"><i class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">@lang('campaigns.form.buttons.remove')</span></button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    @else
        <tr class="danger">
            <td colspan="3">@lang('campaigns.empty')</td>
        </tr>
    @endif
    </tbody>
</table>

<div class="row">
    <div class="col-xs-12">
        <div class="pull-left">
            <p><a href="{{ URL::route('public.campaigns.new') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> @lang('campaigns.form.buttons.new')</a></p>
        </div>
    </div>
</div>