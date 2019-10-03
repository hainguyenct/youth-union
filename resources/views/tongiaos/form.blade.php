
<div class="form-group {{ $errors->has('TEN_TG') ? 'has-error' : '' }}">
    <label for="TEN_TG" class="col-md-2 control-label">T E N  T G</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_TG" type="text" id="TEN_TG" value="{{ old('TEN_TG', optional($tongiao)->TEN_TG) }}" maxlength="50" placeholder="Enter t e n  t g here...">
        {!! $errors->first('TEN_TG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

