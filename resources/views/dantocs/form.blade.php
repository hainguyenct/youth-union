
<div class="form-group {{ $errors->has('TEN_DT') ? 'has-error' : '' }}">
    <label for="TEN_DT" class="col-md-2 control-label">T E N  D T</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_DT" type="text" id="TEN_DT" value="{{ old('TEN_DT', optional($dantoc)->TEN_DT) }}" maxlength="50" placeholder="Enter t e n  d t here...">
        {!! $errors->first('TEN_DT', '<p class="help-block">:message</p>') !!}
    </div>
</div>

