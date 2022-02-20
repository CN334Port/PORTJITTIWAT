@extends('posts.layout')


@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
        <h2>Add new</h2>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>    

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong>
            there ware some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>        
    @endif

    <form action="{{ route('posts.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="from-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title"></input>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="from-group">
                    <strong>Description:</strong>
                    <textarea class="form-control my-3" style="height: 150px" name="description" placeholder="Enter description"></textarea>
                </div>
            </div>
            <div class=col-md-12>
                <button type="Submit" class="btn btn-success my-3">Submit</button>
            </div>
        </div> 
    </form>         


@endsection