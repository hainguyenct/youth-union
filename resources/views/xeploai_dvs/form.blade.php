
<div class="form-group {{ $errors->has('TEN_XLDV') ? 'has-error' : '' }}">
    <label for="TEN_XLDV" class="col-md-2 control-label">T E N  X L D V</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_XLDV" type="text" id="TEN_XLDV" value="{{ old('TEN_XLDV', optional($xeploaiDv)->TEN_XLDV) }}" maxlength="50" placeholder="Enter t e n  x l d v here...">
        {!! $errors->first('TEN_XLDV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIEMDAT_DV') ? 'has-error' : '' }}">
    <label for="DIEMDAT_DV" class="col-md-2 control-label">D I E M D A T  D V</label>
    <div class="col-md-10">
        <input class="form-control" name="DIEMDAT_DV" type="number" id="DIEMDAT_DV" value="{{ old('DIEMDAT_DV', optional($xeploaiDv)->DIEMDAT_DV) }}" min="-2147483648" max="2147483647" placeholder="Enter d i e m d a t  d v here...">
        {!! $errors->first('DIEMDAT_DV', '<p class="help-block">:message</p>') !!}
    </div>
</div>

