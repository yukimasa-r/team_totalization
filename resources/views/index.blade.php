@extends('layouts.base')
@section('title', '集計システム')
@section('main')
@if(session('flash_message'))
<div class="alert alert-info mb-3" role="alert">
    {{ session("flash_message") }}
</div>
@endif
<div class='cotainer p-3 border rounded' style="background-color:#ffffff;">
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
            <td class="align-middle">{{ $a->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $a->areaKou }}</td>
            <td class="align-middle">{{ $a->areaOtsu }}</td>
            <td class="align-middle">{{ $a->areaHei }}</td>
            <td class="align-middle">{{ $a->areaTei }}</td>
            <td class="align-middle">{{ $a->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm" href="{{ route('edit', ['id'=>$a->id]) }}">編集</a></td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm" href="{{ route('delete', ['id'=>$a->id]) }}">削除</a></td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'A']) }}">もっとみる</a>
</div>
<div class='cotainer p-3 mt-3 border rounded' style="background-color:#ffffff;">
    <h1>チームB</h1>
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
            <td class="align-middle">{{ $b->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $b->areaKou }}</td>
            <td class="align-middle">{{ $b->areaOtsu }}</td>
            <td class="align-middle">{{ $b->areaHei }}</td>
            <td class="align-middle">{{ $b->areaTei }}</td>
            <td class="align-middle">{{ $b->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm" href="{{ route('edit', ['id'=>$b->id]) }}">編集</td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm" href="{{ route('delete', ['id'=>$b->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'B']) }}">もっとみる</a>
</div>
<div class='cotainer p-3 mt-3 border rounded' style="background-color:#ffffff;">
    <h1>チームC</h1>
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
            <td class="align-middle">{{ $c->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $c->areaKou }}</td>
            <td class="align-middle">{{ $c->areaOtsu }}</td>
            <td class="align-middle">{{ $c->areaHei }}</td>
            <td class="align-middle">{{ $c->areaTei }}</td>
            <td class="align-middle">{{ $c->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm" href="{{ route('edit', ['id'=>$c->id]) }}">編集</td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm" href="{{ route('delete', ['id'=>$c->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'C']) }}">もっとみる</a>
</div>
<div class='cotainer p-3 my-3 border rounded' style="background-color:#ffffff;">
    <h1>チームD</h1>
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
            <td class="align-middle">{{ $d->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $d->areaKou }}</td>
            <td class="align-middle">{{ $d->areaOtsu }}</td>
            <td class="align-middle">{{ $d->areaHei }}</td>
            <td class="align-middle">{{ $d->areaTei }}</td>
            <td class="align-middle">{{ $d->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm" href="{{ route('edit', ['id'=>$d->id]) }}">編集</td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm" href="{{ route('delete', ['id'=>$d->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mt-n3" href="{{ route('more', ['teamName'=> 'D']) }}">もっとみる</a>
</div>
@endsection