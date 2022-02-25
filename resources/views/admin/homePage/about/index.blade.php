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
                        <div class="card-header card-header-border-bottom" >
                            <h2>Ana Sayfa - Hakkımda</h2>
                            <a href="{{ route('about-add') }}"><button class="btn btn-info">Hakkımda Bilgisi Ekle</button></a>

                        </div>

                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="5%">No</th>
                                        <th scope="col" width="15%">Başlık</th>
                                        <th scope="col" width="25%">Kısa Açıklama</th>
                                        <th scope="col" width="15%">Uzun Açıklama</th>
                                        <th scope="col" width="15%">Eylemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($abouts as $about)
                                        <tr>
                                            <th scope="row">{{ $about->id }}</th>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->short_des }}</td>
                                            <td>{{ $about->long_des }}</td>

                                            <td>
                                                <a href="{{ route('about-edit',$about->id) }}" class="btn btn-info">Düzenle</a>
                                                <a href="{{ route('about-delete',$about->id) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger">Sil</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>


@endsection
