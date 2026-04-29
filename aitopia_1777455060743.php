use Intervention<span class="hljs-title">Image<span class="hljs-title">Facades<span class="hljs-title">Image;

public function uploadProductImage(Request $request)
{
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Resize image
        $img = Image::make($image->getRealPath());
        $img->resize(1080, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('images/products/'.$imageName));

        // Save to database logic here...
    }
}
