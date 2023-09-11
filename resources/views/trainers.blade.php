<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLIENTS INFORMATION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

<style>
    .one {
       width:400px;
       background:white;
       border-radius:6px;
       position:fixed;
       top: 50%;  
       left: 50%;
       transform: translate(-50%,-50%) scale(0.1);
       text-align: center;
       padding:0 30px 30px;
       color:black;
       visibility:hidden;
       transition: transform 0.4s, top 0.4s;
    }
    .open-popup
    {
        visibility:visible;
      
        top: 50%;
        transform:  translate(-50%, -50%) scale(1);

    }

.one #img{
    width:100%;
    margin-top: 50px;
    padding: 10px 0;
    background:black;
    color:#fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor:pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    

}

.two {
       width:400px;
       background:white;
       border-radius:6px;
       position:absolute;
       top: 50%;  
       left: 50%;
       transform: translate(-50%,-50%) scale(0.1);
       text-align: center;
       padding:0 30px 30px;
       color:black;
       visibility:hidden;
       transition: transform 0.4s, top 0.4s;
    }

    .openPopup2
    {
        visibility:visible;
        top: 50%;
        transform:  translate(-50%, -50%) scale(1);

    }



.two #img{
    width:100%;
    margin-top: 50px;
    padding: 10px 0;
    background:black;
    color:#fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor:pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    

}
    
  </style>

</head>
<body>

<div class="one" id="one">

<button class="modal-close modal-exit" id="img" onclick="closePopup()">X</button>
  <form action="trainer" method="post" enctype="multipart/form-data">
        @csrf
 <div class="form-group">
  <strong>Name:</strong>
    <input type="text" name="name" class="form-control" placeholder="Enter First name">
  </div>

  <div class="form-group">
  <strong>Phone:</strong>
    <input type="number" name="phone" class="form-control" placeholder="Enter Last name">
  </div>


 <div class="form-group">
<strong>Day</strong>
<select id="day" name="day" class="form-control" >
  <option value="monday" >Monday</option>
  <option value="tuesday">Tuesday</option>
  <option value="wednesday">Wednesday</option>
  <option value="thursday">thursday</option>
  <option value="friday">friday</option>
  <option value="saturday">saturday</option>
</select>
  </div>


  <div class="form-group">
  <strong>time_in</strong>
    <input type="time" name="in" class="form-control"  placeholder="Enter phone number">
  </div>


  <div class="form-group">
  <strong>time_out</strong>
    <input type="time" name="out" class="form-control"  placeholder="Enter phone number">
  </div>



  <div class="form-group">
  <strong>Salary:(ksh)</strong>
    <input type="number" name="salary" class="form-control"  Value="10000">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<!--EDIT-->
















<!--Shift-->

<div class="one" id="one" style="visibility=hidden" >
<button class="modal-close modal-exit" id="img" onclick="closePopup()">X</button>
  <form action="trainer" method="post" enctype="multipart/form-data">
        @csrf

        
 <div class="form-group">
<strong>Day</strong>
<select id="day" name="day" class="form-control" >
  <option value="monday" >Monday</option>
  <option value="tuesday">Tuesday</option>
  <option value="wednesday">Wednesday</option>
  <option value="thursday">thursday</option>
  <option value="friday">friday</option>
  <option value="saturday">saturday</option>
</select>
  </div>

  <div class="form-group">
  <strong>time_in</strong>
    <input type="time" name="in" class="form-control"  placeholder="Enter phone number">
  </div>

  <div class="form-group">
  <strong>time_out</strong>
    <input type="time" name="out" class="form-control"  placeholder="Enter phone number">
  </div>

  <div class="form-group">
  <strong>Salary:(ksh)</strong>
    <input type="number" name="salary" class="form-control"  Value="10000">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<!--End Shift-->





















<div class="container mt-2" id="container">


        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>TRAINER INFORMATION</h2>
                </div>
                <div class="pull-right mb-2">
                   
                    <a class="btn btn-primary" onclick="openPopupB()">Add New Trainer</a><br><br>
                    
        </div>
    </div>
</div>
   
      
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th> Name</th>
                    <th>Phone</th>
                    <th>Salary</th>

                    <th width="280px">Action</th>
                   
                </tr>
            </thead>
            <tbody>
            @foreach ($train as $trainer)
        
                    <tr>
                        
                    <td>{{ $trainer->id }}</td>
                        <td>{{ $trainer->name }}</td>
                        <td>{{ $trainer->Phone }}</td>
                        <td>{{ $trainer->Salary }}</td>
                    
                        <td>
                             <form  method="Post" >
                               <!--<a class="btn btn-primary" id="edit" onclick="openPopup()" >Edit</a>-->
                               @csrf
                            <a class="btn btn-primary"  href="" name="submit">Edit</a>
                            <a class="btn btn-secondary">Add shift</a>
                
                            <a  href=" " class="btn btn-danger">Delete</a>
                              </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
      
    </div>




<script>
    let popup = document.getElementById("one");
    let popup2 = document.getElementById("two");


function openPopupB() {
    event.preventDefault();
    popup.classList.add("open-popup");
    document.getElementById("container").style.visibility="hidden";
}

function closePopup() {
    popup.classList.remove("open-popup");
    document.getElementById("container").style.visibility="visible";
}




//
function openPopup2() {
    event.preventDefault();
    popup2.classList.add("openPopup2");
    document.getElementById("container").style.visibility="hidden";
}

function closePopup2() {
    popup2.classList.remove("openPopup2");
    document.getElementById("container").style.visibility="visible";
}
 
</script>
</body>
</html>