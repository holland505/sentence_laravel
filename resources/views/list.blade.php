@extends('layouts.app')

@section('content')
<div class="row">
<!--
    <div class="col-12">
        <div class="card bg-gray">
            <h5 class="card-header bg-green font-weight-normal">Question</h5>
            <div class="card-body" id="sentence">
                <p class="card-title h3">I <span class="question-blank px-2">　　　</span> finished the project I've been
                    working on. </p>
                <div class="separator"></div>
                <p class="card-text mt-2 h5">私は、取り組んでいたプロジェクトをやっと完成させた。</p>
            </div>
            <div class="card-body" id="choice">
                <a href="#" class="btn btn-choice btn-sm">finally</a>
                <a href="#" class="btn btn-choice btn-sm">eventually</a>
                <a href="#" class="btn btn-choice btn-sm">finally</a>
                <a href="#" class="btn btn-choice btn-sm">finally</a>
            </div>
        </div>
        <div class="card bg-gray mt-4">
            <h5 class="card-header bg-green font-weight-normal">Answer</h5>
            <div class="card-body" id="sentence">
                <p class="card-title h3">I <span class="answer-blank px-2">finally</span> finished the project I've been
                    working on. </p>
                <div class="separator"></div>
                <p class="card-text mt-2 h5">私は、取り組んでいたプロジェクトをやっと完成させた。</p>
            </div>
            <div class="card-body" id="choice">
                <a href="#" class="btn btn-choice btn-sm">finally</a>
                <a href="#" class="btn btn-choice btn-sm">eventually</a>
                <a href="#" class="btn btn-choice btn-sm">finally</a>
                <a href="#" class="btn btn-choice btn-sm">finally</a>
            </div>
        </div>
    </div>
-->

    @foreach($items as $item)
    <div class="col-12">
        <div class="card bg-gray">
            <h5 class="card-header bg-green font-weight-normal">Question</h5>
            <div class="card-body" id="sentence">
                <p class="card-title h3">{{$item->sentence}}</p>
                <div class="separator"></div>
                <p class="card-text mt-2 h5">{{$item->translation}}</p>
            </div>
            <div class="card-body" id="choice">
                <a href="#" class="btn btn-choice btn-sm">{{$item->word}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!--
<div class="row">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">translation</th>
                <th scope="col">sentence</th>
                <th scope="col">word</th>
                <th scope="col">class1</th>
                <th scope="col">translate1</th>
                <th scope="col">class2</th>
                <th scope="col">translate2</th>
                <th scope="col">level</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>

            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->translation}}</td>
                <td>{{$item->sentence}}</td>
                <td>{{$item->word}}</td>
                <td>{{$item->class1}}</td>
                <td>{{$item->translate1}}</td>
                <td>{{$item->class2}}</td>
                <td>{{$item->translate2}}</td>
                <td>{{$item->level}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
            </tr>
            @endforeach
    </table>
</div>
@endsection
-->