@extends('admin.layouts.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Slider Oluştur</h2>
            </div>
            <div class="card-body">
                <p class="mb-5">Aşağıdaki alanları doldurarak slider'a ekleme yapabilirsiniz.</p>
                <form action="{{ route('slider-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Slider Başlığı :</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Başlık giriniz.">
                        <small>Ana sayfadaki slider'a ekleyeceğiniz görselin üzerindeki büyük başlık</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Slider Açıklaması : </label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none"></textarea>
                        <small>Ana sayfadaki slider'a ekleyeceğiniz görselin üzerindeki açıklama alanı</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Slider Görseli :</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
