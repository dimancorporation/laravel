@extends('layouts.app')

@section('title', 'Мое Дело')

@section('content')
    <div class="limiter my-deal p-b-50 @if($userStatus === 'Должник')debtor @endif">
        @if($userStatus === 'Должник')
            <div class="container-article">
                <div class="debtor-msg">
                    <div class="text-center p-b-20">
                        <h2>Внимание!!!</h2>
                    </div>
                    <div class="p-l-12 p-r-12 p-b-30 text-center">
                        <div class="f-w">
                            Сбой графика платежей, обратитесь к менеджеру для уточнения деталей.
                        </div>
                        <div>Для связи с менеджером позвоните по телефону: +7 (983) 137 97-70</div>
                        <div>Или напишете в whatsapp:</div>
                        <div class="wrap-phone">
                            <div class="check-payment">
                                <a class="txt3" style="color: #0F3F73;" href="https://wa.me/79612276997">+7 (961) 227
                                    69-97</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="text-center">
                        <h5 class="white-text">
                            <b>{{$userFullName}}</b>
                        </h5>
                        <br>
                    </div>
                    @if($userComment)
                        <div id="message" class="leaflet p-b-20">
                            <div class="text-center">
                                <div class="check-message">
                                    <h5 class="white-text">
                                        <b>{{$userComment}}</b>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endif
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
                                                            <a class="txt3" href="/status-description">@if($b24Status){{$b24Status}}@elseДоговор неактивен@endif</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Посмотреть в Арбитражном суде:</td>
                                                <td>
                                                    <div class="text-center">
                                                        <div class="check-payment">
                                                            <a class="txt3" href="{{$linkToCourt}}">Арбитражный суд</a>
                                                        </div>
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
                                                        <a class="txt3">@if($sumContract) {{$sumContract}} @else 0 @endifруб</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Оплачено на текущий момент:</td>
                                                <td>
                                                    <div class="check-payment" data-title="посмотреть мои оплаты">
                                                        <a class="txt3" href="/payment">@if($sumOpportunity) {{$sumOpportunity}} @else 0 @endifруб</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Остаток по договору:</td>
                                                <td>
                                                    <div class="check-payment bg-payment">
                                                        <a class="txt3">{{$remainder}} руб</a></div>
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
                            <div class="progress-bar" style="width: {{$progressBarStyle}}; animation: {{$progressBarAnimation}};">
                                <p>
                                    {{$progressBarText}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-box">
                        <div class="grid-container">
                            @foreach ($images as $elem)
                                <div>
                                    {!! $elem !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br><br>
                    <a class="txt4 offer-agreement" href="/offer-agreement">Договор оферты</a>
                </div>
            </div>
        @endif
    </div>
    <div class="message-container-place" id="message-container"></div>
@endsection
