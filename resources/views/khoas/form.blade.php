
<div class="form-group {{ $errors->has('TEN_KHOA') ? 'has-error' : '' }}">
    <label for="TEN_KHOA" class="col-md-2 control-label">T E N  K H O A</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_KHOA" type="text" id="TEN_KHOA" value="{{ old('TEN_KHOA', optional($khoa)->TEN_KHOA) }}" maxlength="50" placeholder="Enter t e n  k h o a here...">
        {!! $errors->first('TEN_KHOA', '<p class="help-block">:message</p>') !!}
    </div>
</div>

