<div id="overlay" class="overlay"></div>
<div class="container-fluid p-5">
        <div class="row">
                <h3>Tabuľka univerzít</h3>
                <br>

                <table id="univerzity" class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Meno</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Rola</th>
                                <th class="no-sort" scope="col">Akcia</th>
                        </tr>
                        </thead>
                        <tbody>
                       {{-- @foreach($users as $user)
                                <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td><a href="mailto:{{ $user->email }}?Subject=Predmet:%20Mobility%20študentov" target="_top">{{ $user->email }}</a></td>
                                        <td>{{ $user->rola }}</td>

                                        <td>
                                                <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                                                        <div class="icon">
                                                                <a href="" data-toggle="modal" data-target="#show" data-myname="{{$user->name}}" data-myemail="{{$user->email}}" data-mybirth_day="{{$user->birth_date}}" data-myrola="{{$user->rola}}" data-mycreated_at="{{$user->created_at}}" data-myupdated_at="{{$user->updated_at}}"  data-myid="{{$user->id}}"><i class="fa fa-eye" style="color: green; " data-toggle="modal" data-target-id="1" data-target="#showUser"></i></a>&nbsp;&nbsp;&nbsp;
                                                                @if($user->isAdmin !== 1)
                                                                        <a href="" data-toggle="modal" data-target="#editUser" data-myname="{{$user->name}}" data-myemail="{{$user->email}}" data-mybirth_day="{{$user->birth_date}}" data-myrola="{{$user->rola}}" data-mycreated_at="{{$user->created_at}}" data-myupdated_at="{{$user->updated_at}}"  data-myid="{{$user->id}}"><i class="fa fa-edit" style="color: darkorange;"></i></a>&nbsp;&nbsp;&nbsp;
                                                                        <a href="" data-toggle="modal" data-target="#delete" data-name="{{$user->name}}" data-id="{{$user->id}}"><i class="fa fa-trash" style="color: red;"></i></a>
                                                                @endif
                                                        </div>
                                                        <div class="btn-group mr-2" role="group" aria-label="Action group">
                                                                  <a href="{{ action("UserController@edit_page", ['id' => $user->id]) }}"
                                                                     class="btn btn-outline-warning" role="button">Upraviť</a>
                                                                  <a href="{{ action("UserController@delete_page", ['id' => $user->id]) }}"
                                                                     class="btn btn-outline-danger" role="button">Vymazať</a>
                                                        </div>
                                                </div>
                                        </td>
                                </tr>
                        @endforeach--}}
                        </tbody>
                </table>

        </div>

        <div class="row">
                <div class="col-6">
                        <div id="basic_choropleth" style="z-index: 10; position: relative; width:800px; height: 600px; border-style: solid; border-width: 1px;"></div>
                </div> {{--mapka--}}
                <div class="col-6">
                        <div style="z-index: 10; margin: 5px;">

                                <table class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                                <th scope="col">Krajina</th>
                                                <th scope="col">Počet univerzít</th>
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
                </div> {{--tabulka--}}
        </div>

        <br>
</div>
<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.university').addClass('active');
    });

    var basic_choropleth = new Datamap({
        element: document.getElementById("basic_choropleth"),
        projection: 'mercator',
        fills: {
            defaultFill: "#cac3ce",
            univerzity: "#74fa7e"
        },
        data: {
            DEU: {fillKey: "univerzity"},
            PRT: {fillKey: "univerzity"},
            ESP: {fillKey: "univerzity"},
            CZE: {fillKey: "univerzity"},
            HUN: {fillKey: "univerzity"},
            POL: {fillKey: "univerzity"},
            LTU: {fillKey: "univerzity"},
            AUT: {fillKey: "univerzity"},
            BEL: {fillKey: "univerzity"},
            TWN: {fillKey: "univerzity"},
            FRA: {fillKey: "univerzity"},
            SVN: {fillKey: "univerzity"},
        }
    });

</script>
