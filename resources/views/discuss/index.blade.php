@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">


            <div class="row">
                @foreach($discusses as $course)


                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="numbers pull-left">
                                            {{ $course->title }}
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="card-footer">
                                <hr>
                                <div class="footer-title">
                                    {{ count($course->lessons) }}
                                </div>
                            </div>


                        </div>
                    </div>



            @endforeach
            </div>
        </div>
    </div>

@endsection
