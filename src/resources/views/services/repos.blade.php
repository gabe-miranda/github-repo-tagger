@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{'Your tagged repositories'}}</div>
                </div>
                @if(!empty($userRepos))
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Stars</th>
                            <th scope="col">Description</th>
                            <th scope="col">Language</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Tag</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($userRepos as $repository)
                            <tr>
                                <td>{{$repository->name}}</td>
                                <td>{{$repository->full_name}}</td>
                                <td>{{$repository->stars}}</td>
                                <td>{{$repository->description}}</td>
                                <td>{{$repository->language}}</td>
                                <td>{{$repository->created_at}}</td>
                                <td>{{$repository->tag_name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
