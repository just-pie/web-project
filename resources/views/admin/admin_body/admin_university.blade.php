<div id="overlay" class="overlay"></div>
<div class="container-fluid p-5">
    <div class="row">
        <div class="container">
            <h3>Údaje o univerzitách</h3>
            <br>
            <table id="univerzity" class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Názov</th>
                    <th scope="col">Zmluva od</th>
                    <th scope="col">Zmluva platná do</th>
                    <th scope="col">Mesto a Krajina</th>
                    <th class="no-sort" scope="col">Akcia</th>
                </tr>
                </thead>
                <tbody>
                @foreach($univerzity as $univerzita)
                    <tr>
                        <td><strong>{{ $univerzita->id }}</strong></td>
                        <td><img src="{{ \URL::asset($univerzita->foto) }}" height="30" width="30"
                                 style="border-radius: 50%;"></td>
                        <td>{{ $univerzita->nazov }}</td>
                        <td>{{ $univerzita->zmluvaod }}</td>
                        <td>{{ $univerzita->zmluvado }}</td>
                        <td>{{ $univerzita->mesto }}, {{$univerzita->krajina}}</td>

                        <td>
                            <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                                <div class="icon">
                                    <a href=""><i class="fa fa-eye" style="color: green; " data-toggle="modal"
                                                  data-target-id="1" data-target="#showUser"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href=""><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;&nbsp;&nbsp;
                                    <a href=""><i class="fa fa-trash" style="color: red;"></i></a>
                                </div>
                                {{--<div class="btn-group mr-2" role="group" aria-label="Action group">
                                        <a href="{{ action("UserController@edit_page", ['id' => $user->id]) }}"
                                           class="btn btn-outline-warning" role="button">Upraviť</a>
                                        <a href="{{ action("UserController@delete_page", ['id' => $user->id]) }}"
                                           class="btn btn-outline-danger" role="button">Vymazať</a>
                                </div>--}}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <hr>
    <br>

    <div class="container" style="margin: auto">
        <div class="row" style="margin: auto">
        <div class="col-5">
            <div id="chartdiv" style="width:100%; height: 500px;"></div>
        </div> {{--mapka--}}
        <div class="col-5">
            <div style="z-index: 999; margin: 5px;">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Krajina</th>
                        <th scope="col">Počet univerzít v krajine</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($univerzity_v_krajinach as $univerzita_v_krajine)
                        <tr>
                            <td>{{ $univerzita_v_krajine->krajina }}</td>
                            <td>{{ $univerzita_v_krajine->pocet }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div> {{--tabulka--}}
    </div>
    <br>
</div>
<script src="{{asset("js/app.js")}}"></script>
<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.university').addClass('active');
    });
</script>
@include('admin.includes.university_map_chart')
