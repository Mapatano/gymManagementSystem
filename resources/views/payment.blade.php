<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLIENTS INFORMATION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>PAYMENTS</h2>
                </div>
                <div class="pull-right mb-2">
                   
                    <a class="btn btn-primary" >Add New Payment</a>
        </div>
    </div>
</div>
   
      
        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Client id</th>
                    <th>Amount</th>
                    <th>Date of payment</th>
                    <th>updated on</th>
                
                    
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($payments as $pay)
                    <tr>
                    <td>{{$pay->client_id}}</td>  
                    <td>{{$pay->Amount}}</td>
                    <td>{{$pay->created_at}}</td>
                    <td>{{$pay->updated_at}}</td>
                 
           
                     
                       
                     
                        <td>
                            <form  method="Post">
                             
                               <a class="btn btn-primary" >Edit</a>
                                @csrf
                                <button type="submit" class="btn btn-secondary">View More..</button><br>
                               
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
      
    </div>
</body>
</html>