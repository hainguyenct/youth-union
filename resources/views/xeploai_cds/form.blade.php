
<div class="form-group {{ $errors->has('TEN_PH') ? 'has-error' : '' }}">
    <label for="TEN_PH" class="col-md-2 control-label">T E N  P H</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_PH" type="text" id="TEN_PH" value="{{ old('TEN_PH', optional($xeploaiCd)->TEN_PH) }}" maxlength="50" placeholder="Enter t e n  p h here...">
        {!! $errors->first('TEN_PH', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMDAT_CD') ? 'has-error' : '' }}">
    <label for="DIEMDAT_CD" class="col-md-2 control-label">D I E M D A T  C D</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMDAT_CD" type="number" id="DIEMDAT_CD" value="{{ old('DIEMDAT_CD', optional($xeploaiCd)->DIEMDAT_CD) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m d a t  c d here...">
        {!! $errors->first('DIEMDAT_CD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

