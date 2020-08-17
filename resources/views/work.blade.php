@extends('layouts.app')
@section('title','Görevler')
@section('content')
    <div class="container mt-4">
        <div class="col-md-12">
            <h1>Görevler</h1>
            <div align="right">
                <a href="{{route('workInsert')}}">
                    <button class="btn btn-success">Görev Ekle</button>
                </a>
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Görevi Veren</th>
                    <th scope="col">Görev Detayı</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                @foreach($data['allWork'] as $work)

                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <th >{{$work->id}}</th>
                        <td>{{$work->work_owner}}</td>

                        <td>{{$work->work_detail}}</td>

                        <td width="10"><a href="{{route('workUpdate',['id' => $work->id])}}">
                                <button class="btn btn-primary">Düzenle</button>
                            </a></td>
                        <td width="10"><a href="{{route('workDelete',['id' => $work->id])}}">
                                <button class="btn btn-primary">Sil</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </form>
    </div>
    </div>
@endsection
