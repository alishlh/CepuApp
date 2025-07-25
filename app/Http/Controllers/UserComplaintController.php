<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Complaint::count();
        $pending = Complaint::where('status', 'pending')->count();
        $proses = Complaint::where('status', 'proses')->count();
        $selesai = Complaint::where('status', 'selesai')->count();

        $user_id = Auth::user()->id;
        $all_user = Complaint::where('user_id', $user_id)->count();
        $pending_user = Complaint::where('user_id', $user_id)->where('status', 'pending')->count();
        $proses_user = Complaint::where('user_id', $user_id)->where('status', 'proses')->count();
        $selesai_user = Complaint::where('user_id', $user_id)->where('status', 'selesai')->count();
        return view('user.dashboard.index', [
            'all' => $all,
            'pending' => $pending,
            'proses' => $proses,
            'selesai' => $selesai,
            'user_id' => $user_id,
            'all_user' => $all_user,
            'pending_user' => $pending_user,
            'proses_user' => $proses_user,
            'selesai_user' => $selesai_user,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.complaints.form-pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2028'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $path = 'public/complaint';
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs($path, $name);
        }

        $user = Auth::user();
        $complaint =  new Complaint();
        $complaint->guest_name = $user->name;
        $complaint->guest_email = $user->email;
        $complaint->guest_telp = $user->telp;
        $complaint->user_id = $user->id;

        $complaint->title = $request->title;
        $complaint->image = $imagePath;
        $complaint->description = $request->description;

        $complaint->save();
        return redirect()->route('user.index')->with('msg', 'Pengaduan berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function allUserComplaint()
    {
        $data = Complaint::where('user_id', Auth::user()->id)->get();
        return view('user.complaints.complaint-table-users', [
            'data' => $data
        ]);
    }

    function userPendingComplaint()
    {
        $data = Complaint::where('user_id', Auth::user()->id)->where('status', 'pending')->get();
        return view('user.complaints.complaint-table-users', [
            'data' => $data
        ]);
    }
    function userProsesComplaint()
    {
        $data = Complaint::where('user_id', Auth::user()->id)->where('status', 'proses')->get();
        return view('user.complaints.complaint-table-users', [
            'data' => $data
        ]);
    }
    function userSelesaiComplaint()
    {
        $data = Complaint::where('user_id', Auth::user()->id)->where('status', 'selesai')->get();
        return view('user.complaints.complaint-table-users', [
            'data' => $data
        ]);
    }
}
