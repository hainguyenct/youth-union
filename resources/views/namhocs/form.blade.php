
<div class="form-group {{ $errors->has('namhoc') ? 'has-error' : '' }}">
	<label for="namhoc" class="col-md-2 control-label">Namhoc</label>
	<div class="col-md-8">
		<div class="form-line focused">
			<input class="form-control" name="namhoc" type="text" id="namhoc" value="{{ old('namhoc', optional($namhoc)->namhoc) }}" minlength="1" maxlength="30" required="true" placeholder="Enter namhoc here...">
			{!! $errors->first('namhoc', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
</div>

