<!DOCTYPE html>
<html>
<head>
    <title>Multiple data send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
</script>
</head>
<body>
<div class="container">
     <form  action="/store"  method="post">
     	 {{ csrf_field() }}
         <section>
             <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Product Name</th>
                             <th>Price</th>
                             <th>Delivery</th>
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         @foreach($prod as $p)
         <td>
         <select name="" id="" class="form-control">
          <option value="{{$p->name}}">{{$p->name}}</option></td>
         </select>
         </td>
           <td><input type="text" name="price" class="form-control price" required="" placeholder="10"></td>
           <td><input type="text" name="delivery" class="form-control delivery" placeholder="2020-01-01"></td>
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
         @endforeach              
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                         </tr>
                     </tfoot>
                 </table>
             </div>
         </section>
     </form>
</div>
<script type="text/javascript">
    $('tbody').delegate('.price,.delivery','keyup',function(){
        var tr=$(this).parent().parent();
        var price=tr.find('.price').val();
        var delivery=tr.find('.delivery').val();
    });
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><select name="" id="" class="form-control"><option value="{{$p->name}}">{{$p->name}}</option></td></select></td>'+
        '<td><input type="text" name="price" class="form-control price" required=""></td>'+
        '<td><input type="text" name="delivery[]" class="form-control delivery"></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }
    
    });
</script>
</body>
</html>