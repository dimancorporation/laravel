@extends('layouts.app')

@section('title', 'Мои оплаты')

@section('content')
    <div class="limiter my-payments">
        <div class="container-article">
            <div class="wrap-article">
                <div class="text-center p-b-20">
                    <h2>Мои оплаты</h2>
                </div>
                <br>
                <div class="size-table">
                    <div class="container-table">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Номер счета</th>
                                <th>Дата платежа</th>
                                <th>Сумма</th>
                            </tr>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment['b24_id'] }}</td>
                                    <td>{{ $payment['close_date'] }}</td>
                                    <td>{{ $payment['opportunity'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <center>
                    <div class="container-login100-form-btn" style="width: 30%;">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                <a style="color: white;" href="lk_my_business.php">
                                    Назад
                                </a>
                            </button>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
@endsection
