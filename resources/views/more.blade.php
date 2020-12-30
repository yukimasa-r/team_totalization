@extends('layouts.base')
@section('title', 'すべてのデータ')
@section('main')
<div class='cotainer'>
    @if(session('flash_message'))
        <div class="alert alert-info" role="alert">
            {{ session("flash_message") }}
        </div>
    @endif
    <h1>チーム{{ $teamName }}</h1>
    <a class="btn btn-outline-primary btn-sm my-2" href="{{ route('new', ['teamName' => $teamName]) }}">データの登録</a>
    <table class="table">
        <tr>
            <th>日付</th>
            <th>エリア甲</th>
            <th>エリア乙</th>
            <th>エリア丙</th>
            <th>エリア丁</th>
            <th>計</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->date->format('Y/m/d') }}</td>
            <td>{{ $d->areaKou }}</td>
            <td>{{ $d->areaOtsu }}</td>
            <td>{{ $d->areaHei }}</td>
            <td>{{ $d->areaTei }}</td>
            <td>{{ $d->sum }}</td>
            <td><a class="btn btn-outline-dark" href="{{ route('edit', ['id'=>$d->id]) }}">編集</a></td>
            <td><a class="btn btn-outline-danger" href="{{ route('delete', ['id'=>$d->id]) }}">削除</a></td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection