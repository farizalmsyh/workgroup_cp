@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Company{{$company->id}}</div>

                <div class="card-body">
                    <form action="{{route('update',$company->id)}}"method="post">@csrf
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" name="title" class="form-control" value="{{$company->title}}">
                        </div>
                        <div class="form-group">
                            <label>title</label>
                            <textarea name="content" class="form-control">{{$company->title}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn primary btn-lg btn-block">posting ulang</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
