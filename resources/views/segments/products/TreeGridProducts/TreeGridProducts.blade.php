<section class='TreeGridProducts'
         style="---three-main-bg-color: {{getSetting($data->area->name.'_'.$data->part.'_color')}};
        --gx1: {{getSetting($data->area->name.'_'.$data->part.'_gradx1')}};
        --gx2: {{getSetting($data->area->name.'_'.$data->part.'_gradx2')}};
        --gy1: {{getSetting($data->area->name.'_'.$data->part.'_grady1')}};
        --gy2: {{getSetting($data->area->name.'_'.$data->part.'_grady2')}};
        "
>
    <div class="{{gfx()['container']}}">

        <div class="tree-grid">
            <div class="tree-grid-item">
                <div>
                    <h1>
                        {{getSetting($data->area->name.'_'.$data->part.'_title')}}
                    </h1>
                    <div class="w100 overflow-hidden">

                        <div class="section-main">
                            @foreach(getCategoryProductBySetting($part->area->name . '_' . $part->part.'_category') as $product)
                                <div class="item">
                                    <div class="tree-product-box">
                                        <a href="{{$product->webUrl()}}">
                                            <img src="{{$product->imgUrl()}}" alt="{{$product->name}}">
                                        </a>
                                        <h4>
                                            <a href="{{$product->webUrl()}}">
                                                {{$product->name}}
                                            </a>
                                        </h4>

                                        <div class="price">
                                            {{$product->getPrice()}}
                                        </div>

                                        <a href="{{ route('client.product-card-toggle',$product->slug) }}" class="btn btn-primary btn-sm w-100 add-to-card">
                                            <i class="ri-shopping-cart-2-line"></i>
                                            <span>
                                                Add to card
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tree-grid-item">
                     <span class="badge bg-secondary discount">
                              {{getSetting($data->area->name.'_'.$data->part.'_badgex')}}
                    </span>

                <div class="section-second">
                    @foreach(getCategoryProductBySetting($part->area->name . '_' . $part->part.'_categoryx') as $product)
                        <div class="item  text-center">
                                <a href="{{$product->webUrl()}}">
                                    <img src="{{$product->imgUrl()}}" class="img-fluid" alt="{{$product->name}}">
                                </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tree-grid-item">
                 <span class="badge bg-secondary discount">
                                {{getSetting($data->area->name.'_'.$data->part.'_badgey')}}
                    </span>

                <div class="section-third">
                    @foreach(getCategoryProductBySetting($part->area->name . '_' . $part->part.'_categoryy') as $product)
                        <div class="item  text-center">
                            <a href="{{$product->webUrl()}}">
                                <img src="{{$product->imgUrl()}}" class="img-fluid" alt="{{$product->name}}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
