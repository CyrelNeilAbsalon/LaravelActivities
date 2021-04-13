@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                {{-- <div class="card-body"> --}}
                  <ul class="list-group">
                    <li class="list-group-item"><strong>Title:</strong> {{ $post->title }}</li>
                    <li class="list-group-item"><strong>Description:</strong> {{ $post->description }}</li>
                    <li class="list-group-item"><strong>Date Created:</strong> {{ $post->created_at }}</li>
                  </ul>
                {{-- </div> --}}
            </div>
        </div> 
    </div>
  </div>
    
@endsection