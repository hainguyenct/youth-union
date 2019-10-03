
<div class="form-group {{ $errors->has('mssv') ? 'has-error' : '' }}">
    <label for="mssv" class="col-md-2 control-label">Mssv</label>
    <div class="col-md-8">
        <div class="form-line focused">
            <input class="form-control" name="mssv" type="text" id="mssv" value="{{ old('mssv', optional($sinhvien)->mssv) }}" minlength="1" maxlength="11" required="true" placeholder="Enter mssv here...">
            {!! $errors->first('mssv', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('hoten') ? 'has-error' : '' }}">
    <label for="hoten" class="col-md-2 control-label">Hoten</label>
    <div class="col-md-8">
        <div class="form-line">
            <input class="form-control" name="hoten" type="text" id="hoten" value="{{ old('hoten', optional($sinhvien)->hoten) }}" minlength="1" maxlength="50" required="true" placeholder="Enter hoten here...">
            {!! $errors->first('hoten', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('namsinh') ? 'has-error' : '' }}">
    <label for="namsinh" class="col-md-2 control-label">namsinh</label>
    <div class="col-md-8">
        <div class="form-line">
            <input class="form-control" name="namsinh" type="date" id="namsinh" value="{{ old('namsinh', optional($sinhvien)->namsinh) }}" minlength="1" maxlength="50" required="true" placeholder="Enter namsinh here...">
            {!! $errors->first('namsinh', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

