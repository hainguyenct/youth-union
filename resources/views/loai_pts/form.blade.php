
<div class="form-group {{ $errors->has('TEN_LOAI_PT') ? 'has-error' : '' }}">
    <label for="TEN_LOAI_PT" class="col-md-2 control-label">T E N  L O A I  P T</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_LOAI_PT" type="text" id="TEN_LOAI_PT" value="{{ old('TEN_LOAI_PT', optional($loaiPt)->TEN_LOAI_PT) }}" maxlength="50" placeholder="Enter t e n  l o a i  p t here...">
        {!! $errors->first('TEN_LOAI_PT', '<p class="help-block">:message</p>') !!}
    </div>
</div>

