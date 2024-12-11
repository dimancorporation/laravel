@extends('layouts.app')

@section('title', 'Мое Дело')

@section('content')
    <div class="limiter my-deal p-b-50">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="text-center">
                    <h5 class="white-text">
                        <b>Тест сделка демонстрация</b>
                    </h5>
                    <br>
                </div>
                <div id="message" class="leaflet p-b-20 d-none">
                    <div class="text-center">
                        <div class="check-message"><h5 class="white-text"><b></b></h5></div>
                    </div>
                </div>
                <div class="img-logo">
                    <img width="150" src="{{asset('images/logo_bank2.png')}}" alt="">
                </div>
                <div class="grid-box-business">
                    <div class="grid-container-business">
                        <div class="leaflet p-b-20">
                            <div class="text-center p-b-20">
                                <h2 class="white-text">Мое дело</h2>
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
                                <h2 class="white-text">Мои оплаты</h2>
                            </div>
                            <div class="size-table">
                                <div class="container-table">
                                    <table class="table-payments">
                                        <tbody>
                                        <tr>
                                            <td>Договор на сумму:</td>
                                            <td>
                                                <div class="check-payment bg-payment">
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
                                                <div class="check-payment bg-payment">
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
            <div class="text-center">
                <div class="text-center p-t-50">
                    <h2 class="title-progress-bar">Процесс выполнения</h2>
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
                                 src="{{asset('images/my-deal-statuses/not_completed/status02.png')}}" alt="Запрос БКИ">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status03.png')}}" alt="Запрос ОКБ">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status04.png')}}" alt="Запрос РС">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status05.png')}}" alt="Скоринг бюро">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status06.png')}}" alt="Запрос ФН">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status07.png')}}" alt="Запрос в ЕГРН">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status08.png')}}" alt="Запрос недвижимость">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status09.png')}}" alt="Запрос ГИБДД">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status10.png')}}" alt="Запрос ГиМС">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status11.png')}}" alt="Запрос Россгвардия">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status12.png')}}" alt="Запрос Ростехнадзор">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status13.png')}}"
                                 alt="Уведомление кредиторов">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status14.png')}}"
                                 alt="Подготовка Искового Заявления">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status15.png')}}"
                                 alt="Подготовка Списока кредиторов">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status16.png')}}"
                                 alt="Подготовка Описи имущества">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status17.png')}}" alt="Подготовка приложений к заявлению">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status18.png')}}"
                                 alt="Выписки по лицевым счетам">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status19.png')}}"
                                 alt="Отправка Заявления в суд">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status20.png')}}" alt="Заседание в АС">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status21.png')}}"
                                 alt="Ознакомление состояния дела в АС">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status22.png')}}"
                                 alt="Выбор способа получения прожиточного минимума">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status23.png')}}"
                                 alt="Контроль состояния дела в АС">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status24.png')}}"
                                 alt="Завершение процесса в суде">
                        </div>
                        <div>
                            <img width="150" height="200"
                                 src="{{asset('images/my-deal-statuses/not_completed/status25.png')}}"
                                 alt="Освобождение от долгов">
                        </div>
                    </div>
                </div>
                <br><br>
                <a class="txt4 offer-agreement" href="/offer-agreement">Договор оферты</a>
            </div>
        </div>
    </div>
    <div class="message-container-place" id="message-container"></div>
@endsection
