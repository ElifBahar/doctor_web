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
                <h2>Ana Sayfa - Çalışma Saatleri</h2>
                <!--<a href="{{ route('about-add') }}"><button class="btn btn-info">Çalışma saatlerinizi düzenleyebilirsiniz.</button></a>
-->
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">No</th>
                        <th scope="col" width="15%">Gün</th>
                        <th scope="col" width="25%">Başlangıç Saati</th>
                        <th scope="col" width="15%">Bitiş Saati</th>
                        <th scope="col" width="15%">Eylemler</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($workingDays as $workingDay)
                        <tr>
                            <th scope="row">{{ $workingDay->id }}</th>
                            <td>{{ $workingDay->day }}</td>
                            <td>{{ $workingDay->start_time }}</td>
                            <td>{{ $workingDay->end_time }}</td>
                            <td>@if($workingDay->is_open == 0) Kapalı @else Açık @endif</td>

                            <td>
                                <a href="{{ route('about-edit',$workingDay->id) }}" class="btn btn-sm btn-info">Düzenle</a>
                                <!--<a href="{{ route('about-delete',$workingDay->id) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger">Sil</a>
                            -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
