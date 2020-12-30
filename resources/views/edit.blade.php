@extends('layouts.base')
@section('title', 'データの編集')
@section('main')
<div class='cotainer p-3 border rounded' style="background-color:#ffffff;">
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $err)
            <li class="text-danger">{{ $err }}</li>
            @endforeach
        </ul>
    @endif
    <h1>データの編集</h1>
    <form method="POST" action="{{ route('update', ['id' => $data->id]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="date">日付</label>
            <td><input type="text" class="form-control" name="date" value="{{ old('date', $data->date->format('Y/m/d')) }}" readonly /></td>
        </div>
        <div class="form-group">
            <label for="areaKou">エリア甲</label>
            <td><input type="text" class="form-control" name="areaKou" value="{{ old('areaKou', $data->areaKou) }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaOtsu">エリア乙</label>
            <td><input type="text" class="form-control" name="areaOtsu" value="{{ old('areaOtsu', $data->areaOtsu) }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaHei">エリア丙</label>
            <td><input type="text" class="form-control" name="areaHei" value="{{ old('areaHei', $data->areaHei) }}" /></td>
        </div>
        <div class="form-group">
            <label for="areaTei">エリア丁</label>
            <td><input type="text" class="form-control" name="areaTei" value="{{ old('areaTei', $data->areaTei) }}" /></td>
        </div>
        <input class="btn btn-outline-primary" type="submit" value="更新" />
    </form>
</div>
@endsection