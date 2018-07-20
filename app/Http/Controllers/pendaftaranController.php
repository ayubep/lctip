<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Models\Data;
use App\Models\Member;
use App\Models\Supervisor;
use App\Models\Team;

class pendaftaranController extends Controller
{ 
    public function register()
    {
        return view('user.register');
    }
    
    public function StoreRegister(Request $request)
    {
        // dd($request);
        //Validasi data Team
        // $this->validate($request, [
        //     //validasi data pembimbing    
        //     'formal_pembimbing' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'ktp_pembimbing' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     //validasi data ketua
        //     'formal_ketua' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'kartu_ketua' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     //validasi data anggota 1
        //     'formal_anggota1' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'kartu_anggota1' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     //validasi data anggota 2
        //     'formal_anggota2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'kartu_anggota2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     //valiasi data lain
        //     'bukti_bayar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        //     'surat_utusan' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        //     ]);
            
        // Create new team
        $newTeam = new team;
            $newTeam -> username        = $request->input('username');
            $newTeam -> password        = $request->input('password');
            $newTeam -> nama_team       = $request->input('nama_team');
            $newTeam -> nama_sekolah    = $request->input('nama_sekolah');
            $newTeam -> alamat_sekolah  = $request->input('alamat_sekolah');
            $newTeam -> email_sekolah   = $request->input('email_sekolah');
            $newTeam -> telepon_sekolah = $request->input('telepon_sekolah');
            $newTeam -> regional        = $request->input('regional');
            $newTeam -> status          = 0;
            
            $newTeam->save();
            
        $newSuper = new supervisor;
            $newSuper -> id_team            = $newTeam -> id;
            $newSuper -> nama_pembimbing    = $request->input('nama_pembimbing');
            $newSuper -> nip                = $request->input('nip');
            
            $uploadedFile = $request->file('foto_ktp');
            $path = $uploadedFile->store('public/FotoKtpSuper');
            $newSuper -> foto_ktp           = $path;
            
            $uploadedFile = $request->file('foto_formal');
            $path = $uploadedFile->store('public/FotoFormalSuper');
            $newSuper -> foto_formal        = $path;
            
            $newSuper -> nomor_hp           = $request->input('nomor_hp');
            $newSuper -> email              = $request->input('email_pembimbing');

            $newSuper->save();
            
        
        $newMember = new member;
            $newMember -> id_team           = $newTeam -> id;    
            $newMember -> nama_lengkap      = $request->input('nama_lengkap0');
            $newMember -> nomor_hp          = $request->input('nomor_hp0');
            $newMember -> email             = $request->input('email0');
            
            $uploadedFile = $request->file('foto_kartupelajar0');
            $path = $uploadedFile->store('public/KartuPelajar');
            $newMember -> foto_kartupelajar = $path;
            
            $uploadedFile = $request->file('foto_formal0');
            $path = $uploadedFile->store('public/FotoFormal');
            $newMember -> foto_formal       = $path;
            $newMember -> peran             = $request->input('role0');

            $newMember->save();
        
        $newMember = new member;
            $newMember -> id_team           = $newTeam -> id;    
            $newMember -> nama_lengkap      = $request->input('nama_lengkap1');
            $newMember -> nomor_hp          = $request->input('nomor_hp1');
            $newMember -> email             = $request->input('email1');
            
            $uploadedFile = $request->file('foto_kartupelajar1');
            $path = $uploadedFile->store('public/KartuPelajar');
            $newMember -> foto_kartupelajar = $path;
            
            $uploadedFile = $request->file('foto_formal1');
            $path = $uploadedFile->store('public/FotoFormal');
            $newMember -> foto_formal       = $path;
            $newMember -> peran             = $request->input('role1');

            $newMember->save();

        $newMember = new member;
            $newMember -> id_team           = $newTeam -> id;    
            $newMember -> nama_lengkap      = $request->input('nama_lengkap2');
            $newMember -> nomor_hp          = $request->input('nomor_hp2');
            $newMember -> email             = $request->input('email2');
            
            $uploadedFile = $request->file('foto_kartupelajar2');
            $path = $uploadedFile->store('public/KartuPelajar');
            $newMember -> foto_kartupelajar = $path;
            
            $uploadedFile = $request->file('foto_formal2');
            $path = $uploadedFile->store('public/FotoFormal');
            $newMember -> foto_formal       = $path;
            $newMember -> peran             = $request->input('role2');

            $newMember->save();


        $newData = new data;
            $newData -> id_team = $newTeam -> id;

            $uploadedFile = $request->file('foto_bukti');
            $path = $uploadedFile->store('public/FotoBukti');
            $newData -> foto_bukti = $path;

            $uploadedFile = $request->file('foto_utusan');
            $path = $uploadedFile->store('public/FotoUtusan');
            $newData -> foto_utusan = $path;

            $newData->save();

        return redirect('home');
    }

    public function EditRegister()
    {
        return view();
    }

    public function UpdateRegister()
    {
        return redirect()->back();
    }

    public function DestroyRegister()
    {
        return redirect()->back();
    }
}
