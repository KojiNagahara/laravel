@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">新規カテゴリー作成</div>

                    <div class="card-body">
                        <form method="POST" action="/category" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">カテゴリ名</label>
                                <input type="text" name="name" placeholder="カテゴリ名" class="col-md-8">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">追加</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
