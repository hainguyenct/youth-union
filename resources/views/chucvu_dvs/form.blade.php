
<div class="form-group {{ $errors->has('TEN_CHUCVU') ? 'has-error' : '' }}">
    <label for="TEN_CHUCVU" class="col-md-2 control-label">T E N  C H U C V U</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_CHUCVU" type="text" id="TEN_CHUCVU" value="{{ old('TEN_CHUCVU', optional($chucvuDv)->TEN_CHUCVU) }}" maxlength="50" placeholder="Enter t e n  c h u c v u here...">
        {!! $errors->first('TEN_CHUCVU', '<p class="help-block">:message</p>') !!}
    </div>
</div>

