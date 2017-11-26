<div class="form-group">
    <label for="kasutaja" class="control-label">Kasutaja</label>
    <p>(kasutaja1, kasutaja2)</p>
    <div class="">
        <input type="text" class="form-control" id="kasutaja" placeholder="Kasutaja">
    </div>
</div>

<div class="form-group">
    <div class="">
        <button type="submit" class="btn btn-default">Saada</button>
    </div>
</div>

<div class="info">
</div>


<script>

    // kasutaja1
    // kasutaja2

    $('.btn').click(function(){

        ajax('pank/get', {kasutaja: $('#kasutaja').val()}, function(r){

            var vastus = JSON.stringify(r, null, 2);
            $('.info').html(vastus);

        });

    });

</script>