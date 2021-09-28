<div class="overflow-auto">
    {{ $templeInfo->onEachSide(1)->links() }}
</div>

@foreach ($templeInfo as $item)
<div class="col-lg-4 col-md-6 col-sm-6">
    <!-- Single -->
    <div class="properties pb-30">
        <div class="properties-card">
            <div class="properties-img">
                <a href="#"><img src="{{ asset(($item->temple_cover_photo == '')?'https://luckylight.hinet.net/TempleLights/resources/zh/images/bg.jpg':'upload/'.$item->temple_cover_photo) }}" alt=""></a>
                {{-- images/default_temple.png --}}
            </div>
            <div class="wrap-wrapper">
                <div class="properties-caption">
                    <h3><a href="#">{{ $item->templeName }}</a></h3>
                    <p>{{ $item->adddress }}</p>
                </div>
                <div class="properties-footer d-flex justify-content-between align-items-center">
                    <div class="class-day">
                        <a href="#" class="btn">更多介紹</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="overflow-auto">
    {{ $templeInfo->onEachSide(1)->links() }}
</div>
