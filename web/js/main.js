

// focus เวลาเปิก select2
$(document).on("select2:open", () => {
    document.querySelector(".select2-container--open .select2-search__field").focus()
  })


$('.loading-page').hide();

$('.link-loading').click(function (e) {
    $('.loading-page').show();

});



function beforLoadModal() {
    $('#main-modal-label').html('กำลังโหลด');
    $(".modal-dialog").removeClass('modal-sm modal-md modal-lg');
    $(".modal-dialog").addClass('modal-sm');
    $('#main-modal').removeClass('fade');
    $('#main-modal').modal('show');
    $('.modal-body').html('<div class="d-flex justify-content-center"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"></div></div><h6 class="text-center mt-3">Loading...</h6>');
}

function closeModal() {
    $('#main-modal').modal('toggle');
    Swal.fire({
        icon: 'success',
        title: 'บันทึกสำเร็จ',
        showConfirmButton: false,
        timer: 1500
      })
}


function deleteItem(){
    alert()
    return false;
}