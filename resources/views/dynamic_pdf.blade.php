<!DOCTYPE html>

<html>
<head>
<style>
                    table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

                    tr:nth-child(even) {
                    background-color: #dddddd;
                    }

                    <style>
                    table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

                    tr:nth-child(even) {
                    background-color: #dddddd;
                    }
                    
                    </style>
</head>
<body>
<div  class="container">
	<div class="row">
         <div class="col-md-12">   <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                            <span class="glyphicon glyphicon-trash"> 
                            <a href="{{ url('dynamic_pdf/pdf')}}">Convert into PDF</a></span></button></p>
                        </td>
         
            <h4 id="tourist">Tourists </h4>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Type</th>
                            <th>Registation date</th>
                           
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($data as $value)
                     <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->user_type}}</td>
                        <td>{{ $value->created_at}}</td>
                       
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
    
        </div> 
     </div> 
    </div>
 </div>





 
</body>
</html>