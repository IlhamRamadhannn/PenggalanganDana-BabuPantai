@extends('layout.master')

@section('content')
<div class="" style="background: linear-gradient(to bottom, rgb(65, 128, 117), #76AADB); padding: 40px;">
    <div style="margin-top: 135px;">
        <div class="container my-15 pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">

                    <h1 class="fw-bold text-center" style="color: rgb(255, 255, 255); margin-top: 80px;">{{$article->title}}</h1>
                    <p class="fw-bold text-center" style="color: rgb(255, 255, 255);">Oleh: {{$article->author}}</p>
                    <br>

                    <p class="fw-bold text-center" style="color: rgb(255, 255, 255);">Kategori: {{$article->category}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 mx-auto bg-white text-black p-4 rounded">
                    {{$article->content}}
                </div>
            </div>

            <!-- Comments Section -->
            {{-- <div class="row mt-5">
                <div class="col-md-9 mx-auto">
                <!-- Comments Header with Toggle Button -->
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="text-white">Comments</h3>
                        <form action="{{ route('toggle.comments', $article->id) }}" method="POST">
                            @csrf
                            <button type="submit" 
                                class="btn btn-light btn-sm d-flex align-items-center justify-content-center" 
                                style="width: 40px; height: 40px; border: 2px solid #333; border-radius: 5px; font-size: 20px; font-weight: bold;">
                                {{ session('comments_visible', true) ? '-' : '+' }}
                            </button>
                        </form>
                    </div>

                    <!-- Display Comment Form -->
                    @if(session('comments_visible', true) && auth()->check())
                        <div class="mt-4">
                            <form action="{{ route('comments.store', $article->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" rows="4" placeholder="Write your comment..." style="background-color: #f4f4f4; color: #333;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
                            </form>
                        </div>
                    @else
                        <div class="text-center">
                            <p style="font-size: 1.2rem; font-weight: bold; color: #fff; margin-bottom: 20px;">
                                Please log in to post comments.
                            </p>
                            <a href="{{ route('login') }}" 
                            style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; 
                                    border: 2px solid #007bff; border-radius: 25px; font-weight: bold; text-decoration: none;">
                                Login
                            </a>
                        </div>
                    @endif --}}

                    {{-- <!-- Display Comments -->
                    <div class="comments-list mt-4">
                        @foreach($article->comments as $comment)
                            <div class="comment-box mb-4 p-3 rounded border" style="background-color: #f9f9f9; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                                <div class="comment-header" style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <strong>{{ $comment->user->name }}</strong>
                                        <span class="text-muted" style="font-size: 0.9rem; color: #6c757d;"> {{ $comment->created_at->diffForHumans() }}</span>
                                    </div>

                                    @auth
                                        <!-- Edit/Delete Options (aligned to the right) -->
                                        @if(auth()->id() === $comment->user_id)
                                            <div class="action-buttons" style="display: flex; gap: 10px;">
                                                <!-- Edit Button -->
                                                <a href="{{ route('comments.edit', $comment->id) }}" class="btn-edit" style="width: 40px; height: 40px; background-color: #007bff; display: flex; justify-content: center; align-items: center; border: none; border-radius: 5px; overflow: hidden;">
                                                    <img src="{{ asset('images/pen.png') }}" alt="Edit" class="icon" style="width: 100%; height: 100%; object-fit: contain;" />
                                                </a>

                                                <!-- Delete Button -->
                                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-delete" style="width: 40px; height: 40px; background-color: #dc3545; display: flex; justify-content: center; align-items: center; border: none; border-radius: 5px; overflow: hidden;">
                                                        <img src="{{ asset('images/trashcan.png') }}" alt="Delete" class="icon" style="width: 100%; height: 100%; object-fit: contain;" />
                                                    </button>
                                                </form>
                                            </div>
                                        @else
                                            no comment
                                        @endif
                                    @endauth
                                </div>

                                <p>{{ $comment->comment }}</p>
                            </div>
                        @endforeach
                    </div> --}}
                {{-- </div> --}}
            {{-- </div>
            <br>
            <div class="row">
                <h2>comment
                    </h2>
            </div>
            <div class="row">
                <div class="col-md-9"> 
                    <form action="{{route('')}}" method="POST">
                        @csrf
                        <textarea name="inp_comment" id="inp_comment" cols="70" rows="2" placeholder="Type your comment"></textarea>
                        <br>
                        <input style="margin-top: 20px" class="btn btn-success" type="submit">
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection

