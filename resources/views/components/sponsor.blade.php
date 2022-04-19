<div id="angelSponsorAds" @if (isset($class)) class="{{ $class }}" @endif >
    <span>
        <span class="angelads-wrap">
            <a href="{{$sponsor->link ?? '#'}}" class="carbon-img" target="_blank" rel="noopener sponsored"><img src="{{ $sponsor->banner_url ?? '' }}" alt="ads via Carbon" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="" class="angelads-text" target="_blank" rel="noopener sponsored">{{ $sponsor->banner_heading ?? 'Sponsor here..' }}</a>
        </span>
        <a href="{{$sponsor->link ?? '#'}}" class="angelads-poweredby" target="_blank" rel="noopener sponsored">ads via AngelAds</a>
    </span>
</div>