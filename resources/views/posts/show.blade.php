@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">


            <div class="row">


                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="content">
                            <div class="row">

                                <div class="col-xs-12">
                                        {{ $discuss->title }}
                                    <br>
                                        {{ $discuss->content }}
                                </div>
                            </div>
                        </div>


                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">

                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($discuss->discussions as $lesson)
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-12">
                                        {{ $lesson->content }}
                                </div>
                            </div>
                        </div>


                        <div class="card-footer">
                            <hr>
                            <div class="footer-title">
                            </div>
                        </div>


                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection
