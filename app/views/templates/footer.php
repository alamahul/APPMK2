    
 <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white no-print">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>DIBUAT OLEH <i class="fas fa-heart"></i> Alamahul Bayan &copy; 2023 </span>
            <a href="#">Hubungi Saya</a>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>
  <script src="<?= BASEURL; ?>/js/script.js"></script>
</body>

</html>
<?php 
if(isset($_SESSION['nik']) || isset($_SESSION['level'])) {
  Flasher::flash();    
}
