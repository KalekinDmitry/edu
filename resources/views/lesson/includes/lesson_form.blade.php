<div class="col-md-7">
    <input type="text" maxlength="64" name="title" placeholder="Lesson title" value="{{ $lesson->title ?? "" }}" required>
    <input type="hidden" name="slug" value="{{ $lesson->slug ?? ""}}">
    <input type="hidden" name="course_id" value="{{ $course->id }}">
</div>
<div class="col-md-7">
    <input type="text"  maxlength="256"  name="excerpt" placeholder="Excerpt" value="{{ $lesson->excerpt ?? "" }}"required>
</div>
<div class="col-md-7">
    <textarea placeholder="Content" name="content_html" value="{{ $lesson->content_html ?? "" }}"required></textarea>
</div>

<div class="col-md-7" >
    <div class="col-md-4" >
        <div class="row">
            <div class="col-md-4">
                <input  type="checkbox" name="is_published" id="publish" value="{{ $lesson->is_published ?? "0" }}">
            </div>
            <div class="col-md-1"  >
                <label  class="label" for="publish" type="text" style="color:white" ><strong>Publish lesson?</strong></label>
            </div>
        </div>
    </div>
</div>
