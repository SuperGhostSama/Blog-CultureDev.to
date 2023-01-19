function resetForm(){
    if (window.location.pathname.startsWith('/Blog-CultureDev.to/pages/categories.php')) {
      document.getElementById("category").value = "";
      $("#save").show();
      $("#update").hide();
    }
  }