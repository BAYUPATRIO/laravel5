<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodataUTS;




    class Informatika2301100037Controller extends Controller
{
    
    public function index1(){
        return "
       
        <h2>

            <a href='/home'>Home</a>
            <a href='/'>Mobil</a>
            <a href='/form'>UTS</a>
            <a href='/kalkulator'>Kalkulator</a>
            <a href ='/biodataUTS'>Biodata</a>
        </h2>
         <h1> Halaman Kalkulator</h1>
        <form action='/kalkulator/action' method='post'>
            <input type='hidden' name='_token' value='" . csrf_token() . "' />
            <label>Bilangan 1</label><br>
            <input name='bil1' type='text' /><br>
            <label>Bilangan 2</label><br>
            <input name='bil2' type='text' /><br>
            <input type='submit' name='tambah' value='tambah' />
            <input type='submit' name='kurang' value='kurang' />
            <input type='submit' name='kali' value='kali' />
            <input type='submit' name='bagi' value='bagi' />
        </form>";
        
    }
   
    public function showForm()
    {
        return view('form');
        
      
    }
    
   
    // Menyimpan data
   
   
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'nilai' => 'required|numeric|min:0|max:100',
         ]);
         $nilai = $validated['nilai'];
        if ($nilai >= 90) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C";
        } elseif ($nilai >= 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }

         $file = storage_path('app/mobil_data.txt');
        $data = "Nama: {$request->nama},
        Tempat Lahir : {$request->tempat_lahir},
        Tanggal Lahir : {$request->tanggal_lahir},
        No Hp : {$request->no_hp},
                 Alamat : {$request->alamat},
                 Nilai : {$request->nilai},
                 Grade : {$request->grade},". PHP_EOL;
        file_put_contents($file, $data, FILE_APPEND);
        
                // Simpan data ke database atau lakukan tindakan lainnya
                return back()->with('success', 'Form berhasil disubmit!');
            }
            public function calculate(Request $request)
            {
                $proses = null;
                $bil1 = $request->input('bil1');
                $bil2 = $request->input('bil2');
        
                if ($request->has('tambah')) {
                    $proses = $bil1 + $bil2;
                } elseif ($request->has('kurang')) {
                    $proses = $bil1 - $bil2;
                } elseif ($request->has('kali')) {
                    $proses = $bil1 * $bil2;
                } elseif ($request->has('bagi')) {
                    if ($bil2 != 0) {
                        $proses = $bil1 / $bil2;
                    } else {
                        $proses = "Tidak dapat membagi dengan nol";
                    }
                }
        
                return "Bilangan 1:"
                 .$request->bil1 ."<br>Bilangan 2 : ".$request->bil2 ."<br>Hasil : ".$proses;
            }

            public function create()
            {
                $data = inf2301100037::all();
                return view('mobil_form');
            }
        
          
            
        
            // Menyimpan data mobil ke database
            public function store(Request $request)
            {
                $validated = $request->validate([
                    'merk' => 'required|string|max:255',
                    'tahun_terbit' => 'required|date',
                ]);
        
                Mobil::create($validated);
        
                return redirect()->route('mobils.create')->with('success', 'Data mobil berhasil disimpan!');
            }
        }
        
        
        
          
           
        

        
           
        

    

       

        
        
        
            
        
          