@extends('layouts.base')
@section('title', 'データ削除')
@section('main')
    <h1>データ削除</h1>
    <form method="POST" action="{{ route('destroy', ['id' => $data->id]) }}">
        @csrf
        <table class="table">
            <tr>
                <td>日付</td>
                <td>{{ $data->date }}</td>
            </tr>
            <tr>
                <td>エリア甲</td>
                <td>{{ $data->areaKou }}</td>
            </tr>
            <tr>
                <td>エリア乙</td>
                <td>{{ $data->areaOtsu }}</td>
            </tr>
            <tr>
                <td>エリア丙</td>
                <td>{{ $data->areaHei }}</td>
            </tr>
            <tr>
                <td>エリア丁</td>
                <td>{{ $data->areaTei }}</td>
            </tr>
        </table>
        <p>削除しますか？</p>
        <input class="btn btn-outline-danger" type="submit" value="はい" />
        <button class="btn btn-outline-primary" type="button"><a href="{{ route('index') }}">いいえ（一覧へ戻る）</a></button>
    </form>
@endsection
