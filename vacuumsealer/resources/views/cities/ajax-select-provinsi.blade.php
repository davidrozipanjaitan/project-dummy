<option>--- Select State ---</option>
@if(!empty($provinsi))
  @foreach($provinsi as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif