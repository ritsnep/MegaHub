<div class="form-group">
    <label for=""> {{$label}} </label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" />
    
    {{-- <input type="text" name="name" id="" class="form-control" value="{{old_name}}" /> --}}
    <span class="text-danger">
        {{-- @error('name')
        {{$message}}
            
        @enderror --}}
    </span>
</div>