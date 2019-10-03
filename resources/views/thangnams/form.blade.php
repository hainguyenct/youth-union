
<div class="form-group {{ $errors->has('thangnam') ? 'has-error' : '' }}">
    <label for="thangnam" class="col-md-2 control-label">Thangnam</label>
    <div class="col-md-10">
        <input class="form-control" name="thangnam" type="text" id="thangnam" value="{{ old('thangnam', optional($thangnam)->thangnam) }}" minlength="1" maxlength="30" required="true" placeholder="Enter thangnam here...">
        {!! $errors->first('thangnam', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('namhoc_id') ? 'has-error' : '' }}">
    <label for="namhoc_id" class="col-md-2 control-label">Namhoc</label>
    <div class="col-md-10">
        <select class="form-control" id="namhoc_id" name="namhoc_id" required="true">
        	    <option value="" style="display: none;" {{ old('namhoc_id', optional($thangnam)->namhoc_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select namhoc</option>
        	@foreach ($Namhocs as $key => $Namhoc)
			    <option value="{{ $key }}" {{ old('namhoc_id', optional($thangnam)->namhoc_id) == $key ? 'selected' : '' }}>
			    	{{ $Namhoc }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('namhoc_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sotien') ? 'has-error' : '' }}">
    <label for="sotien" class="col-md-2 control-label">Sotien</label>
    <div class="col-md-10">
        <input class="form-control" name="sotien" type="number" id="sotien" value="{{ old('sotien', optional($thangnam)->sotien) }}" min="-9" max="9" placeholder="Enter sotien here...">
        {!! $errors->first('sotien', '<p class="help-block">:message</p>') !!}
    </div>
</div>

