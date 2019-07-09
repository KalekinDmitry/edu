<div class="form-group">
    <div class="form-group">
        <label for="">Headline</label>
        <input type="text" class="form-control" name="title" placeholder="Course title" maxlength="35"
               value="{{$course->title ?? ""}}" required>
    </div>
    <div class="form-group">
        <label for="">Slug (Automatically generated)</label>
        <input class="form-control" type="text" name="slug" placeholder="Automatically generated"
               value="{{$course->slug ?? ""}}" readonly="">
    </div>
    <div class="form-group">
        <label for="description_short">Short description</label>
        <textarea class="form-control" id="description_short" maxlength="300"
                  name="description_short" required>{{$course->description_short ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="description">Full description</label>
        <textarea class="form-control" id="description" name="description"
                  required>{{$course->description ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="">Tags (no spaces)</label>
        <input type="text" class="form-control" name="tags" placeholder="Tags separated by commas"
               value="{{$course->tags ?? ""}}">
    </div>
    <div class="form-group">
        <label for="video">Link to video</label>
        <textarea class="form-control" id="video" maxlength="300"
                  name="video">{{$course->video ?? ""}}</textarea>
    </div>
    <div class="form-group">
        <label for="cost">Set a course price</label>
        <input class="form-control"  type="number" id="cost" maxlength="100"
               name="cost" min="0" required>{{$course->cost ?? ""}}</input>
    </div>
</div>