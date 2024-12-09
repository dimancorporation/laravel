@extends('layouts.app')

@section('title', 'Мое Дело')

@section('content')
    <div class="limiter" style="">
        <div class="container-login100">
            <div class="wrap-login100" style="margin:0;border-radius:0;">
                <div class="text-center"><h5 style="color: white;padding-top: 50px;"><b> Тест сделка демонстрация</b></h5><br></div>
                <div style="display: none;" id="message" class="leaflet p-b-20">
                    <div class="text-center">
                        <div class="check-message"><h5 style="color: white;"><b></b></h5></div>
                    </div>
                </div>
                <div class="img-logo">
                    <img width="150" src="{{asset('images/logo_bank2.png')}}">
                </div>
                <div class="grid-box-business">
                    <div class="grid-container-business">
                        <div class="leaflet p-b-20">
                            <div class="text-center p-b-20">
                                <h2 style="color: white">Мое дело</h2>
                            </div>

                            <div class="size-table">
                                <div class="container-table">

                                    <table class="table-payments">
                                        <tbody>
                                        <tr>
                                            <td>Мое дело находится в стадии:</td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="check-payment" data-title="подробнее о статусах...">
                                                        <a class="txt3" href="/status-description"> Сбор
                                                            документов</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Посмотреть в Арбитражном суде:</td>
                                            <td>
                                                <div class="text-center">
                                                    <div class="check-payment">
                                                        <a class="txt3" href="">Арбитражный суд</a></div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="leaflet p-b-20">
                            <div class="text-center p-b-20">
                                <h2 style="color: white">Мои оплаты</h2>
                            </div>
                            <div class="size-table">
                                <div class="container-table">

                                    <table class="table-payments">
                                        <tbody>
                                        <tr>
                                            <td>Договор на сумму:</td>
                                            <td>
                                                <div class="check-payment" style="background: #0E3F72;">
                                                    <a class="txt3">150000 руб</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Оплачено на текущий момент:</td>
                                            <td>
                                                <div class="check-payment" data-title="посмотреть мои оплаты">
                                                    <a class="txt3" href="/payment">10000 руб</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Остаток по договору:</td>
                                            <td>
                                                <div class="check-payment" style="background: #0E3F72;">
                                                    <a class="txt3">140000 руб</a></div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <center>
                <div class="text-center p-t-50">
                    <h2 style="color: #0F3F73;">Процесс выполнения</h2>
                </div>
                <div class="container-progress">
                    <div class="progress progress-striped">
                        <div class="progress-bar" style="width: 64%; animation: progressAnimationStrike38 6s;"><p>
                                64%</p></div>
                    </div>
                </div>

                <div class="grid-box">
                    <div class="grid-container">
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status02.png')}}" alt="file">
                            <!-- <p>Запрос БКИ</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status03.png')}}" alt="file">
                            <!-- <p>Запрос ОКБ</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status04.png')}}" alt="file">
                            <!-- <p>Запрос РС</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status05.png')}}" alt="file">
                            <!-- <p>Скоринг бюро</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status06.png')}}" alt="file">
                            <!-- <p>Запрос ФНС</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status07.png')}}" alt="file">
                            <!-- <p> Запрос в ЕГРН</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status08.png')}}" alt="file">
                            <!-- <p>Запрос недвижимость</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status09.png')}}" alt="file">
                            <!-- <p>Запрос ГИБДД</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status10.png')}}" alt="file">
                            <!-- <p>Запрос ГиМС</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status11.png')}}" alt="file">
                            <!-- <p>Запрос Россгвардия</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status12.png')}}" alt="file">
                            <!-- <p>Запрос Ростехнадзор</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status13.png')}}"
                                 alt="file">                            <!-- <p>Уведомление кредиторов</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status14.png')}}"
                                 alt="file">                            <!-- <p>Подготовка Искового Заявления</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status15.png')}}"
                                 alt="file">                            <!-- <p>Подготовка Списока кредиторов</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status16.png')}}"
                                 alt="file">                            <!-- <p>Подготовка Описи имущества</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status17.png')}}" alt="file">
                            <!-- <p>Подготовка приложений к заявлению</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status18.png')}}"
                                 alt="file">                            <!-- <p>Выписки по лицевым счетам</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status19.png')}}"
                                 alt="file">                            <!-- <p>Отправка Заявления в суд</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status20.png')}}" alt="file">
                            <!-- <p>Заседание в АС</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status21.png')}}"
                                 alt="file">                            <!-- <p>Ознакомление состояния дела в АС</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status22.png')}}"
                                 alt="file">
                            <!-- <p>Выбор способа получения прожиточного минимума</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status23.png')}}"
                                 alt="file">                            <!-- <p>Контроль состояния дела в АС</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status24.png')}}"
                                 alt="file">                            <!-- <p>Завершение процесса в суде</p> -->
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status25.png')}}"
                                 alt="file">                            <!-- <p>Освобождение от долгов</p> -->
                        </div>
                    </div>
                </div>
                <br><br>
                <a class="txt4" style="color: #0F3F73" href="/offer-agreement">Договор оферты</a>
                <!-- <a class="txt4" style="color: #0F3F73" href="https://bankrotoff-oplata.ru/offerta">Договор оферты</a> -->

            </center>
            <!-- <div class="text-center">

            </div> -->
        </div>
    </div>
    <div class="message-container-place" id="message-container" style="padding-top:100px;"></div>
@endsection
