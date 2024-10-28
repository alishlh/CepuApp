<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $all = Complaint::all();
        $pending = Complaint::where('status', 'pending')->count();
        $proses = Complaint::where('status', 'proses')->count();
        $selesai = Complaint::where('status', 'selesai')->count();

        return view('dashboard.index', [
            'all' => $all,
            'pending' => $pending,
            'proses' => $proses,
            'done' => $selesai
        ]);
    }
    public function allComplaints()
    {
        $data = Complaint::with('user')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }
    public function allPendingComplaints()
    {
        $data = Complaint::where('status', 'pending')->get();
        return view('admin.complaints.index', [
            'data' => $data,
        ]);
    }
    public function allProcessComplaints()
    {
        $data = Complaint::where('status', 'proses')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }
    public function allSuccessComplaints()
    {
        $data = Complaint::where('status', 'selesai')->get();
        return view('admin.complaints.index', [
            'data' => $data
        ]);
    }
}
