@extends('layouts.app')

@section('title', 'Описание статусов')

@section('content')
    <div class="limiter p-b-50">
        <div class="container-login100">
            <div class="wrap-big text-center">
                <br>
                <div class="text-center p-b-20">
                    <h2 class="white-text">Подробная расшифровка статусов</h2>
                </div>
                <div class="wrap-video">
                    <video autoplay="" controls="">
                        <source src="{{asset('video/status_desc_video.mp4')}}" type="video/mp4">
                        Ошибка загрузки видео!!!
                    </video>
                    <br><br>
                </div>
            </div>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Договор неактивен</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> - статус означает что ваш договор на текущий момент не передан в исполнение.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Правовой анализ</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> - статус означает что ваше дело было принято Юристом в работу.
                            Наш юрист создает стратегию по вашему делу. Производит анализ Анкеты, заполненную в вашем
                            присутствии в нашем офисе.
                            В зависимости от сложности дела количество и доступность документов, сделка может находиться
                            в данной стадии до 1 недели.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Запросы БКИ</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> - статус означает, что в отношении вас было подготовлено и направлено заявление в ЦБ РФ
                            о предоставлении перечня БКИ для предоставления информации по вашим кредитам (долгам).
                            Дело может находиться в данной стадии до 20 дней в зависимости от работы ведомств.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Поиск имущества и сделок </p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> – статус означает, что наши юристы проверяют все данные по вашему имуществу,
                            путем запросов информации из соответствующих ведомств.
                            Срок нахождения в данной стадии до 30 дней.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Реестр документов</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> – статус означает, наши юристы получили ответы по вашему имуществу и сделкам,
                            а так же по всем вашим долгам. Формируют итоговый список документов. Срок нахождения в
                            данной стадии до 30 дней.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Сбор документов</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p>– статус означает, на этом этапе происходит отправка запросов в Государственные органы
                            (ГиБДД, ГиМС, РосГвардия, ГосТехНадзор и т.д.) Максимальный срок нахождения на данном этапе
                            до 65 дней,
                            зависит от ведомств и наличия документов у клиента.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Готов на подачу в АС</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> -наши юристы получили все необходимые ответы из ведомств и сейчас формируют пакет документов
                            для подачи в
                            Арбитражный суд. Срок нахождения в данной стадии зависит от оплат клиентом и наличия
                            документов, в среднем до 30 дней.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">

                        <div class="description-status">
                            <p class="txt3">Введение процедуры БФЛ</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> – наши юристы подали заявление в Арбитражный суд, ожидаем даты назначения первого заседания
                            в суде.
                            Срок нахождения на данном этапе до 30 дней, зависит от загруженности Арбитражного суда.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">

                        <div class="description-status">
                            <p class="txt3">Судебный процесс</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> - основной этап, судебного процесса в Арбитражном суде. Информацию по прохождению дела
                            можете
                            получить на странице «Мое дело», нажав на кнопку Арбитражный суд. Срок нахождения в данной
                            стадии
                            до предположительного окончания судебного процесса.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Завершение суда</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> – На данном этапе наши юристы готовятся к окончанию судебного процесса.
                            Срок нахождения до завершения судебного процесса.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="wrap-description-status">
                <div class="leaflet">
                    <div class="leafletimage text-center">
                        <div class="description-status">
                            <p class="txt3">Списание долга</p>
                        </div>
                    </div>
                    <div class="leafletdescription">
                        <p> - Судебное заседание по делу завершено. На данном этапе происходит проверка данных,
                            а также проверка возможных апелляционных жалоб от кредиторов. Срок на данном этапе 14
                            дней.</p>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
@endsection
