<style>
.{{ $bgimageid }} {
    background: url({{ $image }}) no-repeat center center;
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    color: white;
}
.btn-circle {
    border-radius: 2rem !important;
}
</style>
<div class="container-fluid p-0 {{ $bgimageid }}">
    <div class="container-fluid px-0">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <img src="/images/gazifikaciya-3/gazifikaciya-logo.png" class="img-fluid">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            {{ $domen }}<br>
                            {{ $descriptor }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    {{ $phone }}<br>
                    {{ $email or "" }}
                    {{ $address or "" }}
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <h1 class="h2 russo text-center">
            {{ $heading }}
        </h1>
    </div>
    <div class="container pb-5">
        <h2 class="h2 russo text-center">
            {{ $subheading }}
        </h2>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 offset-xl-2 offset-lg-2 text-center">
                <a href="#request" class="btn btn-primary  btn-circle">Бесплатный расчет сметы</a>
            </div>
        </div>
    </div>
</div>
