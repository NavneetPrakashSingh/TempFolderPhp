
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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


<h2>Student Table</h2>

<table>
  <tr >
    <th>Id</th>
    <th>Student</th>
    <th>See Details</th>
  </tr>  
  <tr id="1">      
      <td>1</td>
      <td>Alfreds Futterkiste</td>         
      <td><a href="/Page2.php?parameter1=1">View Details</a></td>       
  </tr>
  <tr id="2">
    <td>2</td>
    <td>Moctezuma</td>
    <td><a href="/Page2.php?parameter1=2">View Details</a></td>       
    
  </tr>
  <tr id="3">
    <td>3</td>
    <td>Ernst Handel</td>
    <td><a href="/Page2.php?parameter1=3">View Details</a></td>       
    
  </tr>
  <tr id="4">
    <td>4</td>
    <td>Island Trading</td>
    <td><a href="/Page2.php?parameter1=4">View Details</a></td>       
    
  </tr>
  <tr id="5" class="details">
    <td>5</td>
    <td>Yoshi Tannamuris</td>
    <td>View Details</td>       
    
  </tr>
  <tr id="6" class="details" >
    <td>6</td>
    <td>Giovanni Rovelli</td>
    <td>View Details</td>       
    
  </tr>
</table>
<div class="emptyDiv"></div>
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
  $('.details').click(function(){
    var currentData = this.id;
    alert(currentData);
    //send data via ajax to php page
    $.ajax({
      url:'Page2.php',
      method: 'POST',
      data:{'idValue': currentData},
      success:function(result){
        $('.emptyDiv').append(result);
      }
    })
  })
})  
</script>








