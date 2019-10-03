
<div class="form-group {{ $errors->has('TEN_MP') ? 'has-error' : '' }}">
    <label for="TEN_MP" class="col-md-2 control-label">T E N  M P</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_MP" type="text" id="TEN_MP" value="{{ old('TEN_MP', optional($mauphieu)->TEN_MP) }}" maxlength="100" placeholder="Enter t e n  m p here...">
        {!! $errors->first('TEN_MP', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYTAO_MP') ? 'has-error' : '' }}">
    <label for="NGAYTAO_MP" class="col-md-2 control-label">N G A Y T A O  M P</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYTAO_MP" type="text" id="NGAYTAO_MP" value="{{ old('NGAYTAO_MP', optional($mauphieu)->NGAYTAO_MP) }}" placeholder="Enter n g a y t a o  m p here...">
        {!! $errors->first('NGAYTAO_MP', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NGAYCAONHAT_MP') ? 'has-error' : '' }}">
    <label for="NGAYCAONHAT_MP" class="col-md-2 control-label">N G A Y C A O N H A T  M P</label>
    <div class="col-md-10">
        <input class="form-control" name="NGAYCAONHAT_MP" type="text" id="NGAYCAONHAT_MP" value="{{ old('NGAYCAONHAT_MP', optional($mauphieu)->NGAYCAONHAT_MP) }}" placeholder="Enter n g a y c a o n h a t  m p here...">
        {!! $errors->first('NGAYCAONHAT_MP', '<p class="help-block">:message</p>') !!}
    </div>
</div>

