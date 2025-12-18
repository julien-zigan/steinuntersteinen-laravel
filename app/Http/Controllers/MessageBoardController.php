<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageBoardController extends Controller
{
    public function index() {

        $messagesFromDb = \App\Models\Message::with('user')
            ->latest()
            ->get();

        $items = collect($messagesFromDb);
        $perPage = 4;
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

    public function store(Request $request) {
        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        \App\Models\Message::create([
            'message' => $validated['message']
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function edit(Message $message)
    {
    }

    public function update(Request $request, Message $message)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);

        $message->update($validated);

        return redirect(route('message-board'))->with(
            'success', 'Message updated successfully!'
        );
    }

    public function destroy(Message $message)
    {

    }
}
