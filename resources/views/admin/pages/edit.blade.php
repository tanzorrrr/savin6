@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
        @slot('title') Редактированье записи @endslot
        @slot('parent') Главная @endslot
        @slot('active') записи @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.page.update',$page)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.pages.partials.form')
            <input type="hidden" name="modifined_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection