@extends('posts.layout');

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Advice Me</h2>
            @auth('admin')
                <a href="{{ route('posts.create')}}" class="btn btn-success my-3">create new post</a>
                <button class="btn btn-danger my-3" onclick="location.href='{{ url('http://127.0.0.1:8000/admin/dashboard')}}'" >Back to Portfolio</button>
                @else
                <a href="{{ route('admin.login')}}" class="btn btn-success my-3">Admin login</a>
                <button class="btn btn-danger my-3" onclick="location.href='{{ url('http://127.0.0.1:8000/dashboard')}}'" >Back to Portfolio</button>
                @endauth
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->title}}</td>
                <td>{{ Str::limit($value->description, 100)}}</td>
                <td>
                    <form action="{{ route('posts.destroy', $value->id)}}" method="post">
                        <a href="{{ route('posts.show', $value->id)}}" class="btn btn-primary">Show</a>

                        @auth('admin')
                            <a href="{{ route('posts.edit', $value->id)}}" class="btn btn-Secondary">Edit</a>
                            @else
                        @endauth
                        @csrf
                        @method('DELETE')

                        @auth('admin')
                            <button type="Submit" class="btn btn-danger">Delete</button>
                            @else
                        @endauth

                    </form>
                </td>
            </tr>
        @endforeach
        <a href="{{ route('project')}}" class="btn btn-Primary mt-1 my-4">show ajax</a>
    </table>

    {!! $data->links() !!}

@endsection