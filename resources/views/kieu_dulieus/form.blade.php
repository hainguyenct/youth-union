
<div class="form-group {{ $errors->has('ten_kieu_dulieu') ? 'has-error' : '' }}">
    <label for="ten_kieu_dulieu" class="col-md-2 control-label">Ten Kieu Dulieu</label>
    <div class="col-md-10">
        <input class="form-control" name="ten_kieu_dulieu" type="text" id="ten_kieu_dulieu" value="{{ old('ten_kieu_dulieu', optional($kieuDulieu)->ten_kieu_dulieu) }}" minlength="1" maxlength="100" required="true" placeholder="Enter ten kieu dulieu here...">
        {!! $errors->first('ten_kieu_dulieu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

