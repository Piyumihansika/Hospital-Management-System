<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `details` WHERE CONCAT( `name`,`diagnosis`,`clinicNo`,`contactNo`,`day`,`surgerydate`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `details`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "lrhnew");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SEARCH PATIENT DETAILS</title>
        <style>





            table,tr,th,td
            {
                border: 1px solid black;

            }


table {
  border-collapse: collapse;

  width: 100%;
}

th, td {
  text-align: left;
  padding: 5px;
  
  font-weight: bold;
}

tr:nth-child(even){background-color:#ffff
}

th {
  background-color: #0080ff;
  color: white;

}






body {
    background-image: linear-gradient(to right ,#ffffff , #ffffff);
}




/**/


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
/*
.searchBox {
    position: absolute;
    top: 0.001px;
    left: 15%;
    transform:  translate(-50%,50%);
    background: #2f3640;
    height: 40px;
    border-radius: 40px;
    padding: 10px;

}

.searchBox:hover > .searchInput {
    width: 240px;
    padding: 0 6px;
}

.searchBox:hover > .searchButton {
  background: white;
  color : #2f3640;
}

.searchButton {
    color: white;
    float: right;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #2f3640;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.4s;
}
*/
/*.searchInput {
    border:none;
    background: none;
    outline:none;
    float:left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;

}*/

@media screen and (max-width: 620px) {
.searchBox:hover > .searchInput {
    width: 150px;
    padding: 0 6px;
}
}



        </style>
    </head>
    <body style="background-color: #ffffff">
        
        <form action="f.php" method="post">



  


</script>




<div class="topnav">
  <a class="active" href="enterdata.php">Add New Patient</a><ensp>
  <a  class="active" href="adminpanel.php">Go Back</a></ensp>
  
  <div class="search-container">
    <form >
      <input class="searchInput"type="text" name="valueToSearch" placeholder="Search">
      <button type="submit" class="searchButton" name="search">Submit</button>
    </form>
  </div>
</div>


       <!--  <div class="searchBox">

            <input class="searchInput"type="text" name="valueToSearch" placeholder="Search">
            <button class="searchButton" name="search" href="#">
                <i class="material-icons">
                    search
                </i>
            </button>
        </div>
 -->

<div class="holder">
  
  

  
</div>

          <!-- <input type=button onClick="location.href='adminpanel.php'" value='back'>   
             -->

            <br>
            
            <table>
                <tr>
                 <th>Clinic No</th>
         <th>Registration Date</th>

                    <th>Patient Name</th>
                      <th>Surgery Date</th>
                      
                      <th>Diagnosis</th>
                    <th>Address</th>
                      <th>Contact No</th>
                    <th>Action</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['clinicNo'];?></td>

                    <td><?php echo $row['day'];?></td>

                    
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['surgerydate'];?></td>
                    <td><?php echo $row['diagnosis'];?></td>
<td><?php echo $row['address'];?></td>



 
 <td><?php echo $row['contactNo'];?></td>
<td><a style="text-decoration-color: blue" href="update-process.php?contactNo=<?php echo $row["contactNo"]; ?>">Update</a></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>

