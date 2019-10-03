
<div class="form-group {{ $errors->has('NGAYKETNAP') ? 'has-error' : '' }}">
    <label for="NGAYKETNAP" class="col-md-2 control-label">N G A Y K E T N A P</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYKETNAP" type="text" id="NGAYKETNAP" value="{{ old('NGAYKETNAP', optional($dvKetnap)->NGAYKETNAP) }}" placeholder="Enter n g a y k e t n a p here...">
        {!! $errors->first('NGAYKETNAP', '<p class="help-block">:message</p>') !!}
    </div>
</div>

