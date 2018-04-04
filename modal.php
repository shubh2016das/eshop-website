<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- Modal -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login_script.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="call.png" alt="Avatar" class="avatar" style="width: auto; height: 150px;">
    </div>
    <div class="containe">
    <form method="POST" action="login_script.php">
    
      <label><b>E-mail ID</b></label>
      <input type="text" placeholder="Enter E-mail ID" name="email" required = "true">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required = "true">
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    
    </form>
    </div>
  </form>
</div>
<!-- End of myModal -->