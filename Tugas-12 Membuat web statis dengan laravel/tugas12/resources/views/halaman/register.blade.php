<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
   <form action="/kirim" method="post">
    @csrf
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" placeholder="Must be filled" name="name">
                <br><br>
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" placeholder="Must be filled" name="lname">

                <br><br>
                <label class="form-label">Gender:</label><br>
                        <input type="Radio" class="form-check-input" name="gr"> Male
                        <input type="Radio" class="form-check-input" name="gr"> Female
                        <input type="Radio" class="form-check-input" name="gr"> Other
                
            <br><br><label class="form-label">Nationality:</label>
                <select class="form-select" aria-label="Default select example" name="national">
                    <option selected>Choose your nationality</option>
                    <option value="1">Indonesian</option>
                    <option value="2">Europan</option>
                    <option value="3">American</option>
                  </select>
              <br><br>
              
                  <label class="form-label">Language Spoken:</label><br>
                      <input type="checkbox" class="form-check-input" name="lg"> English
                      <input type="checkbox" class="form-check-input" name="lg"> Other
                <br><br>
              <label class="form-label">Bio</label><br>    
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <br><input type="submit" value="kirim">
            </form>
            </body>
</html>