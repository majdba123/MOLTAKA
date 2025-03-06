@extends('layouts.app')

@section('content')




@if (session('error'))
<div class="flex items-center p-3.5 rounded text-danger bg-danger-light dark:bg-danger-dark-light text-align-center">
    {{ session('error') }}

</div>
@endif

    <div class="container" style="width: 50%;">

        <!-- form controls -->
        <form class="space-y-5" method="POST" action="{{ route('video_gallery.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div>
                <label for="ctnEmail">Title</label>
                <input type="text" name="title" placeholder="Some Text..." class="form-input" required />
            </div>


            <div>
                <label for="ctnEmail">external_link_youtube</label>
                <input type="text" name="external_link" placeholder="Some Text..." class="form-input" required />
            </div>


            {{-- <div>
                <label for="ctnFile">Upload Imag</label>
                <input id="ctnFile" type="file" name="images"
                    class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-primary"
                    required />
            </div>


            <div>
                <label for="ctnFile">Upload video</label>
                <input id="ctnFile" type="file" name="video"
                    class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-primary"
                    required />
            </div> --}}
            <button type="submit" class="btn btn-primary !mt-6">Submit</button>
        </form>
    </div>
@endsection
