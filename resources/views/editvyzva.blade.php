@include('includes.head', ['title' => 'Pridanie výzvy'])

<body>

@include('includes.nav')

<div class="first-widget parallax" style="visibility: hidden;">


</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="comment-form">
                <div class="widget-inner">
                    <form action="{{url('editvyzva')}}" method="post" enctype="multipart/form-data">
                        <h2>Úprava výzvy</h2>
                        <br>
                        <div>
                            <input type="hidden" id="id" name="id" class="form-control" value="{{$vyzva->idvyzvy}}">
                        </div>
                        <div>
                            <label for="nazov">Názov výzvy:</label></br>
                            <input type="text" id="nazov" name="nazov" class="form-control" required value="{{$vyzva->nazov}}">
                        </div>
                        <br>
                        <div>
                            <label for="popis">Krátky popis:</label>
                            <textarea name="popis" id="popis" rows="2" class="form-control" required>{{$vyzva->popis}}</textarea>
                        </div>
                        <br>
                        <div>
                            <label for="ostatneinfo">Detaily k výzve:</label>
                            <textarea name="ostatneinfo" id="ostatneinfo" rows="5" class="form-control" required>{{$vyzva->ostatneinfo}}</textarea>
                        </div>
                        <br>
                        <div>
                            <label for="dlzka">Dĺžka výzvy:</label></br>
                            <input type="text" id="dlzka" name="dlzka" class="form-control" value="{{$vyzva->dlzka}}" required>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <br>
                        <div>
                            <label for="platnedo">Platnosť výzvy do:</label></br>
                            <input type="date" id="platnedo" name="platnedo" class="form-control" required value="{{$vyzva->platnedo}}">
                        </div>
                        <br>
                        <div>
                            <label for="filename">Foto:</label></br>
                            <input type="file" name="filename" id="filename" class="form-control">
                        </div>
                        <br>
                        <div>
                            <label for="oblast">Oblasť:</label></br>
                            <select class="form-control" id="oblast" name="oblast" required>
                                <option value="{{$vyzva->oblasti->idoblasti}}" selected="{{$vyzva->oblasti->nazov}}">{{$vyzva->oblasti->nazov}}</option>
                                @foreach ($oblasti as $oblast)
                                    <option value="{{ $oblast->idoblasti }}">{{ $oblast->nazov }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="typvyzvy">Typ výzvy:</label></br>
                            <select class="form-control" id="typvyzvy" name="typvyzvy" required>
                                <option value="{{$vyzva->typvyzvy->idtypvyzvy}}">{{$vyzva->typvyzvy->typ}}</option>
                                @foreach ($typvyzvy as $typ)
                                    <option value="{{ $typ->idtypvyzvy }}">{{ $typ->typ }}</option>
                                @endforeach
                            </select>
                        </div></br>
                        <div>
                            <input class="mainBtn" type="submit" name="submit" value="Upraviť výzvu" id="submit">
                        </div>
                    </form>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".vyzvy").addClass("active");
    });
</script>

@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</body>
</html>