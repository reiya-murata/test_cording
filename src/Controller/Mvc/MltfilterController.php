<?php

namespace App\Controller\Mvc;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/mlitfilter', name: 'mlitfilter')]
class MltfilterController extends AbstractController
{
    #[Route(path: '', name: '_index')]
    public function index(): Response
    {
        return $this->render('pages/mlitfilter/index.html.twig', [
            'productItems' => [
                [
                    'title' => 'MLIT FILTER',
                    'lead' => '世界中で活躍する、最強車用エアコンフィルター。',
                    'href' => '#performance',
                ],
                [
                    'title' => 'CLING-AIR',
                    'lead' => '厳選素材を使用した、独自開発のシートクッション。',
                    'href' => '#cling-air',
                ],
                [
                    'title' => 'HK by UNIVERSE FILTER',
                    'lead' => '車両整備を支える高品質オイルエレメント。',
                    'href' => '#hk-filter',
                ],
            ],
            'newsItems' => [
                [
                    'date' => '2022.00.00',
                    'category' => '会社情報',
                    'title' => 'お知らせタイトルが入ります お知らせタイトルが入ります お知らせタイトルが入ります',
                    'href' => '#news-1',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => '会社情報',
                    'title' => 'お知らせタイトルが入ります お知らせタイトルが入ります お知らせタイトルが入ります',
                    'href' => '#news-2',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => '会社情報',
                    'title' => 'お知らせタイトルが入ります お知らせタイトルが入ります お知らせタイトルが入ります',
                    'href' => '#news-3',
                ],
            ],
            'mediaItems' => [
                [
                    'date' => '2022.00.00',
                    'category' => 'メディア紹介',
                    'label' => 'MEDIA PICKUP',
                    'title' => 'メディアタイトルが入ります メディアタイトルが入ります',
                    'href' => '#media-1',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => 'メディア紹介',
                    'label' => 'MEDIA PICKUP',
                    'title' => 'メディアタイトルが入ります メディアタイトルが入ります',
                    'href' => '#media-2',
                ],
            ],
            'storyItems' => [
                [
                    'type' => 'material',
                    'title' => '「素材」から「加工」まで' . "\n" . '日本製にこだわる。',
                    'text' => 'ストーリーに関する内容が記載されます。今回はサンプルになります。文字情報は200文字くらいを想定しまします。'
                        . 'ストーリーに関する内容が記載されます。今回はサンプルになります。文字情報は200文字くらいを想定しまします。'
                        . 'ストーリーに関する内容が記載されます。今回はサンプルになります。文字情報は200文字くらいを想定しまします。',
                ],
                [
                    'type' => 'product',
                    'title' => '伝統に培われた個々の要素技術を' . "\n" . '重ね合わせた製品',
                    'text' => 'ストーリーに関する内容が記載されます。今回はサンプルになります。文字情報は200文字くらいを想定しまします。'
                        . 'ストーリーに関する内容が記載されます。今回はサンプルになります。文字情報は200文字くらいを想定しまします。'
                        . 'ストーリーに関する内容が記載されます。今回はサンプルになります。文字情報は200文字くらいを想定しまします。',
                ],
            ],
        ]);
    }
}