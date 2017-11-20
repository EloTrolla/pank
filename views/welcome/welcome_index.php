<div class="form-group">
    <label for="kasutaja" class="col-sm-2 control-label">Kasutaja</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="filmi-nimi" placeholder="Kasutaja">
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Saada</button>
    </div>
</div>

<div class="info">
</div>


<script>

    $('.btn').click(function(){

        ajax('pank/get', {kasutaja: $('#kasutaja').val()}, function(r){

            var vastus = JSON.stringify(r, null, 2);
            $('.info').html(vastus);

        });

    });

</script>