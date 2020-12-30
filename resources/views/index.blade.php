@extends('layouts.base')
@section('title', '集計システム')
@section('main')
<div class='cotainer'>
    @if(session('flash_message'))
        <div class="alert alert-info" role="alert">
            {{ session("flash_message") }}
        </div>
    @endif
    <h1>チームA</h1>
    <a class="btn btn-outline-primary btn-sm my-2" href="{{ route('new', ['teamName' => 'A']) }}">データの登録</a>
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
            <td>{{ $a->date->format('Y/m/d') }}</td>
            <td>{{ $a->areaKou }}</td>
            <td>{{ $a->areaOtsu }}</td>
            <td>{{ $a->areaHei }}</td>
            <td>{{ $a->areaTei }}</td>
            <td>{{ $a->sum }}</td>
            <td><a class="btn btn-outline-dark" href="{{ route('edit', ['id'=>$a->id]) }}">編集</a></td>
            <td><a class="btn btn-outline-danger" href="{{ route('delete', ['id'=>$a->id]) }}">削除</a></td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'A']) }}">もっとみる</a>
</div>
<div class='cotainer'>
    <h1 class="mt-5">チームB</h1>
    <a class="btn btn-outline-primary btn-sm my-2" href="{{ route('new', ['teamName' => 'B']) }}">データの登録</a>
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
        @foreach($b_data as $b)
        <tr>
            <td>{{ $b->date->format('Y/m/d') }}</td>
            <td>{{ $b->areaKou }}</td>
            <td>{{ $b->areaOtsu }}</td>
            <td>{{ $b->areaHei }}</td>
            <td>{{ $b->areaTei }}</td>
            <td>{{ $b->sum }}</td>
            <td><a class="btn btn-outline-dark" href="{{ route('edit', ['id'=>$b->id]) }}">編集</td>
            <td><a class="btn btn-outline-danger" href="{{ route('delete', ['id'=>$b->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'B']) }}">もっとみる</a>
</div>
<div class='cotainer'>
    <h1 class="mt-5">チームC</h1>
    <a class="btn btn-outline-primary btn-sm my-2" href="{{ route('new', ['teamName' => 'C']) }}">データの登録</a>
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
        @foreach($c_data as $c)
        <tr>
            <td>{{ $c->date->format('Y/m/d') }}</td>
            <td>{{ $c->areaKou }}</td>
            <td>{{ $c->areaOtsu }}</td>
            <td>{{ $c->areaHei }}</td>
            <td>{{ $c->areaTei }}</td>
            <td>{{ $c->sum }}</td>
            <td><a class="btn btn-outline-dark" href="{{ route('edit', ['id'=>$c->id]) }}">編集</td>
            <td><a class="btn btn-outline-danger" href="{{ route('delete', ['id'=>$c->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'C']) }}">もっとみる</a>
</div>
<div class='cotainer'>
    <h1 class="mt-5">チームD</h1>
    <a class="btn btn-outline-primary btn-sm my-2" href="{{ route('new', ['teamName' => 'D']) }}">データの登録</a>
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
        @foreach($d_data as $d)
        <tr>
            <td>{{ $d->date->format('Y/m/d') }}</td>
            <td>{{ $d->areaKou }}</td>
            <td>{{ $d->areaOtsu }}</td>
            <td>{{ $d->areaHei }}</td>
            <td>{{ $d->areaTei }}</td>
            <td>{{ $d->sum }}</td>
            <td><a class="btn btn-outline-dark" href="{{ route('edit', ['id'=>$d->id]) }}">編集</td>
            <td><a class="btn btn-outline-danger" href="{{ route('delete', ['id'=>$d->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'D']) }}">もっとみる</a>
</div>
@endsection