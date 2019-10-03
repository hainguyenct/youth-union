
<div class="form-group {{ $errors->has('TEN_LOAI_NDPDG') ? 'has-error' : '' }}">
    <label for="TEN_LOAI_NDPDG" class="col-md-2 control-label">T E N  L O A I  N D P D G</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_LOAI_NDPDG" type="text" id="TEN_LOAI_NDPDG" value="{{ old('TEN_LOAI_NDPDG', optional($loaiNoidungPdg)->TEN_LOAI_NDPDG) }}" maxlength="50" placeholder="Enter t e n  l o a i  n d p d g here...">
        {!! $errors->first('TEN_LOAI_NDPDG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

