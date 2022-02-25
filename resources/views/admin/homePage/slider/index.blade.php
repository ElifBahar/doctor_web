@extends('admin.layouts.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Ana Sayfa Slider Listesi</h2>
                <a href=""><button class="mb-1 btn btn-info">Slider Ekle</button></a>
            </div>
            <div class="card-body">
                <p class="mb-5">Ana Sayfa'daki slider alanındaki görsellere ve açıklamalarına aşağıdaki listeden ulaşabilirsiniz.</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Açıklama</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Eylemler</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($sliders as $slider)
                    <tr>
                        <td scope="row">{{ $slider->id }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>
                        <td><img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px;"> </td>
                        <td><a href="{{ url('slider/edit/'.$slider->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('slider/delete/'.$slider->id) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
