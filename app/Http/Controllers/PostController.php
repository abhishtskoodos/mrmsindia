<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\{Event, Category, Celebrity, Guest, Modal, Media, Faq, Value, Mediacoverage};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    function insertFromRequest(Request $request, string $table, array $fileFields = [], string $uploadFolder = '')
    {
        $data = $request->except(array_merge($fileFields, ['_token', '_method'])); // sab normal fields le lo

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . Str::slug($file->getClientOriginalName(), '_');
                $file->move(public_path($uploadFolder), $filename);
                $data[$field] = $uploadFolder . '/' . $filename;
            }
        }

        DB::table($table)->insert($data);
        return true;
    }

    function update(Request $request, string $table, $id, array $fileFields = [], string $uploadFolder = '', string $idColumn = 'id')
    {
        try {
            $existing = DB::table($table)->where($idColumn, $id)->first();

            if (!$existing) {
                return false;
            }

            $data = [];
            $allFields = $request->except(array_merge($fileFields, ['_token', '_method']));

            foreach ($allFields as $key => $value) {
                if (property_exists($existing, $key) && $existing->$key != $value) {
                    $data[$key] = $value;
                }
            }

            foreach ($fileFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), '_') . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path($uploadFolder), $filename);
                    $data[$field] = $uploadFolder . '/' . $filename;
                }
            }

            if (!empty($data)) {
                DB::table($table)->where($idColumn, $id)->update($data);
            }

            return true;
        } catch (\Exception $e) {
            Log::error('Update failed: ' . $e->getMessage());
            return false;
        }
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

    public function contact()
    {
        $data['contacts'] = DB::table('contacts')->paginate(20);

        return view('admin.contact.contact', $data);
    }

    public function media()
    {
        $medias = Media::latest()->get();
        return view('admin.media.index', compact('medias'));
    }

    public function mediastore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/medias directory exists
            $image->move(public_path('media'), $imageName);

            $data['image'] = 'media/' . $imageName;
        }

        Media::create($data);
        return back()->with('success', 'media created');
    }

    public function mediaedit(Request $request)
    {
        $media = Media::findOrFail($request->id);
        return view('admin.media.edit', compact('media'));
    }

    public function mediaupdate(Request $request)
    {
        $media = Media::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($media->image && file_exists(public_path($media->image))) {
                unlink(public_path($media->image));
            }
            if (!file_exists(public_path('media'))) {
                mkdir(public_path('media'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('media'), $imageName);

            $data['image'] = 'media/' . $imageName;
        }

        $media->update($data);
        return back()->with('success', 'media updated');
    }

    public function mediadelete(Request $request)
    {
        Media::findOrFail($request->id)->delete();
        return back()->with('success', 'media deleted');
    }

    public function faqs_index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function faqs_create()
    {
        return view('admin.faqs.create');
    }

    public function faqs_store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('faq.index')->with('success', 'FAQ created successfully!');
    }

    public function faqs_edit(Request $request)
    {
        $faq = Faq::findOrFail($request->id);

        return view('admin.faqs.edit', compact('faq'));
    }
    public function faqs_update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = Faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully!');
    }

    public function fasq_delete(Request $request)
    {
        Media::findOrFail($request->id)->delete();
        return back()->with('success', 'media deleted');
    }

    public function updateSingleValue(Request $request)
    {
        $value = Value::findOrFail(1);
        $fields = [];

        for ($i = 1; $i <= 20; $i++) {
            $fieldName = "value_$i";

            if (($i === 3 || $i === 4) && $request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $fileName = time() . '_' . $file->getClientOriginalName();

                $file->move(public_path('values'), $fileName);
                $fields[$fieldName] = 'values/' . $fileName;
            } elseif ($request->has($fieldName)) {
                $fields[$fieldName] = $request->$fieldName;
            }
        }

        if (!empty($fields)) {
            $value->update($fields);
            return redirect()->route('values.index')->with('success', 'Values updated successfully!');
        } else {
            return redirect()->route('values.index')->with('info', 'No changes made.');
        }
    }

    public function showIndexForm()
    {
        $value = Value::findOrFail(1);

        return view('admin.values.index', compact('value'));
    }

    public function mediacoverage()
    {
        $mediacoverages = Mediacoverage::latest()->get();
        return view('admin.mediacoverage.index', compact('mediacoverages'));
    }

    public function mediacoveragestore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
            'title' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Make sure public/mediacoverages directory exists
            $image->move(public_path('mediacoverage'), $imageName);

            $data['image'] = 'mediacoverage/' . $imageName;
        }

        Mediacoverage::create($data);
        return back()->with('success', 'mediacoverage created');
    }

    public function mediacoverageedit(Request $request)
    {
        $mediacoverage = Mediacoverage::findOrFail($request->id);
        return view('admin.mediacoverage.edit', compact('mediacoverage'));
    }

    public function mediacoverageupdate(Request $request)
    {
        $mediacoverage = Mediacoverage::findOrFail($request->id);

        $data = $request->validate([
            'name' => 'required',
            'alt' => 'nullable',
            'image' => 'nullable|image',
            'title' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            if ($mediacoverage->image && file_exists(public_path($mediacoverage->image))) {
                unlink(public_path($mediacoverage->image));
            }
            if (!file_exists(public_path('mediacoverage'))) {
                mkdir(public_path('mediacoverage'), 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('mediacoverage'), $imageName);

            $data['image'] = 'mediacoverage/' . $imageName;
        }

        $mediacoverage->update($data);
        return back()->with('success', 'mediacoverage updated');
    }

    public function mediacoveragedelete(Request $request)
    {
        Mediacoverage::findOrFail($request->id)->delete();
        return back()->with('success', 'mediacoverage deleted');
    }

    public function city()
    {
        $data['records'] = DB::table('cities')->get();
        $data['inputfields'] = ['name', 'title', 'image', 'alt', 'url', 'description'];
        $data['title'] = 'City';
        $data['route_prefix'] = 'city';

        return view('admin.basic.index', $data);
    }

    public function city_store(Request $request)
    {
        $this->insertFromRequest($request, 'cities', ['image'], 'uploads/cities');

        return redirect()->back()->with('success', 'City created successfully!');
    }

    public function city_edit(Request $request)
    {
        $id = $request->id;

        $data['record'] = DB::table('cities')->where('id', $id)->first();
        $data['inputfields'] = ['name', 'title', 'image', 'alt', 'url', 'description'];

        $data['title'] = ucfirst('city');
        $data['route_prefix'] = 'city';

        return view('admin.basic.edit', $data);
    }
    public function city_update(Request $request)
    {
        $table = 'cities';
        $id = $request->id;
        $fileFields = ['image'];
        $uploadFolder = 'uploads/cities';

        $updated = $this->update($request, $table, $id, $fileFields, $uploadFolder);

        if ($updated) {
            return redirect()->back()->with('success', 'City updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Update failed or no changes made.');
        }
    }

    public function city_delete(Request $request)
    {
        DB::table('cities')->where('id', $request->id)->delete();
        return back()->with('success', 'City deleted successfully.');
    }
    
}
