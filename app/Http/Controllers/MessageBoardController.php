<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageBoardController extends Controller
{
    public function index() {
        $messagesFromDb = [
            [
                'author' => 'Max Mustermann',
                'message' => 'Ein Modelleisnbahn-Set',
                'link' => 'https://www.amazon.de',
                'status' => 'geposted',
                'updated_at' => '14:32'

            ],
            [
                'author' => 'Maria Musterfrau',
                'message' => 'Ein Auto',
                'link' => 'https://www.amazon.de',
                'status' => 'bearbeitet',
                'updated_at' => 'gestern'
            ],
            [
                'author' => 'Max Mustermann',
                'message' => 'Ein Modelleisnbahn-Set',
                'link' => 'https://www.amazon.de',
                'status' => 'geposted',
                'updated_at' => '14:32'

            ],
            [
                'author' => 'Maria Musterfrau',
                'message' => 'Ein Auto',
                'link' => 'https://www.amazon.de',
                'status' => 'bearbeitet',
                'updated_at' => 'gestern'
            ],
            [
                'author' => 'Max Mustermann',
                'message' => 'Ein Modelleisnbahn-Set',
                'link' => 'https://www.amazon.de',
                'status' => 'geposted',
                'updated_at' => '14:32'

            ],
            [
                'author' => 'Maria Musterfrau',
                'message' => 'Ein Auto',
                'link' => 'https://www.amazon.de',
                'status' => 'bearbeitet',
                'updated_at' => 'gestern'
            ],
            [
                'author' => 'Max Mustermann',
                'message' => 'Ein Modelleisnbahn-Set',
                'link' => 'https://www.amazon.de',
                'status' => 'geposted',
                'updated_at' => '14:32'

            ],
            [
                'author' => 'Maria Musterfrau',
                'message' => 'Ein Auto',
                'link' => 'https://www.amazon.de',
                'status' => 'bearbeitet',
                'updated_at' => 'gestern'
            ],

            [
                'author' => 'Max Mustermann',
                'message' => 'Ein Modelleisnbahn-Set',
                'link' => 'https://www.amazon.de',
                'status' => 'geposted',
                'updated_at' => '14:32'

            ],
            [
                'author' => 'Maria Musterfrau',
                'message' => 'Ein Auto',
                'link' => 'https://www.amazon.de',
                'status' => 'bearbeitet',
                'updated_at' => 'gestern'
            ],
            [
                'author' => 'Susanne Sample',
                'message' => 'Ein Lächeln',
                'link' => '',
                'status' => 'gepostet',
                'updated_at' => 'vor 9 Tagen'
            ]
        ];
        $items = collect($messagesFromDb);
        $perPage = 6;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $items->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $messages = new LengthAwarePaginator(
            $currentItems,
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
        return view('pages.message-board', compact('messages'));
    }
}
