
<div class="form-group {{ $errors->has('TEN_XLSV') ? 'has-error' : '' }}">
    <label for="TEN_XLSV" class="col-md-2 control-label">T E N  X L S V</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_XLSV" type="text" id="TEN_XLSV" value="{{ old('TEN_XLSV', optional($xeploaiSv)->TEN_XLSV) }}" maxlength="50" placeholder="Enter t e n  x l s v here...">
        {!! $errors->first('TEN_XLSV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMDAT_SV') ? 'has-error' : '' }}">
    <label for="DIEMDAT_SV" class="col-md-2 control-label">D I E M D A T  S V</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMDAT_SV" type="number" id="DIEMDAT_SV" value="{{ old('DIEMDAT_SV', optional($xeploaiSv)->DIEMDAT_SV) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m d a t  s v here...">
        {!! $errors->first('DIEMDAT_SV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

