
@extends ('main')

@section('title', '| contact')

@section('content')
 <div class="row">
       <div class="col-md-12">
           <h2>about me</h2>
          <hr>
          <form>
              <div class="form-group">
                  <label name="email">email:</label>
                  <input type="email" id="email" class="form-control">
              </div>
               <div class="form-group">
                  <label name="subject">subject:</label>
                  <input type="subject" id="subject" class="form-control">
              </div>
               <div class="form-group">
                  <label name="message">messages:</label>
                  <textarea type="message" id="message" class="form-control">your msg....</textarea>
              </div>
               <input type="submit" value="Send Message" class="btn btn-success">
          </form>
       </div>
  </div><!--  //end of row -->
  @endsection