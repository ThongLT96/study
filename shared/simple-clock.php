<div class="hero">
  <div class="row">
    <div class="large-12 columns">
      <p>
        <span class="" id="myClock">
          Current: 
          <?php
          date_default_timezone_set("Asia/Ho_Chi_Minh");
          echo date("Y-m-d h:i:s a");
          ?>
        </span>
      </p>
    </div>
  </div>
</div>
<script>
  function updateClock() {
    setInterval(function() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("myClock").innerHTML =
            "Current: " + this.responseText;
        }
      };
      xmlhttp.open("GET", "./shared/update-clock.php", true);
      xmlhttp.send();
    }, 1000);
  }
  updateClock();
</script>