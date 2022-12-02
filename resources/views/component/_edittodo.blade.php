<div class="container content">  
    <form id="create-form" method="POST" action="/update/{{ $todoo['id'] }}">
      <h3>Edit Todo</h3>
      @csrf
      @method('PATCH')
      <fieldset>
          <label for="">Title</label>
          <input placeholder="title of todo" type="text" name="title" value="{{ $todoo['title'] }}">
      </fieldset>
      <fieldset>
          <label for="">Target Date</label>
          <input placeholder="Target Date" type="date" name="date" value="{{ $todoo['date'] }}">
      </fieldset>
      <fieldset>
          <label for="">Description</label>
          <textarea placeholder="Type your descriptions here..." tabindex="5" name="description">{{ $todoo['description'] }}</textarea>
      </fieldset>
      <div class="d-flex">
        
        <fieldset>
            <button type="submit" id="contactus-submit">Submit</button>
        </fieldset>
        <fieldset>
            <a href="/todolist" class="btn-cancel btn btn-danger">Cancel</a>
        </fieldset>
    
    </form>
  </div>
