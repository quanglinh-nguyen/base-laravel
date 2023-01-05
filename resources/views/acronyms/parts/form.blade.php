{{ csrf_field() }}
<div class="form-group row">
    <label for="inputAcronyms" class="col-sm-2 col-form-label">Acronyms Backing<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <input type="text" name="acronym"
               class="form-control {{ $errors->has('acronym') ? 'error' : '' }} " id="inputAcronyms"
               placeholder="Acronyms Backing"
                @if(isset($model) || old('acronym')) value="{{ old('acronym') ? old('acronym') : $model->acronym}}" @endif
        >
        @if ($errors->has('acronym'))
            <label id="inputAcronyms-error" class="error" for="inputAcronyms">{{ $errors->first('acronym') }}</label>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="acronymColumn" class="col-sm-2 col-form-label">Acronym Field <span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <select class="form-control" name="acronym_column" id="acronymColumn">
            <option hidden selected value="">Select Acronym Field</option>
            @foreach($array_acronym as $key => $value)
                <option   value="{{$key}}"
                @if(
                    (isset($model) && $model->acronym_column == $key && !old('acronym_column'))
                    || (old('acronym_column') && old('acronym_column') == $key)
                )
                    selected
                    @endif
                >{{$value}}</option>
            @endforeach
        </select>
        @if ($errors->has('acronym_column'))
            <label id="acronym-column-error" class="error" for="acronymColumn">{{ $errors->first('acronym_column') }}</label>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="inputFullName" class="col-sm-2 col-form-label">Full Name<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <input type="text" name="full_name"
               class="form-control {{ $errors->has('full_name') ? 'error' : '' }}"
               id="inputFullName" placeholder="Full Name"
               @if(isset($model) || old('full_name')) value="{{ old('full_name') ? old('full_name') : $model->full_name}}" @endif
        >
        @if ($errors->has('full_name'))
            <label id="inputFullName-error" class="error" for="inputFullName">{{ $errors->first('full_name') }}</label>
        @endif
    </div>
</div>
