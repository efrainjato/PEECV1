@extends('layout.Principal')


@section('content')

<h1>Home</h1>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/imagen1.jpg" alt="">
        </div>
        <div class="item">
            <img src="img/imagen2.jpg" alt="">
        </div>
        <div class="item">
            <img src="img/imagen3.jpg" alt="">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
<br>

<div class="container" style="font-size: 2em; font-weight: 700; color: black">
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam quae explicabo quo reprehenderit sapiente, aspernatur aliquam pariatur earum quod numquam deserunt vitae cum sequi sit suscipit eveniet minus eaque accusamus voluptas accusantium. Reprehenderit ea sed nisi quae nesciunt culpa sapiente repudiandae architecto, doloribus nulla delectus, mollitia repellat. Minima quibusdam nulla aspernatur nisi. Nostrum, culpa dolorum debitis doloribus! Veniam, tempora amet tempore excepturi sunt exercitationem vitae porro, cumque neque explicabo, optio quos perspiciatis impedit minus eaque laborum dicta quas voluptas. Repellat quibusdam repellendus illum, labore fugit ipsam beatae alias molestiae possimus dolorum quidem quas similique, in quod a rem esse, ad eligendi necessitatibus sapiente omnis dicta aperiam obcaecati. Odit tenetur, ex sed tempore nostrum possimus ipsam sint in, voluptatem architecto maxime assumenda amet non molestias dignissimos voluptatum natus quasi.
</p>
</div>
@endsection



@section('siebar')
<p>this is append to teh sidebar</p>

@endsection