@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('components.breadcrumb')
            @slot('title') Edit military unit @endslot
            @slot('parent') Admin panel @endslot
            @slot('active') Edit military unit @endslot
        @endcomponent
        <form action="{{route('admin.military-unit.update', $militaryUnit)}}" method="post">
            {{csrf_field()}}
            {{method_field('put')}}
            @include('admin.military-units.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
