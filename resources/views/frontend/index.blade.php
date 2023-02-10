@extends('layouts.app')


@section('title',"$setting->meta_title")
@section('meta_description',"$setting->description")
@section('meta_keyword',"$setting->meta_keyword")
@section('content')



<div class="bg py-5" style="background-color: #e6f2ff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein" bis_skin_checked="1">
                    <ul class="slider-container py-4">
                        @foreach ($all_Post as $itemAll_Post)


                        <li class="slide-visible">
                            <div class="card shadow h-100" bis_skin_checked="1">
                                <div class="ratio ratio-16x9" bis_skin_checked="1">
                                    <img src="{{asset('Image/post/'.$itemAll_Post->image)}}" class="card-img-top" loading="lazy" alt="...">
                                </div>
                                <div class="card-body p-3 p-xl-5" bis_skin_checked="1">
                                    <h3 class="card-title h5">{{$itemAll_Post->name}}</h3>
                                    <p class="card-text"> {{ strip_tags(substr($itemAll_Post->description,0,350))}}</p>
                                    <div bis_skin_checked="1">
                                        <a href="{{url('tutorial/'.$itemAll_Post->category->slug.'/'.$itemAll_Post->slug)}}" class="btn btn-primary float-end">Show more </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                    <button type="button" class="slider-nav" aria-label="Go left"></button>
                    <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

                    <div class="slider-indicators" bis_skin_checked="1">
                        <button class="" aria-label="Go to slide"></button>
                        <button aria-label="Go to slide" class="active"></button>
                        <button aria-label="Go to slide"></button>
                        <button aria-label="Go to slide"></button>
                        <button aria-label="Go to slide"></button>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>


<div class="py-1 bg-secondary">
    <div class="container">
        <div class="text-center p-3">
            <h3> ads here</h3>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> Said ELHABHAB</h4>
                <div class="underline">
                </div>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium iusto nesciunt dolores obcaecati culpa dolore quae quaerat, tempora itaque laborum tenetur? Aut voluptatem voluptate, natus earum culpa quasi fugit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum praesentium iusto nesciunt dolores obcaecati culpa dolore quae quaerat, tempora itaque laborum tenetur? Aut voluptatem voluptate, natus earum culpa quasi fugit.
                    </p>
            </div>
        </div>
    </div>
</div>

<div class="py-4 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> all Category </h4>
                <div class="underline">
                </div>
            </div>

                @foreach ($all_Catogory as $all_CatogoryItem )
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{ url('tutorial/'.$all_CatogoryItem->slug)}}" class="text-decoration-none">
                                <h4 class="text-dark -mb-0"> {{$all_CatogoryItem->name}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> last Post </h4>
                <div class="underline">
                </div>
            </div>
            <div class="col-md-8">
                @foreach ($all_Post as $all_PostItem2 )

                    <div class="card mb-3 bg-gray shadow">
                        <div class="card-body">
                            <a href="{{ url('tutorial/'.$all_PostItem2->category->slug.'/'.$all_PostItem2->slug)}}" class="text-decoration-none">
                                <h4 class="text-dark -mb-0"> {{$all_PostItem2->name}}</h4>
                            </a>
                            <h6> Post on : {{$all_PostItem2->created_at->format('d-m-Y') }}
                            </h6>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="col-md-4">
                <div class="border text-center p-3">
                    <h4> ads</h4>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
