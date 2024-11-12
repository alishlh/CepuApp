<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function showComplaint($id)
    {
        $data = Complaint::findOrFail($id);
        return view('admin.complaints.detail-complaint', [
            'data' => $data
        ]);
    }
    public function storeResponse(Request $request)
    {
        $request->validate([
            'response' => 'required|string'
        ]);

        if ($request->hasFile('image')) {
            $path = 'public/complaint-response';
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $request->file('image')->storeAs($path, $name);
        }

        $response  = new ComplaintResponse;
        $response->complaint_id = $request->complaint_id;
        $response->admin_id  = Auth::user()->id;
        $response->response = $request->input('response');
        $response->image = $name;

        $response->save();



        $complaint = Complaint::findOrFail($request->complaint_id);

        if ($complaint->status == 'pending') {
            $complaint->status = 'proses';
        } else if ($complaint->status == 'proses') {
            $complaint->status = 'selesai';
        }
        $complaint->save();

        return redirect()->back()->with('msg', 'Tanggapa berhasil dikirimkan dan status di perbaharui!!!');
    }
}
