@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Typography';
    $description = 'Examples for typography, including global settings, headings, body text, lists, and more.';
    $breadcrumbs = ["/"=>"Home","/Interface"=>"Interface","/Interface/Content"=>"Content"]
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
    <script src="{{ asset('/js/vendor/lolight-1.3.0.min.js') }}"></script>
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

                    <!-- Text Content Start -->
                    <section class="scroll-section" id="textContent">
                        <h2 class="small-title">Text Content</h2>
                        <div class="card mb-5">
                            <div class="card-body d-flex flex-column scroll-out">
                                <div class="scroll sh-50">
                                    <h3 class="card-title mb-4">Healty Cookie Recipe</h3>
                                    <div class="heading">Cookie Macaroon</div>
                                    <p>
                                        Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar
                                        plum icing chocolate cake lollipop jujubes bear claw.
                                        Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                                        <strong>Brownie candy cookie</strong>
                                        candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon
                                        liquorice danish biscuit biscuit.
                                    </p>
                                    <div class="heading">Muffin</div>
                                    <p>
                                        Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake
                                        cupcake gummi bears danish. Sesame snaps muffin macaroon
                                        tiramisu ice cream
                                        <u>toffee carrot sesame tootsie roll</u>
                                        .
                                    </p>
                                    <div class="heading">Liquorice</div>
                                    <p>
                                        Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie
                                        roll.Brownie ice cream marshmallow topping. Icing liquorice oat
                                        cake caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll
                                        chocolate bar. Jujubes candy jelly-o topping lemon drops.
                                        Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu
                                        toffee brownie sweet roll sesame snaps halvah. Icing
                                        carrot cake cupcake gummi bears danish.
                                    </p>
                                    <div class="heading">Powder Cake</div>
                                    <p>
                                        Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake
                                        gummies jelly beans toffee carrot cake bonbon powder
                                        muffin. Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie
                                        cookie lemon drops tootsie roll lollipop. Liquorice
                                        caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing
                                        chocolate cake lollipop jujubes bear claw. Pastry
                                        sweet roll carrot cake cake macaroon gingerbread cookie.
                                    </p>
                                    <div>
                                        <a href="#" class="btn btn-lg btn-gradient-primary">BUTTON</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Text Content End -->

                    <!-- Lists and Blockquote Start -->
                    <section class="scroll-section" id="listsAndBlockquote">
                        <h2 class="small-title">Lists and Blockquote</h2>
                        <div class="card mb-5">
                            <div class="card-body d-flex flex-column scroll-out">
                                <div class="scroll sh-50">
                                    <h3 class="card-title mb-4">Chocolate Bar Biscuit</h3>
                                    <p>
                                        Carrot cake gingerbread pudding chocolate cake cake chocolate bar sesame snaps
                                        wafer. Pie jelly beans tart donut chupa chups caramels
                                        sesame snaps wafer gummies.
                                    </p>
                                    <ol class="ps-4 mb-0">
                                        <li>
                                            Cookie
                                            <p class="fw-normal">
                                                Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder
                                                cake gummies jelly beans toffee carrot cake bonbon powder
                                                muffin.
                                            </p>
                                        </li>
                                        <li>
                                            Muffin
                                            <p class="fw-normal">Fruitcake chocolate chocolate cake. Marzipan wafer
                                                macaroon cookie candy canes fruitcake.</p>
                                        </li>
                                        <li>
                                            Brownie
                                            <p class="fw-normal">Sugar plum gummi bears jujubes cookie jelly-o tootsie
                                                roll chocolate bar.</p>
                                        </li>
                                        <li>
                                            Caramels
                                            <p class="fw-normal">Gingerbread pudding chocolate cake cake.</p>
                                        </li>
                                    </ol>
                                    <div class="heading">Bonbon Powder</div>
                                    <ul class="list-unstyled ps-4">
                                        <li>Croissant</li>
                                        <li>Sesame snaps</li>
                                        <li>Ice cream</li>
                                        <li>Candy canes</li>
                                        <li>Lemon drops</li>
                                    </ul>
                                    <blockquote class="blockquote text-center">
                                        <p class="mb-0">Chups caramels sesame snaps wafer gummies.</p>
                                        <footer class="blockquote-footer">
                                            Someone famous in
                                            <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Lists and Blockquote End -->

                    <!-- Headings Start -->
                    <section class="scroll-section" id="headings">
                        <h2 class="small-title">Headings</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h1>h1. Bootstrap heading</h1>
                                <h2>h2. Bootstrap heading</h2>
                                <h3>h3. Bootstrap heading</h3>
                                <h4>h4. Bootstrap heading</h4>
                                <h5>h5. Bootstrap heading</h5>
                                <h6>h6. Bootstrap heading</h6>
                            </div>
                        </div>
                    </section>
                    <!-- Headings End -->

                    <!-- Headings Classes Start -->
                    <section class="scroll-section" id="headingsClasses">
                        <h2 class="small-title">Headings Classes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p class="h1">h1. Bootstrap heading</p>
                                <p class="h2">h2. Bootstrap heading</p>
                                <p class="h3">h3. Bootstrap heading</p>
                                <p class="h4">h4. Bootstrap heading</p>
                                <p class="h5">h5. Bootstrap heading</p>
                                <p class="h6">h6. Bootstrap heading</p>
                            </div>
                        </div>
                    </section>
                    <!-- Headings Classes End -->

                    <!-- Display Headings Start -->
                    <section class="scroll-section" id="displayHeadings">
                        <h2 class="small-title">Display Headings</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h1 class="display-1">Display 1</h1>
                                <h1 class="display-2">Display 2</h1>
                                <h1 class="display-3">Display 3</h1>
                                <h1 class="display-4">Display 4</h1>
                            </div>
                        </div>
                    </section>
                    <!-- Display Headings End -->

                    <!-- Lead Start -->
                    <section class="scroll-section" id="lead">
                        <h2 class="small-title">Lead</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p class="lead mb-0">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                    auctor. Duis mollis, est non commodo luctus.</p>
                            </div>
                        </div>
                    </section>
                    <!-- Lead End -->

                    <!-- Inline Text Elements Start -->
                    <section class="scroll-section" id="inlineTextElements">
                        <h2 class="small-title">Inline Text Elements</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p>
                                    You can use the mark tag to
                                    <mark>highlight</mark>
                                    text.
                                </p>
                                <p>
                                    <del>This line of text is meant to be treated as deleted text.</del>
                                </p>
                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                <p>
                                    <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                </p>
                                <p><u>This line of text will render as underlined</u></p>
                                <p><small>This line of text is meant to be treated as fine print.</small></p>
                                <p><strong>This line rendered as bold text.</strong></p>
                                <p><em>This line rendered as italicized text.</em></p>
                            </div>
                        </div>
                    </section>
                    <!-- Inline Text Elements End -->

                    <!-- Blockquotes Start -->
                    <section class="scroll-section" id="blockquotes">
                        <h2 class="small-title">Blockquotes</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                </blockquote>
                            </div>
                        </div>
                    </section>
                    <!-- Blockquotes End -->

                    <!-- Naming a Source Start -->
                    <section class="scroll-section" id="namingASource">
                        <h2 class="small-title">Naming a Source</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                    <footer class="blockquote-footer">
                                        Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </section>
                    <!-- Naming a Source End -->

                    <!-- Alignment Start -->
                    <section class="scroll-section" id="alignment">
                        <h2 class="small-title">Alignment</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6 class="card-title mb-2 text-alternate">Center</h6>
                                <blockquote class="blockquote text-center">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                    <footer class="blockquote-footer">
                                        Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>

                                <h6 class="card-title mb-2 text-alternate">Right</h6>
                                <blockquote class="blockquote text-end mb-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                    <footer class="blockquote-footer">
                                        Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </section>
                    <!-- Alignment End -->

                    <!-- Title Inside Start -->
                    <section class="scroll-section" id="titleInside">
                        <h2 class="small-title">Title in the Card</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h2 class="small-title">Inner Title</h2>
                                <p class="mb-0">
                                    Icing sesame snaps cake muffin lollipop carrot cake chocolate cake powder. Pie tart
                                    cotton candy pastry. Icing chocolate powder pie bear
                                    claw jelly-o cake marshmallow biscuit. Wafer chupa chups tart topping tiramisu.
                                    Icing cake donut. Topping candy canes fruitcake. Brownie
                                    danish cake. Marshmallow donut sweet roll. Wafer tootsie roll gingerbread croissant
                                    ice cream. Sweet roll ice cream marzipan croissant
                                    soufflé fruitcake. Soufflé bonbon cookie. Jujubes ice cream cotton candy tootsie
                                    roll sweet.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- Title Inside End -->

                    <!-- Lists Start -->
                    <section class="scroll-section" id="lists">
                        <h2 class="small-title">Lists</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="mb-5">
                                    <p class="card-title mb-2 fw-bold">Unstyled</p>
                                    <ul class="list-unstyled">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>
                                            Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                                <div class="mb-5">
                                    <p class="card-title mb-2 fw-bold">Inline</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">Lorem ipsum</li>
                                        <li class="list-inline-item">Phasellus iaculis</li>
                                        <li class="list-inline-item">Nulla volutpat</li>
                                    </ul>
                                </div>
                                <div>
                                    <p class="card-title mb-2 fw-bold">Description List Alignment</p>
                                    <dl class="row">
                                        <dt class="col-sm-3">Description lists</dt>
                                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                        <dt class="col-sm-3">Euismod</dt>
                                        <dd class="col-sm-9">
                                            <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec
                                                elit.</p>
                                            <p>Donec id elit non mi porta gravida at eget metus.</p>
                                        </dd>
                                        <dt class="col-sm-3">Malesuada porta</dt>
                                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                        <dd class="col-sm-9">
                                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus.
                                        </dd>
                                        <dt class="col-sm-3">Nesting</dt>
                                        <dd class="col-sm-9">
                                            <dl class="row">
                                                <dt class="col-sm-4">Nested definition list</dt>
                                                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc
                                                    augue blandit nunc.
                                                </dd>
                                            </dl>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Lists End -->

                    <!-- Code Blocks Start -->
                    <section class="scroll-section" id="codeBlocks">
                        <h2 class="small-title">Code Blocks</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <p class="card-title mb-2 fw-bold">Code Highlight</p>
                                <pre class="lolight px-4 py-3 bg-light rounded-md">
// Javascript Hello World!
function hello(x) {
console.log('hello, ' + x + '!');
};
const hi = x => {
console.log(`hi, ${x}`);
};
hello('world');
</pre>
                                <div class="clearfix mb-5"></div>
                                <p class="card-title mb-2 fw-bold">Pre</p>
                                <pre>
// Javascript Hello World!
function hello(x) {
console.log('hello, ' + x + '!');
};
const hi = x => {
console.log(`hi, ${x}`);
};
hello('world');
</pre>
                                <div class="clearfix mb-5"></div>
                                <p class="card-title mb-2 fw-bold">Code</p>

                                <code>console.log('hello world!');</code>
                            </div>
                        </div>
                    </section>
                    <!-- Code Blocks End -->
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
                        <a class="nav-link" href="#textContent">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Text Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#listsAndBlockquote">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Lists and Blockquote</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#headings">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Headings</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#headingsClasses">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Headings Classes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#displayHeadings">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Display Headings</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lead">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Lead</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#inlineTextElements">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Inline Text Elements</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#blockquotes">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Blockquotes</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#namingASource">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Naming a Source</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#titleInside">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Title in the Card</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#alignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Alignment</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#lists">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Lists</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#codeBlocks">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Code Blocks</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection
