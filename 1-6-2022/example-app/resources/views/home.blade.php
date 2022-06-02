@extends('layout.master')


    @section('content')
    <section>

    <div class="card" style="width: 18rem;">
        @foreach ($data as $value)
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$value['title']}}</h5>
            <p class="card-text">{{$value['description']}}</p>
            <a href="#" class="btn btn-primary">{{$value['btn']}}</a>
        </div>
        @endforeach
    </div>
    </section>
    <style>
        .card{
            margin: 5%;
        }
        section{
            display:flex;
        }
    </style>

   @endsection

    {{-- @foreach ($list as $item)
        <div>{{$item['email']}}  </div>
    @endforeach --}}


