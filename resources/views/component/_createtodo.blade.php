<div class="container content">  
    <form id="create-form" method="POST" action="/store">
      <h3>Create Todo</h3>
      @csrf
      <fieldset>
          <label for="">Title</label>
          <input placeholder="title of todo" type="text" name="title">
      </fieldset>
      <fieldset>
          <label for="">Target Date</label>
          <input placeholder="Target Date" type="date" name="date">
      </fieldset>
      <fieldset>
          <label for="">Description</label>
          <textarea placeholder="Type your descriptions here..." tabindex="5" name="description"></textarea>
      </fieldset>
      <div class="d-flex">
        
      <fieldset>
          <button type="submit" id="contactus-submit">Submit</button>
      </fieldset>
      <fieldset>
          <a href="/todolist" class="btn-cancel btn btn-danger">Cancel</a>
      </fieldset>
      
      </div>
    </form>
  </div>
