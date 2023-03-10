<div class="inputArea">
    <label for="{{$name}}">{{$label ?? ''}}</label>
    <input 
        id="{{$name}}" 
        name="{{$name}}" 
        type="{{empty($type)? '' : $type}}"
        placeholder="{{$placeholder ?? ''}}" 
        {{empty($required)? '' : 'required'}}
    />
</div>