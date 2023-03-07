<div>
    <div class="form-group">
        <label for="province">Province*</label>
        <select name="country" id="country" class="form-control select2" wire:model="country">
            <option value=""> Please Select</option>
            @foreach ($countries as $p)
                <option value="{{ $p->id }}">{{ $p->province }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="location">Location/Kota*</label>
        <select wire:model='city' name="location" id="location" class="form-control select2">
            @if($cities->count() == 0)
            <option>You have to select a country before</option>
            @endif
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
</div>
