

@if(Session('postuploaded')) 
    <div class="alert alert-success">
    {{session('postuploaded')}}
    </div>
@endif  




@if(Session('errormsg')) 
    <div class="alert alert-success">
    {{session('errormsg')}}
    </div>
@endif  