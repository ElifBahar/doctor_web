@extends('admin.layouts.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Ana Sayfa - Hakkımda Oluştur</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('about-store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Başlık :</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Başlık giriniz">
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kısa Açıklama :</label>
                        <textarea name="short_des" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Uzun Açıklama :</label>
                        <textarea name="long_des" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
