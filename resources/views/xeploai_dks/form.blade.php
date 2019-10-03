
<div class="form-group {{ $errors->has('TEN_XLDK') ? 'has-error' : '' }}">
    <label for="TEN_XLDK" class="col-md-2 control-label">T E N  X L D K</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_XLDK" type="text" id="TEN_XLDK" value="{{ old('TEN_XLDK', optional($xeploaiDk)->TEN_XLDK) }}" maxlength="50" placeholder="Enter t e n  x l d k here...">
        {!! $errors->first('TEN_XLDK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMDAT_DK') ? 'has-error' : '' }}">
    <label for="DIEMDAT_DK" class="col-md-2 control-label">D I E M D A T  D K</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMDAT_DK" type="number" id="DIEMDAT_DK" value="{{ old('DIEMDAT_DK', optional($xeploaiDk)->DIEMDAT_DK) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m d a t  d k here...">
        {!! $errors->first('DIEMDAT_DK', '<p class="help-block">:message</p>') !!}
    </div>
</div>

