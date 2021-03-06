<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/lp.css">
        <title>
            Комплект женского белья Calvin Klein
        </title>
        <style>
            .bg-img {
                background: url("/files/belio/bg.jpg") no-repeat;
                background-size: cover;
            }
            .bg-overlay {
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                height: 100%;
                min-height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="bg-img">
            <div class="bg-overlay">
                <div class="container font">
                    <div class="row pt-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <span class="h2 text-uppercase font">
                                 Iga butik
                            </span><br>
                            <span class="descriptor">Интернет-магазин белья</span>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            <a href="tel:+79291168565" class="text-info a">+7 929 116 85 65</a><br>
                            <a href="mailto:info@genlid.com" class="text-info a">info@genlid.com</a>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                            <h1 class="text-center my-0 weight-700">
                                Комплект женского белья Calvin Klein <del>2500</del> 1500 рублей по промокоду KELVIN17
                            </h1>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                            <div class="my-0 text-center">
                                <p class="font bullets">
                                    Состоит из эко хлопка и резинка из эластана.<br>
                                    Сохраняет внешний вид после 100 стирок.<br>
                                    Бесплатная доставка курьером по Москве и СПб.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-8 col-lg-8">
                            <div class="embed-responsive embed-responsive-16by9 sw" id="video">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ppYGJTWINDU?rel=0&showinfo=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 offset-xl-0 offset-lg-0 offset-md-3">
                            <div class="container">
                                <div class="hidden-lg-up">
                                    <br>
                                </div>
                                <h3 class="px-0 pb-3 text-center weight-700">
                                    Промокод действует 1 час, оформите заказ сейчас
                                </h3>
                                <form action="/leads/belio-dostavka" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="">
                                            <input type="text" class="font black sw btn-circle form-control" id="address" placeholder="Адрес доставки" name="address" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="">
                                            <input type="text" class="font black sw btn-circle form-control" id="phone" placeholder="Телефон" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control font black sw btn-circle" id="size" name="size">
                                            <option>Размер</option>
                                            <option>S 42 (76-84 и 80-88)</option>
                                            <option>M 44 (84-90 и 90-96)</option>
                                            <option>L 46 (92-98 и 98-106)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control font black sw btn-circle" id="size" name="color">
                                            <option>Цвет</option>
                                            <option>Черные (Топ и Слипы)</option>
                                            <option>Серые (Топ и Слипы)</option>
                                            <option>Зеленый хаки (Топ и Слипы)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/button-widget?account=410013952996574&quickpay=small&any-card-payment-type=on&button-text=02&button-size=m&button-color=orange&targets=%D0%9A%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82+%D0%B1%D0%B5%D0%BB%D1%8C%D1%8F&default-sum=1500&successURL=http%3A%2F%2Fbelio-thanks.genlid.com" width="154" height="36"></iframe>
                                    </div>
                                </form>

                                <script src="http://megatimer.ru/s/0ab6a2f5adbf92840bdc80df8d8393bd.js"></script>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 pb-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                             © 2017 IGA BUTIK
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-xs-6 col-12 text-xl-right text-lg-right text-md-right text-sm-center text-center">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            <a href="tel:+79291168565" class="text-info a">+7 929 116 85 65</a><br>
                            <a href="mailto:info@genlid.com" class="text-info a">info@genlid.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("input").on("input", function () {
                var valueAttr = $(this).val();
                var nameAttr = $(this).attr("name");
                $.ajax({
                    type: "POST",
                    url: "/lead/input",
                    data: {namei: nameAttr, valuei: valueAttr, },
                    success: function(res) {
                        console.log(res);
                    }
                });
            });
            $("select").on("input", function () {
                var valueAttr = $(this).val();
                var nameAttr = $(this).attr("name");
                $.ajax({
                    type: "POST",
                    url: "/lead/input",
                    data: {namei: nameAttr, valuei: valueAttr, },
                    success: function(res) {
                        console.log(res);
                    }
                });
            });
        </script>
    </body>
</html>
