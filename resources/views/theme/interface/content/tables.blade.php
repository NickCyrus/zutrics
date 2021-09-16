@php
    $html_tag_data = ["scrollspy"=>"true"];
    $title = 'Tables';
    $description = 'Examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.';
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

                    <!-- Basic Start -->
                    <section class="scroll-section" id="basic">
                        <h2 class="small-title">Basic</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Basic End -->

                    <!-- Striped Rows Start -->
                    <section class="scroll-section" id="stripedRows">
                        <h2 class="small-title">Striped Rows</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Striped Rows End -->

                    <!-- Hoverable Rows Start -->
                    <section class="scroll-section" id="hoverableRows">
                        <h2 class="small-title">Hoverable Rows</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Hoverable Rows End -->

                    <!-- Active Tables Start -->
                    <section class="scroll-section" id="activeTables">
                        <h2 class="small-title">Active Tables</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-active">
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2" class="table-active">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Active Tables End -->

                    <!-- Bordered Tables Start -->
                    <section class="scroll-section" id="borderedTables">
                        <h2 class="small-title">Bordered Tables</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Bordered Tables End -->

                    <!-- Tables Without Borders Start -->
                    <section class="scroll-section" id="tablesWithoutBorders">
                        <h2 class="small-title">Tables Without Borders</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Tables Without Borders End -->

                    <!-- Small Tables Start -->
                    <section class="scroll-section" id="smallTables">
                        <h2 class="small-title">Small Tables</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Small Tables End -->

                    <!-- Vertical Alignment Start -->
                    <section class="scroll-section" id="verticalAlignment">
                        <h2 class="small-title">Vertical Alignment</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table align-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="w-25">Heading 1</th>
                                        <th scope="col" class="w-25">Heading 2</th>
                                        <th scope="col" class="w-25">Heading 3</th>
                                        <th scope="col" class="w-25">Heading 4</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: middle;</code>
                                            from the table
                                        </td>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: middle;</code>
                                            from the table
                                        </td>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: middle;</code>
                                            from the table
                                        </td>
                                        <td>
                                            This here is some placeholder text, intended to take up quite a bit of
                                            vertical space, to demonstrate how the vertical alignment
                                            works in the preceding cells.
                                        </td>
                                    </tr>
                                    <tr class="align-bottom">
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: bottom;</code>
                                            from the table row
                                        </td>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: bottom;</code>
                                            from the table row
                                        </td>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: bottom;</code>
                                            from the table row
                                        </td>
                                        <td>
                                            This here is some placeholder text, intended to take up quite a bit of
                                            vertical space, to demonstrate how the vertical alignment
                                            works in the preceding cells.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: middle;</code>
                                            from the table
                                        </td>
                                        <td>
                                            This cell inherits
                                            <code class="text-primary">vertical-align: middle;</code>
                                            from the table
                                        </td>
                                        <td class="align-top">This cell is aligned to the top.</td>
                                        <td>
                                            This here is some placeholder text, intended to take up quite a bit of
                                            vertical space, to demonstrate how the vertical alignment
                                            works in the preceding cells.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Vertical Alignment End -->

                    <!-- Nesting Start -->
                    <section class="scroll-section" id="nesting">
                        <h2 class="small-title">Nesting</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <table class="table mb-0">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Header</th>
                                                    <th scope="col">Header</th>
                                                    <th scope="col">Header</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">A</th>
                                                    <td>First</td>
                                                    <td>Last</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">B</th>
                                                    <td>First</td>
                                                    <td>Last</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">C</th>
                                                    <td>First</td>
                                                    <td>Last</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Nesting End -->

                    <!-- Head and Foot Start -->
                    <section class="scroll-section" id="headAndFoot">
                        <h2 class="small-title">Head and Foot</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@@twitter</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>Footer</td>
                                        <td>Footer</td>
                                        <td>Footer</td>
                                        <td>Footer</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Head and Foot End -->

                    <!-- Always Responsive Start -->
                    <section class="scroll-section" id="alwaysResponsive">
                        <h2 class="small-title">Always Responsive</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Always Responsive End -->

                    <!-- Breakpoint Specific Responsive Start -->
                    <section class="scroll-section" id="breakpointSpecificResponsive">
                        <h2 class="small-title">Breakpoint Specific Responsive</h2>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive-sm mb-5">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-md mb-5">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-lg mb-5">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-xl mb-5">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive-xxl">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Breakpoint Specific Responsive End -->
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
                        <a class="nav-link" href="#basic">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Basic</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#stripedRows">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Striped Rows</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#hoverableRows">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Hoverable Rows</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#activeTables">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Active Tables</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#borderedTables">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Bordered Tables</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#tablesWithoutBorders">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Tables Without Borders</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#smallTables">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Small Tables</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#verticalAlignment">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Vertical Alignment</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#nesting">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Nesting</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#headAndFoot">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Head And Foot</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#alwaysResponsive">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Always Responsive</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#breakpointSpecificResponsive">
                            <i data-cs-icon="chevron-right"></i>
                            <span>Breakpoint Specific Responsive</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy End -->
        </div>
    </div>
@endsection
