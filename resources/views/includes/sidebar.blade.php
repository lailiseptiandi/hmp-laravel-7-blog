<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li>
          <a href="{{ route('home') }}" class="waves-effect"><i class="fa fa-clock-o m-r-10"
              aria-hidden="true"></i>Dashboard</a>
        </li>
        <li>
          <a href="{{ route('pengurus.index') }}" class=" waves-effect"><i class="fa fa-user m-r-10"
              aria-hidden="true"></i>Pengurus
            Harian</a>
        </li>
        <li>
          <a href="{{ route('anggota.index') }}" class=" waves-effect"><i class="fa fa-user m-r-10"
              aria-hidden="true"></i>Anggota</a>
        </li>
        <li>
          <a href="{{ route('gallery.index') }}" class=" waves-effect"><i class="fa fa-file-image-o m-r-10"
              aria-hidden="true"></i>Gallery</a>
        </li>
        <li>
          <a href="#" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Manajemen
            User</a>
        </li>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->