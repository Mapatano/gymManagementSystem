

<div class="two" id="two">

<button class="modal-close modal-exit" id="img" onclick="closePopup2()">X</button>
  <form action="client" method="post" enctype="multipart/form-data">
        @csrf
 <div class="form-group">
  <strong>First Name:</strong>
    <input type="text" name="First_Name" class="form-control" value="{{ $Cliente->First_name }}">
  </div>

  <div class="form-group">
  <strong>Last Name:</strong>
    <input type="text" name="Last_Name" class="form-control" value="{{ $Cliente->Last_name }}">
  </div>

  <div class="form-group">
  <strong>Email:</strong>
    <input type="email" name="Email" class="form-control"  value="{{ $Cliente->Email }}">
  </div>

  <div class="form-group">
  <strong>Phone:</strong>
    <input type="number" name="Phone" class="form-control" value="{{ $Cliente->Phone }}">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>