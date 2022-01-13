<div class="row header">
    <div class="col-2">menu</div>
    <div class="col-2"></div>
</div>

<div id="sidemenu">
    <ul class="list-unstyled mt-4">
        @foreach($menu as $m)
        <a href="/"><li class="">{{ $m['title']}}</li></a>
        @endforeach
    </ul>
</div>