@extends('template')

@section('contents')
<div class="col-lg-12 grid-margin stretch-card">
   <div class="card">
     <div class="card-body">
       <div class="d-flex justify-content-between">
         <h4 class="card-title">Meeting Records</h4>
         <button type="button" class="btn btn-outline-info">Add</button>
       </div>
       </p>
       <div class="table-responsive">
         <table class="table table-dark">
           <thead>
             <tr>
               <th> # </th>
               <th>Recorder</th>
               <th>Record</th>
               <th>Discription</th>
               <th>Date</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1</td>
               <td>Herman Beck </td>
               <td> $ 77.99 </td>
               <td> May 15, 2015 </td>
               <td> May 15, 2015 </td>
             </tr>
             <tr>
               <td> 2 </td>
               <td> Herman Beck </td>
               <td> $ 77.99 </td>
               <td> May 15, 2015 </td>
               <td> May 15, 2015 </td>
             </tr>
             <tr>
               <td> 2 </td>
               <td> Herman Beck </td>
               <td> $ 77.99 </td>
               <td> May 15, 2015 </td>
               <td> May 15, 2015 </td>
             </tr>
             <tr>
               <td> 2 </td>
               <td> Herman Beck </td>
               <td> $ 77.99 </td>
               <td> May 15, 2015 </td>
               <td> May 15, 2015 </td>
             </tr>
 
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
@endsection