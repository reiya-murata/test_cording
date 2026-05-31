<?php
/**
 * TOPページ
 */

namespace App\Controller\Mvc;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route(path: '/', name: 'top')]
    public function index(): Response
    {
        return $this->render('pages/index/index.html.twig', [
            'productItems' => [
                [
                    'type' => 'hk-filter',
                    'logo' => 'build/images/mlitfilter/logo_hk.png',
                    'logoAlt' => 'HK by UNIVERSE FILTER',
                    'label' => 'HK by UNIVERSE FILTER',
                    'lead' => "エムリットが日本で初めて\n直接仕入れて、事業者様向けに\n販売するオイルエレメント。",
                    'linkLabel' => '詳しく見る',
                    'href' => '#hk-filter',
                    'image' => 'build/images/mlitfilter/top_hk_filter_product_pc.png',
                    'imageAlt' => 'HKオイルエレメント',
                ],
                [
                    'type' => 'mask',
                    'title' => '個性をマスクで。',
                    'label' => 'ORIGINAL MLITMASK',
                    'lead' => "高性能フィルターを使用した\nオリジナルマスク。\nお店のロゴや写真を\nエムリットマスクにプリントしませんか？",
                    'linkLabel' => 'オリジナルマスクを作る',
                    'href' => '#mask',
                    'image' => 'build/images/mlitfilter/original_mlitmask_background_pc.png',
                    'imageSp' => 'build/images/mlitfilter/original_mlitmask_background_sp.png',
                    'imageAlt' => 'オリジナルマスクを着用した人物',
                ],
            ],
            'newsItems' => [
                [
                    'date' => '2022.00.00',
                    'category' => '会社情報',
                    'title' => 'お知らせタイトルが入ります お知らせタイトルが入ります お知らせタイトルが...',
                    'href' => '#news-1',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => '会社情報',
                    'title' => 'お知らせタイトルが入ります お知らせタイトルが入ります お知らせタイトルが...',
                    'href' => '#news-2',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => '会社情報',
                    'title' => 'お知らせタイトルが入ります お知らせタイトルが入ります お知らせタイトルが...',
                    'href' => '#news-3',
                ],
            ],
            'mediaItems' => [
                [
                    'date' => '2022.00.00',
                    'category' => 'メディア紹介',
                    'title' => 'メディアタイトルが入ります メディアタイトルが入ります',
                    'href' => '#media-1',
                    'image' => 'build/images/mlitfilter/media_option_pc.png',
                    'imageAlt' => 'メディア掲載誌面',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => 'メディア紹介',
                    'title' => 'メディアタイトルが入ります メディアタイトルが入ります',
                    'href' => '#media-2',
                    'image' => 'build/images/mlitfilter/media_roadster_pc.png',
                    'imageAlt' => 'メディア掲載誌面',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => 'メディア紹介',
                    'title' => 'メディアタイトルが入ります メディアタイトルが入ります',
                    'href' => '#media-3',
                    'image' => 'build/images/mlitfilter/media_option_pc.png',
                    'imageAlt' => 'メディア掲載誌面',
                ],
                [
                    'date' => '2022.00.00',
                    'category' => 'メディア紹介',
                    'title' => 'メディアタイトルが入ります メディアタイトルが入ります',
                    'href' => '#media-4',
                    'image' => 'build/images/mlitfilter/media_roadster_pc.png',
                    'imageAlt' => 'メディア掲載誌面',
                ],
            ],
        ]);
    }
}