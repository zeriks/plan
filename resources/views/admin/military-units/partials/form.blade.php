<div class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{$militaryUnit->title ?? ''}}"
           placeholder="Enter title" required>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" name="status"
           id="status" {{isset($militaryUnit->status)&&($militaryUnit->status==1) ? 'checked' : ''}}>
    <label class="form-check-label" for="status">
        active
    </label>
</div>
<button type="submit" class="btn btn-primary">Save</button>
