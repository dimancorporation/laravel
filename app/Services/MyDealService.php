<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class MyDealService
{
    protected $statuses = [
        'Знакомство',
        'Правовой анализ',
        'Запросы БКИ',
        'Поиск имущества и сделок',
        'Реестр документов',
        'Сбор документов',
        'Готов на подачу в АС',
        'Введение процедуры БФЛ',
        'Судебный процесс',
        'Завершение суда',
        'Списание долга',
        'Должник'
    ];

    protected $progressStyles = [
        500 => ['width' => '0', 'animation' => 'progressAnimationStrike0 6s', 'text' => '0%'],
        2 => ['width' => '16%', 'animation' => 'progressAnimationStrike10 6s', 'text' => '16%'],
        3 => ['width' => '32%', 'animation' => 'progressAnimationStrike23 6s', 'text' => '32%'],
        4 => ['width' => '48%', 'animation' => 'progressAnimationStrike23 6s', 'text' => '48%'],
        5 => ['width' => '64%', 'animation' => 'progressAnimationStrike38 6s', 'text' => '64%'],
        6 => ['width' => '70%', 'animation' => 'progressAnimationStrike58 6s', 'text' => '70%'],
        7 => ['width' => '75%', 'animation' => 'progressAnimationStrike73 6s', 'text' => '75%'],
        8 => ['width' => '80%', 'animation' => 'progressAnimationStrike85 6s', 'text' => '80%'],
        9 => ['width' => '95%', 'animation' => 'progressAnimationStrike95 6s', 'text' => '95%'],
        10 => ['width' => '100%', 'animation' => 'progressAnimationStrike100 6s', 'text' => '100%']
    ];

    public function getMyDealData(string $status2): array
    {
        $key = $this->findKeyByStatus($status2);

        $progressBarStyle = $this->getProgressBarStyle($key);
        $progressBarAnimation = $this->getProgressBarAnimation($key);
        $progressBarText = $this->getProgressBarText($key);

        $myDealData = [
            'userStatus' => $status2,
            'userComment' => 'Где деньги ёпта?!',
            'userFullName' => 'Тестовый Федор Иванович',
            'b24Status' => '', // например: Сбор документов, если пусто, то Договор неактивен
            'linkToCourt' => '', // ссылка на сайт арбитражного суда
            'sumContract' => '123456', // сумма по актуальным счетам
            'sumOpportunity' => '56789', // SUM(opportunity)
            'remainder' => 123456 - 56789, // остаток
            'progressBarStyle' => $progressBarStyle,
            'progressBarAnimation' => $progressBarAnimation,
            'progressBarText' => $progressBarText,
        ];

        $myDealData['images'] = $this->getImages($key);

        return $myDealData;
    }

    protected function findKeyByStatus(string $status2): int
    {
        $key = array_search($status2, $this->statuses);
        return $key !== false ? $key : 500;
    }

    protected function getProgressBarStyle(int $key): string
    {
        return $this->progressStyles[$key]['width'];
    }

    protected function getProgressBarAnimation(int $key): string
    {
        return $this->progressStyles[$key]['animation'];
    }

    protected function getProgressBarText(int $key): string
    {
        return $this->progressStyles[$key]['text'];
    }

    protected function getImages(int $key): array
    {
        $tasks = [
            ['Запрос БКИ', 'status02', 2],
            ['Запрос ОКБ', 'status03', 2],
            ['Запрос РС', 'status04', 2],
            ['Скоринг бюро', 'status05', 2],
            ['Запрос ФНС', 'status06', 3, 4],
            ['Запрос в ЕГРН', 'status07', 3, 4],
            ['Запрос недвижимость', 'status08', 3, 4],
            ['Запрос ГИБДД', 'status09', 5],
            ['Запрос ГиМС', 'status10', 5],
            ['Запрос Росгвардия', 'status11', 5],
            ['Запрос Ростехнадзор', 'status12', 5],
            ['Уведомление кредиторов', 'status13', 6],
            ['Подготовка Искового Заявления', 'status14', 6],
            ['Подготовка Списка кредиторов', 'status15', 6],
            ['Подготовка Описи имущества', 'status16', 6],
            ['Подготовка приложений к заявлению', 'status17', 6],
            ['Выписки по лицевым счетам', 'status18', 6],
            ['Отправка Заявления в суд', 'status19', 7],
            ['Заседание в АС', 'status20', 8],
            ['Ознакомление состояния дела в АС', 'status21', 8],
            ['Выбор способа получения', 'status22', 8],
            ['Контроль состояния дела в АС', 'status23', 8],
            ['Завершение процесса в суде', 'status24', 9],
            ['Освобождение от долгов', 'status25', 9]
        ];

        $imagePaths = [];
        foreach ($tasks as $task) {
            $alt = array_shift($task);
            $filename = array_shift($task);
            $thresholds = $task;
            if ($key < $thresholds[0] || $key == 500) {
                $imagePaths[] = Storage::url("public/images/my-deal-statuses/not_completed/$filename.png");
            } elseif (($thresholds[1] ?? $thresholds[0]) >= $key) {
                $imagePaths[] = Storage::url("public/images/my-deal-statuses/in_progress/$filename.png");
            } else {
                $imagePaths[] = Storage::url("public/images/my-deal-statuses/completed/$filename.png");
            }
        }

        return $imagePaths;
    }
}
