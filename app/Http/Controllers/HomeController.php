<?php

namespace App\Http\Controllers;

use App\Email;
use App\Imports\ImportCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
        ]);
        $data = $request->post();
        $sum_even_result = sum_even($data);
        return redirect()->route('home.index')->with('result', $sum_even_result)->withInput();
    }

    public function mail(Request $request)
    {
        $request->validate([
            'sender' => 'required',
            'recipient' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);
        $post_data = $request->post();

        $email = new Email($post_data['sender'], $post_data['recipient'], $post_data['subject'], $post_data['body']);
        $result = $email->send_email();
        echo $result;
        echo "<br/>";
        echo "<a href='" . URL::to('/home') . "'>Back</a>";
    }

    public function customer()
    {
        $customers = DB::table('customers')->get();
        return view('home.customer', compact('customers'));
    }

    public function string(Request $request)
    {
        $post_data = $request->post();
        $result = remove_vowel($post_data['text']);
        return redirect()->route('home.index')->with('string', $result)->withInput();
    }

    public function import(Request $request)
    {
        Excel::import(new ImportCustomer, $request->file('file')->store('files'));
        return redirect()->route('home.customer');
    }
}
