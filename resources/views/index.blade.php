@extends('layouts.base')
@section('title', '集計システム')
@section('main')
@if(session('flash_message'))
<div class="alert alert-info mb-3" role="alert">
    {{ session("flash_message") }}
</div>
@endif
<div class="container p-3 mb-3 border rounded" style="background-color:#ffffff;">
    <h1>得点状況</h1>
    <div class="container">
        <table class="table">
            <tr>
                <td>全体</td>
                <td>{{ $areaAllRate }}%</td>
                <td>{{ $areaAllTotal }}/{{ $areaAllSet }}</td>
            </tr>
            <tr>
                <td>エリア甲</td>
                <td>{{ $areaKouRate }}%</td>
                <td>{{ $areaKouTotal }}/{{ $areaKouSet }}</td>
            </tr>
            <tr>
                <td>エリア乙</td>
                <td>{{ $areaOtsuRate }}%</td>
                <td>{{ $areaOtsuTotal }}/{{ $areaOtsuSet }}</td>
            </tr>
            <tr>
                <td>エリア丙</td>
                <td>{{ $areaHeiRate }}%</td>
                <td>{{ $areaHeiTotal }}/{{ $areaHeiSet }}</td>
            </tr>
            <tr>
                <td>エリア丁</td>
                <td>{{ $areaTeiRate }}%</td>
                <td>{{ $areaTeiTotal }}/{{ $areaTeiSet }}</td>
            </tr>
        </table>
    </div>
</div>
<div class='cotainer p-3 border rounded' style="background-color:#ffffff;">
    <h1>チームA</h1>
    <table class="table">
        <tr>
            <th class="align-middle">日付</th>
            <th class="align-middle">エリア甲</th>
            <th class="align-middle">エリア乙</th>
            <th class="align-middle">エリア丙</th>
            <th class="align-middle">エリア丁</th>
            <th class="align-middle">計</th>
            <th class="align-middle" colspan="2"><a class="btn btn-outline-primary mx-auto d-block" style="width: 55%;" href="{{ route('new', ['teamName' => 'A']) }}">登録</a></th>
        </tr>
        @foreach($a_data as $a)
        <tr>
            <td class="align-middle">{{ $a->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $a->areaKou }}</td>
            <td class="align-middle">{{ $a->areaOtsu }}</td>
            <td class="align-middle">{{ $a->areaHei }}</td>
            <td class="align-middle">{{ $a->areaTei }}</td>
            <td class="align-middle">{{ $a->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('edit', ['id'=>$a->id]) }}">編集</a></td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('delete', ['id'=>$a->id]) }}">削除</a></td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 30%;" href="{{ route('more', ['teamName'=> 'A']) }}">もっと見る</a>
</div>
<div class='cotainer p-3 mt-3 border rounded' style="background-color:#ffffff;">
    <h1>チームB</h1>
    <table class="table">
        <tr>
            <th class="align-middle">日付</th>
            <th class="align-middle">エリア甲</th>
            <th class="align-middle">エリア乙</th>
            <th class="align-middle">エリア丙</th>
            <th class="align-middle">エリア丁</th>
            <th class="align-middle">計</th>
            <th class="align-middle" colspan="2"><a class="btn btn-outline-primary mx-auto d-block" style="width: 55%;" href="{{ route('new', ['teamName' => 'B']) }}">登録</a></th>
        </tr>
        @foreach($b_data as $b)
        <tr>
            <td class="align-middle">{{ $b->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $b->areaKou }}</td>
            <td class="align-middle">{{ $b->areaOtsu }}</td>
            <td class="align-middle">{{ $b->areaHei }}</td>
            <td class="align-middle">{{ $b->areaTei }}</td>
            <td class="align-middle">{{ $b->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('edit', ['id'=>$b->id]) }}">編集</td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('delete', ['id'=>$b->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 30%;" href="{{ route('more', ['teamName'=> 'B']) }}">もっと見る</a>
</div>
<div class='cotainer p-3 mt-3 border rounded' style="background-color:#ffffff;">
    <h1>チームC</h1>
    <table class="table">
        <tr>
            <th class="align-middle">日付</th>
            <th class="align-middle">エリア甲</th>
            <th class="align-middle">エリア乙</th>
            <th class="align-middle">エリア丙</th>
            <th class="align-middle">エリア丁</th>
            <th class="align-middle">計</th>
            <th class="align-middle" colspan="2"><a class="btn btn-outline-primary mx-auto d-block" style="width: 55%;" href="{{ route('new', ['teamName' => 'C']) }}">登録</a></th>
        </tr>
        @foreach($c_data as $c)
        <tr>
            <td class="align-middle">{{ $c->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $c->areaKou }}</td>
            <td class="align-middle">{{ $c->areaOtsu }}</td>
            <td class="align-middle">{{ $c->areaHei }}</td>
            <td class="align-middle">{{ $c->areaTei }}</td>
            <td class="align-middle">{{ $c->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('edit', ['id'=>$c->id]) }}">編集</td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('delete', ['id'=>$c->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 30%;" href="{{ route('more', ['teamName'=> 'C']) }}">もっと見る</a>
</div>
<div class='cotainer p-3 my-3 border rounded' style="background-color:#ffffff;">
    <h1>チームD</h1>
    <table class="table">
        <tr>
            <th class="align-middle">日付</th>
            <th class="align-middle">エリア甲</th>
            <th class="align-middle">エリア乙</th>
            <th class="align-middle">エリア丙</th>
            <th class="align-middle">エリア丁</th>
            <th class="align-middle">計</th>
            <th class="align-middle" colspan="2"><a class="btn btn-outline-primary mx-auto d-block" style="width: 55%;" href="{{ route('new', ['teamName' => 'D']) }}">登録</a></th>
        </tr>
        @foreach($d_data as $d)
        <tr>
            <td class="align-middle">{{ $d->date->format('Y/m/d') }}</td>
            <td class="align-middle">{{ $d->areaKou }}</td>
            <td class="align-middle">{{ $d->areaOtsu }}</td>
            <td class="align-middle">{{ $d->areaHei }}</td>
            <td class="align-middle">{{ $d->areaTei }}</td>
            <td class="align-middle">{{ $d->sum }}</td>
            <td class="align-middle"><a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('edit', ['id'=>$d->id]) }}">編集</td>
            <td class="align-middle"><a class="btn btn-outline-danger btn-sm mx-auto d-block" style="width: 90%;" href="{{ route('delete', ['id'=>$d->id]) }}">削除</td>
        </tr> 
        @endforeach
    </table>
    <a class="btn btn-outline-dark btn-sm mx-auto d-block" style="width: 30%;" href="{{ route('more', ['teamName'=> 'D']) }}">もっと見る</a>
</div>
@endsection