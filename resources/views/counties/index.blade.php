<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>
public function index()
{
    $counties = County::all();

    return view('counties.index', compact('counties'));
}

