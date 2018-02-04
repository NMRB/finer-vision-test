<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Finer Vidion Test</title>
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
  </head>
  <body>
    <form class="" action="submit.php" method="post">
      <div class="accordion">

        <dt><a href=""><h1>first section</h1></a></dt>
        <dd>
          <div class="collapse-area open">
            <label for="firstname">
              <input type="text" name="firstname" value="">
            </label>
            <label for="lastname">
              <input type="text" name="lastname" value="">
            </label>
            <label for="email">
              <input type="email" name="email" value="">
            </label>
          </div>
        </dd>
        <dt><a href=""><h1>second section</h1></a></dt>
        <dd>
          <div class="collapse-area">
            <label for="tel">
              <input type="tel" name="tel" value="">
            </label>
            <select class="gender" name="gender">
              <option value="gender">select</option>
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
            <label for="dateOfBirth">
              <input type="date" name="dateOfBirth" value="">
            </label>
          </div>
        </dd>
        <dt><a href=""><h1>thrid section</h1></a></dt>
        <dd>
          <div class="collapse-area ">
            <textarea name="comments" rows="8" cols="80"></textarea>
          <input type="submit" name="" value="">
        </div>
        </dd>
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
