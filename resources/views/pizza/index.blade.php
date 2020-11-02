@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    Pizza Orders
                </div>
                    
                    
                    @foreach($pizza as $pizza)
                    <div>
                    <h4><a href="/pizza/{{$pizza->id}}">{{$pizza->name}}</a>-Click for Details</h4>
                    {{-- -{{$a->type}}-{{$a->base}} --}}
                    </div>
                    @endforeach
                  {{--<p>{{$name}}</p>--}}  
      
            </div>
        </div>
        @endsection
   
