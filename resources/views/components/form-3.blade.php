<style>
.{{ $bgimageid }} {
    background: url({{ $image }}) no-repeat center center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
</style>
<div class="container-fluid py-5 {{ $bgimageid }}" id="request">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-xs-12 offset-xl-3 offset-lg-3 offset-md-2">
                <div class="mb-0">
                    <h4 class="pb-3 russo">
                        {{ $title }}
                    </h4>
                    <form action="/orders" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_url" value="{{ $source }}">
                        <input type="hidden" name="type" value="Order from lp">
                        <div class="form-group {{ !empty($errors->orders->first('email')) ? 'has-danger' : ''}} {{ !empty(old('email')) ? 'has-success' : ''}}">
                            <input type="email" class="form-control btn-circle {{ !empty($errors->orders->first('email')) ? 'form-control-danger' : ''}} {{ !empty(old('email')) ? 'form-control-success' : ''}}" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group {{ !empty($errors->orders->first('phone')) ? 'has-danger' : ''}} {{ !empty(old('phone')) ? 'has-success' : ''}}">
                            <input type="phone" class="form-control btn-circle {{ !empty($errors->orders->first('phone')) ? 'form-control-danger' : ''}} {{ !empty(old('phone')) ? 'form-control-success' : ''}}" id="phone" placeholder="Телефон" name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control btn-circle" id="comment" placeholder="Комментарий (по желанию)" name="comment" value="{{ old('comment') }}" rows="1"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-circle" onclick="yaCounter42033909.reachGoal('OrderByPhone'); return true;"><span class="fa fa-fw fa-paper-plane" aria-hidden="true"></span>&nbsp;{{ $calltoaction }}</button>
                    </form>
                    <div class="small pt-3">
                        {{ $explanations }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row small">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {{ $jurist }}
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-left">
                <div class="hidden-md-up">
                    <br>
                </div>
                {{ $contacts }}
            </div>
        </div>
    </div>
</div>
