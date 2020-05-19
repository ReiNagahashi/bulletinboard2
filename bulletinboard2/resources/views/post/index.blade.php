@extends('layouts.app')
@section('content')
    <div class="container">
        @if(count($posts))
            <table class="table">
                <thead>
                    <th>タイトル</th>
                    <th>内容</th>
                    <th>投稿者</th>
                </thead>
                @foreach ($posts as $post)
                    <tbody>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->user->name }}</td>
                    </tbody>
                @endforeach
            </table>
        @else
            <div class="card text-center">
                <h2>まだ投稿はありません。</h2>
            </div>
        @endif
    </div>

    
@endsection