@extends('admin.layouts.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-header card-header-border-bottom">
                <h2>Ana Sayfa - Slider</h2>
                <a href="{{ route('slider-add') }}"><button class="mb-1 btn btn-info">Slider Ekle</button></a>
            </div>
            <div class="card-body">
                <p class="mb-5">Ana Sayfa'daki slider alanındaki görsellere ve açıklamalarına aşağıdaki listeden ulaşabilirsiniz.</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="15%">Başlık</th>
                        <th scope="col" width="25%">Açıklama</th>
                        <th scope="col" width="15%">Resim</th>
                        <th scope="col" width="15%">Eylemler</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($sliders as $slider)
                    <tr>
                        <td scope="row">{{ $slider->id }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>
                        <td><img src="{{ asset($slider->image) }}" style="height: 75px; width: 150px;"> </td>
                        <td><a href="{{ route('slider-edit',['id'=>$slider->id]) }}" class="btn btn-info">Düzenle</a>
                            <a href="{{ route('slider-delete',$slider->id) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger">Sil</a>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
