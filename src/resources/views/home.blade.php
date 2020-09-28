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
        <div>
            @if(isset($response_data))
                <hr>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Stars</th>
                        <th scope="col">Description</th>
                        <th scope="col">Language</th>
                        <th scope="col">Created At</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($response_data as $repository)
                        <tr>
                            <td>{{$repository->name}}</td>
                            <td>{{$repository->full_name}}</td>
                            <td>{{$repository->stars}}</td>
                            <td>{{$repository->description}}</td>
                            <td>{{$repository->language}}</td>
                            <td>{{$repository->created_at}}</td>
                            <td><button class="btn btn-primary">Tag</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
