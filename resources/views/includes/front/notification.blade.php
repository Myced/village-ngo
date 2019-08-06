<script type="text/javascript">

//function for notty js
function notify(text, type){

    var mytext = "<strong>" + text + "</strong>";

    new Noty({
       type: type,
       layout: 'topRight',
       text: mytext,
       timeout: 5000,
       modal: false,
       theme : "nest",
       animation: {
         open: " animated bounceInRight ",
         close: "animated bounceOutRight"
       }
     }).show()
}

@if($flash = session('success'))
    notify("{{ $flash }}", 'success')
@endif

@if($flash = session('primary'))
    notify("{{ $flash }}",'primary')
@endif

@if($flash = session('warning'))
    notify("{{ $flash }}", 'warning')
@endif

@if($flash = session('danger'))
    notify("{{ $flash }}", 'error')
@endif

@if($flash = session('error'))
    notify("{{ $flash }}", 'error')
@endif

@if($flash = session('info'))
    notify("{{ $flash }}", 'info')
@endif

@if(isset($errors))
    @foreach($errors->all() as $error)
        notify("{{ $error }}", 'error')
    @endforeach
@endif
</script>
