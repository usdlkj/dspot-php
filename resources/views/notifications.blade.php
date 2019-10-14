{{--<div class="msg msg-error z-depth-3 scale-transition"> Error Message </div>
<div class="msg msg-info z-depth-3">Info Message</div>
<div class="msg msg-alert z-depth-3">Alert Message</div>
<div class="msg z-depth-3">Basic Message</div>--}}


@if ($errors->any())
    <div class="msg msg-error z-depth-3 scale-transition">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
        <strong>Error:</strong> Please check the form below for errors
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="msg msg-success z-depth-3 scale-transition">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
        <strong>Success:</strong> {{ $message }}
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="msg msg-error z-depth-3 scale-transition">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
        <strong>Error:</strong> {{ $message }}
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="msg msg-alert z-depth-3 scale-transition">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
        <strong>Warning:</strong> {{ $message }}
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="msg msg-info z-depth-3 scale-transition">
{{--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
        <strong>Info:</strong> {{ $message }}
    </div>
@endif
