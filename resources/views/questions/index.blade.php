@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                   @foreach($questions as $q)
                    <div class="media">
                        <div class="media-body">
                            <h2 class="mt-0">{{$q->title}}</h2>
                            <p>{{str_limit($q->body, 200)}}</p>
                        </div>
                    </div>
                    <hr>
                   @endforeach
                   {{$questions->links()}}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
