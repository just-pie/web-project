<div id="overlay" class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h2>Tabuľka výziev</h2>
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!! session()->get('message') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
            @endif
            <table id="vyzvy" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Obrázok</th>
                    <th scope="col">Názov</th>
                    <th scope="col">Výzva pridaná dňa</th>
                    <th scope="col">Platná do</th>
{{--                    <th class="no-sort" scope="col">Akcia</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($vyzvy as $vyzva)
                    <tr>
                        <td scope="row">{{ $vyzva->idvyzvy }}</td>
                        <td><img src="{{ \URL::asset($vyzva->foto) }}" height="30" width="30"
                                 style="border-radius: 50%; object-fit:cover; display: block;"></td>
                        <td>{{ $vyzva->nazov }}</td>
                        <td>{{ $vyzva->pridane }}</td>
                        <td>{{ $vyzva->platnedo }}</td>
                        {{--<td>
                            <div class="btn-toolbar" role="toolbar" aria-label="Button action group">
                                <div class="icon">
                                    <a href="" ><i class="fas fa-eye" style="color: green; "></i></a>
                                    <a href="" ><i class="fas fa-edit" style="color: darkorange;"></i></a>
                                    <a href="" ><i class="fas fa-trash" style="color: red;"></i></a>
                                </div>
                            </div>
                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="comment-form">
                <div class="widget-inner">
                    <br>
                    <h2>Pridanie novej výzvy</h2>
                    <form action="{{url('addvyzvaAdmin')}}" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="nazov">Názov výzvy:</label></br>
                            <input type="text" id="nazov" name="nazov" class="form-control" placeholder="Názov výzvy"
                                   required>
                        </div>
                        <br>
                        <div>
                            <label for="popis">Krátky popis:</label>
                            <textarea name="popis" id="popis" rows="5" class="form-control"
                                      placeholder="Krátky a výstižný popis výzvy" required></textarea>
                        </div>
                        <br>
                        <div>
                            <div>
                                <label for="ostatneinfo">Detaily k výzve:</label>
                                <textarea name="ostatneinfo" id="ostatneinfo" rows="5" class="form-control"
                                          required></textarea>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="dlzka">Dĺžka výzvy:</label></br>
                            <input type="text" id="dlzka" name="dlzka" class="form-control"
                                   placeholder="Uviesť v týždňoch alebo v mesiacoch" required>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <br>
                        <div>
                            <label for="platnedo">Platnosť výzvy do:</label></br>
                            <input type="date" id="platnedo" name="platnedo" class="form-control"
                                   placeholder="Do dátumu" required>
                        </div>
                        <br>
                        <label for="platnedo">Vyberte fotografiu:</label></br>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Súbor:</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="filename" id="filename" class="custom-file-input"
                                       aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="filename">Vyberte požadovaný súbor</label>
                            </div>
                        </div>
                        <br>
                        <div>
                            <label for="oblast">Oblasť:</label></br>
                            <select class="form-control" id="oblast" name="oblast" required>
                                <option value=""></option>
                                @foreach ($oblasti as $oblast)
                                    <option value="{{ $oblast->idoblasti }}">{{ $oblast->nazov }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="typvyzvy">Typ výzvy:</label></br>
                            <select class="form-control" id="typvyzvy" name="typvyzvy" required>
                                <option value=""></option>
                                @foreach ($typvyzvy as $typ)
                                    <option value="{{ $typ->idtypvyzvy }}">{{ $typ->typ }}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div>
                            <label for="univerzity">Univerzity:</label></br>
                            <select class="form-control" id="univerzity" name="univerzity[]" multiple required>
                                <option value=""></option>
                                @foreach ($univerzity as $uni)
                                    <option value="{{ $uni->iduniverzity }}">{{ $uni->nazov }}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Pridať výzvu" id="submit">
                        </div>
                    </form>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->
            <br>
            <br>
            <br>
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->


<script>
    $(document).ready(function () {
        $(" li").removeClass("active");
        $('.challenge').addClass('active');
    });
</script>
<script>
    CKEDITOR.replace('ostatneinfo');
</script>