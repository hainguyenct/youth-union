
<div class="form-group {{ $errors->has('TEN_TP') ? 'has-error' : '' }}">
    <label for="TEN_TP" class="col-md-2 control-label">T E N  T P</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_TP" type="text" id="TEN_TP" value="{{ old('TEN_TP', optional($tinhThanhpho)->TEN_TP) }}" maxlength="50" placeholder="Enter t e n  t p here...">
        {!! $errors->first('TEN_TP', '<p class="help-block">:message</p>') !!}
    </div>
</div>

