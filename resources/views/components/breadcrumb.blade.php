<h2>{{$title}}</h2>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{$parent}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$active}}</li>
    </ol>
</nav>
