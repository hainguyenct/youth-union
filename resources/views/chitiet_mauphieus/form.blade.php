
<div class="form-group {{ $errors->has('MAUPHIEU_ID') ? 'has-error' : '' }}">
    <label for="MAUPHIEU_ID" class="col-md-2 control-label">M A U P H I E U</label>
    <div class="col-md-10">
        <select class="form-control" id="MAUPHIEU_ID" name="MAUPHIEU_ID" required="true">
        	    <option value="" style="display: none;" {{ old('MAUPHIEU_ID', optional($chitietMauphieu)->MAUPHIEU_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select m a u p h i e u</option>
        	@foreach ($Mauphieus as $key => $Mauphieu)
			    <option value="{{ $key }}" {{ old('MAUPHIEU_ID', optional($chitietMauphieu)->MAUPHIEU_ID) == $key ? 'selected' : '' }}>
			    	{{ $Mauphieu }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('MAUPHIEU_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('NOIDUNG_PDG_ID') ? 'has-error' : '' }}">
    <label for="NOIDUNG_PDG_ID" class="col-md-2 control-label">N O I D U N G  P D G</label>
    <div class="col-md-10">
        <select class="form-control" id="NOIDUNG_PDG_ID" name="NOIDUNG_PDG_ID" required="true">
        	    <option value="" style="display: none;" {{ old('NOIDUNG_PDG_ID', optional($chitietMauphieu)->NOIDUNG_PDG_ID ?: '') == '' ? 'selected' : '' }} disabled selected>Select n o i d u n g  p d g</option>
        	@foreach ($NoidungPdgs as $key => $NoidungPdg)
			    <option value="{{ $key }}" {{ old('NOIDUNG_PDG_ID', optional($chitietMauphieu)->NOIDUNG_PDG_ID) == $key ? 'selected' : '' }}>
			    	{{ $NoidungPdg }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('NOIDUNG_PDG_ID', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('THUTU_NOIDUNG') ? 'has-error' : '' }}">
    <label for="THUTU_NOIDUNG" class="col-md-2 control-label">T H U T U  N O I D U N G</label>
    <div class="col-md-10">
        <input class="form-control" name="THUTU_NOIDUNG" type="number" id="THUTU_NOIDUNG" value="{{ old('THUTU_NOIDUNG', optional($chitietMauphieu)->THUTU_NOIDUNG) }}" min="-9" max="9" placeholder="Enter t h u t u  n o i d u n g here...">
        {!! $errors->first('THUTU_NOIDUNG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

