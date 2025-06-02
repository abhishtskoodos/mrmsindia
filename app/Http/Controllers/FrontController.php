<?php

namespace App\Http\Controllers;
use App\Models\{Category, Event, Celebrity, Guest, Modal,PageantRegistration,Media};
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::get();
        $data['events'] = Event::get();
        $data['celebritys'] = Celebrity::get();
        $data['guests'] = Guest::get();
        $data['modals'] = Modal::get();

        return view('frontend.home', $data);
    }

    public function about()
    {
        return view('frontend.about-us');
    }

    public function contact()
    {
        return view('frontend.contact-us');
    }

    public function contact_store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'required|max:20',
            'city' => 'required|string|max:100',
            'query' => 'required|string',
        ]);

        DB::table('contacts')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact_no' => $request->input('contact_no'),
            'city' => $request->input('city'),
            'query' => $request->input('query'),
            'created_at' => now(),
        ]);

        return back()->with('success', 'Query submitted successfully!');
    }

    public function show()
    {
        return view('frontend.show');
    }

    public function sponsers()
    {
        $data['medias'] = Media::get();
        return view('frontend.sponsers', $data);
    }

    public function models()
    {
        return view('frontend.model');
    }

    public function registration_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'dob' => 'nullable|date',
            'language' => 'nullable|string',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string',
            'coatless-number' => 'nullable|string',
            'address' => 'nullable|string',
            'height' => 'nullable|integer',
            'nationality' => 'nullable|string',
            'weight' => 'nullable|integer',
            'city' => 'nullable|string',
            'instagram' => 'nullable|string',
            'profession' => 'nullable|string',
            'facebook' => 'nullable|string',
            'institute' => 'nullable|string',
            'other' => 'nullable|string',
            'experience' => 'nullable|string',
            'reason' => 'nullable|string',
            'declaration' => 'accepted',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
            'handling-photo' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
            'id-copy' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'audio-card' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_photo_' . $photo->getClientOriginalName();
            $photo->move(public_path('registration'), $photoName);
            $data['photo'] = 'registration/' . $photoName;
        }
        
        if ($request->hasFile('handling-photo')) {
            $handlingPhoto = $request->file('handling-photo');
            $handlingPhotoName = time() . '_handling_' . $handlingPhoto->getClientOriginalName();
            $handlingPhoto->move(public_path('registration'), $handlingPhotoName);
            $data['handling_photo'] = 'registration/' . $handlingPhotoName;
        }
        
        if ($request->hasFile('id-copy')) {
            $idCopy = $request->file('id-copy');
            $idCopyName = time() . '_idcopy_' . $idCopy->getClientOriginalName();
            $idCopy->move(public_path('registration'), $idCopyName);
            $data['id_copy'] = 'registration/' . $idCopyName;
        }
        
        if ($request->hasFile('audio-card')) {
            $audioCard = $request->file('audio-card');
            $audioCardName = time() . '_audio_' . $audioCard->getClientOriginalName();
            $audioCard->move(public_path('registration'), $audioCardName);
            $data['audio_card'] = 'registration/' . $audioCardName;
        }
        

        DB::table('registrations')->insert([
            'name' => $request->name,
            'dob' => $request->dob,
            'language' => $request->language,
            'age' => $request->age,
            'gender' => $request->gender,
            'coatless_number' => $request->input('coatless-number'),
            'email' => $request->email,
            'address' => $request->address,
            'height' => $request->height,
            'nationality' => $request->nationality,
            'weight' => $request->weight,
            'city' => $request->city,
            'instagram' => $request->instagram,
            'profession' => $request->profession,
            'facebook' => $request->facebook,
            'institute' => $request->institute,
            'other' => $request->other,
            'experience' => $request->experience,
            'reason' => $request->reason,
            'photo' => $photo,
            'handling_photo' => $handlingPhoto,
            'id_copy' => $idCopy,
            'audio_card' => $audioCard,
            'declaration' => true,
            'created_at' => now(),
        ]);

        return back()->with('success', 'Registration submitted successfully!');
    }

    public function models2()
    {
        return view('frontend.model2');
    }

    public function pageant_registration_store(Request $request)
    {
        
        $request->validate([
            'name' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'gender' => 'nullable|string|max:50',
            'age' => 'nullable|integer',
            'email' => 'nullable|email|max:255',
            'contact' => 'nullable|string|max:20',
            'nationality' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'profession' => 'nullable|string|max:255',
            'institute' => 'nullable|string|max:255',
            'experience' => 'nullable|string',
            'reason' => 'nullable|string',

            'height' => 'nullable|integer',
            'eye_color' => 'nullable|string|max:100',
            'weight' => 'nullable|integer',
            'hair_color' => 'nullable|string|max:100',
            'shoulder' => 'nullable|string|max:100',
            'hair_length' => 'nullable|string|max:100',
            'chest' => 'nullable|string|max:100',
            'body_type' => 'nullable|string|max:100',
            'waist' => 'nullable|string|max:100',
            'skills' => 'nullable|string|max:255',
            'hips' => 'nullable|string|max:100',
            'dress_size' => 'nullable|string|max:100',
            'shoe_size' => 'nullable|string|max:100',

            'declaration' => 'required|accepted',
            
            'full_photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'headshot_photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'id_copy' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:4096',
            'aadhar' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:4096',
            'close_shot' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'no_makeup' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'miss_shot' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'ramp_walk_video' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mov|max:10240',
        ]);

        $data = $request->except('declaration');
        $data['declaration'] = $request->has('declaration');
        
        $uploadFields = [
            'full_photo', 'headshot_photo', 'id_copy', 'aadhar', 'close_shot', 'no_makeup', 'miss_shot', 'ramp_walk_video'
        ];

        foreach ($uploadFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $field . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('registration'), $filename);
                $data[$field] = 'registration/' . $filename;
            }
        }
        
        PageantRegistration::create($data);
        
        return back()->with('success', 'Registration submitted successfully!');
    }
}
