@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Daftar Blog
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">writter</th>
                            <th scope="col">publish</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog as $item)
                                <tr>
                                    <th scope="row"> {{ $loop->iteration }} </th>
                                    <td> {{ $item->title }} </td>
                                    <td> {{ $item->user->name }} </td>
                                    <td>
                                        @if ($item->publish == null)
                                            <span class="badge badge-danger">Not Publish</span>
                                        @else
                                            <span class="badge badge-success">Publish</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-{{$item->id}}">Update</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
@foreach ($blog as $blogs)
<div class="modal fade" id="exampleModal-{{$blogs->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action=" {{ route('blog.update', $blogs->id) }} " method="POST">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" name="title" value=" {{ $blogs->title }} " required>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" @if($blogs->publish == 1) checked @endif name="publish" value="1">
                    <label class="form-check-label" for="exampleCheck1">publish</label>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach

@endsection
