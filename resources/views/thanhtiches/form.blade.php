
<div class="form-group {{ $errors->has('TEN_TT') ? 'has-error' : '' }}">
    <label for="TEN_TT" class="col-md-2 control-label">T E N  T T</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_TT" type="text" id="TEN_TT" value="{{ old('TEN_TT', optional($thanhtich)->TEN_TT) }}" maxlength="50" placeholder="Enter t e n  t t here...">
        {!! $errors->first('TEN_TT', '<p class="help-block">:message</p>') !!}
    </div>
</div>

