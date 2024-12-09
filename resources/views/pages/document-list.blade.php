@extends('layouts.app')

@section('title', 'Список документов')

@section('content')
    <div class="limiter" style="padding-top: 100px;">
        <div class="container-article">
            <div class="wrap-article">
                <div class="text-center p-b-20">
                    <h2 class="title-documents">Список необходимых документов</h2>
                </div>
                <div class="size-table">
                    <div class="container-table">
                        <table class="document-list">
                            <tbody>
                            <tr>
                                <td><label for="doc1">Паспорт (все страницы)</label></td>
                                <td><input id="doc1" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc2">ПТС</label></td>
                                <td><input id="doc2" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc3"></label>Скан ИНН</td>
                                <td><input id="doc3" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc4"></label>Скан СНИЛСа</td>
                                <td><input id="doc4" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc5"></label>Скан свид. о заключении брака (если клиент в браке).</td>
                                <td><input id="doc5" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc6"></label>Скан СНИЛСа в отношении супруга(и).</td>
                                <td><input id="doc6" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc7"></label>Скан. свид. о расторжении брака (если брак ранее
                                    расторгался).
                                </td>
                                <td><input id="doc7" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc8"></label>Скан 2-НДФЛ за последние 3 года (если клиент раб.
                                    официально).
                                </td>
                                <td><input id="doc8" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc9"></label>Скан свид. о рождении детей (если у клиента есть иждивенцы
                                    до 18 лет).
                                </td>
                                <td><input id="doc9" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc10"></label>Скан выписки из ЕГРН недвижимости за последние 3 года по
                                    всей территории РФ.
                                </td>
                                <td><input id="doc10" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc11"></label>Скан ПТС (если у клиента в собственности есть движ.
                                    имущество)
                                </td>
                                <td><input id="doc11" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc12"></label>Скан СТС (если у клиента в собственности есть движ.
                                    имущество).
                                </td>
                                <td><input id="doc12" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc13"></label>Скан ПТС (если в собственности супруга(и) есть движимое
                                    имущество).
                                </td>
                                <td><input id="doc13" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc14"></label>Скан СТС (если в собственности супруга(и) есть движимое
                                    имущество).
                                </td>
                                <td><input id="doc14" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc15"></label>Скан ДКП (если клиент за последние 3 г. продавал движимое
                                    имущество).
                                </td>
                                <td><input id="doc15" type="checkbox" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="doc16"></label>Скан ДКП (если супруг(а) продавал(а) за последние 3 г.
                                    движимое имущество).
                                </td>
                                <td><input id="doc16" type="checkbox" disabled></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
