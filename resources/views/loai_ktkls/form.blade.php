
<div class="form-group {{ $errors->has('TEN_LOAIKTKL') ? 'has-error' : '' }}">
    <label for="TEN_LOAIKTKL" class="col-md-2 control-label">T E N  L O A I K T K L</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_LOAIKTKL" type="text" id="TEN_LOAIKTKL" value="{{ old('TEN_LOAIKTKL', optional($loaiKtkl)->TEN_LOAIKTKL) }}" maxlength="50" placeholder="Enter t e n  l o a i k t k l here...">
        {!! $errors->first('TEN_LOAIKTKL', '<p class="help-block">:message</p>') !!}
    </div>
</div>

