<?php

namespace App\Http\Controllers;

use App\Services\MyDealService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $myDealService;

    public function __construct(MyDealService $myDealService)
    {
        $this->myDealService = $myDealService;
    }

    public function myDeal()
    {
        $status2 = 'Готов на подачу в АС'; /* получаем статус из битрикс24 */
        $myDealData = $this->myDealService->getMyDealData($status2);
        return view('pages.my-deal', $myDealData);
    }

    public function statusDescription()
    {
        return view('pages.status-description');
    }

    public function documentList()
    {
        /*
        #делаем запрос к апихе битрикса через crest
        $arResult = crest::call("crm.deal.list", [
            "filter" => ["CONTACT_ID" => $_SESSION["b24_id"]]
        ]);
         */
        $documentList = [
            'PASSPORT_ALL_PAGES' => true,
            'PTS' => false,
            'SCAN_INN' => false,
            'SNILS' => true,
            'MARRIAGE_CERTIFICATE' => true,
            'SNILS_SPOUSE' => true,
            'DIVORCE_CERTIFICATE' => false,
            'NDFL' => true,
            'CHILDRENS_BIRTH_CERTIFICATE' => true,
            'EXTRACT_EGRN' => true,
            'SCAN_PTS' => false,
            'STS' => true,
            'PTS_SPOUSE' => false,
            'STS_SPOUSE' => true,
            'DKP' => true,
            'DKP_SPOUSE' => true,
        ];
        return view('pages.document-list', $documentList);
    }

    public function offerAgreement()
    {
        return view('pages.offer-agreement');
    }

    public function payment()
    {
        return view('pages.payment');
    }
}
