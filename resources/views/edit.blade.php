@extends('layouts.base')
@section('title', 'データの編集')
@section('main')
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
            <td><input type="date" class="form-control" name="date" value="{{ old('date', $data->date) }}" />
        </div>
        <div class="form-group">
            <label for="areaKou">エリア甲</label>
            <td><input type="text" class="form-control" name="areaKou" value="{{ old('areaKou', $data->areaKou) }}" />
        </div>
        <div class="form-group">
            <label for="areaOtsu">エリア乙</label>
            <td><input type="text" class="form-control" name="areaOtsu" value="{{ old('areaOtsu', $data->areaOtsu) }}" />
        </div>
        <div class="form-group">
            <label for="areaHei">エリア丙</label>
            <td><input type="text" class="form-control" name="areaHei" value="{{ old('areaHei', $data->areaHei) }}" />
        </div>
        <div class="form-group">
            <label for="areaTei">エリア丁</label>
            <td><input type="text" class="form-control" name="areaTei" value="{{ old('areaTei', $data->areaTei) }}" />
        </div>
        <input class="btn btn-outline-primary" type="submit" value="更新" />
    </form>
@endsection