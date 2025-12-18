<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageBoardController extends Controller
{
    public function index() {

        $messagesFromDb = \App\Models\Message::with('user')
            ->latest()
            ->get();

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
