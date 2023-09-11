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

.active {
    color: green;
}
    
  </style>

</head>
<body>

<div class="one" id="one">

<button class="modal-close modal-exit" id="img" onclick="closePopup()">X</button>
  <form action="client" method="post" enctype="multipart/form-data">
        @csrf
 <div class="form-group">
  <strong>First Name:</strong>
    <input type="text" name="First" class="form-control" placeholder="Enter First name">
  </div>

  <div class="form-group">
  <strong>Last Name:</strong>
    <input type="text" name="Last" class="form-control" placeholder="Enter Last name">
  </div>

  <div class="form-group">
  <strong>Email:</strong>
    <input type="email" name="Email" class="form-control"   placeholder="Enter email">
    
  </div>

  <div class="form-group">
  <strong>Phone:</strong>
    <input type="number" name="Phone" class="form-control"  placeholder="Enter phone number">
  </div>


  <div class="form-group">
  <strong>registration fee(ksh)</strong>
<select id="fee" name="amount" class="form-control" >
  <option value="5000" >5000</option>
  <option value="10000">10000</option>
  <option value="15000">15000</option>
  <option value="20000">20000</option>
  <option value="25000">25000</option>
  <option value="30000">30000</option>
</select>
</div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>







<!--EDIT-->




<div class="container mt-2" id="container">


        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CLIENTS INFORMATION</h2>
                </div>
                <div class="pull-right mb-2">
            
                    <a class="btn btn-primary" onclick="openPopup()">Add New Member</a><br><br>
                    <a href="/members"  onclick="changeButtonColor(this)" class="btn btn-gray"  >All</button>
                    <a  href="/active" onclick="changeButtonColor(this)" class="btn btn-gray" >Active memberships</a>
                    <a  href="/inactive" onclick="changeButtonColor(this)"class="btn btn-gray" >Inactive memberships</a>
        </div>
    </div>
</div>
   
      
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last_Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Membership_ends</th>
                    <th width="280px">Action</th>
                   
                </tr>
            </thead>
            <tbody>
            @foreach ($cliente as $Clients)
                    <tr>
                        
                    <td>{{ $Clients->id }}</td>
                        <td>{{ $Clients->First_name }}</td>
                        <td>{{ $Clients->Last_name }}</td>
                        <td>{{ $Clients->Email }}</td>
                        <td>{{ $Clients->Phone }}</td>
                        <td>{{ $Clients->Membership_ends }}</td>
                        <td>
                             <form  method="Post" >
                               <!--<a class="btn btn-primary" id="edit" onclick="openPopup()" >Edit</a>-->
                               @csrf
                            <a class="btn btn-primary"  href=" " name="submit">Edit</a>
                            <a class="btn btn-secondary">View More...</a>
                
                            <a  href="/click_delete/{{ $Clients->id }} " class="btn btn-danger">Delete</a>
                              </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>





    
      
      


























    

<script>
    let popup = document.getElementById("one");
    let popup2 = document.getElementById("two");


function openPopup() {
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



//button color
function changeButtonColor(button) {
        // Get all buttons on the page
        var buttons = document.getElementsByTagName("a");
        
        
        // Loop through each button
        for (var i = 0; i < buttons.length; i++) {
            // Remove the "active" class from all buttons
            buttons[i].classList.remove("active");
        }
        
        // Add the "active" class to the clicked button
        button.classList.add("active");
    }



 
</script>
</body>
</html>