<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    
    <style>
    
    table {
  text-align: left;
  position: relative;
  border-collapse: collapse; 
  background-color: #f6f6f6;
}/* Spacing */
td, th {
  border: 1px solid #999;
  padding: 20px;
}
th {
  background: brown;
  color: white;
  border-radius: 0;
  position: sticky;
  top: 0;
  padding: 10px;
}
.primary{
  background-color: #000000
}

tfoot > tr  {
  background: black;
  color: white;
}
tbody > tr:hover {
  background-color: #ffc107;
}
        
    </style>
    
    
    
    
    <table>
  <caption>To Enter in our upcoming Magazine...</caption>
  <thead>
    <tr>
      <th class="primary" scope="col">Check Eligibility</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td>{{$name}}</td>
   
    </tr>
    <tr>
      <th scope="row">Issue Name</th>
      <td> {{$issue}} </td>
      
    </tr>
    <tr>
      <th scope="row">Company Name</th>
      <td>{{$company}}</td>
      
    </tr>
    
       <tr>
      <th scope="row">Email Id</th>
      <td>{{$email}}</td>
      
    </tr>
    
     <tr>
      <th scope="row">Message</th>
      <td>{{$messageType}}</td>
      
    </tr>
    
    
  </tbody>
  <tfoot>
    <tr>
      
      <td colspan="4"><i>Please contact to client ASAP!</i></td>
    </tr>
  </tfoot>
</table>


</body>
</html>
