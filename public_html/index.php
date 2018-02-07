<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Finer Vision Test</title>
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
  </head>
  <body>
    <form class="" action="submit.php" method="post">
      <div class="accordion">
        <div class="collapse ">
          <div class="collapse-toggle">Step 1: Your details</div>
          <div class="collapse-body open">
            <label for="firstname">
              First Name
              <input type="text" name="firstname" value="">
            </label>
            <label for="lastname">
              Surname
              <input type="text" name="lastname" value="">
            </label>
            <label for="email">
              Email Address:
              <input type="text" name="email" value="">
            </label>
            <div class="collapse-footer"><button class="collapse-next" type="button">Next ></button></div>
          </div>
        </div>
        <div class="collapse">
          <div class="collapse-toggle">Step 2: More comments</div>
          <div class="collapse-body">
            <label for="tel">
              Telephone
              <input type="tel" name="tel" value="">
            </label>
            Sex
            <select class="gender" name="gender">
              <option value="gender">select</option>
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
            <label for="dateOfBirth">
              DOB
              <input type="date" name="dateOfBirth" value="">
            </label>
            <div class="collapse-footer"><button class="collapse-next" type="button" >Next ></button></div>
          </div>
        </div>
        <div class="collapse">
          <div class="collapse-toggle">Step 3: Final comments</div>
          <div class="collapse-body">
              Comments
              <textarea name="comments" rows="8" cols="80"></textarea>
            <input type="submit" >
              
            <div class="collapse-footer"><button class="collapse-next" type="button" >Submit ></button></div>
          </div>
        </div>
      </div>
    </form>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="master.js">

  </script>
  </body>
</html>
