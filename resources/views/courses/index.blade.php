@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">


            <div class="row">
                @foreach($courses as $course)


                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
