<script type="text/javascript">
  function logoutData(id){
    swal({
      title: "Apakah anda ingin logout ?",
      text: "Anda harus login kembali untuk masuk ke sistem",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willLogout) => {
      if (willLogout) {
        swal({
          title: "Berhasil Logout !",
          text: "Data anda berhasil di logout !",
          icon: "success"
        }).then(function() {
          window.location = '../function/auth.php?logoutId='+id;
        });
      }
    });
  }
</script>
</body>
</html>
