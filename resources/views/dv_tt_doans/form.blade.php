
<div class="form-group {{ $errors->has('NGAYTTDOAN') ? 'has-error' : '' }}">
    <label for="NGAYTTDOAN" class="col-md-2 control-label">N G A Y T T D O A N</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYTTDOAN" type="text" id="NGAYTTDOAN" value="{{ old('NGAYTTDOAN', optional($dvTtDoan)->NGAYTTDOAN) }}" placeholder="Enter n g a y t t d o a n here...">
        {!! $errors->first('NGAYTTDOAN', '<p class="help-block">:message</p>') !!}
    </div>
</div>

