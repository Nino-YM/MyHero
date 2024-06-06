<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return redirect()->route('contact.create')->with('success', 'Message sent successfully.');
    }

    public function index()
    {
        $messages = ContactMessage::all();
        return view('admin.messages', compact('messages'));
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return redirect()->route('admin.messages')->with('success', 'Message deleted successfully.');
    }
}
