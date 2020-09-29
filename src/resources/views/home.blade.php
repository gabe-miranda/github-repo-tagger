@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('sidebar')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Repositories') }}</div>
                <div class="card-body">
                    <form action="{{ route('home.sendData') }}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-auto">
                                <label for="keywordInput">Keyword</label>
                                <input id="keywordInput" class="form-control" type="text" name="q" required>
                            </div>
                            <div class="form-group col-auto">
                                <label for="languageInput">Language</label>
                                <input id="languageInput" class="form-control" type="text" name="language">
                            </div>
                            <div class="form-group col-auto">
                                <label for="sortingInput">Sort by</label>
                                <select id="sortingInput" class="form-control" name="sort">
                                    <option value="" selected>None</option>
                                    <option value="stars">Stars</option>
                                    <option value="updated">Updated</option>
                                </select>
                            </div>
                            <div class="form-group col-auto">
                                <label for="orderInput">Order by</label>
                                <select id="orderInput" class="form-control" name="order">
                                    <option value="desc" selected>Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
@if(isset($response_data))
    <div class="row table-header">
        <div class="col"><strong>Name</strong></div>
        <div class="col"><strong>Full Name</strong></div>
        <div class="col"><strong>Stars</strong></div>
        <div class="col"><strong>Description</strong></div>
        <div class="col"><strong>Language</strong></div>
        <div class="col"><strong>Created At</strong></div>
    </div>
    @foreach($response_data as $repository)
        <form action="{{route('repo.attachTag')}}" method="post">
            {{csrf_field()}}
            <div class="row table-rows form-group">
                <div class="col"><input type="text" readonly class="form-control-plaintext" name="name" value="{{$repository->name}}"></div>
                <div class="col"><input type="text" readonly class="form-control-plaintext" name="fullName" value="{{$repository->full_name}}"></div>
                <div class="col"><input type="text" readonly class="form-control-plaintext" name="stars" value="{{$repository->stars}}"></div>
                <div class="col"><textarea style="resize: none" readonly class="form-control-plaintext" rows="5" name="description">{{$repository->description}}</textarea></div>
                <div class="col"><input type="text" readonly class="form-control-plaintext" name="language" value="{{$repository->language}}"></div>
                <div class="col"><input type="text" readonly class="form-control-plaintext" name="createdAt" value="{{$repository->created_at}}"></div>
                <div class="col- align-self-center"><button class="btn btn-primary" type="submit">Tag</button></div>
            </div>
        </form>
    @endforeach
@endif
</div>
@endsection
