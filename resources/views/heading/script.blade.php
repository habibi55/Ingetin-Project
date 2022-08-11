{{-- JQuery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

{{-- Logika Hamburger Navbar --}}
<script>
  $(document).ready(function () {
    $(".nav-toggler").each(function (_, navToggler) {
      var target = $(navToggler).data("target");
      $(navToggler).on("click", function () {
        $(target).animate({
          height: "toggle",
        });
      });
    });
  });
</script>

{{-- Logika Pop Up Task --}}

{{-- Dropdown Profile --}}
<script>
  function toggleModal(modalID) {
  document.getElementById(modalID).classList.toggle("hidden");
  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
  document.getElementById(modalID).classList.toggle("flex");
  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
}
</script>

<!-- Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
  config = {
    minDate: "today",
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    altInput: true,
    altFormat: "F j, Y (h:S K)"
    
  }

  flatpickr("input[type=dateTime-local", config);
</script>

<!-- Profile Dropdown -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"
  integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA=="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dragscroll/0.0.8/dragscroll.min.js"
  integrity="sha512-/ncZdOhQm5pgj5KHy720Ck7XF5RzYK6rtUsLNnGcitXrKT3wUYzTrPlOSG7SdL2kDzkuLEOFvrQRyllcZkeAlg=="
  crossorigin="anonymous"></script>
<script src="js/toggleModal.js"></script>
<script>
  $(document).ready(function () {
    $(".modal").on('click', ':not(.relative)', function (e) {
      e.stopPropagation();
    });
    $("#loginModal").on('click', function (e) {
      toggleModal('loginModal');
    });
    $("#registerModal").on('click', function (e) {
      toggleModal('registerModal');
    });
  });
</script>

<!-- Hamburger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

{{-- Description Editor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
          .create( document.querySelector( '#description' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>

{{-- Nambah Kategori --}}
{{-- <script type="text/javascript">
    // add row
    $("#addCategoryCol").click(function() {
        var html = '';
        html += '<input type="text" name="category[]" id="category" autocomplete="category" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

        $('#newCategoryCol').append(html);
    });

    // remove row
    $(document).on('click', '#removeServicesRow', function() {
        $(this).closest('#inputFormServicesRow').remove();
    });
</script> --}}

{{-- Logika Search --}}

{{-- <script type="text/javascript">
$(document).ready(function(){
      
    $('#search').keyup(function()
        var search = $('#search').val();
        if(search==""){
            $("#memList").html("");
            $('#result').hide();
        }
        else{
            $.get("{{ URL::to('search') }}",{search:search}, function(data){
                $('#memList').empty().html(data);
                $('#result').show();
            })
        }
    );
});
</script> --}}




