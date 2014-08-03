<div class="panel panel-info">
  <div class="panel-heading">@lang('sidebar.categories.title')</div>

  <!-- List group -->
  <div class="list-group">
    @if( ! is_null( $categories ) && ! empty( $categories ) )
        @foreach( $categories as $category )
        <a href="{{ URL::route('public.categories.details', [ 'id' => $category->id ]) }}" class="list-group-item">
            <div class="media">
                <div class="pull-left">
                    <img class="media-object" src="{{ $category->get_thumb(64, 64) }}" alt="{{ $category->title }}">
                </div>
                <div class="media-body">
                    <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                    <p class="list-group-item-text">{{ $category->description }}</p>
                </div>
            </div>
        </a>
        @endforeach
    @endif
  </ul>
</div>