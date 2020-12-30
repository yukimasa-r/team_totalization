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
    <table class="table">
        <tr>
            <th class="align-middle">日付</th>
            <th class="align-middle">エリア甲</th>
            <th class="align-middle">エリア乙</th>
            <th class="align-middle">エリア丙</th>
            <th class="align-middle">エリア丁</th>
            <th class="align-middle">計</th>
            <th class="align-middle" colspan="2"><a class="btn btn-outline-primary mx-auto d-block" style="width: 55%;" href="{{ route('new', ['teamName' => $teamName]) }}">データの登録</a></th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td class="align-middle">{{ $d->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $d->areaKou }}</td>
            <td class="align-middle">{{ $d->areaOtsu }}</td>
            <td class="align-middle">{{ $d->areaHei }}</td>
            <td class="align-middle">{{ $d->areaTei }}</td>
            <td class="align-middle">{{ $d->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('edit', ['id'=>$d->id]) }}">編集</a></td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('delete', ['id'=>$d->id]) }}">削除</a></td>
        </tr> 
        @endforeach
    </table>
</div>
@endsection