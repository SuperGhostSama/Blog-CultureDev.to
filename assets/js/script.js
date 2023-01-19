function resetCategoryForm(){
    if (window.location.pathname.startsWith('/Blog-CultureDev.to/pages/categories.php')) {
      document.getElementById("category").value = "";
      $("#save").show();
      $("#update").hide();
    }
  }
function resetPostsForm(){
    if (window.location.pathname.startsWith('/Blog-CultureDev.to/pages/posts.php')) {
      document.getElementById("title").value = "";
      document.getElementById("category").value = "";
      document.getElementById("description").value = "";
      $("#save").show();
      $("#update").hide();
    }
  }