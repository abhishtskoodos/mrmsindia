<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\{Event, Category, Celebrity, Guest, Modal};
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function event()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }

    public function eventstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/events directory exists
            $image->move(public_path('events'), $imageName);

            $data['image'] = 'events/' . $imageName;
        }

        Event::create($data);
        return back()->with('success', 'Event created');
    }

    public function eventedit(Request $request)
    {
        $event = Event::findOrFail($request->id);
        return view('admin.events.edit', compact('event'));
    }

    public function eventupdate(Request $request)
    {
        $event = Event::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($event->image && file_exists(public_path($event->image))) {
                unlink(public_path($event->image));
            }
            if (!file_exists(public_path('events'))) {
                mkdir(public_path('events'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('events'), $imageName);

            $data['image'] = 'events/' . $imageName;
        }

        $event->update($data);
        return back()->with('success', 'Event updated');
    }

    public function eventdelete(Request $request)
    {
        Event::findOrFail($request->id)->delete();
        return back()->with('success', 'Event deleted');
    }

    public function category()
    {
        $categorys = Category::latest()->get();
        return view('admin.category.index', compact('categorys'));
    }

    public function categorystore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/categorys directory exists
            $image->move(public_path('category'), $imageName);

            $data['image'] = 'category/' . $imageName;
        }

        category::create($data);
        return back()->with('success', 'category created');
    }

    public function categoryedit(Request $request)
    {
        $category = Category::findOrFail($request->id);
        return view('admin.category.edit', compact('category'));
    }

    public function categoryupdate(Request $request)
    {
        $category = Category::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }
            if (!file_exists(public_path('category'))) {
                mkdir(public_path('category'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('category'), $imageName);

            $data['image'] = 'category/' . $imageName;
        }

        $category->update($data);
        return back()->with('success', 'category updated');
    }

    public function categorydelete(Request $request)
    {
        category::findOrFail($request->id)->delete();
        return back()->with('success', 'category deleted');
    }

    public function celebrity()
    {
        $celebritys = Celebrity::latest()->get();
        return view('admin.celebrity.index', compact('celebritys'));
    }

    public function celebritystore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/celebritys directory exists
            $image->move(public_path('celebrity'), $imageName);

            $data['image'] = 'celebrity/' . $imageName;
        }

        Celebrity::create($data);
        return back()->with('success', 'celebrity created');
    }

    public function celebrityedit(Request $request)
    {
        $celebrity = Celebrity::findOrFail($request->id);
        return view('admin.celebrity.edit', compact('celebrity'));
    }

    public function celebrityupdate(Request $request)
    {
        $celebrity = Celebrity::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($celebrity->image && file_exists(public_path($celebrity->image))) {
                unlink(public_path($celebrity->image));
            }
            if (!file_exists(public_path('celebrity'))) {
                mkdir(public_path('celebrity'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('celebrity'), $imageName);

            $data['image'] = 'celebrity/' . $imageName;
        }

        $celebrity->update($data);
        return back()->with('success', 'celebrity updated');
    }

    public function celebritydelete(Request $request)
    {
        Celebrity::findOrFail($request->id)->delete();
        return back()->with('success', 'celebrity deleted');
    }

    public function guest()
    {
        $guests = Guest::latest()->get();
        return view('admin.guest.index', compact('guests'));
    }

    public function gueststore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/guests directory exists
            $image->move(public_path('guest'), $imageName);

            $data['image'] = 'guest/' . $imageName;
        }

        Guest::create($data);
        return back()->with('success', 'guest created');
    }

    public function guestedit(Request $request)
    {
        $guest = Guest::findOrFail($request->id);
        return view('admin.guest.edit', compact('guest'));
    }

    public function guestupdate(Request $request)
    {
        $guest = Guest::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($guest->image && file_exists(public_path($guest->image))) {
                unlink(public_path($guest->image));
            }
            if (!file_exists(public_path('guest'))) {
                mkdir(public_path('guest'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('guest'), $imageName);

            $data['image'] = 'guest/' . $imageName;
        }

        $guest->update($data);
        return back()->with('success', 'guest updated');
    }

    public function guestdelete(Request $request)
    {
        Guest::findOrFail($request->id)->delete();
        return back()->with('success', 'guest deleted');
    }

    public function modal()
    {
        $modals = Modal::latest()->get();
        return view('admin.modal.index', compact('modals'));
    }

    public function modalstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/modals directory exists
            $image->move(public_path('modal'), $imageName);

            $data['image'] = 'modal/' . $imageName;
        }

        Modal::create($data);
        return back()->with('success', 'modal created');
    }

    public function modaledit(Request $request)
    {
        $modal = Modal::findOrFail($request->id);
        return view('admin.modal.edit', compact('modal'));
    }

    public function modalupdate(Request $request)
    {
        $modal = Modal::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($modal->image && file_exists(public_path($modal->image))) {
                unlink(public_path($modal->image));
            }
            if (!file_exists(public_path('modal'))) {
                mkdir(public_path('modal'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('modal'), $imageName);

            $data['image'] = 'modal/' . $imageName;
        }

        $modal->update($data);
        return back()->with('success', 'modal updated');
    }

    public function modaldelete(Request $request)
    {
        Modal::findOrFail($request->id)->delete();
        return back()->with('success', 'modal deleted');
    }

    public function pageantsubtitlem()
    {
        $pageantsubtitlems = DB::table('pageantsubtitlems')->latest()->get();
        return view('admin.pageantsubtitlem.index', compact('pageantsubtitlems'));
    }

    public function pageantsubtitlemstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        DB::table('pageantsubtitlems')->insert([
            'name' => $data['name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Pageant Subtitle Created');
    }

    public function pageantsubtitlemedit(Request $request)
    {
        $pageantsubtitlem = DB::table('pageantsubtitlems')->where('id', $request->id)->first();

        if (!$pageantsubtitlem) {
            abort(404);
        }

        return view('admin.pageantsubtitlem.edit', compact('pageantsubtitlem'));
    }

    public function pageantsubtitlemupdate(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        DB::table('pageantsubtitlems')
            ->where('id', $request->id)
            ->update([
                'name' => $data['name'],
                'updated_at' => now(),
            ]);

        return back()->with('success', 'Pageant Subtitle Updated');
    }

    public function pageantsubtitlemdelete(Request $request)
    {
        DB::table('pageantsubtitlems')->where('id', $request->id)->delete();

        return back()->with('success', 'Pageant Subtitle Deleted');
    }

    public function pageantsubtitlef()
    {
        $pageantsubtitlefs = DB::table('pageantsubtitlefs')->latest()->get();
        return view('admin.pageantsubtitlef.index', compact('pageantsubtitlefs'));
    }

    public function pageantsubtitlefstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        DB::table('pageantsubtitlefs')->insert([
            'name' => $data['name'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Pageant Subtitle F Created');
    }

    public function pageantsubtitlefedit(Request $request)
    {
        $pageantsubtitlef = DB::table('pageantsubtitlefs')->where('id', $request->id)->first();

        if (!$pageantsubtitlef) {
            abort(404);
        }

        return view('admin.pageantsubtitlef.edit', compact('pageantsubtitlef'));
    }

    public function pageantsubtitlefupdate(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        DB::table('pageantsubtitlefs')
            ->where('id', $request->id)
            ->update([
                'name' => $data['name'],
                'updated_at' => now(),
            ]);

        return back()->with('success', 'Pageant Subtitle F Updated');
    }

    public function pageantsubtitlefdelete(Request $request)
    {
        DB::table('pageantsubtitlefs')->where('id', $request->id)->delete();

        return back()->with('success', 'Pageant Subtitle F Deleted');
    }
}
