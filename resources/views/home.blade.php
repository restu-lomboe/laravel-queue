@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Blog Editor
                    <div class="">
                        <a href="{{ route('index.blog') }}" class="btn btn-info btn-sm float-right"> Daftar Blog </a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action=" {{ route('post.blog') }} " method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label>title</label>
                          <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="publish" value="1">
                          <label class="form-check-label" for="exampleCheck1">publish</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
