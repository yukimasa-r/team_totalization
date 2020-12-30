@extends('layouts.base')
@section('title', 'すべてのデータ')
@section('main')
    @if(session('flash_message'))
        <div class="alert alert-info" role="alert">
            {{ session("flash_message") }}
        </div>
    @endif
<div class='cotainer p-3 border rounded' style="background-color:#ffffff;">
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
            <td class="align-middle">{{ $d->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $d->areaKou }}</td>
            <td class="align-middle">{{ $d->areaOtsu }}</td>
            <td class="align-middle">{{ $d->areaHei }}</td>
            <td class="align-middle">{{ $d->areaTei }}</td>
            <td class="align-middle">{{ $d->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm" href="{{ route('edit', ['id'=>$d->id]) }}">編集</a></td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm" href="{{ route('delete', ['id'=>$d->id]) }}">削除</a></td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection