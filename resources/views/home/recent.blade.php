<div class="col-12 pt-3 pb-4 g-0 " style="border-bottom: 1px solid black;">
                <p class="text-muted fs-5">Recently Written</p>
                @foreach($recent as $recently)
                <span onclick="redirectTo( '{{$recently['url']}}' )">
                    <div class="card p-0 mt-4 blog-card" style="min-height:140px;">
                        <img src="{{$recently['image_url_landscape']}}" class="w-100 h-100 card-img" style="opacity: 0.5; min-height:140px;">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{$recently ['title']}}</h5>
                            <p class="card-text"> {{$recently ['date']}}</p>
                        </div>
                    </div>
                </span>
                @endforeach
            </div>