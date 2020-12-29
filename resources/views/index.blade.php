@extends('layouts.base')
@section('title', '集計システム')
@section('main')
<div class='cotainer'>
    <h1>チームA</h1>
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
        @foreach($a_data as $a)
        <tr>
            <td>{{ $a->date }}</td>
            <td>{{ $a->areaKou }}</td>
            <td>{{ $a->areaOtsu }}</td>
            <td>{{ $a->areaHei }}</td>
            <td>{{ $a->areaTei }}</td>
            <td>{{ $a->sum }}</td>
            <td>編集</td>
            <td>削除</td>
        </tr> 
        @endforeach
    </table>
    <p>もっと見る</p>
</div>
    <h1>チームB</h1>
    <h1>チームC</h1>
    <h1>チームD</h1>
@endsection