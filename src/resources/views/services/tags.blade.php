@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new tag') }}</div>
                    <div class="card-body">
                        <form action="{{route('tags.createTag')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-auto">
                                    <label for="nameInput">Tag name</label>
                                    <input id="nameInput" class="form-control" type="text" name="tagName" required>
                                </div>
                                <div class="form-group col-auto">
                                    <label for="descriptionInput">Description</label>
                                    <input id="descriptionInput" class="form-control" type="text" name="tagDescription">
                                </div>
                            </div>
                            <button class="btn btn-dark" type="submit">Create</button>
                        </form>
                    </div>
                </div>
                @if(!empty($userTags))
                    <hr>
                    <div class="card">
                        <div class="card-header">{{ __('Your tags') }}</div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userTags as $tag)
                                <tr>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->description}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
