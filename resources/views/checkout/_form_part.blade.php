<div class="login-block login-block-signup">

    <div class="h4">Formulaire
         {{--<a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a>--}}
    </div>

    <hr/>
    <form class="myForm" style="display:none;">
        <div class="row">

            @include('checkout._form_normal')
            @include('checkout._form_banque')
            @include('checkout._form_direct')
            
            <div class="col-md-12">
                <hr/>
                <span class="checkbox">
                    <input type="checkbox" id="checkBoxId1">
                <label for="checkBoxId1">
                    I have read and accepted the 
                    <a target="_blank" href="{{route('terms')}}">terms</a>
                </label>
                </span>
                <span class="checkbox">
                    <input type="checkbox" id="checkBoxId2">
                    <label for="checkBoxId2">Subscribe to exciting newsletters and great tips</label>
                </span>
                <hr />
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-main btn-block">Create account</button>
            </div>

        </div>
    </form>
</div> 