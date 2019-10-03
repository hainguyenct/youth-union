
<div class="form-group {{ $errors->has('TEN_HT') ? 'has-error' : '' }}">
    <label for="TEN_HT" class="col-md-2 control-label">T E N  H T</label>
    <div class="col-md-10">
        <input class="form-control" name="TEN_HT" type="text" id="TEN_HT" value="{{ old('TEN_HT', optional($hinhthucKtkl)->TEN_HT) }}" maxlength="50" placeholder="Enter t e n  h t here...">
        {!! $errors->first('TEN_HT', '<p class="help-block">:message</p>') !!}
    </div>
</div>

