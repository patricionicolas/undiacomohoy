<!-- Mensaje de info -->
@if ($message = Session::get('info'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Mensaje de error -->
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
