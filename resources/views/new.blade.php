@extends('layouts.base')
@section('title', 'データの登録')
@section('main')
<div  class='cotainer p-3 border rounded' style="background-color:#ffffff;">
    <h1>データの登録</h1>
    @if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $err)
        <li class="text-danger">{{ $err }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="form-group">
            <label for="teamName">チーム名</label>
            <td><input type="text" class="form-control" name="teamName" value="{{ old($teamName, $teamName) }}" /></td>
        </div>
        <div class="form-group">
            <label for="date">日付</label>
            <td><input type="date" class="form-control" name="date" value="{{ old('date') }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaKou">エリア甲</label>
            <td><input type="text" class="form-control" name="areaKou" value="{{ old('areaKou') }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaOtsu">エリア乙</label>
            <td><input type="text" class="form-control" name="areaOtsu" value="{{ old('areaOtsu') }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaHei">エリア丙</label>
            <td><input type="text" class="form-control" name="areaHei" value="{{ old('areaHei') }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaTei">エリア丁</label>
            <td><input type="text" class="form-control" name="areaTei" value="{{ old('areaTei') }}" /></td>
        </div>
        <input class="btn btn-outline-primary" type="submit" value="登録" />
    </form>
</div>
@endsection