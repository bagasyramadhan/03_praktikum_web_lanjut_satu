@extends("layouts.templates")
<head>
    <link rel="stylesheet" href="{{asset('css/hobi.css')}}">
</head>
@section("content")

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <h1 style="color: white; font-weight: bold; font-size: 65px; margin-bottom: 50px" class="text-center">Kegiatan yang disukai</h1>    
 @foreach($posts as $hobi)
 <ul>
     <li>_
         <div style="width: 96%;" class="list-group list-group-mine border-left-0 border-bottom-0">
             <a href="{{ route('detail', ['slug' => $hobi->slug]) }}" class="list-group-item" aria-current="true">
                 <div class="d-flex w-100 justify-content-between">
                     <h3 style="font-weight: bolder;" class="mb-1">{{ $hobi->title }}</h3>
                 </div>
                 <p style="font-weight: light;" class="mb-1">Sebuah Kegiatan untuk mengisi waktu luang, Klik jika ingin mengetahui lebih banyak tentang hobi ini.</p>
             </a>
         
     </li>
 </ul>
 @endforeach
 <div class="d-flex">
     {{ $posts->links() }}
 </div>
        </div><!-- /.container-fluid -->
        </section>
@endsection

@push("custom_css")
<style>
    .centering {
        display: flex;
        justify-content: center;
    }
</style>
@endpush