

<style>
#angelSponsorAds{
    background-color: #f7f8fb;
    bottom: 20px;
    box-shadow: 0 0 1px rgb(0 0 0 / 25%);
    box-sizing: content-box;
    max-width: 130px;
    padding: 0.625em;
    position: fixed;
    right: 20px;
    z-index: 100;
}

#angelSponsorAds .angelads-text{
    color: #565454;
    display: block;
    font-size: .75em;
    line-height: 1.4em;
}

#angelSponsorAds .angelads-poweredby{
    color: #777;
    font-size: .5em;
    letter-spacing: 1px;
    line-height: 1;
    text-transform: uppercase;
}

</style>

<div id="angelSponsorAds" @if (isset($class)) class="{{ $class }}" @endif >
   
    <span>
        <span class="angelads-wrap">
            <a href="{{$sponsor->link ?? '#'}}" class="carbon-img" target="_blank" rel="noopener sponsored"><img src="{{ $sponsor->banner_url ?? '' }}" alt="ads via Carbon" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="" class="angelads-text" target="_blank" rel="noopener sponsored">{{ $sponsor->banner_heading ?? 'Sponsor here..' }}</a>
        </span>
        <a href="{{$sponsor->link ?? '#'}}" class="angelads-poweredby" target="_blank" rel="noopener sponsored">ads via AngelAds</a>
    </span>
</div>