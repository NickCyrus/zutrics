@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Clamp';
    $description= 'Clamps an HTML element by adding ellipsis to it if the content inside is too long.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Plugins"=>"Plugins"]
@endphp
@extends('layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])

@section('css')
@endsection

@section('js_vendor')
    <script src="{{ asset('/js/cs/scrollspy.js') }}"></script>
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">{{ $title }}</h1>
                        @include('_layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <p class="mb-0">{{ $description }}</p>
                        </div>
                    </div>

                    <!-- Line Count Start -->
                    <section class="scroll-section" id="lineCount">
                        <h2 class="small-title">Line Count</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p class="clamp-line" data-line="1">
                                    Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart. Lollipop
                                    pudding toffee muffin marshmallow powder brownie candy
                                    canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll chupa chups.
                                    Jelly brownie sesame snaps. Jelly beans chocolate
                                    cake bonbon donut bear claw. Danish croissant bonbon danish muffin icing sugar plum
                                    marzipan oat cake. Oat cake soufflé gummi bears
                                    donut sweet. Gummies chocolate liquorice chocolate cake jelly-o cake. Toffee cupcake
                                    gummi bears gummies dragée danish chocolate bar.
                                    Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum jelly donut. Soufflé
                                    cupcake sesame snaps oat cake. Liquorice jelly powder
                                    fruitcake oat cake. Gummies tiramisu cake jelly-o bonbon. Marshmallow liquorice
                                    croissant. Cake danish gingerbread wafer. Sugar plum
                                    sweet jelly-o chocolate cake lemon drops. Jujubes brownie marshmallow apple pie
                                    donut ice cream jelly-o jelly-o gummi bears.
                                </p>
                                <p class="clamp-line" data-line="2">
                                    Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart. Lollipop
                                    pudding toffee muffin marshmallow powder brownie candy
                                    canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll chupa chups.
                                    Jelly brownie sesame snaps. Jelly beans chocolate
                                    cake bonbon donut bear claw. Danish croissant bonbon danish muffin icing sugar plum
                                    marzipan oat cake. Oat cake soufflé gummi bears
                                    donut sweet. Gummies chocolate liquorice chocolate cake jelly-o cake. Toffee cupcake
                                    gummi bears gummies dragée danish chocolate bar.
                                    Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum jelly donut. Soufflé
                                    cupcake sesame snaps oat cake. Liquorice jelly powder
                                    fruitcake oat cake. Gummies tiramisu cake jelly-o bonbon. Marshmallow liquorice
                                    croissant. Cake danish gingerbread wafer. Sugar plum
                                    sweet jelly-o chocolate cake lemon drops. Jujubes brownie marshmallow apple pie
                                    donut ice cream jelly-o jelly-o gummi bears.
                                </p>
                                <p class="clamp-line" data-line="3">
                                    Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart. Lollipop
                                    pudding toffee muffin marshmallow powder brownie candy
                                    canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll chupa chups.
                                    Jelly brownie sesame snaps. Jelly beans chocolate
                                    cake bonbon donut bear claw. Danish croissant bonbon danish muffin icing sugar plum
                                    marzipan oat cake. Oat cake soufflé gummi bears
                                    donut sweet. Gummies chocolate liquorice chocolate cake jelly-o cake. Toffee cupcake
                                    gummi bears gummies dragée danish chocolate bar.
                                    Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum jelly donut. Soufflé
                                    cupcake sesame snaps oat cake. Liquorice jelly powder
                                    fruitcake oat cake. Gummies tiramisu cake jelly-o bonbon. Marshmallow liquorice
                                    croissant. Cake danish gingerbread wafer. Sugar plum
                                    sweet jelly-o chocolate cake lemon drops. Jujubes brownie marshmallow apple pie
                                    donut ice cream jelly-o jelly-o gummi bears.
                                </p>
                                <p class="clamp-line mb-0" data-line="4">
                                    Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart. Lollipop
                                    pudding toffee muffin marshmallow powder brownie candy
                                    canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll chupa chups.
                                    Jelly brownie sesame snaps. Jelly beans chocolate
                                    cake bonbon donut bear claw. Danish croissant bonbon danish muffin icing sugar plum
                                    marzipan oat cake. Oat cake soufflé gummi bears
                                    donut sweet. Gummies chocolate liquorice chocolate cake jelly-o cake. Toffee cupcake
                                    gummi bears gummies dragée danish chocolate bar.
                                    Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum jelly donut. Soufflé
                                    cupcake sesame snaps oat cake. Liquorice jelly powder
                                    fruitcake oat cake. Gummies tiramisu cake jelly-o bonbon. Marshmallow liquorice
                                    croissant. Cake danish gingerbread wafer. Sugar plum
                                    sweet jelly-o chocolate cake lemon drops. Jujubes brownie marshmallow apple pie
                                    donut ice cream jelly-o jelly-o gummi bears.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Line Count End -->

                    <!-- Height Start -->
                    <section class="scroll-section" id="height">
                        <h2 class="small-title">Height</h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p class="sh-3 clamp-line" data-line="1">
                                            Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart.
                                            Lollipop pudding toffee muffin marshmallow powder brownie
                                            candy canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll
                                            chupa chups. Jelly brownie sesame snaps. Jelly beans
                                            chocolate cake bonbon donut bear claw. Danish croissant bonbon danish muffin
                                            icing sugar plum marzipan oat cake. Oat cake soufflé
                                            gummi bears donut sweet. Gummies chocolate liquorice chocolate cake jelly-o
                                            cake. Toffee cupcake gummi bears gummies dragée danish
                                            chocolate bar. Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum
                                            jelly donut. Soufflé cupcake sesame snaps oat cake.
                                            Liquorice jelly powder fruitcake oat cake. Gummies tiramisu cake jelly-o
                                            bonbon. Marshmallow liquorice croissant. Cake danish
                                            gingerbread wafer. Sugar plum sweet jelly-o chocolate cake lemon drops.
                                            Jujubes brownie marshmallow apple pie donut ice cream
                                            jelly-o jelly-o gummi bears.
                                        </p>
                                        <p class="sh-5 clamp-line" data-line="2">
                                            Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart.
                                            Lollipop pudding toffee muffin marshmallow powder brownie
                                            candy canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll
                                            chupa chups. Jelly brownie sesame snaps. Jelly beans
                                            chocolate cake bonbon donut bear claw. Danish croissant bonbon danish muffin
                                            icing sugar plum marzipan oat cake. Oat cake soufflé
                                            gummi bears donut sweet. Gummies chocolate liquorice chocolate cake jelly-o
                                            cake. Toffee cupcake gummi bears gummies dragée danish
                                            chocolate bar. Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum
                                            jelly donut. Soufflé cupcake sesame snaps oat cake.
                                            Liquorice jelly powder fruitcake oat cake. Gummies tiramisu cake jelly-o
                                            bonbon. Marshmallow liquorice croissant. Cake danish
                                            gingerbread wafer. Sugar plum sweet jelly-o chocolate cake lemon drops.
                                            Jujubes brownie marshmallow apple pie donut ice cream
                                            jelly-o jelly-o gummi bears.
                                        </p>
                                        <p class="sh-8 clamp-line" data-line="3">
                                            Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart.
                                            Lollipop pudding toffee muffin marshmallow powder brownie
                                            candy canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll
                                            chupa chups. Jelly brownie sesame snaps. Jelly beans
                                            chocolate cake bonbon donut bear claw. Danish croissant bonbon danish muffin
                                            icing sugar plum marzipan oat cake. Oat cake soufflé
                                            gummi bears donut sweet. Gummies chocolate liquorice chocolate cake jelly-o
                                            cake. Toffee cupcake gummi bears gummies dragée danish
                                            chocolate bar. Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum
                                            jelly donut. Soufflé cupcake sesame snaps oat cake.
                                            Liquorice jelly powder fruitcake oat cake. Gummies tiramisu cake jelly-o
                                            bonbon. Marshmallow liquorice croissant. Cake danish
                                            gingerbread wafer. Sugar plum sweet jelly-o chocolate cake lemon drops.
                                            Jujubes brownie marshmallow apple pie donut ice cream
                                            jelly-o jelly-o gummi bears.
                                        </p>
                                        <p class="sh-10 mb-0 clamp-line" data-line="4">
                                            Chocolate gingerbread jujubes marshmallow chocolate bar sugar plum tart.
                                            Lollipop pudding toffee muffin marshmallow powder brownie
                                            candy canes biscuit. Ice cream liquorice jelly beans ice cream tootsie roll
                                            chupa chups. Jelly brownie sesame snaps. Jelly beans
                                            chocolate cake bonbon donut bear claw. Danish croissant bonbon danish muffin
                                            icing sugar plum marzipan oat cake. Oat cake soufflé
                                            gummi bears donut sweet. Gummies chocolate liquorice chocolate cake jelly-o
                                            cake. Toffee cupcake gummi bears gummies dragée danish
                                            chocolate bar. Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum
                                            jelly donut. Soufflé cupcake sesame snaps oat cake.
                                            Liquorice jelly powder fruitcake oat cake. Gummies tiramisu cake jelly-o
                                            bonbon. Marshmallow liquorice croissant. Cake danish
                                            gingerbread wafer. Sugar plum sweet jelly-o chocolate cake lemon drops.
                                            Jujubes brownie marshmallow apple pie donut ice cream
                                            jelly-o jelly-o gummi bears.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Height End -->
                </div>
                <!-- Content End -->
            </div>

            <!-- Scrollspy Start -->
            <div class="col-md-auto d-none d-lg-block" id="scrollSpyMenu">
                <ul class="nav flex-column">
                    <li>
                        <a class="nav-link" href="#title">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Title</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lineCount">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Line Count</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#height">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Height</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection
