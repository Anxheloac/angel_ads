<div id="angelFooterAds" @if (isset($class)) class="{{ $class }}" @endif >
    <span>
        <span class="angelads-wrap">
            <a href="{{$sponsor->link ?? '#'}}" class="carbon-img" target="_blank" rel="noopener sponsored">
                <img src="{{ $image ?? '' }}" alt="ads via Carbon" border="0" height="100"  style="max-width: 100%;" />
            </a>
        </span>
        <a href="{{$sponsor->link ?? '#'}}" class="angelads-poweredby" target="_blank" rel="noopener sponsored">ads via AngelAds</a>
    </span>
</div>