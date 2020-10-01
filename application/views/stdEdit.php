
<html>
<style>
  * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  /*margin: 5px 0 22px 0;*/
  display: inline-block;
  border: none;
  /*background: #f1f1f1;*/
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 48.9%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

.resetbtn{
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 48.9%;
  opacity: 0.9;
}
.resetbtn:hover {
  opacity:1;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  /*background-color: #f1f1f1;*/
  text-align: center;
}
</style>


  <form method="post" action="<?= base_url();?>Student/stdUpdate">
    <table align="center" border="2">
      <tbody>
        <div class="col-md-4">
          <div class="container">
     
            <h1 align="center">Student Updates Form</h1>
            
            <hr>
            <tr>
              <td><label for="stdName"><b>Name</b></label></td>
              <td> <input type="text" placeholder="Enter Name" name="stdName" id="stdName" value="<?= $std['stdName'];?>" required> </td>
            </tr>
            <tr>
              <td><label for="stdClass"><b>Class</b></label></td>
              <td><input type="text" placeholder="Enter Class" name="stdClass" id="stdClass" value="<?= $std['stdClass'];?>" required></td>
            </tr>
            <tr>
              <td><label for="stdPercentage"><b>Percentage</b></label></td>
              <td><input type="text" placeholder="Enter Percentage" name="stdPercentage" id="stdPercentage" value="<?= $std['stdPercentage'];?>" required></td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="hidden" name="stdId" value="<?= $std['id'];?>">
                <input type="submit" name="Update" value="Update" class="registerbtn">
                <input type="reset" name="reset" value="Reset" class="resetbtn">
              </td>
            </tr>
          </div>
        </div>
      </tbody>
    </table>
  </form>
</html>