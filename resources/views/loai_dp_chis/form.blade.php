
<div class="form-group {{ $errors->has('TEN_LOAI_DP') ? 'has-error' : '' }}">
    <label for="TEN_LOAI_DP" class="col-md-2 control-label">T E N  L O A I  D P</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_LOAI_DP" type="text" id="TEN_LOAI_DP" value="{{ old('TEN_LOAI_DP', optional($loaiDpChi)->TEN_LOAI_DP) }}" maxlength="50" placeholder="Enter t e n  l o a i  d p here...">
        {!! $errors->first('TEN_LOAI_DP', '<p class="help-block">:message</p>') !!}
    </div>
</div>

