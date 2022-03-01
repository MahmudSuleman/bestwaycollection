<div>

    <label for="{{$attributes['id']}}">{{$slot}}</label>

    <input {{$attributes->merge(['class' => 'form-control'])}}  >

    @error($attributes['name']) <span class="text-red">{{$message}}</span> @enderror
</div>
