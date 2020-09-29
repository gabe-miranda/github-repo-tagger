@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('sidebar')

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{'Tag repository'}}</div>
                    @if(!empty($repoData))
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label for="repoName" class="col-sm-2 col-form-label">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="repoName" readonly class="form-control-plaintext" name="name" value="{{$repoData['name']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="repoFullName" class="col-sm-2 col-form-label">Full name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="repoFullName" readonly class="form-control-plaintext" name="fullName" value="{{$repoData['fullName']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="repoStars" class="col-sm-2 col-form-label">Stars:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="repoStars" readonly class="form-control-plaintext" name="stars" value="{{$repoData['stars']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="repoDescription" class="col-sm-2 col-form-label">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea style="resize: none" id="repoDescription" rows="4" readonly class="form-control-plaintext" name="description">{{$repoData['description']}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="repoLanguage" class="col-sm-2 col-form-label">Language:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="repoLanguage" readonly class="form-control-plaintext" name="language" value="{{$repoData['language']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="repoCreatedAt" class="col-sm-2 col-form-label">Created at:</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="repoCreatedAt" readonly class="form-control-plaintext" name="createdAt" value="{{$repoData['createdAt']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="availableTags" class="col-sm-2 col-form-label">Tag:</label>
                                        <div class="col-sm-5">
                                            <select id="availableTags" class="form-control">
                                                @foreach($availableTags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Save tag</button>
                                </form>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
