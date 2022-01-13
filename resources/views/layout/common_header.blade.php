<div class="row header">
    <div id="sidemenu-btn" class="col-2">menu</div>
    <div class="col-2"></div>
</div>

<div id="sidemenu" style="display:none">
    <ul class="list-unstyled mt-4">
        @foreach($menu as $m)
        <a href="{{ $m['href'] }}"><li class="">{{ $m['title']}}</li></a>
        @endforeach
    </ul>
</div>

<script type="text/javascript">
    $('#sidemenu-btn').on('click', function(){
        $('#sidemenu').toggle()
    })
</script>