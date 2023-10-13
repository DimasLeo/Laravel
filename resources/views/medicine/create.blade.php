@extends('layouts.template')

@section('content')
<form action="{{ route('medicine.store') }}" method="post" class="card p-5">
    @csrf

    @if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $errors)
                <li>{{ $erros }}</li>
            @endforeach
        </ul>
    @endif
        
<div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Name Madicine : </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name">
    </div>
</div>
<div class="mb-3 row">
    <label for="type" class="col-sm-2 col-form-label">Type of Medicine : </label>
    <div class="col-sm-10">
        <select name="type" id="type" class="form-select">
            <option selected disabled hidden>Choose :</option>
            <option value="tablet">Tablet</option>
            <option value="sirup">Syrup</option>
            <option value="kapsul">Capsules</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label for="price" class="col-sm-2 col-form-label">Medicine Price : </label>
    <div class="col-sm-10">
        <input type="number" name="price" id="price" class="form-control">
    </div>
</div>
<div class="mb-3 row">
    <label for="stock" class="col-sm-2 col-form-label">Stock Available : </label>
    <div class="col-sm-10">
        <input type="number" name="stock" id="stock" class="form-control">
    </div>
</div>
<button type="submit" class="btn btn-outline-warning mt-3">Add Data</button>
</form>
@endsection