<div class="navbar-default navbar-static-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="side-menu">
            @foreach([1,2,1,1,1,1,11,1] as $item)
                <li @if(Arr::get($item, 'active')) class="active" @endif>
                    <a href="{{ Arr::get($item, 'link') ? : '#' }}" >
                        @if( $icon = Arr::get($item, 'fa-icon', null) )
                            <i class="fa fa-fw {{ $icon }}"></i>
                        @endif

                        {{ Arr::get($item, 'name') }}

                        @if(Arr::get($item, 'children') )
                            <span class="fa arrow"></span>
                        @endif
                    </a>
                    @if($children = Arr::get($item, 'children') )
                        <span class="fa arrow"></span>

                        <ul class="nav nav-second-level" >
                            @foreach($children as $childItem)
                                @if(isset($childItem['enable']))
                                    @if($childItem['enable'])
                                        <li>
                                            <a href="{{ Arr::get($childItem, 'link') ? : '#' }}">
                                                @if( $icon = Arr::get($childItem, 'fa-icon', null) )
                                                    <i class="fa fa-fw {{ $icon }}"></i>
                                                @endif
                                                {{ Arr::get($childItem, 'name') }}
                                            </a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a href="{{ Arr::get($childItem, 'link') ? : '#' }}">
                                            @if( $icon = Arr::get($childItem, 'fa-icon', null) )
                                                <i class="fa fa-fw {{ $icon }}"></i>
                                            @endif
                                            {{ Arr::get($childItem, 'name') }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>