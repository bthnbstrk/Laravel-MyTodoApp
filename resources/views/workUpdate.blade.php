@extends('layouts.app')
@section('title','Görev Düzenle')
@section('content')


    <div class="container mt-4">

        <div class="col-md-12">
            <h1>Görev Düzenle</h1>
            <div align="right">
            <a href="{{route('workGet')}}">
                <button class="btn btn-success">Geri</button>
            </a>
        </div>
        <br>
            @if(session()->has('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{route('workUpdatePost',['id'=>$work->id])}}" method="POST" enctype="multipart/form-data">
                @CSRF

                <div class="form-group">
                    <input class="form-control" value="{{$work->work_owner}}" type="text" name="work_owner"
                           placeholder="Görevi Veren">
                </div>

                <div class="form-group">
                    <input class="form-control" value="{{$work->work_detail}}" type="text" name="work_detail"
                           placeholder="Görev Detayı">
                </div>


                <input class="form-control" type="submit" value="Görev Ekle">

        </div>
        </form>
    </div>
    </div>
@endsection


